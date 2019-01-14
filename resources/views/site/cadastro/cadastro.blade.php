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
                                    <h4> Cadastro no Sistema</h4>
                                    
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
                

                <div class="col-12 col-lg-6">
                    <div class="cause-wrap  flex-wrap justify-content-between">
                        
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


                                <h3 class="entry-title w-100 m-0">Não tenho cadastro!</h3>  
                              
                                                  
                            </header><!-- .entry-header -->

                  
                            <div class="card-body">  

        <form class="form form-investidor" action="{{route('register')}}" method="POST">
              @csrf  
              <div class="form-group">
                  <label for="name">Como se chama?</label>
                  <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Digite seu nome">
                  
              </div>

              <div class="form-group">
                  <label for="name">Selecione o seu Estado?</label>
                  <select name="uf" id="" class="form-control">
<<<<<<< HEAD
                      <option value="#">Selecione...</option> //TODO -- incluir as siglas dos estados
                      <option value="AC">AC - Acre</option>
                      <option value="AL">AL - Alagoas</option>
                      <option value="AP">AP - Amapá</option>
                      <option value="AM">AM - Amazonas</option>
                      <option value="BA">BA - Bahia</option>
                      <option value="CE">CE - Ceará</option>
                      <option value="DF">DF - Distrito Federal</option>
                      <option value="ES">ES - Espírito Santo</option>
                      <option value="GO">GO - Goiás</option>
                      <option value="MA">MA - Maranhão</option>
                      <option value="MT">MT - Mato Grosso</option>
                      <option value="MS">MS - Mato Grosso do Sul</option>
                      <option value="MG">MG - Minas Gerais</option>
                      <option value="PA">PA - Pará</option>
=======
                      <option value="#">... Selecione ...</option> //TODO -- incluir as siglas dos estados
>>>>>>> 86e86227e383d326c53f58afe56b86b750b6ae06
                      <option value="PB">PB - Paraíba</option>
                      <option value="PR">PR - Paraná</option>
                      <option value="PE">PE - Pernanbuco</option>
                      <option value="PI">PI - Piauí</option>
                      <option value="RJ">RJ - Rio de Janeiro</option>
                      <option value="RN">RN - Rio Grande do Norte</option>
                      <option value="RS">RS - Rio Grande do Sul</option>
                      <option value="RO">RO - Rondônia</option>
                      <option value="RR">RR - Roraima</option>
                      <option value="SC">SC - Santa Catarina</option>
                      <option value="SP">SP - São Paulo</option>
                      <option value="SE">SE - Sergipe</option>
                      <option value="TO">TO - Tocantins</option>

                  </select>
                  
              </div>

              <!-- TODO Criar o select para cidades baseado no estado selecionado -->  
                  <!-- Criar aqui o select -->
              <!-- Fim TODO -->

              <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu e-mail">
              </div>

              <div class="form-group">
                  <label for="password">Senha</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Digite sua senha">
              </div>

              <div class="form-group">
                  <label for="password_confirmation">Repita a Senha</label>
                  <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Repita sua senha">
              </div>
        
              <div class="form-group">
                <center>  <button type="submit" class="btn gradient-bg">Cadastrar</button> </center>
              </div>
              </form>
                           
    </div>
              
                       
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

