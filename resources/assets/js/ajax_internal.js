$(function () {

    $.i18n().load({
        "en": {
            'success': 'Message sent successfully!',
            'error': 'We could not send the message.',
            'process': 'Process...',
            'send': 'Send'
        },
        "pt-BR": {
            'success': 'Mensagem enviada com sucesso!',
            'error': 'Erro ao enviar a mensagem.',
            'process': 'Processando...',
            'send': 'Enviar'
        },
        "es": {
            'success': 'Mensaje enviada correctamente!!',
            'error': 'Error al enviar el mensaje.',
            'process': 'Procesando...',
            'send': 'Enviar'
        }
    });

    //Ajax setup for internal AJAX's
    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name=csrf_token]').attr("content")}
    });

    //Ajax do Solicite um Contato
    $('#btn-contact-us').on('click', function (e) {
        e.preventDefault();
        var form = $('#contact-form-home');
        var inputs = form.serializeArray();

        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: inputs,
            dataType: 'json',
            timeout: 10000,
            success: function (resposta) {
                if (resposta.status === 'success') {
                    form.parent().append('<div class="alert alert-success" style="margin-top: 20px;" id="alert">' + $.i18n('success') + '</div>');
                } else if (resposta.status === 'warning') {
                    form.parent().append('<div class="alert alert-danger" style="margin-top: 20px;" id="alert">' + $.i18n('error') + '</div>');
                } else if (resposta.status === 'error') {
                    form.parent().append('<div class="alert alert-danger" style="margin-top: 20px;" id="alert">' + $.i18n('error') + '</div>');
                }
            },
            fails: function () {

            },
            beforeSend: function () {
                $('#btn-contact-us').html($.i18n('process'));
                $('#alert').remove();
            },
            complete: function () {
                $('#btn-contact-us').html($.i18n('send'));
            }
        });
    });

});