/*init.js*/
/*
 init.js v2.0
 Wezom wTPL v4.0.0
 */
window.wHTML = (function ($) {

    /* Приватные переменные */

    var varSeoIframe = 'seoIframe',
        varSeoTxt = 'seoTxt',
        varSeoClone = 'cloneSeo',
        varSeoDelay = 200;

    /* Приватные функции */

    /* проверка типа данных на объект */
    var _isObject = function (data) {
            var flag = (typeof data == 'object') && (data + '' != 'null');
            return flag;
        },
        /* создание нового элемента элемента */
        _crtEl = function (tag, classes, attrs, jq) {
            var tagName = tag || 'div';
            var element = document.createElement(tagName);
            var jQueryElement = jq || true;
            // если классы объявлены - добавляем
            if (classes) {
                var tagClasses = classes.split(' ');
                for (var i = 0; i < tagClasses.length; i++) {
                    element.classList.add(tagClasses[i]);
                }
            }
            // если атрибуты объявлены - добавляем
            if (_isObject(attrs)) {
                for (var key in attrs) {
                    var val = attrs[key];
                    element[key] = val;
                }
            }
            // возвращаем созданый елемент
            if (jQueryElement) {
                return $(element);
            } else {
                return element;
            }
        },
        /* создаем iframe для сео текста */
        _seoBuild = function (wrapper) {
            var seoTimer;
            // создаем iframe, который будет следить за resize'm окна
            var iframe = _crtEl('iframe', false, {id: varSeoIframe, name: varSeoIframe});
            iframe.css({
                'position': 'absolute',
                'left': '0',
                'top': '0',
                'width': '100%',
                'height': '100%',
                'z-index': '-1'
            });
            // добавляем его в родитель сео текста
            wrapper.prepend(iframe);
            // "прослушка" ресайза
            seoIframe.onresize = function () {
                clearTimeout(seoTimer);
                seoTimer = setTimeout(function () {
                    wHTML.seoSet();
                }, varSeoDelay);
            };
            // вызываем seoSet()
            wHTML.seoSet();
        };

    /* Публичные методы */

    function Methods() {
    }

    Methods.prototype = {
        /* установка cео текста на странице */
        seoSet: function () {
            if ($('#' + varSeoTxt).length) {
                var seoText = $('#' + varSeoTxt);
                var iframe = seoText.children('#' + varSeoIframe);
                if (iframe.length) {
                    // если iframe сущствует устанавливаем на место сео текст
                    var seoClone = $('#' + varSeoClone);
                    if (seoClone.length) {
                        // клонеру задаем высоту
                        seoClone.height(seoText.outerHeight(true));
                        // тексту задаем позицию
                        seoText.css({
                            top: seoClone.offset().top
                        });
                    } else {
                        // клонера нету - бьем в колокола !!!
                        console.error('"' + varSeoClone + '" - не найден!');
                    }
                } else {
                    // если iframe отсутствует, создаем его и устанавливаем на место сео текст
                    _seoBuild(seoText);
                }
            }
        },
        /* magnificPopup inline */
        mfi: function () {
            $('.mfi').magnificPopup({
                type: 'inline',
                closeBtnInside: true,
                removalDelay: 300,
                mainClass: 'zoom-in'
            });
        },
        /* magnificPopup ajax */
        mfiAjax: function () {
            $('body').magnificPopup({
                delegate: '.mfiA',
                callbacks: {
                    elementParse: function (item) {
                        this.st.ajax.settings = {
                            url: item.el.data('url'),
                            type: 'POST',
                            data: (typeof item.el.data('param') !== 'undefined') ? item.el.data('param') : ''
                        };
                    },
                    ajaxContentAdded: function (el) {
                        wHTML.validation();
                    }
                },
                type: 'ajax',
                removalDelay: 300,
                mainClass: 'zoom-in'
            });
        },
        /* оборачивание iframe и video для адаптации */
        wTxtIFRAME: function () {
            var list = $('.wTxt').find('iframe').add($('.wTxt').find('video'));
            if (list.length) {
                // в цикле для каждого
                for (var i = 0; i < list.length; i++) {
                    var element = list[i];
                    var jqElement = $(element);
                    // если имеет класс ignoreHolder, пропускаем
                    if (jqElement.hasClass('ignoreHolder')) {
                        continue;
                    }
                    if (typeof jqElement.data('wraped') === 'undefined') {
                        // определяем соотношение сторон
                        var ratio = parseFloat((+element.offsetHeight / +element.offsetWidth * 100).toFixed(2));
                        if (isNaN(ratio)) {
                            // страховка 16:9
                            ratio = 56.25;
                        }
                        // назнчаем дату и обрачиваем блоком
                        jqElement.data('wraped', true).wrap('<div class="iframeHolder ratio_' + ratio.toFixed(0) + '" style="padding-top:' + ratio + '%;""></div>');
                    }
                }
                // фиксим сео текст
                this.seoSet();
            }
        }
    };

    /* Объявление wHTML и базовые свойства */

    var wHTML = $.extend(true, Methods.prototype, {});

    return wHTML;

})(jQuery);


jQuery(document).ready(function ($) {

    // поддержка cssanimations
    transitFlag = Modernizr.cssanimations;

    // очитска localStorage
    localStorage.clear();

    // сео текст
    wHTML.seoSet();

    // magnificPopup inline
    wHTML.mfi();

    // magnificPopup ajax
    wHTML.mfiAjax();

    // валидация форм
    wHTML.validation();

    /**
     * Инициализация слайдера
     * @name fred
     * @param {string} parent Блок оборачивающий слайдер
     * @param {Number} width Ширина
     * @param {string} responsive Адаптивность
     * @param {string} auto Авто переключение слайдов
     * @param {Object} pagination Блок дотов для пагинации
     * @param {string} fx Эфект переключения
     */
    function fred(parent, width, responsive, auto, pagination, fx) {
        parent.find('ul').carouFredSel({
            width: width,
            responsive: responsive,
            auto: {
                play: auto,
                timeoutDuration: 3000
            },
            pagination: pagination,
            swipe: {
                onTouch: true
            },
            scroll: {
                items: 1,
                fx: fx,
                duration: 1200,
                pauseOnHover: true,
                onBefore: function (data) {
                    var items = data.items.visible.first();
                    var item = items.find('.btn_go_next').data('slide');
                    $('.js-slider_bg').trigger("slideTo", 'img[data-slide="' + item + '"]');
                }
            },
            prev: parent.closest('.slider').find('.js-prev'),
            next: parent.closest('.slider').find('.js-next')
        }, {
            transition: transitFlag
        });
    }

    /**
     * Замена фото для блока "Наши компетенции"
     * @name services
     * @param {Object} img Путь к картинке
     */
    function services() {
        var img = $('.services_item.cur').data('img');
        var service = $('.services_item.cur').data('service');
        $('.services_lister_right img').attr('src', img);
        $('.services_text').removeClass('cur');
        $('.services_text[data-service="' + service + '"]').addClass('cur');
    }

    /**
     * Функция для скролла по блокам
     * @name anchor
     * @param {Object} anchor Название класса
     * @param {Object} ofset Обьект с координатами
     * @param {Number} top Позиция по "y" относительно начала страницы
     * @param {Number} height Высота Хедера
     */
    function anchor(item) {
        var anchor = item.data('anchor');
        var ofset = $('.' + anchor).offset();
        var top = ofset.top;
        var height = $('.wHeader').height();
        $('body, html').stop().animate({
            scrollTop: top - height
        }, 500);
        if ($('.wHeaderCenter.show').length) {
            $('.wHeaderCenter').removeClass('show');
        }
    }

    var form_popup = $('.hide_work').clone();
    $('.works').magnificPopup({
        type: 'inline',
        delegate: '.mfiW',
        inline: {
            markup: '<div class="white-popup"><div class="mfp-close"></div>' +
            '<div class="popup_name_block">' +
            '<div class="popup_name"></div>' +
            '<div class="news_soc"><span class="share_span"></span><a href="" target="_blank" class="pop_face">' +
            '<svg>' +
            '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon_face"></use>' +
            '</svg></a><a href="" target="_blank" class="pop_twit">' +
            '<svg>' +
            '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon_twit"></use>' +
            '</svg></a><a href="" target="_blank" class="pop_google">' +
            '<svg>' +
            '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon_google"></use>' +
            '</svg></a></div>' +
            '</div>' +
            '<div class="popup_text_block wTxt"></div>' +
            '<div class="popup_img_block"></div>' + form_popup.html() +
            '<div class="popup_controls_block">' +
            '<div class="go_left w_fll">' +
            '<div class="pagg_svg">' +
            '<svg>' +
            '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon_prev"></use>' +
            '</svg>' +
            '</div><span></span>' +
            '</div>' +
            '<div class="go_right w_flr"><span></span>' +
            '<div class="pagg_svg">' +
            '<svg>' +
            '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon_next"></use>' +
            '</svg>' +
            '</div>' +
            '</div>' +
            '<div class="w_clear"></div>' +
            '</div>' +
            '</div>'
        },
        gallery: {
            enabled: true
        },
        fixedContentPos: true,
        callbacks: {
            markupParse: function (template, values, item) {
                var item_img = item.el.data('markup').img;
                var img = '';
                if (item_img) {
                    for (var i = 0; i < item_img.length; i++) {
                        img += '<img src="' + item_img[i] + '" alt="" />';
                    }
                }
                $(template).find('.popup_img_block').html(img);
                $(template).find('.popup_name').text(item.el.data('markup').name);
                $(template).find('.news_soc .share_span').text(item.el.data('markup').share);
                $(template).find('.popup_text_block').html(item.el.data('markup').text);
                $(template).find('input[name="project"]').val(item.el.data('markup').id);
                $(template).find('.go_left span').text(item.el.data('markup').prev);
                $(template).find('.go_right span').text(item.el.data('markup').next);
            },
            open: function () {
                wHTML.validation();
                if ($('.phoneMask').length) {
                    $('.phoneMask').inputmask({alias: 'phone'});
                }
            }
        },
        closeBtnInside: true,
        removalDelay: 300,
        mainClass: 'zoom-in'
    });

    var magnificPopup = $.magnificPopup.instance;
    $('body').on('click', '.go_left', function () {
        magnificPopup.prev();
    });
    $('body').on('click', '.go_right', function () {
        magnificPopup.next();
    });

    $('.news').magnificPopup({
        type: 'inline',
        delegate: '.mfiN',
        inline: {
            markup: '<div class="white-popup new_pop"><div class="mfp-close"></div>' +
            '<div class="popup_name_block">' +
            '<div class="popup_name"></div>' +
            '<div class="news_soc">' +
            '<div class="category_date">' +
            '<div class="category"></div><span>/</span>' +
            '<div class="date"></div>' +
            '</div><span class="share_span"></span><a href="#" target="_blank" class="pop_face">' +
            '<svg>' +
            '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon_face"></use>' +
            '</svg></a><a href="#" target="_blank" class="pop_twit">' +
            '<svg>' +
            '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon_twit"></use>' +
            '</svg></a><a href="#" target="_blank" class="pop_google">' +
            '<svg>' +
            '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon_google"></use>' +
            '</svg></a>' +
            '</div>' +
            '</div>' +
            '<div class="popup_img_block"></div>' +
            '<div class="popup_text_block wTxt"></div>' +
            '<div class="popup_controls_block">' +
            '<div class="go_left w_fll">' +
            '<div class="pagg_svg">' +
            '<svg>' +
            '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon_prev"></use>' +
            '</svg>' +
            '</div><span></span>' +
            '</div>' +
            '<div class="go_right w_flr"><span></span>' +
            '<div class="pagg_svg">' +
            '<svg>' +
            '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon_next"></use>' +
            '</svg>' +
            '</div>' +
            '</div>' +
            '<div class="w_clear"></div>' +
            '</div>' +
            '</div>'
        },
        gallery: {
            enabled: true
        },
        fixedContentPos: true,
        callbacks: {
            markupParse: function (template, values, item) {
                console.log(item.el.data('markup'));
                var item_img = item.el.data('markup').img;
                var img = '';
                if (item_img) {
                    for (var i = 0; i < item_img.length; i++) {
                        img += '<img src="' + item_img[i] + '" alt="" />';
                    }
                }
                $(template).find('.popup_img_block').html(img);
                $(template).find('.popup_name').text(item.el.data('markup').name);
                $(template).find('.news_soc .share_span').text(item.el.data('markup').share);
                $(template).find('.popup_text_block').html(item.el.data('markup').text);
                $(template).find('input[type="hidden"]').val(item.el.data('markup').id);
                $(template).find('.go_left span').text(item.el.data('markup').prev);
                $(template).find('.go_right span').text(item.el.data('markup').next);
                $(template).find('.category').text(item.el.data('markup').category);
                $(template).find('.date').text(item.el.data('markup').date);
            }
        },
        closeBtnInside: true,
        removalDelay: 300,
        mainClass: 'zoom-in'
    });

    if ($('.services_lister').length) {
        services();
        $('.services_item').on('click', function () {
            $('.services_item').removeClass('cur');
            $(this).addClass('cur');
            services();
        });
    }

    if ($('.js-anchor').length) {
        $('.js-anchor').on('click', function () {
            anchor($(this));
        });
    }

    if ($('.language').length) {
        $('.language').on('click', function () {
            $(this).toggleClass('show');
        });
        $('body').on('click', function (e) {
            if (!$(e.target).closest('.language').length && $('.language').hasClass('show')) {
                $('.language').removeClass('show');
            }
        });
        $('.language_drop').on('click', 'span', function () {
            var lang = $(this).data('lang');
            $('.language_drop span').removeClass('cur');
            $(this).addClass('cur');
            $('.language_select--cur span').text(lang);
        });
    }

    if ($('.menu_btn').length) {
        $('.menu_btn').on('click', function (e) {
            $('.wHeaderCenter').toggleClass('show');
        });
        $('body').on('click', function (e) {
            if (!$(e.target).closest('.wHeaderCenter').length && !$(e.target).closest('.menu_btn').length && $('.wHeaderCenter').hasClass('show')) {
                $('.wHeaderCenter').removeClass('show');
            }
        });
    }

    $('body').on('keyup touch', '.wForm input', function () {
        var width = $(this).width();
        var text = $(this).val().length;
        if ($(window).width() > 1024) {
            if (text * 25 >= width) {
                $(this).css('font-size', '30px');
            } else {
                $(this).css('font-size', '40px');
            }
        }
        if ($(window).width() > 720 && $(window).width() < 1024) {
            if (text * 25 >= width) {
                $(this).css('font-size', '20px');
            } else {
                $(this).css('font-size', '30px');
            }
        }
        if ($(window).width() < 720) {
            if (text * 25 >= width) {
                $(this).css('font-size', '15px');
            } else {
                $(this).css('font-size', '20px');
            }
        }
    });

    $(window).resize(function () {

        if ($('.js-slider').length) {
            $('.js-slider').trigger('destroy', true);
            setTimeout(function () {
                fred($('.js-slider'), 'auto', true, true, $('.js-slider_pagg'), 'scroll');
            }, 300);
        }

        if ($('.js-slider_bg').length) {
            $('.js-slider_bg').trigger('destroy', true);
            setTimeout(function () {
                $('.js-slider_bg').carouFredSel({
                    responsive: true,
                    auto: {
                        play: false,
                        timeoutDuration: 3000
                    },
                    swipe: {
                        onTouch: true
                    },
                    scroll: {
                        items: 1,
                        fx: 'crossfade',
                        duration: 1200,
                        pauseOnHover: true
                    }
                }, {
                    transition: transitFlag
                });
            }, 300);
        }

        if ($('.beuseful_slider ul').length) {
            $('.beuseful_slider ul').carouFredSel({
                responsive: true,
                auto: {
                    play: true,
                    timeoutDuration: 3000
                },
                swipe: {
                    onTouch: true
                },
                scroll: {
                    items: 1,
                    fx: 'crossfade',
                    duration: 1200,
                    pauseOnHover: true
                },
                pagination: $('.js-beuseful_pagg'),
                prev: $('.beuseful_slider').find('.js-prev'),
                next: $('.beuseful_slider').find('.js-next')
            }, {
                transition: transitFlag
            });
        }

    });

    if ($('.bg_map').length) {
        $('.bg_map').on('click', function () {
            $(this).remove();
        });
    }

    $(window).load(function () {
        // оборачивание iframe и video для адаптации
        wHTML.wTxtIFRAME();

        if ($('.js-slider').length) {
            fred($('.js-slider'), 'auto', true, true, $('.js-slider_pagg'), 'scroll');
        }

        if ($('.js-slider_bg').length) {
            $('.js-slider_bg').carouFredSel({
                responsive: true,
                auto: {
                    play: false,
                    timeoutDuration: 3000
                },
                swipe: {
                    onTouch: true
                },
                scroll: {
                    items: 1,
                    fx: 'crossfade',
                    duration: 1200,
                    pauseOnHover: true
                }
            }, {
                transition: transitFlag
            });
        }

        if ($('.beuseful_slider ul').length) {
            $('.beuseful_slider ul').carouFredSel({
                responsive: true,
                auto: {
                    play: true,
                    timeoutDuration: 3000
                },
                swipe: {
                    onTouch: true
                },
                scroll: {
                    items: 1,
                    fx: 'crossfade',
                    duration: 1200,
                    pauseOnHover: true
                },
                pagination: $('.js-beuseful_pagg'),
                prev: $('.beuseful_slider').find('.js-prev'),
                next: $('.beuseful_slider').find('.js-next')
            }, {
                transition: transitFlag
            });
        }


        // Стилизация карты
        if ($("#js-map").length) {
            var mapdata = [
                parseFloat($("#js-map").attr('data-map-x'), 10),
                parseFloat($("#js-map").attr('data-map-y'), 10),
                parseInt($("#js-map").attr('data-map-z'), 10),
                $('#js-map').attr('data-map-icon')
            ];

            function loadGoogleMap() {
                var myLatlng = new google.maps.LatLng(mapdata[0], mapdata[1]);
                var myOptions = {
                    zoom: mapdata[2],
                    scrollwheel: false,
                    center: myLatlng,
                    zoomControl: false,
                    streetViewControl: false,
                    rotateControl: false,
                    scrollwheel: true,
                    panControl: false,
                    mapTypeControl: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("js-map"), myOptions);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    icon: mapdata[3]
                });
            }

            loadGoogleMap();
        }

        if ($('.phoneMask').length) {
            $('.phoneMask').inputmask({alias: 'phone'});
        }

    });

});
//# sourceMappingURL=maps/inits.js.map