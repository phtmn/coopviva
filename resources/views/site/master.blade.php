<!DOCTYPE html>
<html lang="en">
<head>
    <title>Coopviva</title>
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
    <header class="site-header">
        <div class="top-header-bar ">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="header-bar-email">
                            E-mail: <a href="#">contato@rededeconexao.art.br</a>
                        </div><!-- .header-bar-email -->

                        <div class="header-bar-text">
                            <p>Tel.: <span> +55 83 3034-1663 | WhatsApp +55 83 3034-1663 </span></p>
                        </div>
						
                    </div><!-- .col -->

                    <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                        <div class="donate-btn">
                            <a href="#">Invista Agora</a>
                        </div><!-- .donate-btn -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .top-header-bar -->

        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" rel="home"><img class="d-block" src="{{asset('/vendor/site/images/coopvidapreta_logo.png')}}" alt="logo"></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                            <!-- <li class="current-menu-item"><a href="{{url('/') }}">Home</a></li> -->
                                <li><a href="{{url('/') }}">Home</a></li>
                                <li><a href="{{ route('sobre_nos') }}">Sobre Nós</a></li>  
                                <li><a href="{{ url('/oscs') }}">OSC's</a></li>                                                              
                                <li><a href="{{ route('agenda_2030') }}">Agenda 2030</a></li>
                                <li><a href="#">Blog</a></li>
                                @if (Route::has('login'))               
                                    @auth
                                        <li><a href="{{ route('site.painel') }}">Painel</a></li>
                                    @else
                                        <!-- <li><a href="{{ route('login') }}">Login</a></li> -->
                                        @if (Route::has('register'))
                                        <li><a href="{{ url('/cadastro')}}">Cadastre-se</a></li>
                                        @endif
                                    @endauth               
                                @endif
                            </ul>
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
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="foot-about">
                            <h2><a class="foot-logo" href="#"><img src="/vendor/site/images/logo-branco.png" alt=""></a></h2>

                            <p>A Rede de Conexão é uma agência, que tem como foco principal a valorização de ações sustentáveis pautada na criatividade, empreendedorismo e na transformação social.</p>

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

                    <div class="col-12 col-md-6 col-lg-2 mt-5 mt-md-0">
                        <h2>Links</h2>

                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="{{ route('sobre_nos') }}">Sobre Nós </a></li>
                            <li><a href="#">OSC's</a></li>
                            <li><a href="{{ route('agenda_2030') }}">Agenda 2030</a></li>
                            <li><a href="#">Blog</a></li>
							@if (Route::has('login'))               
                                    @auth
                                        <li><a href="{{ url('/home') }}">Home</a></li>
                                    @else
                                <li><a href="{{ route('login') }}">Login</a></li>
                                        @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}">Cadastre-se</a></li>
                                        @endif
                                    @endauth               
                                @endif
                                                        
                        </ul>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
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
                        </div><!-- .foot-latest-news -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contato</h2>

                            <ul>
                                <li><i class="fa fa-phone"></i><span>+55 83 3034-1663</span></li>
								<li><i class="fa fa-whatsapp"></i><span>+55 83 3034-1663</span></li>								
                                <li><i class="fa fa-envelope"></i><span>contato@rededeconexao.art.br</span></li>
                                <li><i class="fa fa-map-marker"></i><span>João Pessoa – Paraíba – Brasil</span></li>
                            </ul>
                        </div><!-- .foot-contact -->

                        <div class="subscribe-form">
                            <form class="d-flex flex-wrap align-items-center">
							
                                <input type="email" placeholder="Cadastre seu e-mail">
                                <input type="submit" value="Enviar">
                            </form><!-- .flex -->
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
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>

    <script>
      $(document).ready(function(){
        $("#telefone").mask('(00)00000-0000');
        $("#cpf").mask('000.000.000-00', {reverse: true});
        $("#cnpj").mask('00.000.000/0000-00', {reverse: true});
      });
    </script>
    @yield('js')

</body>
</html>