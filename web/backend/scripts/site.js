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
});