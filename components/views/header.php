<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;

yii\bootstrap\NavBar::begin([
    'brandLabel' => 'My Company',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
    ],
]);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
        Yii::$app->user->isGuest ? (
        ['label' => 'Login', 'url' => ['/site/login']]
        ) : (
            '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>'
        )
    ],
]);
yii\bootstrap\NavBar::end();
?>

<header class="wHeader">
    <div class="wHeaderLeft w_fll">
        <div data-anchor="wContainer" class="logo js-anchor">
            <div class="logo_svg">
                <svg>
                    <use xlink:href="#icon_logo"/>
                </svg>
            </div>
            <div class="logo_text"><img src="pic/logo.png" alt=""></div>
        </div>
        <div class="menu_btn">
            <svg>
                <use xlink:href="#icon_menu"/>
            </svg>
        </div>
    </div>
    <div class="wHeaderRight w_flr"><a href="tel:(044) 287-87-11?call" class="phone">
            <div class="phone_svg">
                <svg>
                    <use xlink:href="#icon_phone"/>
                </svg>
            </div>
            <div class="phone_text">(044) 287-87-11</div>
        </a>
        <div data-anchor="contacts" class="callback js-anchor">
            <div class="callback_svg">
                <svg>
                    <use xlink:href="#icon_phone"/>
                </svg>
            </div>
            <div class="callback_text">Связаться с нами</div>
        </div>
        <!--<div class="language">
            <div class="language_select--cur">
                <svg>
                    <use xlink:href="#icon_arrow"/>
                </svg>
                <span>Рус</span>
            </div>
           <div class="language_drop">
                <span data-lang="Рус" class="cur">Рус</span>
                <span data-lang="Eng">Eng</span>
            </div>
        </div>-->
    </div>
    <div class="wHeaderCenter w_ovh">
        <div class="menu">
            <span data-anchor="about" class="js-anchor">О компании</span>
            <span data-anchor="services" class="js-anchor">Услуги</span>
            <span data-anchor="works" class="js-anchor">Наши работы</span>
            <span data-anchor="news" class="js-anchor">Новости</span>
            <span data-anchor="contacts" class="js-anchor">Контакты</span>
        </div>
    </div>
</header>