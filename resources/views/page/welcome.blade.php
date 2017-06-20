@extends('layout.template')
@section('content')

    <!-- slider -->
    <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5"
             style="background-image: url({{asset('images/home-image.jpg')}});">
            <div class="desc animate-box">
                <h2>Uno Traduções</h2>
                <span>Mais de <strong>10 anos de experiência</strong> em traduções</span>
                <span><a class="btn btn-primary" href="{{route('empresa')}}">Conheça a Empresa</a></span>
            </div>
        </div>

    </div>

    <!-- fh5co-work-section -->
    <div id="fh5co-services-section" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>O que nós fazemos</h3>
                    <p>A Uno Traduções é uma empresa focada e especializada em atender serviços de assesoria linguística
                        (traduções). Conheça um pouco mais.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-search"></i></span>
                        <h3>Diagramação ou desktop publishing</h3>
                        <p>Edição e tratamento de textos estáticos ou figuras.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-book"></i></span>
                        <h3>Tradução Técnica</h3>
                        <p>Traduções de textos literários, científicos, manuais técnicos e etc.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-book-open"></i></span>
                        <h3>Tradução Juramentada</h3>
                        <p>Traduções inscritas na Junta Comercial do Estado</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-play2"></i></span>
                        <h3>Interpretação Simultânea</h3>
                        <p>Feita por intérpretes profissionais fluentes.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-users"></i></span>
                        <h3>Interpretação Consecutiva</h3>
                        <p>Traduções utilizadas em eventos e reuniões, feita lado-a-lado com você.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-video"></i></span>
                        <h3>Transcrição de áudio e vídeo</h3>
                        <p>Traduções integrais de conteúdos auditivos e audio visuais.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fh5co-extra-section -->
    <div id="fh5co-content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box contact-area">
                    <h3>Diferenciais UNO Traduções</h3>
                    <p style="margin-top: 50px">
                        Possuímos uma parceria com o 24º Ofício de Notas para serviços Cartoriais, inclusive
                        apostilamentos de documentos para serem utilizados em países que fazem parte da Convenção de
                        Haya.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <img src="{{asset('images/apostilamento.png')}}" class="img-responsive">
                    <p>
                        <a href="javascript:void(0);" id="contact-link-home">Solicite um orçamento</a> caso tenha
                        necessidade de autenticar suas traduções nos Consulados
                        Americano ou Britânico e/ou no Ministério de Relações Exteriores.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- fh5co-extra-section -->
    <span id="contact-form"></span>
    <!-- fh5co-contact-section -->
    <div id="fh5co-content-section" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box contact-area">
                    <h3>Entre em contato</h3>
                    <p>Ligue pra gente pelos telefones:
                        <span class="tel-home-contact">Fixos: <a href="tel:21-3231-8434">(21) 3231-8434</a>   |   <a
                                    href="tel:21-2413-7968">(21) 2413-7968</a></span>
                        <span class="tel-home-contact">Móveis: <a href="tel:21-98304-7716">(21) 98304-7716</a>   |   <a
                                    href="tel:21-97319-8409">(21) 97319-8409</a></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form id="contact-form-home" action="{{route('index')}}">
                        <div class="form-group">
                            <label for="servico-desejado">Selecione um serviço desejado:</label>
                            <select class="form-control" name="servico_desejado" id="servico-desejado" required>
                                <option value="Diagramação ou desktop publishing">
                                    Diagramação ou desktop publishing
                                </option>
                                <option value="Tradução Técnica">Tradução Técnica</option>
                                <option value="Tradução Juramentada">Tradução Juramentada</option>
                                <option value="Interpretação Simultânea">Interpretação Simultânea</option>
                                <option value="Interpretação Consecutiva">Interpretação Consecutiva</option>
                                <option value="Transcrição de áudio e vídeo">Transcrição de áudio e vídeo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nome">Seu Nome*</label>
                            <input id="nome" name="nome" type="text" class="form-control"
                                   placeholder="Fulano de Tal" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Seu Email*</label>
                            <input id="email" name="email" type="email" class="form-control"
                                   placeholder="meunome@gmail.com" required>
                        </div>
                        <div class="form-group">
                            <label for="fixo">Seu telefone*:</label>
                            <input id="fixo" name="fixo" type="tel" class="form-control" placeholder="(21) 5555-5555"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="celular">Seu celular:</label>
                            <input id="celular" name="celular" type="tel" class="form-control"
                                   placeholder="(21) 99999-9999" required>
                        </div>
                        <div class="form-group">
                            <label for="obs">Observações:</label>
                            <textarea id="obs" name="observacao" class="form-control" rows="5"
                                      placeholder="Sua Menssagem..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" id="btn-contact-us">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- fh5co-contact-section -->

@endsection
