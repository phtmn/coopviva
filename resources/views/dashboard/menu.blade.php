
<div class="swiper-container ">
      <!--  <div class="swiper-wrapper">
            <div class="swiper-slide hero-content-wrap">
                <img src="/vendor/site/images/about-bg.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-10 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h5> Olá, {{ Auth::user()->name }}</h5>
                                    
                                </header>
                            </div>
                        </div>
                    </div>
                </div>>
            </div>
    </div>

    </br> -->

<div class="container  " >
        <ul class="nav nav-tabs justify-content-center  ">
            <li class="nav-item"><a class="nav-link {{ $tab == 'dashboard' ? 'active' : ''}}" href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="nav-item"><a class="nav-link {{ $tab == 'perfil' ? 'active' : ''}}"  href="{{route('perfil.create')}}"><i class="fa fa-user"></i> Perfil do Usuário</a></li>
            <li class="nav-item"><a class="nav-link {{ $tab == 'investimentos' ? 'active' : ''}}" href="{{ route('investimentos.index') }}"  ><i class="fa fa-line-chart"> </i>Investimentos </a></li>

            <li class="nav-item"><a class="nav-link {{ $tab == 'investir' ? 'active' : ''}}" href="{{ route('listar.oscs') }}"  ><i class="fa fa-money"></i> Investir</a></li>

            @can('osc')
                <li class="nav-item"><a class="nav-link {{ $tab == 'osc' ? 'active' : ''}}"  href="{{route('osc.create')}}"><i class="fa fa-institution"> <strong>Perfil da OSC </strong> </i></a></li>
                <li class="nav-item"><a class="nav-link {{ $tab == 'ods' ? 'active' : ''}}"  href="{{route('osc.objetivos')}}"><i class="fa fa-institution"> <strong>Objetivos ODS</strong> </i></a></li>

                <!-- <li class="nav-item"><a class="nav-link {{ $tab == 'projetos' ? 'active' : ''}}"  href="{{route('projetos.create')}}">Incluir Projeto</a></li> -->
                <li class="nav-item"><a class="nav-link {{ $tab == 'lista-projetos' ? 'active' : ''}}"  href="{{route('projetos.index')}}"><i class="fa fa-suitcase"></i> Projeto </a></li>
                
            @endcan
        </ul>
    </div>

   