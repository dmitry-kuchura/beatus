<?php /*
use app\components\Header;
use app\components\Hidden;
use app\components\Footer;
use app\components\Contacts;
use app\components\News;
use app\components\Works;
use app\components\Service;
use app\components\About;
use app\components\Slider;

?>
<?php Header::widget(); ?>
    <div class="wContainer">
        <?php echo Slider::widget(); ?>
        <?php echo About::widget(); ?>
        <?php echo Service::widget(); ?>
        <?php echo Works::widget(); ?>
        <?php echo News::widget(); ?>
        <?php echo Contacts::widget(); ?>
    </div>
<?php echo Footer::widget(); ?>
<?php echo Hidden::widget(); ?>
*/ ?>

<div class="wContainer">
    <div class="slider_block">
        <div class="slider_bg">
            <div class="slider_bg_container">
                <div class="js-slider_bg"><img src="pic/slider_bg1.jpg" alt="" data-slide="1"><img
                            src="pic/slider_bg2.jpg" alt="" data-slide="2"></div>
            </div>
        </div>
        <div class="wSize">
            <div class="slider">
                <div class="js-slider css-slider">
                    <ul>
                        <li>
                            <div class="slide_top_text">
                                <div class="head_text">Beatus –</div>
                                <div class="slider_title">вместе расширим Ваши возможности</div>
                                <div class="middle_text">Мы убеждены, что созидательная сила движения заключается в
                                    понимании ситуации и соответствующем желании.
                                </div>
                                <div class="btn_go_next_block">
                                    <div data-anchor="about" data-slide="1" class="btn_go_next js-anchor">Подробнее
                                    </div>
                                </div>
                            </div>
                            <img src="pic/slide1.jpg" alt="">
                        </li>
                        <li>
                            <div class="slide_top_text">
                                <div class="head_text">Beatus –</div>
                                <div class="slider_title">вместе расширим Ваши возможности</div>
                                <div class="middle_text">Мы убеждены, что созидательная сила движения заключается в
                                    понимании ситуации и соответствующем желании.
                                </div>
                                <div class="btn_go_next_block">
                                    <div data-anchor="about" data-slide="2" class="btn_go_next js-anchor">Подробнее
                                    </div>
                                </div>
                            </div>
                            <img src="pic/slide2.jpg" alt="">
                        </li>
                    </ul>
                    <div class="js-slider_pagg"></div>
                </div>
                <div class="prev js-prev">
                    <svg>
                        <use xlink:href="#icon_prev"/>
                    </svg>
                </div>
                <div class="next js-next">
                    <svg>
                        <use xlink:href="#icon_next"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="wSize">
            <div class="title_block">
                <div class="title_small">О компании</div>
                <div class="title_big">Digital marketing and advertising company</div>
                <div class="slogan">Компания, объединяющая в себе творческих личностей, которым нравится заниматься
                    своим делом. Мы убеждены, что созидательная сила движения заключается в понимании ситуации и
                    соответствующем желании.
                </div>
            </div>
            <div class="about_title">История компании</div>
            <div class="wTxt">
                <p>Все началось с необходимости. Мы работали в компании, которая должна была стать лидером своего рынка
                    в течении 2-х лет, в период сложных экономических и политических условий. Перед нами стояла задача
                    обеспечения активных продаж в жатые сроки с довольно небольшим бюджетом на это и довольно
                    ограниченным количеством специалистов. И как мы убедились, в таких условиях решающим моментом
                    выступает внутренние истинное стремление человека к чему-то.</p>
                <p>Мы задали себе вопрос «Что делать?». За которым последовали следующие «Что мы знаем о ситуации?»,
                    «Как ее понять максимально быстро и четко?», «Что нам в этом может помочь?». По мере того, как мы
                    находили ответы на одни вопросы и задавали новые, у нас рождались идеи как с наибольшей
                    эффективностью можно решать поставленные задачи. </p>
                <p>Обороты компании росли. Она стала лидером своего рынка. Объемы работ становились все больше и больше.
                    Специалистам, которые в одном лице выступали как генераторы идей, исполнители и аналитики не хватало
                    24 часов в сутках для реализации появляющихся идей. Мы начали искать людей, которые могли бы помочь
                    нам в их реализации.</p>
                <p>Главным критерием являлось желание и стремление человека работать, создавать определенные вещи в
                    соответствии с нашим отношением к работе и миру в целом. С ростом количества специалистов появлялись
                    все новые и новые идеи. Не все подходили для нашей компании, но для других компаний в других
                    ситуациях они бы были очень полезны и результативны. Так и появилась идея о создании the digital
                    marketing and advertising company.</p>
            </div>
            <div class="now_block">
                <div class="now_block_text">
                    <div class="now_title">Сейчас, Beatus это:</div>
                    <ul class="now_list">
                        <li>мыслители</li>
                        <li>визуализаторы</li>
                        <li>исследователи</li>
                        <li>слушатели</li>
                        <li>производители</li>
                        <li>исполнители</li>
                    </ul>
                    <p>находящиеся в постоянном движении в перед.</p>
                </div>
            </div>
            <div class="beuseful">
                <div class="beuseful_text_block">
                    <div class="beuseful_title">Чем мы можем быть полезны?</div>
                    <div class="beuseful_text">Beatus меняет на 180 градусов сложные, вялотекущие ситуации своих
                        клиентов уверенно, быстро и эффективно, делая клиентов счастливыми.
                    </div>
                    <div data-anchor="services" class="beuseful_link js-anchor">Подробнее о наших услугах</div>
                </div>
                <div class="beuseful_slider_block">
                    <div class="beuseful_slider_wrap">
                        <div class="beuseful_slider">
                            <ul>
                                <li>
                                    <div class="beuseful_text_slide beuseful_text1">Меняем спад на рост</div>
                                    <img src="pic/beuseful2.jpg" alt="" data-anchor="services" class="js-anchor">
                                </li>
                                <li>
                                    <div class="beuseful_text_slide beuseful_text2">Подтолкнем вялотекущий тренд к
                                        активному росту
                                    </div>
                                    <img src="pic/beuseful1.jpg" alt="" data-anchor="services" class="js-anchor">
                                </li>
                                <li>
                                    <div class="beuseful_text_slide beuseful_text3">Вдохновим и побудим к действию
                                        <div class="w_clear"></div>
                                        <span>(если не знаете с чего начать)</span>
                                    </div>
                                    <img src="pic/beuseful3.jpg" alt="" data-anchor="services" class="js-anchor">
                                </li>
                            </ul>
                            <div class="beuseful_pagg">
                                <div class="js-prev">
                                    <svg>
                                        <use xlink:href="#icon_prev"/>
                                    </svg>
                                </div>
                                <div class="js-next">
                                    <svg>
                                        <use xlink:href="#icon_next"/>
                                    </svg>
                                </div>
                                <div class="js-beuseful_pagg"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w_clear"></div>
            </div>
            <div class="ourmission">
                <div class="ourmission_img w_fll"><img src="pic/mission.jpg" alt=""></div>
                <div class="ourmission_text w_flr">
                    <div class="mission_title">В чем мы видим <br> свою миссию?</div>
                    <div class="mission_text wTxt">
                        <p>Выступая связующим звеном между бизнесом, обществом и индивидуумом мы способствуем пониманию
                            друг друга и реализации каждого используя новейшие современные технологии и креативные
                            подходы.</p>
                        <p>Ведь именно взаимопонимание делает нашу жизнь более легкой, приятной и гармоничной.</p>
                    </div>
                </div>
                <div class="w_clear"></div>
            </div>
        </div>
    </div>
    <div class="services">
        <div class="wSize">
            <div class="title_block">
                <div class="title_small">услуги</div>
                <div class="title_big _white">Наши компетенции</div>
                <div class="slogan _white">Нам нравится делиться с вами нашими идеями и видеть, как они помогают
                    воплощению в жизнь ваших задач. Мы не ждем каких-либо условий. Мы обладаем созидательной силой,
                    находясь в постоянном творческом процессе используя новейшие технологии.
                </div>
            </div>
            <div class="services_main">
                <div class="services_lister">
                    <div class="services_lister_left w_fll">
                        <div data-img="pic/service1.jpg" data-service="1" class="services_item cur">
                            <svg>
                                <use xlink:href="#icon_ser1"/>
                            </svg>
                            <span>Strategy & Consulting</span>
                        </div>
                        <div data-img="pic/service2.jpg" data-service="2" class="services_item">
                            <svg>
                                <use xlink:href="#icon_ser2"/>
                            </svg>
                            <span>Creative Design</span>
                        </div>
                        <div data-img="pic/service1.jpg" data-service="3" class="services_item">
                            <svg>
                                <use xlink:href="#icon_ser3"/>
                            </svg>
                            <span>Web Development</span>
                        </div>
                        <div data-img="pic/service2.jpg" data-service="4" class="services_item">
                            <svg>
                                <use xlink:href="#icon_ser4"/>
                            </svg>
                            <span>Online Marketing</span>
                        </div>
                    </div>
                    <div class="services_lister_right w_flr"><img src="pic/service1.jpg" alt=""></div>
                    <div class="w_clear"></div>
                </div>
                <div data-service="1" class="services_text wTxt cur">
                    <p><b>Информированность и креативность – залог успешного движения вперед, которому мы с радостью
                            способствуем.</b></p>
                    <p>Именно поэтому, мы представляем комплексные услуги и уделяем должное внимание оценке
                        эффективности каждого этапа деятельности, рекламной компании. Мы показываем какой именно
                        рекламный ход дал наилучший результат, т.е. привел продажу, и наоборот.</p>
                    <p>Отслеживая всю эту цепочку, используя новейшие технологии, расширяются возможности оценки
                        эффективности работы менеджеров и других коррелирующих процессов. Также, все удачные рекламные
                        кампании и клиенты, которые появились в результате рекламы, записываются в систему в таком виде,
                        что появляется возможность загрузить ее в Оптимизатор конверсий google adwords. Это позволяет
                        привести еще больше целевой аудитории на сайт или в отдел продаж. </p>
                </div>
                <div data-service="2" class="services_text wTxt">
                    <p><b>Информированность и креативность – залог успешного движения вперед, которому мы с радостью
                            способствуем.</b></p>
                    <p>Именно поэтому, мы представляем комплексные услуги и уделяем должное внимание оценке
                        эффективности каждого этапа деятельности, рекламной компании. Мы показываем какой именно
                        рекламный ход дал наилучший</p>
                </div>
                <div data-service="3" class="services_text wTxt">
                    <p><b>Информированность и креативность – залог успешного движения вперед, которому мы с радостью
                            способствуем.</b></p>
                    <p>Именно поэтому, мы представляем комплексные услуги и уделяем должное внимание оценке
                        эффективности каждого этапа деятельности, рекламной компании. Мы показываем какой именно
                        рекламный ход дал наилучший результат, т.е. привел продажу, и наоборот.</p>
                    <p>Отслеживая всю эту цепочку, используя новейшие технологии, расширяются возможности оценки
                        эффективности работы менеджеров и других коррелирующих процессов. Также, все удачные рекламные
                        кампании и клиенты</p>
                </div>
                <div data-service="4" class="services_text wTxt">
                    <p><b>Информированность и креативность – залог успешного движения вперед, которому мы с радостью
                            способствуем.</b></p>
                    <p>Именно поэтому, мы представляем комплексные услуги и уделяем должное внимание оценке
                        эффективности каждого этапа деятельности, рекламной компании. Мы показываем какой именно
                        рекламный ход дал наилучший результат, т.е. привел продажу, и наоборот.</p>
                    <p>Отслеживая всю эту цепочку, используя новейшие технологии, расширяются возможности оценки
                        эффективности работы менеджеров и других коррелирующих процессов. Также, все удачные рекламные
                        кампании и кли</p>
                </div>
                <div class="algoritm">
                    <div class="algoritm_title">Алгоритм нашей работы</div>
                    <div class="algoritm_list">
                        <div class="algoritm_item">
                            <div class="algoritm_svg">
                                <svg>
                                    <use xlink:href="#icon_work1"/>
                                </svg>
                            </div>
                            <div class="algoritm_text_text"><span>Мы слушатели</span> вы рассказываете о том, чего
                                хотите или не хотите
                            </div>
                        </div>
                        <div class="algoritm_item">
                            <div class="algoritm_svg">
                                <svg>
                                    <use xlink:href="#icon_work2"/>
                                </svg>
                            </div>
                            <div class="algoritm_text_text"><span>Мы исследователи</span> изучаем рынок и компанию</div>
                        </div>
                        <div class="algoritm_item">
                            <div class="algoritm_svg">
                                <svg>
                                    <use xlink:href="#icon_work3"/>
                                </svg>
                            </div>
                            <div class="algoritm_text_text"><span>Мы креативные мыслители</span> находим не стандартные
                                лучшие решения
                            </div>
                        </div>
                        <div class="algoritm_item">
                            <div class="algoritm_svg">
                                <svg>
                                    <use xlink:href="#icon_work4"/>
                                </svg>
                            </div>
                            <div class="algoritm_text_text"><span>Мы визуализаторы</span> создаем пространство,
                                перемещаем во времени
                            </div>
                        </div>
                        <div class="algoritm_item">
                            <div class="algoritm_svg">
                                <svg>
                                    <use xlink:href="#icon_work5"/>
                                </svg>
                            </div>
                            <div class="algoritm_text_text"><span>Мы производители и исполнители</span> воплощаем
                                разработанную концепцию, сопровождаем ее поддержку
                            </div>
                        </div>
                        <div class="w_clear"></div>
                    </div>
                </div>
                <div class="virtual">
                    <div class="virtual_text w_fll">
                        <div class="virtual_title">Виртуализация <br> в сфере строительства</div>
                        <div class="wTxt">
                            <p>При помощи новейших технологий мы даем полное ощущение присутствия в местах, которые
                                находятся далеко или просто пока не существуют. Наша цель дать полное ощущение
                                присутствия в нужных местах. Начиная от виртуализации помещений, в которых вы легко
                                сможете изменять интерьер, заканчивая дополнительной реальностью, когда на месте участка
                                под застройку вы сможете наблюдать уже готовый дом со всей его инфраструктурой.</p>
                            <p>Также, вы сможете свободно перемещаться по окружающей местности и сами изучить ее. Это
                                позволяет получить ответы на все интересующие вопросы, возникающие при принятии решения.
                                И все это можно узнать и прочувствовать, не выходя из дома или офиса.</p>
                        </div>
                    </div>
                    <div class="virtual_img"><img src="pic/virtual.jpg" alt=""></div>
                    <div class="w_clear"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="works">
        <div class="wSize">
            <div class="title_block">
                <div class="title_small">Наши работы</div>
                <div class="title_big">Реализованные проекты</div>
            </div>
            <div class="works_list">
                <div class="works_item">
                    <div class="works_item_wrap">
                        <div class="works_item_img"><img src="pic/work1.jpg" alt=""></div>
                        <div class="works_opus">
                            <div class="works_category">Strategy & Consulting</div>
                            <div class="works_name">Название проекта №1</div>
                            <div data-markup="{&quot;name&quot;: &quot;Названи проекта&quot;,&quot;share&quot;:&quot;Поделиться&quot;,&quot;text&quot;:&quot;&lt;p&gt;Описание проекта. За ним идет одно или несколько изображений на всю ширину всплывайки. Фон остается неподвижным, прокручивается только всплывайка, причем белая шапка всплывайки остается на месте, чтобы можно было ее закрыть.&lt;/p&gt;&lt;p&gt;Berry will drive growth of key accounts, overseeing the integration and optimisation of enterprise CMS platforms that will enable organisations to develop a holistic view.Frank Digital founder &amp; creative director Matt Barbelli said the agency had successfully made its transition into the enterprise space, with Berry to play a crucial role in overseeing the implementation of the Sitecore Experience Platform for a number of clients.&lt;/p&gt;&quot;,&quot;id&quot;:&quot;1&quot;,&quot;img&quot;:[&quot;pic/work_big1.jpg&quot;,&quot;pic/work_big2.jpg&quot;,&quot;pic/work_big3.jpg&quot;]}"
                                 class="works_link mfiW">Подробнее
                            </div>
                        </div>
                    </div>
                </div>
                <div class="works_item">
                    <div class="works_item_wrap">
                        <div class="works_item_img"><img src="pic/work2.jpg" alt=""></div>
                        <div class="works_opus">
                            <div class="works_category">Strategy & Consulting</div>
                            <div class="works_name">Название проекта №1</div>
                            <div data-markup="{&quot;name&quot;: &quot;Названи проекта в 1-2 &quot;,&quot;share&quot;:&quot;Поделиться&quot;,&quot;text&quot;:&quot;Описание проекта. За ним идет одно или несколько изображений на всю ширину всплывайки. Фон остается неподвижным, прокручивается только всплывайка, причем белая шапка всплывайки остается на месте, чтобы можно было ее закрыть. Berry will drive growth of key accounts, overseeing the integration and optimisation of enterprise CMS platforms that will enable organisations to develop a holistic view.Frank Digital founder &amp; creative director Matt Barbelli said the agency had successfully made its transition into the enterprise space, with Berry to play a crucial role in overseeing the implementation of the Sitecore Experience Platform for a number of clients.&quot;,&quot;id&quot;:&quot;2&quot;,&quot;img&quot;:[&quot;pic/work_big1.jpg&quot;,&quot;pic/work_big3.jpg&quot;]}"
                                 class="works_link mfiW">Подробнее
                            </div>
                        </div>
                    </div>
                </div>
                <div class="works_item">
                    <div class="works_item_wrap">
                        <div class="works_item_img"><img src="pic/work3.jpg" alt=""></div>
                        <div class="works_opus">
                            <div class="works_category">Strategy & Consulting</div>
                            <div class="works_name">Название проекта №1</div>
                            <div data-markup="{&quot;name&quot;: &quot;Названи проекта в 1-2 строки &quot;,&quot;share&quot;:&quot;Поделиться&quot;,&quot;text&quot;:&quot;&lt;p&gt;Описание проекта. За ним идет одно или несколько изображений на всю ширину всплывайки. Фон остается неподвижным, прокручивается только всплывайка, причем белая шапка всплывайки остается на месте, чтобы можно было ее закрыть.&lt;/p&gt;&lt;p&gt;Berry will drive growth of key accounts, overseeing the integration and optimisation of enterprise CMS platforms that will enable organisations to develop a holistic view.Frank Digital founder &amp; creative director Matt Barbelli said the agency had successfully made its transition into the enterprise space, with Berry to play a crucial role in overseeing the implementation of the Sitecore Experience Platform for a number of clients.&lt;/p&gt;&quot;,&quot;id&quot;:&quot;3&quot;,&quot;img&quot;:[&quot;pic/work_big1.jpg&quot;,&quot;pic/work_big2.jpg&quot;]}"
                                 class="works_link mfiW">Подробнее
                            </div>
                        </div>
                    </div>
                </div>
                <div class="works_item">
                    <div class="works_item_wrap">
                        <div class="works_item_img"><img src="pic/work4.jpg" alt=""></div>
                        <div class="works_opus">
                            <div class="works_category">Strategy & Consulting</div>
                            <div class="works_name">Название проекта №1</div>
                            <div data-markup="{&quot;name&quot;: &quot;Названи проекта в 1-2 строки пишется &quot;,&quot;share&quot;:&quot;Поделиться&quot;,&quot;text&quot;:&quot;Описание проекта. За ним идет одно или несколько изображений на всю ширину всплывайки. Фон остается неподвижным, прокручивается только всплывайка, причем белая шапка всплывайки остается на месте, чтобы можно было ее закрыть. Berry will drive growth of key accounts, overseeing the integration and optimisation of enterprise CMS platforms that will enable organisations to develop a holistic view.Frank Digital founder &amp; creative director Matt Barbelli said the agency had successfully made its transition into the enterprise space, with Berry to play a crucial role in overseeing the implementation of the Sitecore Experience Platform for a number of clients.&quot;,&quot;id&quot;:&quot;4&quot;,&quot;img&quot;:[&quot;pic/work_big3.jpg&quot;]}"
                                 class="works_link mfiW">Подробнее
                            </div>
                        </div>
                    </div>
                </div>
                <div class="works_item">
                    <div class="works_item_wrap">
                        <div class="works_item_img"><img src="pic/work5.jpg" alt=""></div>
                        <div class="works_opus">
                            <div class="works_category">Strategy & Consulting</div>
                            <div class="works_name">Название проекта №1</div>
                            <div data-markup="{&quot;name&quot;: &quot;Названи проекта в 1-2 строки пишется и находится здесь&quot;,&quot;share&quot;:&quot;Поделиться&quot;,&quot;text&quot;:&quot;Описание проекта. За ним идет одно или несколько изображений на всю ширину всплывайки. Фон остается неподвижным, прокручивается только всплывайка, причем белая шапка всплывайки остается на месте, чтобы можно было ее закрыть. Berry will drive growth of key accounts, overseeing the integration and optimisation of enterprise CMS platforms that will enable organisations to develop a holistic view.Frank Digital founder &amp; creative director Matt Barbelli said the agency had successfully made its transition into the enterprise space, with Berry to play a crucial role in overseeing the implementation of the Sitecore Experience Platform for a number of clients.&quot;,&quot;id&quot;:&quot;5&quot;}"
                                 class="works_link mfiW">Подробнее
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="upload_more_block">
                <div class="upload_more"><span>Загрузить еще</span></div>
            </div>
            <div class="hide_work">
                <div class="popup_wrap">
                    <div class="popup_name_block">
                        <div class="popup_name">Названи проекта в 1-2 строки пишется и находится здесь</div>
                        <div class="news_soc">
                            <div class="category_date">
                                <div class="category">новости</div>
                                <span>/</span>
                                <div class="date">10/02/2016</div>
                            </div>
                            <span>Поделиться</span><a href="#" target="_blank" class="pop_face">
                                <svg>
                                    <use xlink:href="#icon_face"/>
                                </svg>
                            </a><a href="#" target="_blank" class="pop_twit">
                                <svg>
                                    <use xlink:href="#icon_twit"/>
                                </svg>
                            </a><a href="#" target="_blank" class="pop_google">
                                <svg>
                                    <use xlink:href="#icon_google"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="popup_text_block wTxt"><img src="pic/work_big1.jpg" alt="">
                        <p>Описание проекта. За ним идет одно или несколько изображений на всю ширину всплывайки. Фон
                            остается неподвижным, прокручивается только всплывайка, причем белая шапка всплывайки
                            остается на месте, чтобы можно было ее закрыть. Berry will drive growth of key accounts,
                            overseeing the integration and optimisation of enterprise CMS platforms that will enable
                            organisations to develop a holistic view.</p>
                        <p>Frank Digital founder & creative director Matt Barbelli said the agency had successfully made
                            its transition into the enterprise space, with Berry to play a crucial role in overseeing
                            the implementation of the Sitecore Experience Platform for a number of clients.</p>
                    </div>
                    <div class="popup_controls_block">
                        <div class="go_left w_fll">
                            <div class="pagg_svg">
                                <svg>
                                    <use xlink:href="#icon_prev"/>
                                </svg>
                            </div>
                            <span>Предыдущая новость</span>
                        </div>
                        <div class="go_right w_flr"><span>Следующая новость</span>
                            <div class="pagg_svg">
                                <svg>
                                    <use xlink:href="#icon_next"/>
                                </svg>
                            </div>
                        </div>
                        <div class="w_clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news">
        <div class="wSize">
            <div class="title_block">
                <div class="title_small _white">Новости</div>
                <div class="title_big _white">Актуально</div>
            </div>
            <div class="news_list w_clearfix">
                <div class="news_item">
                    <div class="news_item_wrap">
                        <div class="news_item_container"><img src="pic/service1.jpg" alt="">
                            <div class="news_item_inner">
                                <div class="category_date">
                                    <div class="category">новости</div>
                                    <span>/</span>
                                    <div class="date">10/02/2016</div>
                                    <div data-markup="{&quot;name&quot;: &quot;Название&quot;,&quot;share&quot;:&quot;Поделиться&quot;,&quot;img&quot;:[&quot;pic/work_big1.jpg&quot;],&quot;text&quot;:&quot;&lt;p&gt;Описание проекта. За ним идет одно или несколько изображений на всю ширину всплывайки. Фон остается неподвижным, прокручивается только всплывайка, причем белая шапка всплывайки остается на месте, чтобы можно было ее закрыть.&lt;/p&gt;&lt;p&gt; Berry will drive growth of key accounts, overseeing the integration and optimisation of enterprise CMS platforms that will enable organisations to develop a holistic view.Frank Digital founder &amp; creative director Matt Barbelli said the agency had successfully made its transition into the enterprise space, with Berry to play a crucial role in overseeing the implementation of the Sitecore Experience Platform for a number of clients.&lt;/p&gt;&quot;,&quot;id&quot;:&quot;1&quot;}"
                                         class="news_name mfiN">Заголовок новости в 1-2 строки пишется и находится здесь
                                    </div>
                                </div>
                            </div>
                            <div class="news_soc"><span>Поделиться</span><a href="#" target="_blank" class="pop_face">
                                    <svg>
                                        <use xlink:href="#icon_face"/>
                                    </svg>
                                </a><a href="#" target="_blank" class="pop_twit">
                                    <svg>
                                        <use xlink:href="#icon_twit"/>
                                    </svg>
                                </a><a href="#" target="_blank" class="pop_google">
                                    <svg>
                                        <use xlink:href="#icon_google"/>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="news_item">
                    <div class="news_item_wrap">
                        <div class="news_item_container"><img src="pic/service1.jpg" alt="">
                            <div class="news_item_inner">
                                <div class="category_date">
                                    <div class="category">новости</div>
                                    <span>/</span>
                                    <div class="date">10/02/2016</div>
                                </div>
                                <div data-markup="{&quot;name&quot;: &quot;Названи проекта &quot;,&quot;share&quot;:&quot;Поделиться&quot;,&quot;text&quot;:&quot;Описание проекта. За ним идет одно или несколько изображений на всю ширину всплывайки. Фон остается неподвижным, прокручивается только всплывайка, причем белая шапка всплывайки остается на месте, чтобы можно было ее закрыть. Berry will drive growth of key accounts, overseeing the integration and optimisation of enterprise CMS platforms that will enable organisations to develop a holistic view.Frank Digital founder &amp; creative director Matt Barbelli said the agency had successfully made its transition into the enterprise space, with Berry to play a crucial role in overseeing the implementation of the Sitecore Experience Platform for a number of clients.&quot;,&quot;id&quot;:&quot;2&quot;}"
                                     class="news_name mfiN">Заголовок новости в 1-2 строки пишется и находится здесь
                                </div>
                            </div>
                            <div class="news_soc"><span>Поделиться</span><a href="#" target="_blank" class="pop_face">
                                    <svg>
                                        <use xlink:href="#icon_face"/>
                                    </svg>
                                </a><a href="#" target="_blank" class="pop_twit">
                                    <svg>
                                        <use xlink:href="#icon_twit"/>
                                    </svg>
                                </a><a href="#" target="_blank" class="pop_google">
                                    <svg>
                                        <use xlink:href="#icon_google"/>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="news_item">
                    <div class="news_item_wrap">
                        <div class="news_item_container"><img src="pic/service1.jpg" alt="">
                            <div class="news_item_inner">
                                <div class="category_date">
                                    <div class="category">новости</div>
                                    <span>/</span>
                                    <div class="date">10/02/2016</div>
                                </div>
                                <div data-markup="{&quot;name&quot;: &quot;Названи проекта в 1-2 &quot;,&quot;share&quot;:&quot;Поделиться&quot;,&quot;text&quot;:&quot;Описание проекта. За ним идет одно или несколько изображений на всю ширину всплывайки. Фон остается неподвижным, прокручивается только всплывайка, причем белая шапка всплывайки остается на месте, чтобы можно было ее закрыть. Berry will drive growth of key accounts, overseeing the integration and optimisation of enterprise CMS platforms that will enable organisations to develop a holistic view.Frank Digital founder &amp; creative director Matt Barbelli said the agency had successfully made its transition into the enterprise space, with Berry to play a crucial role in overseeing the implementation of the Sitecore Experience Platform for a number of clients.&quot;,&quot;id&quot;:&quot;3&quot;}"
                                     class="news_name mfiN">Заголовок новости в 1-2 строки пишется и находится здесь
                                </div>
                            </div>
                            <div class="news_soc"><span>Поделиться</span><a href="#" target="_blank" class="pop_face">
                                    <svg>
                                        <use xlink:href="#icon_face"/>
                                    </svg>
                                </a><a href="#" target="_blank" class="pop_twit">
                                    <svg>
                                        <use xlink:href="#icon_twit"/>
                                    </svg>
                                </a><a href="#" target="_blank" class="pop_google">
                                    <svg>
                                        <use xlink:href="#icon_google"/>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="news_item">
                    <div class="news_item_wrap">
                        <div class="news_item_container"><img src="pic/service1.jpg" alt="">
                            <div class="news_item_inner">
                                <div class="category_date">
                                    <div class="category">новости</div>
                                    <span>/</span>
                                    <div class="date">10/02/2016</div>
                                </div>
                                <div data-markup="{&quot;name&quot;: &quot;Названи проекта в 1-2 строки &quot;,&quot;share&quot;:&quot;Поделиться&quot;,&quot;text&quot;:&quot;Описание проекта. За ним идет одно или несколько изображений на всю ширину всплывайки. Фон остается неподвижным, прокручивается только всплывайка, причем белая шапка всплывайки остается на месте, чтобы можно было ее закрыть. Berry will drive growth of key accounts, overseeing the integration and optimisation of enterprise CMS platforms that will enable organisations to develop a holistic view.Frank Digital founder &amp; creative director Matt Barbelli said the agency had successfully made its transition into the enterprise space, with Berry to play a crucial role in overseeing the implementation of the Sitecore Experience Platform for a number of clients.&quot;,&quot;id&quot;:&quot;4&quot;}"
                                     class="news_name mfiN">Заголовок новости в 1-2 строки пишется и находится здесь
                                </div>
                            </div>
                            <div class="news_soc"><span>Поделиться</span><a href="#" target="_blank" class="pop_face">
                                    <svg>
                                        <use xlink:href="#icon_face"/>
                                    </svg>
                                </a><a href="#" target="_blank" class="pop_twit">
                                    <svg>
                                        <use xlink:href="#icon_twit"/>
                                    </svg>
                                </a><a href="#" target="_blank" class="pop_google">
                                    <svg>
                                        <use xlink:href="#icon_google"/>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="news_item">
                    <div class="news_item_wrap">
                        <div class="news_item_container"><img src="pic/service1.jpg" alt="">
                            <div class="news_item_inner">
                                <div class="category_date">
                                    <div class="category">новости</div>
                                    <span>/</span>
                                    <div class="date">10/02/2016</div>
                                </div>
                                <div data-markup="{&quot;name&quot;: &quot;Названи проекта в 1-2 строки пишется и&quot;,&quot;share&quot;:&quot;Поделиться&quot;,&quot;text&quot;:&quot;&lt;p&gt;Описание проекта. За ним идет одно или несколько изображений на всю ширину всплывайки. Фон остается неподвижным, прокручивается только всплывайка, причем белая шапка всплывайки остается на месте, чтобы можно было ее закрыть. &lt;/p&gt;&lt;p&gt;Berry will drive growth of key accounts, overseeing the integration and optimisation of enterprise CMS platforms that will enable organisations to develop a holistic view.Frank Digital founder &amp; creative director Matt Barbelli said the agency had successfully made its transition into the enterprise space, with Berry to play a crucial role in overseeing the implementation of the Sitecore Experience Platform for a number of clients.&quot;,&quot;id&quot;:&quot;5&quot;}"
                                     class="news_name mfiN">Заголовок новости в 1-2 строки пишется и находится здесь
                                </div>
                            </div>
                            <div class="news_soc"><span>Поделиться</span><a href="#" target="_blank" class="pop_face">
                                    <svg>
                                        <use xlink:href="#icon_face"/>
                                    </svg>
                                </a><a href="#" target="_blank" class="pop_twit">
                                    <svg>
                                        <use xlink:href="#icon_twit"/>
                                    </svg>
                                </a><a href="#" target="_blank" class="pop_google">
                                    <svg>
                                        <use xlink:href="#icon_google"/>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="news_item">
                    <div class="news_item_wrap">
                        <div class="news_item_container"><img src="pic/service1.jpg" alt="">
                            <div class="news_item_inner">
                                <div class="category_date">
                                    <div class="category">новости</div>
                                    <span>/</span>
                                    <div class="date">10/02/2016</div>
                                </div>
                                <div data-markup="{&quot;name&quot;: &quot;Названи проекта в 1-2 строки пишется и находится&quot;,&quot;share&quot;:&quot;Поделиться&quot;,&quot;text&quot;:&quot;Описание проекта. За ним идет одно или несколько изображений на всю ширину всплывайки. Фон остается неподвижным, прокручивается только всплывайка, причем белая шапка всплывайки остается на месте, чтобы можно было ее закрыть. Berry will drive growth of key accounts, overseeing the integration and optimisation of enterprise CMS platforms that will enable organisations to develop a holistic view.Frank Digital founder &amp; creative director Matt Barbelli said the agency had successfully made its transition into the enterprise space, with Berry to play a crucial role in overseeing the implementation of the Sitecore Experience Platform for a number of clients.&quot;,&quot;id&quot;:&quot;6&quot;}"
                                     class="news_name mfiN">Заголовок новости в 1-2 строки пишется и находится здесь
                                </div>
                            </div>
                            <div class="news_soc"><span>Поделиться</span><a href="#" target="_blank" class="pop_face">
                                    <svg>
                                        <use xlink:href="#icon_face"/>
                                    </svg>
                                </a><a href="#" target="_blank" class="pop_twit">
                                    <svg>
                                        <use xlink:href="#icon_twit"/>
                                    </svg>
                                </a><a href="#" target="_blank" class="pop_google">
                                    <svg>
                                        <use xlink:href="#icon_google"/>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="news_item">
                    <div class="news_item_wrap">
                        <div class="news_item_container"><img src="pic/service1.jpg" alt="">
                            <div class="news_item_inner">
                                <div class="category_date">
                                    <div class="category">новости</div>
                                    <span>/</span>
                                    <div class="date">10/02/2016</div>
                                </div>
                                <div data-markup="{&quot;name&quot;: &quot;Названи проекта в 1-2 строки пишется и находится здесь&quot;,&quot;share&quot;:&quot;Поделиться&quot;,&quot;text&quot;:&quot;Описание проекта. За ним идет одно или несколько изображений на всю ширину всплывайки. Фон остается неподвижным, прокручивается только всплывайка, причем белая шапка всплывайки остается на месте, чтобы можно было ее закрыть. Berry will drive growth of key accounts, overseeing the integration and optimisation of enterprise CMS platforms that will enable organisations to develop a holistic view.Frank Digital founder &amp; creative director Matt Barbelli said the agency had successfully made its transition into the enterprise space, with Berry to play a crucial role in overseeing the implementation of the Sitecore Experience Platform for a number of clients.&quot;,&quot;id&quot;:&quot;7&quot;}"
                                     class="news_name mfiN">Заголовок новости в 1-2 строки пишется и находится здесь
                                </div>
                            </div>
                            <div class="news_soc"><span>Поделиться</span><a href="#" target="_blank" class="pop_face">
                                    <svg>
                                        <use xlink:href="#icon_face"/>
                                    </svg>
                                </a><a href="#" target="_blank" class="pop_twit">
                                    <svg>
                                        <use xlink:href="#icon_twit"/>
                                    </svg>
                                </a><a href="#" target="_blank" class="pop_google">
                                    <svg>
                                        <use xlink:href="#icon_google"/>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="upload_more_block">
                <div class="upload_more"><span>Загрузить еще</span></div>
            </div>
        </div>
    </div>
    <div class="contacts">
        <div class="wSize">
            <div class="title_block">
                <div class="title_small">Контакты</div>
            </div>
            <div data-form="true" class="form_block wForm">
                <div class="form_inner">Меня зовут
                    <div class="form_input">
                        <input type="text" name="my_name" required data-rule-word="true" data-rule-minlength="2"
                               placeholder="полное имя">
                    </div>
                    , я хотел бы поговорить о
                    <div class="form_input">
                        <input type="text" name="my_theme" required data-rule-minlength="2"
                               placeholder="Web Development">
                    </div>
                    . Мой адрес электронной почты:
                    <div class="form_input">
                        <input type="email" name="my_mail" required data-rule-email="true" placeholder="email@mail.com">
                    </div>
                    , мой номер:
                    <div class="form_input">
                        <input type="tel" name="my_phone" required data-rule-digits="true" data-rule-minlength="10"
                               placeholder="номер телефона">
                    </div>
                </div>
                <button class="wSubmit"><span>связаться с нами</span></button>
            </div>
            <div class="contacts_map_block">
                <div class="contacts_map_left">
                    <div class="contacts_place">г. Киев, <br>ул. Лятошинского, 21</div>
                    <div class="contacts_phones">
                        <p>Телефоны:</p>
                        <div class="phones_item"><a href="tel(044) 287-87-11?call">(044) 287-87-11</a></div>
                        <div class="phones_item"><a href="tel(097) 287-87-11?call">(097) 287-87-11</a></div>
                        <div class="phones_item"><a href="tel(050) 287-87-11?call">(050) 287-87-11</a></div>
                    </div>
                    <div class="contacts_mail">
                        <p>Отдел по работе с клиентами</p><a href="mailto:info@beatus.ua">info@beatus.ua</a>
                    </div>
                </div>
                <div class="contacts_map">
                    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
                    <div id="js-map" data-map-x="50.3793932" data-map-y="30.4448846" data-map-z="17"
                         data-map-icon="pic/marker.png" class="css-map"></div>
                </div>
            </div>
            <div class="soc_block"><a href="#" target="_blank" class="soc_link">
                    <svg>
                        <use xlink:href="#icon_face"/>
                    </svg>
                </a><a href="#" target="_blank" class="soc_link">
                    <svg>
                        <use xlink:href="#icon_you"/>
                    </svg>
                </a><a href="#" target="_blank" class="soc_link">
                    <svg>
                        <use xlink:href="#icon_twit"/>
                    </svg>
                </a><a href="#" target="_blank" class="soc_link">
                    <svg>
                        <use xlink:href="#icon_google"/>
                    </svg>
                </a></div>
        </div>
    </div>
    <!-- .wContainer -->
</div>
