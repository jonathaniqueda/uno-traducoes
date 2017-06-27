@extends('layout.template')
@section('content')

    <div class="fh5co-hero fh5co-hero-2">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5"
             style="background-image: url({{asset('images/bandeira-americana.jpg')}});">
            <div class="desc animate-box">
                @lang('general.home_sec1')
                <span><i>@lang('general.home_sec2')</i></span>
            </div>
        </div>
    </div>

    <!-- end:header-top -->
    <div id="fh5co-about">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    @lang('general.home_sec3')
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 animate-box">
                    @lang('general.home_sec4')
                    @lang('general.home_sec5')

                    @lang('general.home_sec6')
                </div>
            </div>
        </div>
    </div>

    @include('page.servicos.partials.tecnica')
    @include('page.servicos.partials.juramentada')
    @include('page.servicos.partials.simultanea')
    @include('page.servicos.partials.consecutiva')
    @include('page.servicos.partials.transcritiva')
    @include('page.servicos.partials.diagramacao')

@endsection
