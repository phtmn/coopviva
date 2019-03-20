<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>.:: COOPVIVA ::. - Painel da OSC</title>
    <!-- Favicon -->
    <link href="{{asset('vendor/site/images/favicon.ico')}}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('vendor/argon-dash/assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/argon-dash/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('vendor/argon-dash/assets/css/argon.css?v=1.0.0') }}" rel="stylesheet">


    @yield('css')
</head>

<body>
<!-- Sidenav -->
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{route('osc.index')}}">
            <img src="{{asset('vendor/site/images/coopvidapreta_logo.png')}}" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img src="{{asset('vendor/site/images/jacareCoopViva.png')}}" class="rounded-circle">
              </span>
                    </div>
                </a>
                {{--<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">--}}
                    {{--<div class=" dropdown-header noti-title">--}}
                        {{--<h6 class="text-overflow m-0">Welcomesss!</h6>--}}
                    {{--</div>--}}
                    {{--<a href="./examples/profile.html" class="dropdown-item">--}}
                        {{--<i class="ni ni-single-02"></i>--}}
                        {{--<span>My profile</span>--}}
                    {{--</a>--}}
                    {{--<a href="./examples/profile.html" class="dropdown-item">--}}
                        {{--<i class="ni ni-settings-gear-65"></i>--}}
                        {{--<span>Settings</span>--}}
                    {{--</a>--}}
                    {{--<a href="./examples/profile.html" class="dropdown-item">--}}
                        {{--<i class="ni ni-calendar-grid-58"></i>--}}
                        {{--<span>Activity</span>--}}
                    {{--</a>--}}
                    {{--<a href="./examples/profile.html" class="dropdown-item">--}}
                        {{--<i class="ni ni-support-16"></i>--}}
                        {{--<span>Support</span>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-divider"></div>--}}
                    {{--<a href="#!" class="dropdown-item">--}}
                        {{--<i class="ni ni-user-run"></i>--}}
                        {{--<span>Logousst</span>--}}
                    {{--</a>--}}

                {{--</div>--}}
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{route('osc.index')}}">
                        <img src="{{asset('vendor/site/images/coopvidapreta_logo.png')}}" class="navbar-brand-img" alt="...">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            
            <!-- Navigation -->
            @include('layouts.partes.menu')
        </div>
    </div>
</nav>
<!-- Main content -->
<div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html"><i class="ni ni-world-2 "></i> Landing Page - http://coopviva.com.br/ponto/ (modal)</a>
            <!-- Form -->
            
            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img src="{{asset('vendor/site/images/jacareCoopViva.png')}}" class="rounded-circle">
                </span>
                            <div class="media-body ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold">{{auth()->user()->name}}</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Olá!</h6>
                        </div>
                        {{--<a href="./examples/profile.html" class="dropdown-item">--}}
                        {{--<i class="ni ni-tv-2 text-primary"></i> --}}
                            {{--<span>Dashboard</span>--}}
                        {{--</a>--}}
                        {{--<a href="./examples/profile.html" class="dropdown-item">--}}
                        {{--<i class="ni ni-settings-gear-65 text-blue"></i> --}}
                            {{--<span>Perfil</span>--}}
                        {{--</a>--}}
                        {{--<a href="./examples/profile.html" class="dropdown-item">--}}
                        {{--<i class="ni ni-collection text-success"></i> --}}
                            {{--<span>Projetos</span>--}}
                        {{--</a>--}}
                        {{--<a href="./examples/profile.html" class="dropdown-item">--}}
                        {{--<i class=""><img src="{{asset('vendor/site/images/agenda_ico.png')}}" class="navbar-brand-img" alt="..."></i>--}}
                            {{--<span>ODS</span>--}}
                        {{--</a>--}}
                        {{--<a href="./examples/profile.html" class="dropdown-item">--}}
                        {{--<i class="ni ni-album-2 text-red"></i> --}}
                            {{--<span>Galeria</span>--}}
                        {{--</a>--}}

                        {{--<a href="./examples/profile.html" class="dropdown-item">--}}
                        {{--<i class="ni ni-chart-bar-32 text-info"></i> --}}
                            {{--<span>Relatórios</span>--}}
                        {{--</a>--}}
                        <div class="dropdown-divider"></div>
                        <a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                           
                            <span>Sair</span>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Header -->
    @yield('cabecalho')
    <!-- Page content -->
    <div class="container-fluid mt--7">
        @yield('conteudo')

        <!-- Footer -->
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2019 <a href="#" class="font-weight-bold ml-1" target="_blank">COOPVIVA</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
							<a href="http://simeuquero.org/" class="nav-link" target="_blank">SIM EU QUERO</a>
                            
                        </li>
                        <li class="nav-item">
                            <a href="http://www.redeconexao.com.br/" class="nav-link" target="_blank">Rede de Conexão</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://www.agenda2030.com.br/" class="nav-link" target="_blank">Agenda 2030</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/termo-de-uso')}}" class="nav-link" >Termo de Uso</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="{{ asset('vendor/argon-dash/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/argon-dash/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- Optional JS -->
<script src="{{ asset('vendor/argon-dash/assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('vendor/argon-dash/assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
<!-- Argon JS -->
<script src="{{ asset('vendor/argon-dash/assets/js/argon.js?v=1.0.0') }}"></script>
<script src="{{ asset('js/dropzone.js') }}"></script>
<script src="https://unpkg.com/sweetalert@2.1.0/dist/sweetalert.min.js"></script>
@include('sweet::alert')
@yield('js')
</body>

</html>