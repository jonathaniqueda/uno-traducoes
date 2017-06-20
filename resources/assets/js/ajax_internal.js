$(function () {

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
                    form.parent().append('<div class="alert alert-success" style="margin-top: 20px;" id="alert">Menssagem enviada com sucesso!</div>');
                } else if (resposta.status === 'warning') {
                    form.parent().append('<div class="alert alert-danger" style="margin-top: 20px;" id="alert">Não conseguimos enviar a menssagem.</div>');
                } else if (resposta.status === 'error') {
                    form.parent().append('<div class="alert alert-danger" style="margin-top: 20px;" id="alert">Não conseguimos enviar a menssagem.</div>');
                }
            },
            fails: function () {

            },
            beforeSend: function () {
                $('#btn-contact-us').html('Processando...');
                $('#alert').remove();
            },
            complete: function () {
                $('#btn-contact-us').html('Enviar');
            }
        });
    });

});