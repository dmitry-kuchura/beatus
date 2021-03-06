function generate(message, type, time) {
    noty({
        text: message,
        type: type,
        timeout: time || false,
        animation: {
            open: 'animated flipInX', // Animate.css class names
            close: 'animated flipOutX' // Animate.css class names
        }
    });
}

jQuery(document).ready(function ($) {
    $('.moreNews').on('click', function () {
        var container = $('.news_list');

        var lang = $('.lang').val();
        var page = parseInt($('.pageNews').val());

        $.ajax({
            url: '/ajax/news',
            type: 'POST',
            dataType: 'JSON',
            data: {
                page: page,
                lang: lang
            },
            success: function (data) {
                console.log(container);
                if (data.success == true) {
                    if (data.html.length) {
                        $('.pageNews').val(page + 1);
                        container.append(data.html);
                        if (data.more < 4) {
                            $('.moreNews').hide();
                        }
                    } else {
                        $('.moreNews').hide();
                    }
                }
            }
        });
    });

    $('.moreProjects').on('click', function () {
        var container = $('.works_list');

        var lang = $('.lang').val();
        var page = parseInt($('.pageProjects').val());

        $.ajax({
            url: '/ajax/getMoreProjects',
            type: 'POST',
            dataType: 'JSON',
            data: {
                page: page,
                lang: lang
            },
            success: function (data) {
                if (data.success == true) {
                    if (data.html.length) {
                        $('.pageProjects').val(page + 1);
                        container.append(data.html);
                        if (data.more < 3) {
                            $('.moreProjects').hide();
                        }
                    } else {
                        $('.moreProjects').hide();
                    }
                }
            }
        });
    });
});