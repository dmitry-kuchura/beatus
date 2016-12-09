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
    $('.submitLogin').on('click', function (event) {
        event.preventDefault();

        var username = $('.username').val();
        var password = $('.password').val();
        var remember = $('.remember').val();

        $.ajax({
            url: '/admin/login',
            type: 'POST',
            dataType: 'JSON',
            data: {
                username: username,
                password: password,
                remember: remember,
            },
            success: function (data) {
                // console.log(data.authorization);
                if (data.authorization == 'true') {
                    location.reload();
                    generate('Вы успешно авторизованы!', 'success', 7000);
                } else {
                    generate('Данные введены не верно!', 'error', 7000);
                }
            }
        });
    });

    $('.portlet').on('click', 'button.setSort', function (event) {
        event.preventDefault();
        var
            $button = $(this),
            $td = $button.closest('td'),
            $tr = $td.parent('tr');

        var id = $tr.data('id');
        var input = $td.find('.sortID');
        var sort = input.val();

        $.ajax({
            url: '/admin/pages/sort',
            type: 'POST',
            dataType: 'JSON',
            data: {
                id: id,
                sort: sort,
            },
            success: function (data) {
                generate('Поле было отсортировано!', 'success', 7000);
            }
        });
    });


});