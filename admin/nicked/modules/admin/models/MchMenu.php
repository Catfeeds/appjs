<?php
/**
 * User: Xany <762632258@qq.com>
 * Date: 2017/12/27
 * Time: 10:44
 */

namespace app\modules\admin\models;

use yii\helpers\VarDumper;

class MchMenu
{
    public $user_auth;

    public function getList()
    {
        $menu_list = [
            [
                'name' => '商城管理',
                'route' => 'admin/store/wechat-setting',
                'icon' => 'icon-setup',
                'list' => [
                    [
                        'name' => '系统设置',
                        'route' => 'admin/store/wechat-setting',
                        'list' => [
                            [
                                'name' => '微信配置',
                                'route' => 'admin/store/wechat-setting',
                            ],
                            [
                                'name' => '商城设置',
                                'route' => 'admin/store/setting',
                            ],
                            [
                                'name' => '模板消息',
                                'route' => 'admin/store/tpl-msg',
                            ],
                            [
                                'name' => '短信通知',
                                'route' => 'admin/store/sms',
                            ],
                            [
                                'name' => '邮件通知',
                                'route' => 'admin/store/mail',
                            ],
                            [
                                'name' => '运费规则',
                                'route' => 'admin/store/postage-rules',
                                'sub' => [
                                    'admin/store/postage-rules-edit'
                                ],
                            ],
                            [
                                'name' => '快递单打印',
                                'route' => 'admin/store/express',
                                'sub' => [
                                    'admin/store/express-edit',
                                ],
                            ],
                            [
                                'name' => '小票打印',
                                'route' => 'admin/printer/list',
                                'sub' => [
                                    'admin/printer/setting',
                                    'admin/printer/edit',
                                ],
                            ],
//                            [
//                                'name' => '模板',
//                                'route' => 'admin/test/tpl',
//                            ],
                            [
                                'name' => '上传设置',
                                'route' => 'admin/store/upload',
                            ],
                            [
                                'name' => '缓存',
                                'route' => 'admin/cache/index',
                            ],
                        ],
                    ],
                    [
                        'name' => '小程序设置',
                        'route' => 'admin/store/slide',
                        'list' => [
                            [
                                'name' => '轮播图',
                                'route' => 'admin/store/slide',
                                'sub' => [
                                    'admin/store/slide-edit',
                                ],
                            ],
                            [
                                'name' => '导航图标',
                                'route' => 'admin/store/home-nav',
                                'sub' => [
                                    'admin/store/home-nav-edit',
                                ],
                            ],
                            [
                                'name' => '图片魔方',
                                'route' => 'admin/store/home-block',
                                'sub' => [
                                    'admin/store/home-block-edit',
                                ],
                            ],
                            [
                                'name' => '导航栏',
                                'route' => 'admin/store/navbar',
                            ],
                            [
                                'name' => '首页布局',
                                'route' => 'admin/store/home-page',
                            ],
                            [
                                'name' => '用户中心',
                                'route' => 'admin/store/user-center',
                            ],
                            [
                                'name' => '下单表单',
                                'route' => 'admin/store/form',
                            ],
                            [
                                'name' => '小程序发布',
                                'route' => 'admin/store/wxapp',
                            ],
                        ],
                    ],

                ],
            ],
            [
                'name' => '商品管理',
                'route' => 'admin/goods/goods',
                'icon' => 'icon-service',
                'list' => [
                    [
                        'name' => '商品管理',
                        'route' => 'admin/goods/goods',
                        'sub' => [
                            'admin/goods/goods-edit',
                        ],
                    ],
                    [
                        'name' => '分类',
                        'route' => 'admin/store/cat',
                        'sub' => [
                            'admin/store/cat-edit',
                        ],
                    ],
                ],
            ],
            [
                'name' => '订单管理',
                'route' => 'admin/order/index',
                'icon' => 'icon-activity',
                'list' => [
                    [
                        'name' => '订单列表',
                        'route' => 'admin/order/index',
                        'sub' => [
                            'admin/order/detail'
                        ]
                    ],
                    [
                        'name' => '自提订单',
                        'route' => 'admin/order/offline',
                    ],
                    [
                        'name' => '售后订单',
                        'route' => 'admin/order/refund',
                    ],
                    [
                        'name' => '评价管理',
                        'route' => 'admin/comment/index',
                    ],
                ],
            ],
            [
                'name' => '用户管理',
                'route' => 'admin/user/index',
                'icon' => 'icon-people',
                'list' => [
                    [
                        'name' => '用户列表',
                        'route' => 'admin/user/index',
                        'sub' => [
                            'admin/user/card',
                            'admin/user/coupon',
                            'admin/user/rechange-log',
                            'admin/user/edit',
                        ],
                    ],
                    [
                        'name' => '核销员',
                        'route' => 'admin/user/clerk',
                    ],
                    [
                        'name' => '会员等级',
                        'route' => 'admin/user/level',
                        'sub' => [
                            'admin/user/level-edit',
                        ]
                    ],
                ],
            ],
            [
                'id' => 'share',
                'name' => '分销中心',
                'route' => 'admin/share/index',
                'icon' => 'icon-jiegou',
                'list' => [
                    [
                        'name' => '分销商',
                        'route' => 'admin/share/index',
                    ],
                    [
                        'name' => '分销订单',
                        'route' => 'admin/share/order',
                    ],
                    [
                        'name' => '分销提现',
                        'route' => 'admin/share/cash',
                    ],
                    [
                        'name' => '分销设置',
                        'route' => 'admin/share/basic',
                        'list' => [
                            [
                                'name' => '基础设置',
                                'route' => 'admin/share/basic',
                                'sub' => [
                                    'admin/share/qrcode'
                                ]
                            ],
                            [
                                'name' => '佣金设置',
                                'route' => 'admin/share/setting'
                            ]
                        ]
                    ],
                ],
            ],
            [
                'name' => '内容管理',
                'route' => 'admin/article/index',
                'icon' => 'icon-barrage',
                'list' => [
                    [
                        'name' => '文章',
                        'route' => 'admin/article/index',
                        'sub' => [
                            'admin/article/edit',
                        ],
                    ],
                    [
                        'id' => 'topic',
                        'name' => '专题',
                        'route' => 'admin/topic/index',
                        'sub' => [
                            'admin/topic/edit',
                        ],
                    ],
                    [
                        'id' => 'video',
                        'name' => '视频',
                        'route' => 'admin/store/video',
                        'sub' => [
                            'admin/store/video-edit',
                        ],
                    ],
                    /*[
                        'name' => '门店',
                        'route' => 'admin/store/shop',
                        'sub' => [
                            'admin/store/shop-edit',
                        ],
                    ],*/
                ],
            ],
            [
                'name' => '营销管理',
                'route' => 'admin/coupon/index',
                'icon' => 'icon-coupons',
                'list' => [
                    [
                        'id' => 'coupon',
                        'name' => '优惠券',
                        'route' => 'admin/coupon/index',
                        'sub' => [
                            'admin/coupon/send',
                            'admin/coupon/edit',
                        ],
                        'list' => [
                            [
                                'name' => '优惠券管理',
                                'route' => 'admin/coupon/index'
                            ],
                            [
                                'name' => '自动发放设置',
                                'route' => 'admin/coupon/auto-send',
                                'sub' => [
                                    'admin/coupon/auto-send-edit'
                                ]
                            ]
                        ]
                    ],
                    [
                        'name' => '卡券',
                        'route' => 'admin/card/index',
                        'sub' => [
                            'admin/card/edit',
                        ],
                    ],
                ],
            ],
            [
                'name' => '应用专区',
                'route' => 'admin/seckill/index',
                'icon' => 'icon-pintu-m',
                'list' => [
                    [
                        'id' => 'seckill',
                        'name' => '整点秒杀',
                        'route' => 'admin/seckill/index',
                        'list' => [
                            [
                                'name' => '开放时间',
                                'route' => 'admin/seckill/index',
                            ],
                            [
                                'name' => '商品设置',
                                'route' => 'admin/seckill/goods',
                                'sub' => [
                                    'admin/seckill/goods-edit',
                                    'admin/seckill/goods-detail',
                                    'admin/seckill/calendar',
                                ],
                            ],
                        ],
                    ],
                    [
                        'id' => 'pintuan',
                        'name' => '拼团管理',
                        'route' => 'admin/group/goods/index',
                        'list' => [
                            [
                                'name' => '商品管理',
                                'route' => 'admin/group/goods/index',
                                'sub' => [
                                    'admin/group/goods/goods-edit',
                                    'admin/group/goods/goods-attr'
                                ]
                            ],
                            [
                                'name' => '商品分类',
                                'route' => 'admin/group/goods/cat',
                                'sub' => [
                                    'admin/group/goods/cat-edit'
                                ]
                            ],
                            [
                                'name' => '订单管理',
                                'route' => 'admin/group/order/index',
                            ],
                            [
                                'name' => '拼团管理',
                                'route' => 'admin/group/order/group',
                                'sub' => [
                                    'admin/group/order/group-list'
                                ]
                            ],
                            [
                                'name' => '轮播图',
                                'route' => 'admin/group/pt/banner',
                                'sub' => [
                                    'admin/group/pt/slide-edit'
                                ]
                            ],
                            [
                                'name' => '模板消息',
                                'route' => 'admin/group/notice/setting',
                            ],
                            [
                                'name' => '拼团规则',
                                'route' => 'admin/group/article/edit',
                            ],
                            [
                                'name' => '评论管理',
                                'route' => 'admin/group/comment/index',
                            ],
                            [
                                'name' => '广告设置',
                                'route' => 'admin/group/ad/setting',
                            ],
                            [
                                'name' => '数据统计',
                                'route' => 'admin/group/data/goods',
                                'sub' => [
                                    'admin/group/data/user'
                                ]
                            ],
                        ],
                    ],
                    [
                        'id' => 'book',
                        'name' => '预约管理',
                        'route' => 'admin/book/goods/index',
                        'list' => [
                            [
                                'name' => '商品管理',
                                'route' => 'admin/book/goods/index',
                                'sub' => [
                                    'admin/book/goods/goods-edit'
                                ]
                            ],
                            [
                                'name' => '商品分类',
                                'route' => 'admin/book/goods/cat',
                                'sub' => [
                                    'admin/book/goods/cat-edit'
                                ]
                            ],
                            [
                                'name' => '订单管理',
                                'route' => 'admin/book/order/index',
                            ],
                            [
                                'name' => '基础设置',
                                'route' => 'admin/book/index/setting',
                            ],
                            [
                                'name' => '模板消息',
                                'route' => 'admin/book/notice/setting',
                            ],
                            [
                                'name' => '评论管理',
                                'route' => 'admin/book/comment/index',
                            ],
                        ],
                    ],
                ],
            ],

        ];

        $menu_list = $this->resetList($menu_list);
        foreach ($menu_list as $i => $item) {
            if (is_array($item['list']) && count($item['list']) == 0) {
                unset($menu_list[$i]);
                continue;
            }
            if (is_array($item['list'])) {
                $menu_list[$i]['route'] = $item['list'][0]['route'];
            }
        }
        $menu_list = array_values($menu_list);

        return $menu_list;

    }

    private function resetList($list)
    {
        foreach ($list as $i => $item) {
            if (isset($item['id']) && $this->user_auth !== null && !in_array($item['id'], $this->user_auth)) {
                unset($list[$i]);
                continue;
            }
            if (isset($item['list']) && is_array($item['list'])) {
                $list[$i]['list'] = $this->resetList($item['list']);
            }
        }
        $list = array_values($list);
        return $list;
    }

}