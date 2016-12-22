<header class="wHeader">
    <div class="wHeaderLeft w_fll">
        <div data-anchor="wContainer" class="logo js-anchor">
            <div class="logo_svg">
                <svg>
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon_logo"></use>
                </svg>
            </div>
            <div class="logo_text"><img src="pic/logo.png" alt=""></div>
        </div>
        <div class="menu_btn">
            <svg>
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon_menu"></use>
            </svg>
        </div>
    </div>
    <div class="wHeaderRight w_flr"><a href="tel:<?php echo preg_replace("/[^0-9]/", '', $phone); ?>?call" class="phone">
            <div class="phone_svg">
                <svg>
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon_phone"></use>
                </svg>
            </div>
            <div class="phone_text"><?php echo $phone; ?></div>
        </a>
        <div data-anchor="contacts" class="callback js-anchor">
            <div class="callback_svg">
                <svg>
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon_phone"></use>
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