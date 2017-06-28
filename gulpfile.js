var elixir = require('laravel-elixir');
require('laravel-elixir-imagemin-wrapper');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Gulp tasks usando o Elixir do laravel.
 | Basicamente o Elixir reconhece os paths e algumas configuracões
 | default do laravel e facilita as tasks.
 |
 */

var inProduction = elixir.config.production;
const APP_URL = 'dev.unotraducoes.com.br';

var pathJs = 'public/dist/js/main.min.js';
var pathCss = 'public/dist/css/style.min.css';

if (!inProduction) {
    var pathJs = 'public/tmp/js/main.js';
    var pathCss = 'public/tmp/css/style.css';
}

elixir.config.imagePath = 'images';

//Change app.less to name of less file.
elixir(function (mix) {
    //Configuração para o SASS e CSS normal
    mix.sass(['resources/assets/sass/*.scss'], pathCss);

    //Configuração para os JS
    mix.scripts([
        'resources/assets/js/jquery.min.js',
        'resources/assets/js/jquery.easing.1.3.js',
        'resources/assets/js/bootstrap.min.js',
        'resources/assets/js/jquery.waypoints.min.js',
        'resources/assets/js/jquery.stellar.min.js',
        'resources/assets/js/jquery.mask.min.js',
        'resources/assets/js/hoverIntent.js',
        'resources/assets/js/superfish.js',
        'resources/assets/js/main.js',
        'resources/assets/js/respond.min.js',
        'resources/assets/js/jquery.i18n.js',
        'resources/assets/js/jquery.i18n.emitter.js',
        'resources/assets/js/jquery.i18n.emitter.bidi.js',
        'resources/assets/js/jquery.i18n.fallbacks.js',
        'resources/assets/js/jquery.i18n.language.js',
        'resources/assets/js/jquery.i18n.messagestore.js',
        'resources/assets/js/jquery.i18n.parser.js',
        'resources/assets/js/ajax_internal.js',
        'resources/assets/js/ajax_external.js',
        'resources/assets/js/functions.js'
    ], pathJs);

    //Configuração para o babel
    // mix.babel(["functions_babel.js"]);

    //Versionamento do JS e CSS para o browser na cachear em produção
    if (inProduction) {
        mix.version([pathCss, pathJs]);
    }
});
