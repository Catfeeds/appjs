// user.js
var api = require('../../api.js');
var app = getApp();
Page({

  /**
   * 页面的初始数据
   */
  data: {
    contact_tel: "",
    show_customer_service: 0,
    user_center_bg: "/images/img-user-bg.png",
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function(options) {
    app.pageOnLoad(this);
  },

  loadData: function(options) {
    var page = this;
    page.setData({
      store: wx.getStorageSync('store'),
    });
    var pages_user_user = wx.getStorageSync('pages_user_user');
    if (pages_user_user) {
      page.setData(pages_user_user);
    }
    app.request({
      url: api.user.index,
      success: function(res) {
        if (res.code == 0) {
          page.setData(res.data);
          wx.setStorageSync('pages_user_user', res.data);
          wx.setStorageSync("share_setting", res.data.share_setting);
          wx.setStorageSync("user_info", res.data.user_info);
        }
      }
    });
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function() {

  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function() {
    app.pageOnShow(this);
    var page = this;
    page.loadData();
  },

  callTel: function(e) {
    var tel = e.currentTarget.dataset.tel;
    wx.makePhoneCall({
      phoneNumber: tel, //仅为示例，并非真实的电话号码
    });
  },
  apply: function(e) {
    var page = this;
    var share_setting = wx.getStorageSync("share_setting");
    var user_info = wx.getStorageSync("user_info");
    if (share_setting.share_condition == 1) {
      wx.navigateTo({
        url: '/pages/add-share/index',
      })
    } else if (share_setting.share_condition == 0 || share_setting.share_condition == 2) {
      if (user_info.is_distributor == 0) {
        wx.showModal({
          title: "申请成为分销商",
          content: "是否申请？",
          success: function(r) {
            if (r.confirm) {
              wx.showLoading({
                title: "正在加载",
                mask: true,
              });
              app.request({
                url: api.share.join,
                methods: "POST",
                success: function(res) {
                  if (res.code == 0) {
                    if (share_setting.share_condition == 0) {
                      user_info.is_distributor = 2;
                      wx.navigateTo({
                        url: '/pages/add-share/index',
                      })
                    } else {
                      user_info.is_distributor = 1;
                      wx.navigateTo({
                        url: '/pages/share/index',
                      })
                    }
                    wx.setStorageSync("user_info", user_info);
                  }
                },
                complete: function() {
                  wx.hideLoading();
                }
              });
            }
          },
        })
      } else {
        wx.navigateTo({
          url: '/pages/add-share/index',
        })
      }
    }
  },
  verify: function(e) {
    wx.scanCode({
      onlyFromCamera: false,
      success: function(res) {
        console.log(res)
        wx.navigateTo({
          url: '/' + res.path,
        })
      },
      fail: function(e) {
        wx.showToast({
          title: '失败'
        });
      }
    });
  },
  member: function() {
    wx.navigateTo({
      url: '/pages/member/member',
    })
  },
  getUserInfo(e) {
    wx.getSetting({
      success: (res) => {
        if (res.authSetting['scope.userInfo']) {
          wx.showLoading({
            title: '登录中...',
            mask: true
          });
          this.login(e.detail.userInfo);
        } else {
          wx.showToast({
            title: '登录失败',
            icon: 'success',
            duration: 3000
          });
        }
      }
    })
  },
  login: function(e) {
    var _this = this;
    // wx.showLoading({
    //   title: "正在登录",
    //   mask: true,
    // });
    wx.login({
      success: function(res) {
        if (res.code) {
          var code = res.code;
          _this.request({
            url: api.passport.login,
            method: "post",
            data: {
              code: code,
              user_info: e,
              avatarUrl: e.avatarUrl,
              nickName: e.nickName,
              gender: e.gender,
              country: e.country,
              province: e.province,
              city: e.city,
              language: e.language,
              encrypted_data: res.encryptedData,
              iv: res.iv,
              signature: res.signature
            },
            success: function(res) {
              wx.hideLoading();
              // console.log(code)
              if (res.code == 0) {
                wx.setStorageSync("access_token", res.data.access_token);
                wx.setStorageSync("user_info", {
                  nickname: res.data.nickname,
                  avatar_url: res.data.avatar_url,
                  is_distributor: res.data.is_distributor,
                  parent: res.data.parent,
                  id: res.data.id,
                  is_clerk: res.data.is_clerk
                });
                var page = _this;
                page.setData({
                  store: wx.getStorageSync('store'),
                });
                var pages_user_user = wx.getStorageSync('pages_user_user');
                if (pages_user_user) {
                  page.setData(pages_user_user);
                }
                app.request({
                  url: api.user.index,
                  success: function(res) {
                    if (res.code == 0) {
                      page.setData(res.data);
                      wx.setStorageSync('pages_user_user', res.data);
                      wx.setStorageSync("share_setting", res.data.share_setting);
                      wx.setStorageSync("user_info", res.data.user_info);
                    }
                  }
                });
              } else {
                wx.showToast({
                  title: res.msg
                });
              }
            }
          });
        } else {
          //console.log(res);
        }

      }
    });
  },
  request: function(object) {
    if (!object.data)
      object.data = {};
    var access_token = wx.getStorageSync("access_token");
    if (access_token) {
      object.data.access_token = access_token;
    }
    object.data.store_id = this.siteInfo.store_id;
    wx.request({
      url: object.url,
      header: object.header || {
        'content-type': 'application/x-www-form-urlencoded'
      },
      data: object.data || {},
      method: object.method || "GET",
      dataType: object.dataType || "json",
      success: function(res) {
        if (res.data.code == -1) {
          getApp().login();
        } else {
          if (object.success)
            object.success(res.data);
        }
      },
      fail: function(res) {
        var app = getApp();
        if (app.is_on_launch) {
          app.is_on_launch = false;
          wx.showModal({
            title: "网络请求出错",
            content: res.errMsg,
            showCancel: false,
            success: function(res) {
              if (res.confirm) {
                if (object.fail)
                  object.fail(res);
              }
            }
          });
        } else {
          wx.showToast({
            title: res.errMsg,
            image: "/images/icon-warning.png",
          });
          if (object.fail)
            object.fail(res);
        }
      },
      complete: function(res) {
        if (object.complete)
          object.complete(res);
      }
    });
  },
  siteInfo: require('../../siteinfo.js'),

});