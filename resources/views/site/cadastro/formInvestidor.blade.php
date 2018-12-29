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
    <header class="entry-header">
            <h2 class="entry-title"></h2>
    </header>

    <div class="col-md-8">
    <form class="form form-investidor" action="{{route('cadastro.create')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Como se chama?</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu nome para podermos contactar">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1"><strong>Você é pessoa juridica?</strong></label>
            <div class="options">     
                <div class=" form-check-inline">
                    <input class="form-check-input"  name="PJ" type="checkbox" name="inlineRadioOptions" value="PF" id="pessoaFisica" v-model="tipo" checked="false">
                    <label class="form-check-label" for="pessoaFisica" style="cursor:pointer"><i>Sim, Sou portador(a) de CNPJ</i></label>
                </div>
               
            </div>                   
        </div>
        
        <div class="form-group" v-if="tipo">
            <label for="exampleInputPassword1"><strong>CNPJ</strong></label>
            <input type="cnpj" name="cnpj "class="form-control" id="exampleInputPassword1"  placeholder="Apenas números">
        </div>
        
        <div class="form-group" v-else="tipo">
            <label for="exampleInputPassword1">CPF</label>
            <input type="cpf" name="cpf" class="form-control" id="exampleInputPassword1" placeholder="Apenas números" >
        </div> 
        
        <div class="form-group" v-if="tipo">
            <label for="exampleInputEmail1"><strong>Razão Social</strong></label>
            <input type="text" name="razao_social" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Telefone Contato:</label>
            <input type="text" name="telefone" class="form-control" id="exampleInputPassword1" placeholder="Apenas números">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Digite seu melhor e-mail">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Repita a Senha</label>
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>

    
        <button type="submit" class="btn btn-success btn-block btn-outline-success">Cadastrar</button>
    </form>

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