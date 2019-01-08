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
  
  
    


    
 <!--   <div class="col-md-6">
        <h3>Já sou cadastrado</h3>
        <form action=" {{route('login') }}" class="form form-investidor" method="POST">
            @csrf
            <div class="card success">
                <div class="card-header">
                    Acesso ao Sistema
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="label">E-mail</div>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="label">Senha</div>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn">Entrar</button>
                        <a href="">Esqueci a senha</a>
                    </div>
                    
                </div>
            
            </div>
        
        
        </form>
    
     </div>
    </div>

    

    
   
</div> -->


</br>
<div class="featured-cause">
        <div class="container">
           

            <div class="row">
                

                <div class="col-12 col-lg-6">
                    <div class="cause-wrap d-flex flex-wrap justify-content-between">
                        
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0">Não tenho cadastro</h3>  
                                <div class="posted-date">
                                    <a href="#">Cadastro no Sistema </a>
                                </div><!-- .posted-date -->
                                                  
                            </header><!-- .entry-header -->

                  
                            <div class="card-body">  

                                            <form class="form form-investidor" action="{{route('register')}}" method="POST">
        @csrf  
        <div class="form-group">
            <label for="name">Como se chama?</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Digite seu nome">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        
        <div class="form-group">
            <label for="tipo"><strong>Deseja se cadastrar como pessoa jurídica?</strong></label>
            <div class="options">     
                <div class=" form-check-inline">
                   
                    <label class="form-check-label" for="pessoaFisica" style="cursor:pointer"> <input class="form-check-input"  name="tipo" type="checkbox" name="inlineRadioOptions" value="true" id="pessoaFisica" v-model="tipo" checked="false"><i>Sim, Sou portador(a) de CNPJ</i></label>
                </div>
               
            </div>                   
        </div>

        
        <div class="form-group" v-if="tipo">
            <label for="cnpj"><strong>CNPJ</strong></label>
            <input type="cnpj" name="cnpj" class="form-control" id="cnpj"  placeholder="Apenas números">
        </div>
        
        <div class="form-group" v-else="tipo">
            <label for="cpf">CPF</label>
            <input type="cpf" name="cpf" class="form-control" id="cpf" placeholder="Apenas números" >
        </div> 
        
        <div class="form-group" v-if="tipo">
            <label for="razao_social"><strong>Razão Social</strong></label>
            <input type="text" name="razao_social" class="form-control" id="razao_social" aria-describedby="emailHelp" placeholder="Razão social de sua empresa">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>

        <div class="form-group">
            <label for="telefone">Telefone Contato:</label>
            <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Apenas números">
        </div>

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
        <input type="hidden" name="cadastro" value="{{Request::segment(2)}}">    
       <center> <button type="submit" class="btn gradient-bg">Cadastrar</button> </center>
        </form>

                           
    </div>
              
                       
                    </div><!-- .cause-wrap -->
                </div><!-- .col -->
             
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
            </div><!-- .row -->
        </div><!-- .container -->
        </div>
        </br>
    </div><!-- .featured-cause -->


@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script>
    var app = new Vue({
        el: '#abc',
        data: {           
            tipo:false
        },
       
    })      
</script>

@stop