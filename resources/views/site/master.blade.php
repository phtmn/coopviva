<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Google Analytics -->


		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110332879-2"></script>
		<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());

				gtag('config', 'UA-110332879-2');
		</script>
    <title>COOPVIVA - BETA 1.0</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/vendor/site/images/favicon.ico">
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/vendor/site/css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="/vendor/site/css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="/vendor/site/css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="/vendor/site/css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="/vendor/site/css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="/vendor/site/style.css">
</head>
<body>

<script src="https://unpkg.com/sweetalert@2.1.0/dist/sweetalert.min.js"></script>
    @include('sweet::alert')

    <header class="site-header">
        <div class="top-header-bar ">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="header-bar-email">
                                <i class="fa fa-envelope"></i><span> <a href="mailto:contato@rededeconexao.art.br"> contato@rededeconexao.art.br</a></span></li>
                                       
                        </div><!-- .header-bar-email -->

                        <div class="header-bar-text">
                        
                            <p><span><i class="fa fa-phone"></i> +55 83 3034-1663 | <i class="fa fa-whatsapp"></i> <a id="link" href="https://api.whatsapp.com/send?1=pt_BR&phone=558330341663=" target="_blank" class="text-white " style="text-decoration:none"> +55 83 3034-1663</a> </span></p>
                        </div>

                        
						
                    </div><!-- .col -->
 
                    <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                        @guest
                            <div class="donate-btn">                            
                                <a href="{{ url('/entrar')}}">Entrar</a>
                            </div>
                            @else

                            <!--    <div class="donate-btn">      
                                
                                    <a href="{{ url('/entrar')}}">Olá, {{ Auth::user()->name }}</a>
                                </div> -->

                                <div class="donate-btn">
                                    <a style="text-decoration:none class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                                                                        Sair
                                    </a>
                                </div>
                               

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                           
                                    
                                
                        @endguest
                      
                          <!-- .donate-btn -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .top-header-bar -->

        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" rel="home" href="{{url('/') }}"><img class="d-block" src="{{asset('/vendor/site/images/coopvidapreta_logo.png')}}" alt="logo"></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                          <div class="col-xs-12">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                            <!-- <li class="current-menu-item"><a href="{{url('/') }}">Home</a></li> -->
                                <li class=""><a href="{{url('/') }}" >Home</a></li>
                                <li class=""><a href="{{ route('sobre_nos') }}" >Sobre Nós</a></li>
                                @guest  
                                    <li class=""><a href="{{ url('/oscs') }}">OSC's</a></li>
                                @endguest                                                              
                                <li class=""><a href="{{ route('agenda_2030') }}">Agenda 2030</a></li>
                                <li class=""><a target=_blank href="https://www.rededeconexao.art.br/blog">Blog</a></li>
                                @if (Route::has('login'))               
                                    @auth
                                        <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>

                                       @else
                                    <!--    <li><a href="{{ url('/cadastro') }}">Login</a></li> -->
                                        @if (Route::has('register'))
                                        <li class=" "><a href="{{ url('/cadastro')}}">Cadastre-se</a></li>
                                        @endif
                                    @endauth               
                                @endif
                            </ul>
                          </div>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->
        @if(Session::has('mensagem'))
            <div class="alert {{ Session::get('mensagem')['class'] }}" role="alert">
                     {{ Session::get('mensagem')['msg'] }}
            </div>
        @endif
    @yield('content')

    

    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6  col-lg-6">
                        <div class="foot-about">
                          <center>  <h2><a class="foot-logo" href="#"><img src="/vendor/site/images/logo-branco.png" alt=""></a></h2> </center>

                            <p align="justify">A Rede de Conexão é uma agência, que tem como foco principal a valorização de ações sustentáveis pautada na criatividade, empreendedorismo e na transformação social.</p>

                         <!--   <ul class="d-flex flex-wrap align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul> -->
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-4 col-lg-2 mt-5 mt-md-0">
                        <h2>Links</h2>

                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="{{ route('sobre_nos') }}" >Sobre Nós </a></li>
                            <li><a href="{{ url('/oscs') }}" >OSC's</a></li>
                            <li><a href="{{ route('agenda_2030') }}">Agenda 2030</a></li>
                            <li><a target=_blank href="https://www.rededeconexao.art.br/blog">Blog</a></li>
							@if (Route::has('login'))               
                                    @auth
                                    <!--    <li><a href="{{ url('/home') }}">Home</a></li> -->
                                    @else
                               <li><!--<a href="#">Login</a>--></li>
                                        @if (Route::has('register'))
                                        <li><a href="{{ url('/cadastro') }}">Cadastre-se</a></li>
                                        @endif
                                    @endauth               
                                @endif
                            <li><a href="#">Termo de Uso</a></li>                            
                        </ul>
                    </div><!-- .col -->

                  <!--  <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-latest-news">
                            <h2>Últimas Notícias</h2>

                            <ul>
                                <li>
                                    <h3><a href="#">A new cause to help</a></h3>
                                    <div class="posted-date">MArch 12, 2018</div>
                                </li>

                                <li>
                                    <h3><a href="#">We love to help people</a></h3>
                                    <div class="posted-date">MArch 12, 2018</div>
                                </li>

                                <li>
                                    <h3><a href="#">The new ideas for helping</a></h3>
                                    <div class="posted-date">MArch 12, 2018</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                   -->

                    <div class="col-12 col-md-4 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contato</h2>

                            <ul>
                            <li>
                                <i class="fa fa-envelope"></i><span><a href="mailto:contato@rededeconexao.art.br">contato@rededeconexao.art.br</a></span></li>
                                <li><i class="fa fa-phone"></i><span>+55 83 3034-1663</span></li>
								<li><i class="fa fa-whatsapp"></i><span><a target=_blank href="https://api.whatsapp.com/send?1=pt_BR&phone=558330341663="Olá,%20seja%20bem%20vindo%20a%20REDE%20DE%20CONEXÃO">+55 83 3034-1663</a></span></li>								                                
                                <li><i class="fa fa-map-marker"></i><span>João Pessoa – Paraíba – Brasil</span></li>
                            </ul>
                        </div><!-- .foot-contact -->

                        <div class="subscribe-form">
                            
                        </div><!-- .search-widget -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> REDE DE CONEXÃO | Todos os Direitos Reservados
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->
    
    <!-- <script type='text/javascript' src='/vendor/site/js/jquery.js'></script> -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type='text/javascript' src='/vendor/site/js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='/vendor/site/js/swiper.min.js'></script>
    <script type='text/javascript' src='/vendor/site/js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='/vendor/site/js/circle-progress.min.js'></script>
    <script type='text/javascript' src='/vendor/site/js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='/vendor/site/js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='/vendor/site/js/custom.js'></script>    

    @yield('js')

</body>
</html>