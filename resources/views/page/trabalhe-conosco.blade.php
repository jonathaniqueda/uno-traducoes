@extends('layout.template')
@section('content')

    <div class="fh5co-hero fh5co-hero-2">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5"
             style="background-image: url({{asset('images/trabalhe-com-a-uno-traducoes.jpg')}});">
            <div class="desc animate-box">
                @lang('general.trab_sec1')
                @lang('general.trab_sec2')
            </div>
        </div>
    </div>

    <!-- end:header-top -->
    <div id="fh5co-about">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    @lang('general.trab_sec3')
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 animate-box">
                    <img src="{{asset('images/equipe.jpeg')}}" class="img-responsive" style="margin: 0 auto;">

                    <h3 style="margin-top: 50px;">@lang('general.trab_sec4')</h3>

                    <p>
                        @lang('general.trab_sec5')
                    </p>

                    <p>
                        @lang('general.trab_sec6')
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
