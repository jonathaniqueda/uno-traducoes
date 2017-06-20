@extends('layout.template')
@section('content')

    <div class="fh5co-hero fh5co-hero-2">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5"
             style="background-image: url({{asset('images/bandeira-americana.jpg')}});">
            <div class="desc animate-box">
                <h2>Serviços</h2>
                <span><i>"Somos especialistas em traduções"</i></span>
            </div>
        </div>
    </div>

    <!-- end:header-top -->
    <div id="fh5co-about">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Nossos Serviços</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 animate-box">
                    <h3>Sua solução está aqui...</h3>
                    <p>
                        Somos especialistas em traduções nas áreas de Petróleo e Gás, Construção Naval, Jurídica,
                        Marketing, Financeira, Ambiental, dentre outras:
                    </p>

                    <p>Destacamos nosso expertise na tradução de Manuais, Relatórios e Catálogos Técnicos, Contratos,
                        Sentenças, Balanços Patrimoniais, EIA-RIMAS, etc...
                    </p>
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
