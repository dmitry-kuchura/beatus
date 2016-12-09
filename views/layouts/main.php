<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);

use app\components\Header;
use app\components\Slider;
use app\components\Contacts;
use app\components\News;
use app\components\Works;
use app\components\Service;
use app\components\About;
use app\components\Footer;
use app\components\Hidden;

?>
<?php $this->beginPage(); ?>
    <!DOCTYPE html>
    <html lang="<?php echo Yii::$app->language; ?>" dir="ltr" class="no-js">
    <head>
        <!-- (c) студия Wezom | www.wezom.com.ua-->
        <!-- wTPL | v#{locals.version}-->
        <meta charset="<?php echo Yii::$app->charset; ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo Html::encode($this->title); ?></title>
        <meta name="description" lang="ru-ru" content="">
        <meta name="keywords" lang="ru-ru" content="студия wezom, разработка сайтов">
        <meta name="keywords" lang="en-us" content="studio wezom, web development">
        <meta name="author" lang="ru-ru" content="">
        <!-- Open Graph -->
        <meta property="og:title" content="Заголовок страницы">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="site.com">
        <meta property="og:url" content="http://site.com/current-page">
        <meta property="og:description" content="краткий текст (новости, товара и т.д)">
        <!-- Touch -->
        <meta name="format-detection" content="telephone=no">
        <meta name="format-detection" content="address=no">
        <!--Responsive-->
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="viewport" content="target-densitydpi=device-dpi">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- saved from url=(0014)about:internet -->
        <!--[if IE]>
        <meta http-equiv="imagetoolbar" content="no"><![endif]-->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!-- localStorage test -->
        <script>!function (t) {
                function r() {
                    var t = navigator.userAgent, r = !window.addEventListener || t.match(/(Android (2|3|4.0|4.1|4.2|4.3))|(Opera (Mini|Mobi))/) && !t.match(/Chrome/);
                    if (r)return !1;
                    var e = "test";
                    try {
                        return localStorage.setItem(e, e), localStorage.removeItem(e), !0
                    } catch (o) {
                        return !1
                    }
                }

                t.localSupport = r(), t.localWrite = function (t, r) {
                    try {
                        localStorage.setItem(t, r)
                    } catch (e) {
                        if (e == QUOTA_EXCEEDED_ERR)return !1
                    }
                }
            }(window);
        </script>
        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="manifest.json">
        <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="favicons/mstile-144x144.png">
        <meta name="msapplication-config" content="browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <?php echo Html::csrfMetaTags(); ?>
        <?php $this->head(); ?>
    </head>
    <body class="indexPage">
    <?php $this->beginBody(); ?>
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
    <?php $this->endBody(); ?>
    </body>
    </html>
<?php $this->endPage(); ?>