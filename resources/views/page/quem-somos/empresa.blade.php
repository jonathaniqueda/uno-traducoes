@extends('layout.template')
@section('content')

    <div class="fh5co-hero fh5co-hero-2">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5"
             style="background-image: url({{asset('images/rio-home-empresa.jpg')}});">
            <div class="desc animate-box">
                @lang('general.empresa_sec1')
            </div>
        </div>
    </div>
    <!-- end:header-top -->
    <div id="fh5co-about">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 animate-box">
                    @lang('general.empresa_sec2')
                    <p style="margin-top: 50px">
                        @lang('general.empresa_sec3')
                    </p>

                    <p>
                        @lang('general.empresa_sec4')
                    </p>

                    <p style="text-align: center">
                        @lang('general.empresa_sec5')
                    </p>

                    <p>
                        @lang('general.empresa_sec6')
                    </p>

                    <p>
                        @lang('general.empresa_sec7')
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
