<?php

namespace app\assets;

class LoginAsset extends AppAsset
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'backend/global/plugins/font-awesome/css/font-awesome.min.css',
        'backend/global/plugins/simple-line-icons/simple-line-icons.min.css',
//        'backend/global/plugins/bootstrap/css/bootstrap.min.css',
        'backend/global/plugins/uniform/css/uniform.default.css',
        'backend/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        'backend/global/plugins/select2/css/select2.min.css',
        'backend/global/plugins/select2/css/select2-bootstrap.min.css',
        'backend/global/css/components.min.css',
        'backend/global/css/plugins.min.css',
        'backend/pages/css/login.min.css',
        'js/noty/css/animate.css'
    ];
    public $js = [
        'backend/global/plugins/js.cookie.min.js',
        'backend/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'backend/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'backend/global/plugins/jquery.blockui.min.js',
        'backend/global/plugins/uniform/jquery.uniform.min.js',
        'backend/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        'backend/global/plugins/jquery-validation/js/jquery.validate.min.js',
        'backend/global/plugins/jquery-validation/js/additional-methods.min.js',
        'backend/global/plugins/select2/js/select2.full.min.js',
        //'backend/global/scripts/app.min.js',
        'backend/pages/scripts/login.min.js',
        'js/noty/packaged/jquery.noty.packaged.js',
        'backend/scripts/site.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}