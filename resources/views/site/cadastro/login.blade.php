@extends('site.master')


@section('content')

<div class="swiper-container ">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-content-wrap">
                <img src="/vendor/site/images/about-bg.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-10 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h4> Acesso ao Sistema</h4>
                                    
                                </header><!-- .entry-header -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->
    </div><!-- .hero-slider -->


<div class="container" id="abc">

    <header class="entry-header">
            <h2 class="entry-title"></h2>
    </header> 
    
<div class="featured-cause">


        <div class="container">           

            <div class="row">
                

                  <div class="col-12 col-lg-5">
                    <div class="cause-wrap  flex-wrap justify-content-between">
                    <form action=" {{route('login') }}" class="form form-investidor" method="POST">
                             @csrf
                            <header class="entry-header  flex-wrap align-items-center">
                                    
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif


                                <h3 class="entry-title w-100 m-0">Já tenho cadastro!</h3> 
                                
                                                   
                            </header><!-- .entry-header -->

                  
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="label">E-mail</div>
                                    <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail">
                                 </div>
                                <div class="form-group">
                                    <div class="label">Senha</div>
                                    <input type="password" name="password" class="form-control" placeholder="Digite sua senha">
                                </div>
                                <div class="form-group">
                                        <center> <a href="">Esqueci minha senha</a> </center>
                                </div> 

                                <div class="form-group">
                                        <center> <button type="submit" class="btn gradient-bg">Entrar</button> </center>
                                </div>                    
                            </div>
                    </form>
                       
                    </div><!-- .cause-wrap -->
                </div><!-- .col -->
             
                <div class="col-12 col-lg-7" ">
                    <div class="cause-wrap d-flex flex-wrap justify-content-between"> 


                    <header class="entry-header  flex-wrap align-items-center">

<h3 class="entry-title w-100 m-0">Formas de Acesso</h3>  

                  
</header><!-- .entry-header -->


<div class="card-body">  


<div class="form-group">
<label for="name"><strong>Perfil Investidor</strong></label>
<p class="text-justify">

O cadastro como investidor é possivel realizar investimentos (doação/patrocínio) em instituições cadastradas em nossa base...
</p>

</div>

<div class="form-group">
<label for="name"><strong>Perfil OSC</strong></label>
<p class="text-justify">

Com esse cadastro sua instituição terá a possibilidade de receber investimentos (doação/patrocinio) de pessoa física e jurídica em seus projetos cadastrados e aprovados...
</p>

</div>




             
</div>



                       
                    </div><!-- .cause-wrap -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
        </div>
        </br>
    </div><!-- .featured-cause -->
@stop

