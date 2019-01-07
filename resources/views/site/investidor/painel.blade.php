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
                                <div align="right"> <h4 >Bem Vindo, </h4> 
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
    <a class="nav-link active" href="#">Painel do Investidor</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="#">Perfil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Investimentos</a>
  </li>
</ul>

        
        </div>

        <div class="card-body">
           
        



<div class="row">
<div class="col-lg-4 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row">
                <div class="round round-lg align-self-center round-coopviva"><i class="mdi mdi-cash-usd"></i></div>
                <div class="m-l-10 align-self-center">
                    <h3 class="m-b-0 font-light">R$ </h3>
                    <h5 class="text-muted m-b-0"> Total Investido</h5></div>
            </div>
        </div>
    </div>
</div>
<!-- Column -->
<!-- Column -->
<div class="col-lg-4 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row">
                <div class="round round-lg align-self-center "><i class="icon-doc text-white"></i></div>
                <div class="m-l-10 align-self-center">
                    <h3 class="m-b-0 font-lgiht">R$ </h3>
                    <h5 class="text-muted m-b-0">TA's Gerados</h5></div>
            </div>
        </div>
    </div>
</div>
<!-- Column -->
<!-- Column -->
<div class="col-lg-4 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row">
                <div class="round round-lg align-self-center round-coopviva"><i class="mdi mdi-cash-usd"></i></div>
                <div class="m-l-10 align-self-center">
                    <h3 class="m-b-0 font-lgiht">R$ </h3>
                    <h5 class="text-muted m-b-0">Investimentos do mês</h5></div>
            </div>
        </div>
    </div>
</div>
</div>
</br>
<div class="row">
<div class="col-lg-4 col-md-12">
                        <div class="card card-inverse card-primary">
                            <div class="card-body">
                                <div class="d-flex">
                                    
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="mdi mdi-chart-areaspline"></i></h1></div>
                                    <div>
                                        <h3 class="card-title">Recursos arrecadados</h3>
                                        <h6 class="card-subtitle">Ano  2018</h6> </div>
                                </div>
                                
                                <div class="row">
                                   
                                    <div class="col-6 align-self-center">
                                        <h2 class="font-light text-white"> R$</h2>
                                    </div>
                                    <!-- <div class="col-8 p-t-10 p-b-20 align-self-center">
                                        <div class="usage chartist-chart" style="height:65px"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        </br>
                        <div class="card card-inverse card-success">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="mdi mdi-chart-line"></i></h1></div>
                                    <div>
                                        <h3 class="card-title">Investimentos em projetos</h3>
                                        <h6 class="card-subtitle">Ano  2018</h6> </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 align-self-center">
                                        <h2 class="font-light text-white"> R$ </h2>
                                    </div> 
                                    <!-- <div class="col-8 p-t-10 p-b-20 text-right">
                                        <div class="spark-count" style="height:65px"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"> ENGAJAMENTO SOCIAL </h3>
                                <h6 class="card-subtitle">Veja aqui como você se mobiliza em torno de nossas causas 
</h6>
                                 <hr>
                              <center>  <div id="visitor" style="height:260px; width:100%;"><img src="{{asset('/vendor/site/images/enagajamento.png')}}" alt="img" /></div>
                            </div> </center>

                                                    
                        </div>
</div>


<div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Você Sabia disso?
                                <!-- <label class="label label-rounded label-success">Investidor Social</label>--> </h4>
                                <h6 class="card-subtitle"> </h6>
                                <div class="blog-image"><center><img src="{{asset('/vendor/site/images/percentual_doadores.jpg')}}" alt="img" class="img-responsive" /></center></div>
                              <!--   <div id="usa" style="height: 290px"></div> -->

                             <!--   <div class="text-center">
                                    
                                    <ul class="list-inline">
                                        <li>
                                            <h6 class="text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Valley</h6> </li>
                                        <li>
                                            <h6 class="text-info"><i class="fa fa-circle font-10 m-r-10"></i>Newyork</h6> </li>
                                        <li>
                                            <h6 class="text-danger"><i class="fa fa-circle font-10 m-r-10"></i>Kansas</h6> </li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>


                  

                      
    </div>  
    </div>  





            </div>
    
    </div>


</div>

</br>
@endsection