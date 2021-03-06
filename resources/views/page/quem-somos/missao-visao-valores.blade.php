@extends('layout.template')
@section('content')

    <div class="fh5co-hero fh5co-hero-2">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5"
             style="background-image: url({{asset('images/missao-valores.jpg')}});">
            <div class="desc animate-box">
                @lang('general.missao_sec1')
                <span><i>@lang('general.missao_sec2')</i></span>
            </div>
        </div>
    </div>

    @include('page.quem-somos.partials.missao')
{{--    @include('page.quem-somos.partials.visao')--}}
    @include('page.quem-somos.partials.valores')

@endsection
