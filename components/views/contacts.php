<div class="contacts">
    <div class="wSize">
        <div class="title_block">
            <div class="title_small">Контакты</div>
        </div>
        <div data-form="true" class="form_block wForm" data-ajax="contacts">
            <div class="form_inner">Меня зовут
                <div class="form_input">
                    <input type="text" name="name" data-name="name" required data-rule-word="true"
                           data-rule-minlength="2"
                           placeholder="полное имя">
                </div>, я хотел бы поговорить о
                <div class="form_input">
                    <input type="text" name="theme" data-name="theme" required data-rule-minlength="2"
                           placeholder="Вэб Разработка">
                </div>. Мой адрес электронной почты:
                <div class="form_input">
                    <input type="email" name="email" data-name="email" required data-rule-email="true"
                           placeholder="email@mail.com">
                </div>, мой номер:
                <div class="form_input">
                    <input type="tel" name="phone" data-name="phone" required data-rule-digits="true"
                           data-rule-minlength="10"
                           placeholder="номер телефона">
                </div>
            </div>
            <input type="hidden" data-name="<?php echo Yii::$app->request->csrfParam; ?>"
                   value=" <?php echo Yii::$app->request->getCsrfToken(); ?>">
            <button class="wSubmit"><span>связаться с нами</span></button>
        </div>
        <div class="contacts_map_block">
            <div class="contacts_map_left">
                <div class="contacts_place"><?php echo $params['address']; ?></div>
                <div class="contacts_phones">
                    <p>Телефоны:</p>
                    <div class="phones_item">
                        <a href="tel:<?php echo preg_replace("/[^0-9]/", '', $params['phone_1']); ?>?call"><?php echo $params['phone_1']; ?></a>
                    </div>
                    <div class="phones_item">
                        <a href="tel:<?php echo preg_replace("/[^0-9]/", '', $params['phone_2']); ?>?call"><?php echo $params['phone_2']; ?></a>
                    </div>
                    <div class="phones_item">
                        <a href="tel:<?php echo preg_replace("/[^0-9]/", '', $params['phone_3']); ?>?call"><?php echo $params['phone_3']; ?></a>
                    </div>
                </div>
                <div class="contacts_mail">
                    <p>Отдел по работе с клиентами</p><a
                            href="mailto:<?php echo $params['email']; ?>"><?php echo $params['email']; ?></a>
                </div>
            </div>
            <div class="contacts_map">
                <script src="http://maps.google.com/maps/api/js?key=<?php echo $params['api-key']; ?>"></script>
                <div id="js-map" data-map-x="<?php echo $params['map-x']; ?>"
                     data-map-y="<?php echo $params['map-y']; ?>" data-map-z="17"
                     data-map-icon="/pic/marker.png" class="css-map"></div>
            </div>
        </div>
        <div class="soc_block">
            <a href="<?php echo $params['facebook']; ?>" target="_blank" class="soc_link">
                <svg>
                    <use xlink:href="#icon_face"/>
                </svg>
            </a>
            <a href="<?php echo $params['youtube']; ?>" target="_blank" class="soc_link">
                <svg>
                    <use xlink:href="#icon_you"/>
                </svg>
            </a>
            <a href="<?php echo $params['twitter']; ?>" target="_blank" class="soc_link">
                <svg>
                    <use xlink:href="#icon_twit"/>
                </svg>
            </a>
            <a href="<?php echo $params['google']; ?>" target="_blank" class="soc_link">
                <svg>
                    <use xlink:href="#icon_google"/>
                </svg>
            </a>
        </div>
    </div>
</div>