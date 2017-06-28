<div id="fh5co-header">

    <!-- start:header-top -->
    <header id="fh5co-header-section">
        <div class="container">
            <div class="nav-header">
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                {{--<h1 id="fh5co-logo"><a href="/">Uno<span>Traduções</span></a></h1>--}}
                <h1 id="fh5co-logo"><a href="/"><img src="{{asset('images/logo.png')}}" style="width:120px;"></a></h1>
                <!-- START #fh5co-menu-wrap -->
                <nav id="fh5co-menu-wrap" role="navigation">
                    <ul class="sf-menu" id="fh5co-primary-menu">

                        <li>
                            <a href="#" class="fh5co-sub-ddown">
                                <img class="flag"
                                     src="{{asset('images/' . \LaravelLocalization::getCurrentLocale() . '.svg')}}"
                                     style="width: 30px; height: 30px;">
                            </a>
                            <ul class="fh5co-sub-menu">
                                <li>
                                    <a href="/pt-BR">
                                        <img class="flag" src="{{asset('images/pt-BR.svg')}}"
                                             alt="Português do Brasil" style="width: 30px; height: 30px;">
                                        - Português do Brasil
                                    </a>
                                </li>
                                <li>
                                    <a href="/es">
                                        <img class="flag" src="{{asset('images/es.svg')}}"
                                             alt="United States of America" style="width: 30px; height: 30px;">
                                        - Español
                                    </a>
                                </li>
                                <li>
                                    <a href="/en">
                                        <img class="flag" src="{{asset('images/en.svg')}}"
                                             alt="Español" style="width: 30px; height: 30px;">
                                        - English
                                    </a>
                                </li>
                                </li>
                            </ul>
                        </li>

                        <li class="active">
                            <a href="{{route('index')}}">@lang('general.head_sec1')</a>
                        </li>

                        <li>
                            <a href="#" class="fh5co-sub-ddown" id="quem-somos-menu">@lang('general.head_sec2')</a>
                            <ul class="fh5co-sub-menu">
                                <li><a href="{{route('empresa')}}">@lang('general.head_sec3')</a></li>
                                <li><a href="{{route('tres_pilares', ['missao'])}}">@lang('general.head_sec4')</a></li>
                                {{--<li><a href="{{route('tres_pilares', ['visao'])}}">Visão</a></li>--}}
                                <li><a href="{{route('tres_pilares', ['valores'])}}">@lang('general.head_sec5')</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{route('servicos')}}" class="fh5co-sub-ddown">@lang('general.head_sec6')</a>
                            <ul class="fh5co-sub-menu">
                                <li><a href="{{route('servicos', ['tecnica'])}}">@lang('general.sub_menu1')</a></li>
                                <li><a href="{{route('servicos', ['juramentada'])}}">@lang('general.sub_menu2')</a></li>
                                <li><a href="{{route('servicos', ['simultanea'])}}">@lang('general.sub_menu3')</a></li>
                                <li><a href="{{route('servicos', ['consecutiva'])}}">@lang('general.sub_menu4')</a></li>
                                <li><a href="{{route('servicos', ['transcritiva'])}}">@lang('general.sub_menu5')</a>
                                <li><a href="{{route('servicos', ['diagramacao'])}}">@lang('general.sub_menu6')</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{route('trabalhe_conosco')}}">@lang('general.head_sec7')</a>
                        </li>

                        <li>
                            <a href="{{route('index', ['entre-em-contato'])}}"
                               class="contactLink">@lang('general.head_sec8')</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- end:header-top -->

</div>
