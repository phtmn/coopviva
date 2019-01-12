
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
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link {{ $tab == 'dashboard' ? 'active' : ''}}" href="{{ route('dashboard.index') }}">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link {{ $tab == 'perfil' ? 'active' : ''}}"  href="{{route('perfil.create')}}">Perfil</a></li>
            <li class="nav-item"><a class="nav-link {{ $tab == 'investimentos' ? 'active' : ''}}"  href="#investimentos">Investimentos</a></li>
            <!-- <li class="nav-item"><a class="nav-link {{ $tab == 'projetos' ? 'active' : ''}}" href="{{ route('projetos.index') }}">Projetos</a></li> -->
            @can('osc')
            <li class="nav-item dropdown {{ $tab == 'projetos' ? 'active' : ''}}">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Projetos</a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('projetos.create') }}">Cadastrar Projeto</a>
                <a class="dropdown-item" href="{{ route('projetos.index') }}">Meus Projetos</a>
                <!-- <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a> -->
                </div>
            </li>
            <li class="nav-item dropdown {{ $tab == 'osc' ? 'active' : ''}}">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">OSC's</a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('osc.create') }}">Cadastrar OSC</a>
                <a class="dropdown-item" href="{{ route('osc.index') }}">Minhas OSC</a>
                <!-- <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a> -->
                </div>
            </li>
            @endcan
        </ul>
    </div>

   