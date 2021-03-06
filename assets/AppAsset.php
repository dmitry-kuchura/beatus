<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

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
        'css/components.css',
        'css/style.css',
        'css/responsive.css',
        'js/noty/css/animate.css'
    ];
    public $js = [
        'js/libs.js',
        'js/components.js',
        'js/inits.js',
        'js/validation.js',
        'js/site.js',
        'js/noty/packaged/jquery.noty.packaged.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}