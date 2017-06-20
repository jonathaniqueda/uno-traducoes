@extends('layout.template')
@section('content')

    <div class="fh5co-hero fh5co-hero-2">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5"
             style="background-image: url({{asset('images/trabalhe-com-a-uno-traducoes.jpg')}});">
            <div class="desc animate-box">
                <h2>Trabalhe Conosco</h2>
                <span>Faça parte do time <strong>UNO Traduções</strong></span>
            </div>
        </div>
    </div>

    <!-- end:header-top -->
    <div id="fh5co-about">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Junte-se a nós</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 animate-box">
                    <img src="{{asset('images/equipe.jpeg')}}" class="img-responsive" style="margin: 0 auto;">

                    <h3 style="margin-top: 50px;">Envie seu Curriculum para rh@unotraducoes.com.br</h3>

                    <p>
                        Buscamos profissionais para tradução ou revisão de textos e Profissionais de DTP.
                    </p>

                    <p>
                        Se você é especializado na linguagem técnica e tem conhecimento das principais ferramentas de
                        memória de tradução do mercado venha trabalhar conosco.
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
