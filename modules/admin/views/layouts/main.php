<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;
$active = Yii::$app->controller->route;
$ctrl = Yii::$app->controller->id;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?php echo Yii::$app->language ?>">
    <head>
        <meta charset="utf-8"/>
        <title><?php echo Html::encode($this->title) ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
              type="text/css"/>
        <link rel="shortcut icon" href="<?php echo Url::to('/web/favicon.ico'); ?>"/>
        <?php $this->head(); ?>
    </head>
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
    <?php $this->beginBody(); ?>
    <div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner ">
            <div class="page-logo">
                <a href="<?php echo Url::to('/admin'); ?>">
                    <img src="<?php echo Url::to('/web/admin/layout/img/logo.png'); ?>" alt="logo"
                         class="logo-default"/>
                </a>
                <div class="menu-toggler sidebar-toggler"></div>
            </div>
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
               data-target=".navbar-collapse"> </a>
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <img alt="" class="img-circle" src="<?php echo Url::to('/web/admin/layout/img/avatar3_small.jpg'); ?>"/>
                            <span class="username username-hide-on-mobile">Администратор</span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="<?php echo Url::to('/admin/logout'); ?>">
                                    <i class="icon-key"></i>Выход</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-quick-sidebar-toggler">
                        <a href="<?php echo Url::to('/admin/logout'); ?>" class="dropdown-toggle">
                            <i class="icon-logout"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="page-container">
        <div class="page-sidebar-wrapper">
            <div class="page-sidebar navbar-collapse collapse">
                <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
                    data-slide-speed="200" style="padding-top: 20px">
                    <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler"></div>
                    </li>

                    <li class="heading">
                        <h3 class="uppercase">Навигация</h3>
                    </li>
                    <li class="nav-item <?php echo $ctrl == 'category' ? 'active open' : ''; ?>">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-puzzle"></i>
                            <span class="title">Разделы</span>
                            <span class="arrow <?php echo $ctrl == 'category' ? 'open' : ''; ?>"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item <?php echo $active == 'admin/category/index' ? 'active open' : ''; ?>">
                                <a href="<?php echo Url::to(['/admin/category']); ?>" class="nav-link ">
                                    <span class="title">Список разделов</span>
                                </a>
                            </li>
                            <li class="nav-item <?php echo $active == 'admin/category/create' ? 'active open' : ''; ?>">
                                <a href="<?php echo Url::to(['/admin/category/create']); ?>" class="nav-link ">
                                    <span class="title">Создать раздел</span>
<!--                                    <span class="badge badge-danger">2</span>-->
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item <?php echo $ctrl == 'pages' ? 'active open' : ''; ?>">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-layers"></i>
                            <span class="title">Страницы</span>
                            <span class="arrow <?php echo $ctrl == 'pages' ? 'open' : ''; ?>"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item <?php echo $active == 'admin/pages/index' ? 'active open' : ''; ?>">
                                <a href="<?php echo Url::to(['/admin/pages']); ?>" class="nav-link ">
                                    <span class="title">Список страниц</span>
                                </a>
                            </li>
                            <li class="nav-item <?php echo $active == 'admin/pages/create' ? 'active open' : ''; ?>">
                                <a href="<?php echo Url::to(['/admin/pages/create']); ?>" class="nav-link ">
                                    <span class="title">Создать страницу</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item <?php echo $ctrl == 'settings' ? 'active open' : ''; ?>">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-wrench"></i>
                            <span class="title">Настройки</span>
                            <span class="arrow <?php echo $ctrl == 'pages' ? 'open' : ''; ?>"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="page_general_faq.html" class="nav-link ">
                                    <i class="icon-wrench"></i>
                                    <span class="title">Основные</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="page-bar">
                    <?php echo Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]); ?>
                </div>
                <?php echo $content; ?>
            </div>
        </div>
        <a href="javascript:;" class="page-quick-sidebar-toggler">
            <i class="icon-login"></i>
        </a>
    </div>
    <div class="page-footer">
        <div class="page-footer-inner"> 2016 &copy; <a href="http://wezom.com.ua" title="Wezom"
                                                       target="_blank">Wezom</a>.
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!--[if lt IE 9]>
    <script src="../web/admin/plugins/respond.min.js"></script>
    <script src="../web/admin/plugins/excanvas.min.js"></script>
    <![endif]-->

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>