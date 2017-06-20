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
                        <li class="active">
                            <a href="{{route('index')}}">Início</a>
                        </li>
                        <li>
                            <a href="#" class="fh5co-sub-ddown" id="quem-somos-menu">Quem somos</a>
                            <ul class="fh5co-sub-menu">
                                <li><a href="{{route('empresa')}}">A empresa</a></li>
                                <li><a href="{{route('tres_pilares', ['missao'])}}">Missão</a></li>
                                {{--<li><a href="{{route('tres_pilares', ['visao'])}}">Visão</a></li>--}}
                                <li><a href="{{route('tres_pilares', ['valores'])}}">Valores</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('servicos')}}" class="fh5co-sub-ddown">Serviços</a>
                            <ul class="fh5co-sub-menu">
                                <li><a href="{{route('servicos', ['tecnica'])}}">Tradução Técnica</a></li>
                                <li><a href="{{route('servicos', ['juramentada'])}}">Tradução Juramentada</a></li>
                                <li><a href="{{route('servicos', ['simultanea'])}}">Interpretação Simultânea</a></li>
                                <li><a href="{{route('servicos', ['consecutiva'])}}">Interpretação Consecutiva</a></li>
                                <li><a href="{{route('servicos', ['transcritiva'])}}">Transcrição de áudio e <br/>vídeo</a>
                                <li><a href="{{route('servicos', ['diagramacao'])}}">Diagramação ou <br/>desktop
                                        publishing</a></li>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{route('trabalhe_conosco')}}">Trabalhe Conosco</a></li>
                        <li><a href="{{route('index', ['entre-em-contato'])}}" class="contactLink">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- end:header-top -->

</div>
