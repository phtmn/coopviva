<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>{{ env('APP_NAME') ?? 'Coopviva' }}</title>
    <!-- Favicon -->
    <link href="{{asset('vendor/site/images/favicon.png')}}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{asset('vendor/argon-site/assets/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/argon-site/assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{asset('vendor/argon-site/assets/css/argon.css?v=1.0.1')}}" rel="stylesheet">
    <!-- Docs CSS -->
    <link type="text/css" href="{{asset('vendor/argon-site/assets/css/docs.min.css')}}" rel="stylesheet">
</head>

<body>
<header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
        <div class="container">
            <a class="navbar-brand mr-lg-5" href="{{url('/')}}">
                <img src="{{asset('vendor/argon-site/assets/img/brand/brandlogo-white.png')}}" alt="..:: COOPVIVA ::.." style="width: 188px; height: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="{{url('/')}}">
                            <img src="{{asset('vendor/argon-site/assets/img/brand/brandlogo-white.png')}}" alt="..:: COOPVIVA ::.." style="width: 188px; height: auto;">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                            <i class="ni ni-ui-04 d-lg-none"></i>
                            <span class="nav-link-inner--text">Conheça</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl">
                            <div class="dropdown-menu-inner">
                                <a href="#" class="media d-flex align-items-center">
                                <img src="{{asset('vendor/argon-site/assets/img/brand/agenda2030.png')}}" alt="..:: COOPVIVA ::.." style="width: 88px; height: auto;">
                                    <div class="media-body ml-3">
                                        <h6 class="heading text-primary mb-md-1">Plataforma Agenda 2030</h6>
                                        <p class="description d-none d-md-inline-block mb-0">Acelerando as transformações para a Agenda 2030 no Brasil.</p>
                                    </div>
                                </a>
                                <a href="#" class="media d-flex align-items-center">
                                <img src="{{asset('vendor/argon-site/assets/img/brand/agenda2030.png')}}" alt="..:: COOPVIVA ::.." style="width: 108px; height: auto;">
                                    <div class="media-body ml-3">
                                        <h6 class="heading text-primary mb-md-1">Rede de Conexão</h6>
                                        <p class="description d-none d-md-inline-block mb-0">Inpiramos e geramos conexões sustentáveis.</p>
                                    </div>
                                </a>
                                <a href="#" class="media d-flex align-items-center">
                                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                        <i class="ni ni-ui-04"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="heading text-warning mb-md-1"> Sim eu Quero</h5>
                                        <p class="description d-none d-md-inline-block mb-0">Browse our 50 beautiful handcrafted components offered in the Free version.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                            <i class="ni ni-collection d-lg-none"></i>
                            <span class="nav-link-inner--text">Saiba Mais</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="../examples/landing.html" class="dropdown-item">Sobre Nós</a>
                            <a href="../examples/profile.html" class="dropdown-item">Termo de Uso</a>                        
                        </div>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
                            <i class="fa fa-facebook"></i>
                            <span class="nav-link-inner--text d-lg-none">Facebook</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
                            <i class="fa fa-instagram"></i>
                            <span class="nav-link-inner--text d-lg-none">Instagram</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
                            <i class="fa fa-whatsapp"></i>
                            <span class="nav-link-inner--text d-lg-none">Twitter</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
                            <i class="fa fa-envelope"></i>
                            <span class="nav-link-inner--text d-lg-none">Twitter</span>
                        </a>
                    </li>
     
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
                            <i class="fa fa-map-pin"></i>
                            <span class="nav-link-inner--text d-lg-none">Twitter</span>
                        </a>
                    </li>
                   
                    <li class="nav-item d-none d-lg-block ml-lg-4">
                        @guest
                            
                            <a href="{{route('login')}}"class="btn btn-success btn-icon">
                                
                                <span class="nav-link-inner--text">ENTRAR</span>
                            </a>

                            

                            <a href="{{route('register')}}"class="btn btn-neutral btn-icon">
                               
                                <span class="nav-link-inner--text">Cadastre-se</span>
                            </a>
                        @else
                            @if(auth()->user()->tipo_usuario == 'investidor')
                                <a href="{{route('perfil.index')}}" class="btn btn-neutral btn-icon">
                                    <span class="btn-inner--icon">
                                      <i class="fa fa-dashboard mr-2"></i>
                                    </span>
                                    <span class="nav-link-inner--text">Painel do Investidor</span>
                                </a>
                            @else
                                <a href="{{route('osc.dashboard')}}" class="btn btn-outline-neutral btn-icon">
                                <span class="btn-inner--icon">
                                  <i class="fa fa-dashboard mr-2"></i>
                                </span>
                                    <span class="nav-link-inner--text">Painel Osc</span>
                                </a>
                            @endif
                            <a href="{{route('logout')}}" target="_blank" class="btn btn-neutral btn-icon"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" data-toggle="tooltip" title="Sair do Sistema">
                                <span class="btn-inner--icon">
                                  <i class="fa fa-sign-out"></i>
                                </span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    @yield('conteudo_principal')




</main>
<footer class="footer has-cards">
 <!--   <div class="container container-lg">
        <div class="row">
            <div class="col-md-6 mb-5 mb-md-0">
                <div class="card card-lift--hover shadow border-0">
                    <a href="#" title="Landing Page">
                        <img src="{{asset('vendor/argon-site/assets/img/theme/landing.jpg')}}" class="card-img">
                    </a>
                </div>
            </div>
            <div class="col-md-3 mb-5 mb-lg-0">
                <div class="card card-lift--hover shadow border-0">
                    <a href="#" title="Profile Page">
                        <img src="{{asset('vendor/argon-site/assets/img/theme/profile.jpg')}}" class="card-img">
                    </a>
                </div>
            </div>
            <div class="col-md-3 mb-5 mb-lg-0">
                <div class="card card-lift--hover shadow border-0">
                    <a href="#" title="Profile Page">
                        <img src="{{asset('vendor/argon-site/assets/img/theme/profile.jpg')}}" class="card-img">
                    </a>
                </div>
            </div>
        </div>
    </div> -->
    <div class="container">
      <!--  <div class="row row-grid align-items-center my-md">
            <div class="col-lg-6">
                <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
                <h4 class="mb-0 font-weight-light">Let's get in touch on any of these platforms.</h4>
            </div>
            <div class="col-lg-6 text-lg-center btn-wrapper">
                <a target="_blank" href="#" class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg" data-toggle="tooltip" data-original-title="Follow us">
                    <i class="fa fa-twitter"></i>
                </a>
                <a target="_blank" href="#" class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg" data-toggle="tooltip" data-original-title="Like us">
                    <i class="fa fa-facebook-square"></i>
                </a>
                <a target="_blank" href="#" class="btn btn-neutral btn-icon-only btn-dribbble btn-lg btn-round" data-toggle="tooltip" data-original-title="Follow us">
                    <i class="fa fa-dribbble"></i>
                </a>
                <a target="_blank" href="#" class="btn btn-neutral btn-icon-only btn-github btn-round btn-lg" data-toggle="tooltip" data-original-title="Star on Github">
                    <i class="fa fa-github"></i>
                </a>
            </div>
        </div> -->
        <hr>
        <div class="row align-items-center justify-content-md-between">
            <div class="col-md-5">
                <div class="copyright">
                    &copy; 2019
                    <a href="#" target="_blank">COOPVIVA</a>
                </div>
            </div>
            <div class="col-md-7">
                <ul class="nav nav-footer justify-content-end">
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">Rede de Conexão</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">Agenda 2030</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">Sim EU QUERO</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">Termo de Uso</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Core -->
<script src="{{asset('vendor/argon-site/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/argon-site/assets/vendor/popper/popper.min.js')}}"></script>
<script src="{{asset('vendor/argon-site/assets/vendor/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/argon-site/assets/vendor/headroom/headroom.min.js')}}"></script>
<!-- Argon JS -->
<script src="{{asset('vendor/argon-site/assets/js/argon.js?v=1.0.1')}}"></script>
@yield('js')
</body>

</html>