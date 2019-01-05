@extends('site.master')


@section('content')
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
    <div class="row">
        <div class="col-md-6">
            <form class="form form-investidor" action="{{route('register')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Como se chama?</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Digite seu nome para podermos contactar">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        
        <div class="form-group">
            <label for="tipo"><strong>Você é pessoa juridica?</strong></label>
            <div class="options">     
                <div class=" form-check-inline">
                    <input class="form-check-input"  name="tipo" type="checkbox" name="inlineRadioOptions" value="true" id="pessoaFisica" v-model="tipo" checked="false">
                    <label class="form-check-label" for="pessoaFisica" style="cursor:pointer"><i>Sim, Sou portador(a) de CNPJ</i></label>
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
            <input type="text" name="razao_social" class="form-control" id="razao_social" aria-describedby="emailHelp">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>

        <div class="form-group">
            <label for="telefone">Telefone Contato:</label>
            <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Apenas números">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu melhor e-mail">
        </div>

        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Repita a Senha</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="">
        </div>
        <input type="hidden" name="cadastro" value="{{Request::segment(2)}}">    
        <button type="submit" class="btn btn-success btn-block btn-outline-success">Cadastrar</button>
    </form>

    </div>
    <div class="col-md-4">
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

    
    
   
</div>

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