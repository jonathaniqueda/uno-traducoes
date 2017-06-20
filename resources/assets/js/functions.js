$(function () {
    $('#fixo').mask('(00) 0000-0000');
    $('#celular').mask('(00) 00000-0000');

    var pathName = window.location.pathname;
    var lastPath = pathName.substr(pathName.lastIndexOf('/') + 1);

    switch (lastPath) {
        case 'missao':
            var aTag = $('#missao');
            $('html,body').animate({scrollTop: aTag.offset().top}, 'xslow');
            break;
        case 'visao':
            var aTag = $('#visao');
            $('html,body').animate({scrollTop: aTag.offset().top}, 'xslow');
            break;
        case 'valores':
            var aTag = $('#valores');
            $('html,body').animate({scrollTop: aTag.offset().top}, 'xslow');
            break;
        case 'entre-em-contato':
            var aTag = $('#contact-form');
            $('html,body').animate({scrollTop: aTag.offset().top}, 'xslow');
            break;
        case 'consecutiva':
            var aTag = $('#consecutiva');
            $('html,body').animate({scrollTop: aTag.offset().top}, 'xslow');
            break;
        case 'diagramacao':
            var aTag = $('#diagramacao');
            $('html,body').animate({scrollTop: aTag.offset().top}, 'xslow');
            break;
        case 'juramentada':
            var aTag = $('#juramentada');
            $('html,body').animate({scrollTop: aTag.offset().top}, 'xslow');
            break;
        case 'simultanea':
            var aTag = $('#simultanea');
            $('html,body').animate({scrollTop: aTag.offset().top}, 'xslow');
            break;
        case 'tecnica':
            var aTag = $('#tecnica');
            $('html,body').animate({scrollTop: aTag.offset().top}, 'xslow');
            break;
        case 'transcritiva':
            var aTag = $('#transcritiva');
            $('html,body').animate({scrollTop: aTag.offset().top}, 'xslow');
            break;
    }

    $('#contact-link-home').on('click', function (e) {
        e.preventDefault();

        var aTag = $('#contact-form');
        $('html,body').animate({scrollTop: aTag.offset().top}, 'xslow');
    });

})