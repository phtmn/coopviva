@extends('site.master')

@section('content')

        <div class="swiper-container ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide hero-content-wrap">
                        <img src="/vendor/site/images/about-bg.jpg" alt="">

                        <div class="hero-content-overlay position-absolute w-100 h-100">
                            <div class="container h-100">
                                <div class="row h-100">
                                    <div class="col-12 col-lg-12 d-flex flex-column justify-content-center ">
                                        <header  class="entry-header">
                                        <div align="right"> <h4 >Bem Vindo </h4> 
                                            <h5> Nome do Usuário</h5>
                                            <h6>Sair</h6>
                                            </div>    
                                        </header><!-- .entry-header -->
                                    </div><!-- .col -->
                                
                                </div><!-- .row -->
                            </div><!-- .container -->
                        </div><!-- .hero-content-overlay -->
                    </div><!-- .hero-content-wrap -->
            </div><!-- .hero-slider -->




            </br>  


                <div class="container">
                        <div class="">
                            <div class="">
                        
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#home">Painel do Investidor</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#menu2">Perfil</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#menu3">Investimentos</a>
                                    </li>
                                </ul>                    
                            </div>

                            @include('site.investidor.painel-do-investidor')
                            <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
   
    <!-- colocar aqui o include do painel-do-investidor -->
     
  
    </div>
    <div id="menu1" class="tab-pane fade">
    @include('site.investidor.perfil')
    
    </div>
    <div id="menu2" class="tab-pane fade">
    @include('site.investidor.investimentos')
    
    </div>
 
  </div>
              
        </div>
     


        </div>

        </br>
@endsection