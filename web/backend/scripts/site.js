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

    $('.statusBox').on('click', function (event) {
        event.preventDefault();

        var id = $(this).data('id');
        var status = $(this).data('status');
        var check = $(this);

        $.ajax({
            url: '/admin/news/status',
            type: 'POST',
            dataType: 'JSON',
            data: {
                id: id,
                status: status
            },
            success: function (data) {
                if (status == 0) {
                    $('#radio54').prop('checked', true);
                } else {
                    $('#radio53').prop('checked', true);
                }
                generate('Статус был изменен!', 'success', 7000);
            }
        });
    });


});