
<div class="swiper-container ">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-content-wrap">
                <img src="/vendor/site/images/about-bg.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-10 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h5> Olá, {{ Auth::user()->name }}</h5>
                                    
                                </header><!-- .entry-header -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->
    </div><!-- .hero-slider -->

    </br>

<div class="container">
        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item"><a class="nav-link {{ $tab == 'dashboard' ? 'active' : ''}}" href="{{ route('dashboard.index') }}">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link {{ $tab == 'perfil' ? 'active' : ''}}"  href="{{route('perfil.create')}}">Perfil</a></li>
            <li class="nav-item"><a class="nav-link {{ $tab == 'investimentos' ? 'active' : ''}}" href="{{ route('investimentos.index') }}"  >Investimentos</a></li>

            <li class="nav-item"><a class="nav-link {{ $tab == 'investir' ? 'active' : ''}}" href="{{ route('listar.oscs') }}"  >Quero Investir</a></li>

            @can('osc')
            <li class="nav-item"><a class="nav-link {{ $tab == 'osc' ? 'active' : ''}}"  href="{{route('osc.create')}}">Dados da OSC</a></li>
                <!-- <li class="nav-item"><a class="nav-link {{ $tab == 'projetos' ? 'active' : ''}}"  href="{{route('projetos.create')}}">Incluir Projeto</a></li> -->
                <li class="nav-item"><a class="nav-link {{ $tab == 'lista-projetos' ? 'active' : ''}}"  href="{{route('projetos.index')}}"> Projetos</a></li>
                
            @endcan
        </ul>
    </div>

   