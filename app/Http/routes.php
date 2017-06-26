<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(
    [
        'prefix' => \LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]
    ],
    function()
    {
        Route::get('/', function () {
            return redirect()->route('index');
        })->name('normal');

        Route::match(['get', 'post'], '/bem-vindo/{contact?}', 'IndexController@home')->name('index');
        Route::get('/trabalhe-conosco', 'IndexController@trabalheConosco')->name('trabalhe_conosco');

        Route::group(['prefix' => 'quem-somos'], function () {

            Route::get('/a-empresa', 'IndexController@empresa')->name('empresa');
            Route::get('/missao-visao-valores/{anchor}', 'IndexController@tresPilares')->name('tres_pilares');

        });

        Route::group(['prefix' => 'servicos'], function () {

            Route::get('/{type?}', 'IndexController@servicos')->name('servicos');

        });
});

