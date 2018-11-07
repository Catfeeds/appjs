<?php
namespace app\assets;
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    //定义按需加载JS方法，注意加载顺序在最后
    public function addScript($view, $jsfile) {
        $view->registerJsFile($jsfile, [$this, 'depends' => 'app\assets\AppAsset']);
    }

    //定义按需加载css方法，注意加载顺序在最后
    public function addCss($view, $cssfile) {
        $view->registerCssFile($cssfile, [$this, 'depends' => 'app\assets\AppAsset']);
    }
}
