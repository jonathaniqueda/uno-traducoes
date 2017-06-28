@extends('layout.template')
@section('content')

    <!-- slider -->
    <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5"
             style="background-image: url({{asset('images/home-image.jpg')}});">
            <div class="desc animate-box">
                <h2>@lang('general.name')</h2>
                @lang('general.intro_part1')
                <span><a class="btn btn-primary" href="{{route('empresa')}}">@lang('general.intro_part2')</a></span>
            </div>
        </div>

    </div>

    <!-- fh5co-work-section -->
    <div id="fh5co-services-section" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    @lang('general.work_sec1')
                    @lang('general.work_sec2')
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-search"></i></span>
                        @lang('general.work_sec3')
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-book"></i></span>
                        @lang('general.work_sec4')
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-book-open"></i></span>
                        @lang('general.work_sec5')
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-play2"></i></span>
                        @lang('general.work_sec6')
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-users"></i></span>
                        @lang('general.work_sec7')
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="services animate-box">
                        <span><i class="icon-video"></i></span>
                        @lang('general.work_sec8')
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
                    @lang('general.extra_sec1')
                    <p style="margin-top: 50px">
                        @lang('general.extra_sec2')
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <img src="{{asset('images/apostilamento.png')}}" class="img-responsive">
                    <p>
                        <a href="javascript:void(0);" id="contact-link-home">@lang('general.extra_sec3')</a>
                        @lang('general.extra_sec4')
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
                    @lang('general.extra_sec5')
                    <p>@lang('general.extra_sec6')
                        <span class="tel-home-contact">@lang('general.contact')
                            <a href="tel:21-3231-8434">(21) 3231-8434</a>   |   <a
                                    href="tel:21-2143-7968">(21) 2143-7968</a>
                        </span>
                        <span class="tel-home-contact">@lang('general.contact2') <a href="tel:21-98304-7716">(21) 98304-7716</a>   |   <a
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
                            <label for="servico-desejado">@lang('general.select_serv1')</label>
                            <select class="form-control" name="servico_desejado" id="servico-desejado" required>
                                <option value="Diagramação ou desktop publishing">
                                    @lang('general.select_serv2')
                                </option>
                                <option value="Tradução Técnica">@lang('general.select_serv3')</option>
                                <option value="Tradução Juramentada">@lang('general.select_serv4')</option>
                                <option value="Interpretação Simultânea">@lang('general.select_serv5')</option>
                                <option value="Interpretação Consecutiva">@lang('general.select_serv6')</option>
                                <option value="Transcrição de áudio e vídeo">@lang('general.select_serv7')</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nome">@lang('general.mensagem1')</label>
                            <input id="nome" name="nome" type="text" class="form-control"
                                   placeholder="Fulano de Tal" required>
                        </div>
                        <div class="form-group">
                            <label for="email">@lang('general.mensagem2')</label>
                            <input id="email" name="email" type="email" class="form-control"
                                   placeholder="meunome@gmail.com" required>
                        </div>
                        <div class="form-group">
                            <label for="fixo">@lang('general.mensagem3')</label>
                            <input id="fixo" name="fixo" type="tel" class="form-control" placeholder="(21) 5555-5555"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="celular">@lang('general.mensagem4')</label>
                            <input id="celular" name="celular" type="tel" class="form-control"
                                   placeholder="(21) 99999-9999" required>
                        </div>
                        <div class="form-group">
                            <label for="obs">@lang('general.mensagem5')</label>
                            <textarea id="obs" name="observacao" class="form-control" rows="5"
                                      placeholder="Sua Menssagem..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary"
                                id="btn-contact-us">@lang('general.mensagem6')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- fh5co-contact-section -->

@endsection
