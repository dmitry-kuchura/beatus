<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\components\Header;
use app\components\Hidden;
use app\components\Footer;
use app\components\Contacts;
use app\components\News;
use app\components\Works;
use app\components\Service;
use app\components\About;
use app\components\Slider;
use app\components\Head;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>" dir="ltr" class="no-js">
<head>
    <?php echo Head::widget(); ?>
    <?php $this->head() ?>
</head>
<body class="indexPage">
<?php $this->beginBody() ?>
<div class="wWrapper">
    <?php echo Header::widget(); ?>
    <div class="wContainer">
        <?php echo Slider::widget(); ?>
        <?php echo About::widget(); ?>
        <?php echo Service::widget(); ?>
        <?php echo Works::widget(); ?>
        <?php echo News::widget(); ?>
        <?php echo Contacts::widget(); ?>
    </div>
</div>
<?php echo Footer::widget(); ?>
<?php echo Hidden::widget(); ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>