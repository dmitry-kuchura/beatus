<?php

namespace app\assets;

class AdminAsset extends AppAsset
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'backend/plugins/font-awesome/css/font-awesome.min.css',
        'backend/plugins/simple-line-icons/simple-line-icons.min.css',
        'backend/plugins/uniform/css/uniform.default.css',
        'backend/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        'backend/plugins/bootstrap-daterangepicker/daterangepicker.min.css',
        'backend/plugins/morris/morris.css',
        'backend/plugins/fullcalendar/fullcalendar.min.css',
        'backend/plugins/jqvmap/jqvmap/jqvmap.css',
        'backend/css/components.min.css',
        'backend/css/plugins.min.css',
        'backend/layout/css/layout.min.css',
        'backend/layout/css/themes/darkblue.min.css',
        'backend/layout/css/custom.min.css',
        'js/noty/css/animate.css'
    ];
    public $js = [
        'backend/plugins/bootstrap/js/bootstrap.min.js',
        'backend/plugins/js.cookie.min.js',
        'backend/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'backend/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'backend/plugins/jquery.blockui.min.js',
        'backend/plugins/uniform/jquery.uniform.min.js',
        'backend/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        'backend/plugins/moment.min.js',
        'backend/plugins/bootstrap-daterangepicker/daterangepicker.min.js',
        'backend/plugins/morris/morris.min.js',
        'backend/plugins/morris/raphael-min.js',
        'backend/plugins/counterup/jquery.waypoints.min.js',
        'backend/plugins/counterup/jquery.counterup.min.js',
        'backend/plugins/fullcalendar/fullcalendar.min.js',
        'backend/plugins/flot/jquery.flot.min.js',
        'backend/plugins/flot/jquery.flot.resize.min.js',
        'backend/plugins/flot/jquery.flot.categories.min.js',
        'backend/plugins/jquery-easypiechart/jquery.easypiechart.min.js',
        'backend/plugins/jquery.sparkline.min.js',
        'backend/scripts/app.min.js',
        'backend/pages/scripts/dashboard.min.js',
        'backend/layout/scripts/layout.min.js',
        'backend/layout/scripts/demo.min.js',
        'backend/global/scripts/quick-sidebar.min.js',
        'js/noty/packaged/jquery.noty.packaged.js',
        'backend/scripts/site.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}