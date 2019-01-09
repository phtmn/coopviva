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
                                    <h4> Meu perfil</h4>
                                    
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
                        
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0">Preencha dados do seu Perfil</h3>  
                                <div class="posted-date">
                                    <a href="#">Meu perfil de Usuário </a>
                                </div><!-- .posted-date -->
                                                  
                            </header><!-- .entry-header -->

                  
                            <div class="card-body">  

        <form class="form form-investidor" action="{{route('perfil.store')}}" method="POST">
              @csrf  
              <div class="form-group">
                  <label for="name">Seu nome Completo</label>
                  <input type="text" name="nome_completo" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Digite seu nome">
                  
              </div>

              <div class="form-group">
                  <label for="name">Selecione como deseja utilizar o sistema</label>
                  <select name="tipo_perfil" id="" class="form-control">
                      <option value="I">Sou investidor</option> //TODO -- incluir as siglas dos estados
                      <option value="O">Sou uma Organização Social Civil</option>
                      <option value="D">Desejo as duas opções</option>
                  </select>
                  
              </div>
                <p>Criar os campos aqui abaixo \/\/\/\/\ </p>
              <!-- TODO Criar o campos de acordo com as informações da base-->  
                  

              
              <!-- Fim TODO -->
        
              <div class="form-group">
                  <button type="submit" class="btn gradient-bg">Cadastrar</button>
              </div>
              </form>
                           
    </div>
              
                       
                    </div><!-- .cause-wrap -->
                </div><!-- .col -->
             
                <div class="col-12 col-lg-6">
                    <div class="cause-wrap d-flex flex-wrap justify-content-between bg-success">
                        <h3 class="text-white">Perfil Ivestidor</h3>
                        <p class="text-white">O cadastro como investidor é possivel realizar investimentos em projetos que estão na nossa base....</p>
                    </div>
                    <!-- .cause-wrap -->
                    <div class="cause-wrap d-flex flex-wrap justify-content-between bg-info">
                        <h3 class="text-white">Perfil OSC(Organização Socical Civil)</h3>
                        <p class="text-white">O cadastro como OSC você poderá cadastrar sua instituição e poder receber investimentos...</p>
                    </div>
                    <div class="cause-wrap d-flex flex-wrap justify-content-between bg-danger">
                        <h3 class="text-white">Perfil Duplo (investidor e osc)</h3>
                        <p class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic inventore, rem, accusantium optio perferendis odit voluptatem aperiam ratione tenetur aut sapiente amet consequuntur, quibusdam nostrum accusamus unde consequatur corrupti ducimus.</p>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
        </div>
        </br>
    </div><!-- .featured-cause -->
@stop

