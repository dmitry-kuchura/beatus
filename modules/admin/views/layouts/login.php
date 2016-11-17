<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\LoginAsset;

LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <!--[if IE 8]>
    <html lang="<?php echo Yii::$app->language ?>" class="ie8 no-js"> <![endif]-->
    <!--[if IE 9]>
    <html lang="<?php echo Yii::$app->language ?>" class="ie9 no-js"> <![endif]-->
    <!--[if !IE]><!-->
    <html lang="<?php echo Yii::$app->language ?>">
    <head>
        <meta charset="utf-8"/>
        <title><?php echo Html::encode($this->title) ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <?php echo Html::csrfMetaTags() ?>
        <meta content="" name="author"/>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
              type="text/css"/>
        <link rel="shortcut icon" href="favicon.ico"/>
        <?php $this->head(); ?>
    </head>
    <body class="login">
    <?php $this->beginBody(); ?>
    <div class="logo">
        <a href="<?php echo Url::to('/admin'); ?>">
            <img src="<?php echo Url::to('/web/admin/layout/img/logo.png'); ?>" alt=""/> </a>
    </div>
    <div class="content">
        <?php echo $content; ?>
    </div>
    <div class="copyright"> 2016 © Wezom Yii2</div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>