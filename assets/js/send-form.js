$('.ajax-form').submit(function (e) {
    e.preventDefault();
    let th = $(this);
    let mess = $('.mess');
    let btn = th.find('.button');
    $.ajax({
        url: 'send-form.php',
        type: 'POST',
        data: th.serialize(),
        success: function (data) {
            if (data == 1) {
                mess.html(
                    '<div class="alert alert-success">Email введен некорректно!</div>'
                );
                return false;
            } else {
                mess.html(
                    '<div class="alert alert-success">Сообщение отправлено!</div>'
                );
                setTimeout(function () {
                    th.trigger('reset');
                }, 2000);
            }
        },
        error: function () {
            mess.html(
                '<div class="alert alert-danger">Ошибка отправки сообщения!</div>'
            );
        },
    });
});
