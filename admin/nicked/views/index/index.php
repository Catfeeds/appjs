<?php

use app\assets\AppAsset;
/**
 * Created by PhpStorm.
 * User: by grace
 * Date: 2018/8/1
 * Time: 22:39
 */

use yii\helpers\Html;

$this->title = 'naked中国官网';

?>
<link rel="stylesheet" href="/statics/css/web/index.css">
<div id="dowebok" class="normal">
    <div class="head_top">
        <div class="head">
            <ul id="menu" class="menu menu1">
                <li><a id="brandPage" class="menua" href="/"><span class="c-menu__inner">首页</span></a></li>
                <li><a id="explorePage" class="menua" href="/index/explore"><span class="c-menu__inner">全球专利</span></a>
                </li>
                <li class="hj_story">
                    <a id="productPage" class="menua" href="/index/product"><span class="c-menu__inner">美国原装</span></a>
                    <div class="under_menu">
                        <a class="under_img" href="#"><img
                                    src="http://image.nakedchina.com.cn/uploads/images/web/yuanzhuang-black.jpg"></a>
                        <ul class="under_ul" style="border-left: none;">
                            <li>美国原装</li>
                            <li><a href="/index/product">天赐，玺悦心生</a></li>
                        </ul>
                    </div>
                </li>
                <li id="hj_story" class="hj_story">
                    <a id="storyPage" class="menua" href="/index/story"><span class="c-menu__inner">臻选套装</span></a>
                    <div class="under_menu">
                        <a class="under_img" href="#"><img
                                    src="http://image.nakedchina.com.cn/uploads/images/web/zhenxuan.jpg"></a>
                        <ul class="under_ul">
                            <li>臻选套装</li>
                            <li><a href="/index/brand_story">玺悦礼遇套装</a></li>
                            <li><a href="/index/story">Naked单盒装</a></li>
                            <!-- <li><a href="/index/team">花加团队 | 每一个花加人</a></li> -->
                            <!-- <li><a href="http://www.flowerplus.cn/news/">媒体报道 | 别人眼中的花加</a></li> -->
                        </ul>
                    </div>
                </li>
                <li><a class="menua" href="/index/jia"><span class="c-menu__inner">玺悦+计划</span></a></li>
            </ul>
        </div>

        <div class="bar">
            <ul class="bar_box">
                <li class="bar_list1">
                    <div class="code"></div>
                </li>
                <li class="bar_list2">
                    <div class="code"></div>
                </li>
            </ul>
        </div>
        <ol class="nav tranY">
            <li class="check HomeNavDots-list-item"><span class="HomeNavDots-circle"></span></li>
            <li class="HomeNavDots-list-item"><span class="HomeNavDots-circle"></span></li>
            <li class="HomeNavDots-list-item"><span class="HomeNavDots-circle"></span></li>
            <li class="HomeNavDots-list-item"><span class="HomeNavDots-circle"></span></li>
            <li class="HomeNavDots-list-item"><span class="HomeNavDots-circle"></span></li>
        </ol>
        <div class="push_icon tranX"></div>
    </div>
    <div class="section active">
        <!--<video id="sec_video" class="section_vedio" src="//static2.flowerplus.cn/Static/newpc/images/sy_video.mp4" poster="http://image.nakedchina.com.cn/uploads/images/web/banner1.jpg" autoplay="autoplay" preload="auto" loop="loop"></video>-->
        <img width="100%" src="http://image.nakedchina.com.cn/uploads/images/web/banner1.jpg">
        <div id="brand0" class="brand brand_w tranY tranX">
            <!--<img id="word0" class="w " src="static/picture/w1.png">-->
            <a class="visite btn button btnw" href="/index/explore">进入开启愉悦之旅<span></span><span></span></a>
        </div>
        <!--         <div class="push_alert tranX">
                    下拉
                </div> -->
    </div>
    <div class="section">
        <div class="section_img imgsrc2 load"></div>
        <div id="brand1" class="brand tranY">
            <!--<img data-img="" id="word1" class="w" src="static/picture/w2.png">-->
            <a class="visite btn button btnw" href="/index/explore">进入开启愉悦之旅<span></span><span></span></a>
        </div>
    </div>
    <div class="section">
        <div class="section_img imgsrc3 load"></div>
        <div id="brand2" class="brand tranY">
            <!--<img data-img="" id="word2" class="w" src="static/picture/w3.png">-->
            <a style="color: #000;" class="visite btn button"
               href="/index/explore">进入开启愉悦之旅<span></span><span></span></a>
        </div>
    </div>
    <div class="section">
        <div class="section_img imgsrc4 load"></div>
        <div id="brand3" class="brand tranY">
            <!--<img data-img="" id="word3" class="w" src="static/picture/w4.png">-->
            <a class="visite btn button btnw" href="/index/explore">进入开启愉悦之旅<span></span><span></span></a>
        </div>
    </div>
    
</div>

<div class="foot f14">
    <div class="foot_top">
        <ul>
            <li>
                <div class="fimg fimg_1"></div>
                <div><p>欧洲皇室御用</p>
                    <p>美国原装进口</p></div>
            </li>
            <li>
                <div class="fimg fimg_2"></div>
                <div><p>全球发明专利</p>
                    <p>倒圆锥异形设计</p></div>
            </li>
            <li>
                <div class="fimg fimg_3"></div>
                <div><p>美国FDA认证</p>
                    <p>奥斯卡颁奖礼礼品</p></div>
            </li>
            <li>
                <div class="fimg fimg_4"></div>
                <div><p>德国食品级精油润滑</p>
                    <p>马来西亚天然橡胶乳胶</p></div>
            </li>
        </ul>
    </div>
    <div class="foot_body">
        <div class="forflex">
            <div class="foot_left fb_top">
                <img class="foot_logo" src="/statics/images/yuanzhuang.jpg">
                <a class="conimg order"><img src="/statics/images/icon_wx.svg"></a>
                <a href="#" class="conimg"><img src="/statics/images/icon_wb.svg"></a>
            </div>
            <div class="contact fb_top">
                <div class="gzhewm">
                    <img src="/statics/images/qr_code.jpg">
                    <p>扫一扫<br>即刻加入NakedClub</p>
                </div>
                <div class="contactus">
                    <p>联系我们</p>
                    <p class="f24">400-6808-600</p>
                    <p class="f12">( 9:30-18:00 )</p>
                </div>
            </div>
        </div>
    </div>
    <div class="totop f12">
        <img src="/statics/images/icon_top.svg">
        <p>返回顶部</p>
    </div>
    <div class="foot_bottom">
        <p>Copyright@2017--2018 深圳月光魔盒区块链电子商务有限公司<br>版权所有 粤ICP备18056849号-2</p>
    </div>
</div>
<div class="popup">
    <div class="mask"></div>
    <div class="popcontent"><img class="popimg" src="static/picture/ewm.jpg"></div>
</div>

<!--product-->
<!--new sa-->
<!--一下js已经被合并到main_js.html-->
<!-- <script type="text/javascript" src="static/js/pagecategory.js"></script> -->
<script type="text/javascript">

    var page_type = '';
    var sap = 'production';
    var sau = 'https://sd.flowerplus.cn:4106/sa?project=' + sap;

    (function (para) {
        var p = para.sdk_url, n = para.name, w = window, d = document, s = 'script', x = null, y = null;
        w['sensorsDataAnalytic201505'] = n;
        w[n] = w[n] || function (a) {
            return function () {
                (w[n]._q = w[n]._q || []).push([a, arguments]);
            }
        };
        var ifs = ['track', 'quick', 'register', 'registerPage', 'registerOnce', 'trackSignup', 'trackAbtest', 'setProfile', 'setOnceProfile', 'appendProfile', 'incrementProfile', 'deleteProfile', 'unsetProfile', 'identify', 'login', 'logout', 'trackLink', 'clearAllRegister', 'getAppStatus'];
        for (var i = 0; i < ifs.length; i++) {
            w[n][ifs[i]] = w[n].call(null, ifs[i]);
        }
        if (!w[n]._t) {
            x = d.createElement(s), y = d.getElementsByTagName(s)[0];
            x.async = 1;
            x.src = p;
            x.setAttribute('charset', 'UTF-8');
            y.parentNode.insertBefore(x, y);
            w[n].para = para;
        }
    })({
        sdk_url: '//static2.flowerplus.cn/Static/js/sa/sensorsdata.min.js?_t=20171208',
        name: 'sa',
        server_url: sau,
        is_track_device_id: true,
        is_single_page: false, //单页，锚点点击或者浏览器回退是否记录浏览事件, 设置false不记录， 锚点点击单独处理
        heatmap: {
            // 关闭 $WebStay (Web 视区停留) 事件
            scroll_notice_map: 'not_collect',
            // 关闭 $WebClick（Web 元素点击）事件
            clickmap: 'not_collect'
        },
        // debug_mode: true,
        debug_mode_upload: false
    });


    function getParamData() {
        var param_data = {};
        if (typeof fp_info !== "undefined"
            && fp_info.hasOwnProperty('pageCategory1')
            && fp_info.hasOwnProperty('pageCategory2')
            && fp_info.hasOwnProperty('pageCategory3')
        ) {
            param_data.pageCategory1 = fp_info.pageCategory1;
            param_data.pageCategory2 = fp_info.pageCategory2;
            param_data.pageCategory3 = fp_info.pageCategory3;
        }

        if (typeof _pageTaxonomy !== "undefined"
            && _pageTaxonomy.hasOwnProperty('pageCategory1')
            && _pageTaxonomy.hasOwnProperty('pageCategory2')
            && _pageTaxonomy.hasOwnProperty('pageCategory3')
        ) {
            param_data.pageCategory1 = _pageTaxonomy.pageCategory1;
            param_data.pageCategory2 = _pageTaxonomy.pageCategory2;
            param_data.pageCategory3 = _pageTaxonomy.pageCategory3;
        }

        if (page_type != '') {
            param_data.pageType = page_type;
        }
        return param_data;
    }

    var param_data = getParamData();
    sa.quick('autoTrackWithoutProfile', param_data);
</script>

<script type="text/javascript">
    // home page tab track $pageview
    window.addEventListener('hashchange', function (e) {
        if (location.pathname == '/') {
            // set home page hash's PageCategory3
            setHomeHashPageCategory3();

            var param_data = getParamData();
            param_data['$url'] = location.href;
            param_data['$url_path'] = location.pathname;
            param_data['$title'] = document.title;

            var referrer = "string" == typeof document.referrer ? document.referrer.slice(0, 100) : "";
            var reg = /^http(s)?:\/\/(.*?)\//;
            var referrer_host = referrer ? reg.exec(referrer)[2] : "";

            param_data['$referrer'] = referrer;
            param_data['$referrer_host'] = referrer_host;

            sa.track('$pageview', param_data);
        }
    }, false);
</script>


<!-- <script type="text/javascript" src="static/js/fpa.channel.js"></script> -->
<script>
    var fp_utm_source = FP.getQueryString('utm_source');
    if (fp_utm_source != '' && fp_utm_source != null) {
        FP.setCookie('fpa_channel_utm_source', fp_utm_source, null, '/', '.flowerplus.cn');
    }
</script>

<script>
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?deb1341df19187ec5a232b519d62c8a9";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

<script>
    function exist_ga() {
        return typeof ga == 'function';
    }

    function ga_buy() {
        if (!exist_ga()) return;
        ga("send", {hitType: "event", eventCategory: "订购流程", eventAction: "立即购买", eventLabel: "详情页购买"})
    }

    function ga_submit() {
        if (!exist_ga()) return;
        ga("send", {hitType: "event", eventCategory: "订购流程", eventAction: "确认下单", eventLabel: "订单填写页"})
    }

    function ga_cancel() {
        if (!exist_ga()) return;
        ga("send", {hitType: "event", eventCategory: "订购流程", eventAction: "取消订单", eventLabel: "订单确认页"})
    }

    function ga_pay(id, product_name, payment) {
        if (!exist_ga()) return;
        ga("send", {hitType: "event", eventCategory: "订购流程", eventAction: "去支付", eventLabel: "订单确认页"});
        ga("require", "ecommerce");
        ga("ecommerce:addTransaction", {"id": id, "affiliation": product_name, "revenue": payment,});
        ga("ecommerce:send")
    };
</script>
<script type="text/javascript">
    $('.order').click(function () {
        $('.popimg').attr('src', '//image.nakedchina.com.cn/uploads/images/' + name + 'ewm.jpg')
        $('.popup').addClass('popshow');
    });
    if (/\/\/static2\./.test(window.location.href)) {
        window.location.replace(window.location.href.replace(/\/\/static2\./, '//t.'));
    }
</script>

<script>
    $(window).resize(function () {
        var width = $(this).width();
        var height = $(this).height();
        var rat = width / height;
        console.log(rat)
        if (rat >= 1.89349112) {
            $('.section_img').css({
                'backgroundSize': '100% auto'
            })
        } else {
            $('.section_img').css({
                'backgroundSize': 'auto 100%'
            })
        }
    });
    $(function () {
        $('#brandPage').addClass('current');
        var wheight = $(window).height();
        var wwidth = $(window).width();
        var rat = wwidth / wheight;
        if (rat >= 1.89349112) {
            $('.section_img').css({
                'backgroundSize': '100% auto'
            })
        } else {
            $('.section_img').css({
                'backgroundSize': 'auto 100%'
            })
        }
        var isMoving = true;
        var secNum = $('.section').length;
        var num = 0;
        var wheel = function (event) {
            var delta = 0;
            if (!event)//for ie
                event = window.event;
            if (event.wheelDelta) {//ie,opera
                delta = event.wheelDelta / 120;
            } else if (event.detail) {
                delta = -event.detail / 3;
            }
            if (delta) {
                handle(delta);
            }
            if (event.preventDefault)
                event.preventDefault();
            event.returnValue = false;
        };
        if (window.addEventListener) {
            window.addEventListener('DOMMouseScroll', wheel, false);
        }
        window.onmousewheel = wheel;

        function handle(delta) {
            if (!isMoving) {
                return;
            }
            if (delta > 0) {//向上滚动
                if (num < 1) {
                    return;
                }
                if (num == secNum) {
                    $('.head').addClass('black');
                    $('#dowebok').removeClass('showFoot');
                    $('.totop').removeClass('totopAnimate');
                    $('.push_icon').show();
                } else {
                    $('.head').removeClass('black');
                }
                $('.section').eq(num).removeClass('active');

                num--;
                $('.brand').removeClass('brand_w');
                $('#brand' + num).addClass('brand_w');
                $('.nav li').eq(num).addClass('check').siblings().removeClass('check');
                setTimeout(function () {
                    isMoving = true;
                }, 1800);
            } else if (delta < 0) {//向下滚动
                num++;
                if (num > secNum) {
                    num = secNum;
                    return;
                }
                if (num >= secNum - 1) {
                    $('.head').addClass('black');
                    if (num == secNum) {
                        $('.push_icon').hide();
                        $('#dowebok').addClass('showFoot');
                        $('.totop').addClass('totopAnimate');
                        num = secNum
                    }
                } else {
                    $('.head').removeClass('black');
                }

                $('.section').eq(num).addClass('active');
                /*var isLoad = $('.imgsrc'+(num+1)).attr('isLoaded');
                 if(!isLoad){
                 var imgSrc = $('.imgsrc'+(num+1)).attr('data-img');
                 $('.imgsrc'+(num+1)).attr('src',imgSrc);
                 $('.imgsrc'+(num+1)).attr('isLoaded', true);
                 }*/
                $('.brand').removeClass('brand_w');
                $('#brand' + num).addClass('brand_w');
                $('.nav li').eq(num).addClass('check').siblings().removeClass('check');
                setTimeout(function () {
                    isMoving = true;
                }, 1800);
            }
            isMoving = false;
        }

        $('.nav li').click(function () {
            var index = $(this).index();
            if (index > num) {
                num = index;
                for (var i = 0; i <= index; i++) {
                    $('.section').eq(i).addClass('active');
                }
                $('.brand').removeClass('brand_w');
                $('#brand' + num).addClass('brand_w');
            } else if (index < num) {
                num = index;
                for (var i = (num + 1); i <= secNum - 1; i++) {
                    $('.section').eq(i).removeClass('active');
                }
                $('.brand').removeClass('brand_w');
                $('#brand' + num).addClass('brand_w');
            }
            if (index == secNum - 1) {
                $('.head').addClass('black');
            } else {
                $('.head').removeClass('black');
            }
            $('.nav li').eq(num).addClass('check').siblings().removeClass('check');
        });
        $('.push_icon').click(function () {
            num = num + 1;
            if (num >= secNum) {
                $('.push_icon').hide();
                $('#dowebok').addClass('showFoot');
                $('.totop').addClass('totopAnimate');
                return;
            }
            $('.section').eq(num).addClass('active');
            $('.brand').removeClass('brand_w');
            $('#brand' + num).addClass('brand_w');
            if (num == secNum - 1) {
                $('.head').addClass('black');
            } else {
                $('.head').removeClass('black');
            }
            $('.nav li').eq(num).addClass('check').siblings().removeClass('check');
        })
        $('.totop').click(function () {
            $('#dowebok').removeClass('showFoot');
            $('.totop').removeClass('totopAnimate');
            num = 0;
            for (var i = 1; i <= secNum - 1; i++) {
                $('.section').eq(i).removeClass('active');
            }
            $('.brand').removeClass('brand_w');
            $('#brand' + num).addClass('brand_w');
            $('.head').removeClass('black');
            $('.nav li').eq(num).addClass('check').siblings().removeClass('check');
        });
    });
</script>