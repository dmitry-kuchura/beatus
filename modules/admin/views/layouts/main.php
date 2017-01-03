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
                    <img src="<?php echo Url::to('/backend/layout/img/logo.png'); ?>" alt="logo" class="logo-default"/>
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
<!--                            <img alt="" class="img-circle" src="--><?php //echo Url::to('/web/admin/layout/img/avatar3_small.jpg'); ?><!--"/>-->
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
                    <li class="nav-item <?php echo $ctrl == 'news' ? 'active open' : ''; ?>">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-book-open"></i>
                            <span class="title">Новости</span>
                            <span class="arrow <?php echo $ctrl == 'news' ? 'open' : ''; ?>"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item <?php echo $active == 'admin/category/index' ? 'active open' : ''; ?>">
                                <a href="<?php echo Url::to(['/admin/news']); ?>" class="nav-link ">
                                    <span class="title">Список новостей</span>
                                </a>
                            </li>
                            <li class="nav-item <?php echo $active == 'admin/news/create' ? 'active open' : ''; ?>">
                                <a href="<?php echo Url::to(['/admin/news/create']); ?>" class="nav-link ">
                                    <span class="title">Создать новость</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item <?php echo $ctrl == 'slider' ? 'active open' : ''; ?>">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-picture"></i>
                            <span class="title">Слайдер</span>
                            <span class="arrow <?php echo $ctrl == 'slider' ? 'open' : ''; ?>"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item <?php echo $active == 'admin/slider/index' ? 'active open' : ''; ?>">
                                <a href="<?php echo Url::to(['/admin/slider']); ?>" class="nav-link ">
                                    <span class="title">Список слайдов</span>
                                </a>
                            </li>
                            <li class="nav-item <?php echo $active == 'admin/slider/create' ? 'active open' : ''; ?>">
                                <a href="<?php echo Url::to(['/admin/slider/create']); ?>" class="nav-link ">
                                    <span class="title">Создать слайд</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item <?php echo $ctrl == 'projects' ? 'active open' : ''; ?>">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-layers"></i>
                            <span class="title">Проекты</span>
                            <span class="arrow <?php echo $ctrl == 'projects' ? 'open' : ''; ?>"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item <?php echo $active == 'admin/projects/index' ? 'active open' : ''; ?>">
                                <a href="<?php echo Url::to(['/admin/projects']); ?>" class="nav-link ">
                                    <span class="title">Список проектов</span>
                                </a>
                            </li>
                            <li class="nav-item <?php echo $active == 'admin/projects/create' ? 'active open' : ''; ?>">
                                <a href="<?php echo Url::to(['/admin/projects/create']); ?>" class="nav-link ">
                                    <span class="title">Создать проект</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item <?php echo $ctrl == 'config' ? 'active open' : ''; ?>">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-wrench"></i>
                            <span class="title">Настройки</span>
                            <span class="arrow <?php echo $ctrl == 'config' ? 'open' : ''; ?>"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item <?php echo $active == 'admin/config/index' ? 'active open' : ''; ?>">
                                <a href="<?php echo Url::to(['/admin/config/index']); ?>" class="nav-link ">
                                    <i class="icon-settings"></i>
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
    <script src="/backend/plugins/respond.min.js"></script>
    <script src="/backend/plugins/excanvas.min.js"></script>
    <![endif]-->

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>