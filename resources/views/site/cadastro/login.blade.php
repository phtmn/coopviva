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
                                    <h4> Investidor</h4>
                                    
                                </header><!-- .entry-header -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->
    </div><!-- .hero-slider -->


<div class="container" id="abc">
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
    <header class="entry-header">
            <h2 class="entry-title"></h2>
    </header> 
    

</br>
<div class="featured-cause">
        <div class="container">           

            <div class="row">
                

                  <div class="col-12 col-lg-6">
                    <div class="cause-wrap d-flex flex-wrap justify-content-between">
                    <form action=" {{route('login') }}" class="form form-investidor" method="POST">
                             @csrf
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0">Já tenho cadastro!</h3> 
                                <div class="posted-date">
                                    <a href="#">Acesso ao Sistema </a>
                                </div><!-- .posted-date -->
                                                   
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
                                        <center>    <button type="submit" class="btn gradient-bg">Entrar</button>
                                        <a href="">Esqueci a senha</a> </center>
                                </div>                    
                            </div>
                    </form>
                       
                    </div><!-- .cause-wrap -->
                </div><!-- .col -->
             
                <div class="col-12 col-lg-6">
                    <div class="cause-wrap d-flex flex-wrap justify-content-between">
                        <p>Aqui terá textos com informações</p>
                       
                    </div><!-- .cause-wrap -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
        </div>
        </br>
    </div><!-- .featured-cause -->
@stop

