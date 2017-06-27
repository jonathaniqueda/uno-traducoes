<!DOCTYPE html>
<html>

<head>
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UNO Traduções - Sua tradução começa aqui</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="UNO Traduções é uma empresa certificado focada no exercício e confiabilidade dos diversos serviços de tradições. Dentre eles destacamos a tradução juramentada."/>
    <meta name="author" content="Jonathan Iqueda"/>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Include styles -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/superfish.css')}}">
    <link rel="stylesheet"
          href="{{ getenv('APP_ENV') === 'local' ? asset('tmp/css/style.css') : elixir('dist/css/style.min.css') }}">
    <!-- Finish styles -->

    <script src="{{ asset('extra/modernizr-2.6.2.min.js') }}"></script>

</head>

<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">

        @include('layout.header')

        @yield('content')

        @include('layout.footer')

    </div>
</div>

<!-- Include scripts -->
<script src="{{ getenv('APP_ENV') === 'local' ? asset('tmp/js/main.js') : elixir('dist/js/main.min.js') }}"></script>
<!-- Finish scripts -->

</body>

</html>
