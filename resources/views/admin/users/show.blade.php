@extends('admin.home')

@section('content')
<div class="x_panel">

    <div class="x_title">
        <a href="{{route('admin-users.index')}}"><i class="fa fa-arrow-left"></i> Voltar para Lista</a>

        <h3>Informações de: {{$user->name}}</h3>
    </div>


    <div class="x_content">
        <h3>Dados da Conta</h3>
        <ul>
            <li>Nome: <b>{{$user->name}}</b></li>
            <li>Email: <b>{{$user->email}}</b></li>
            <li>Tipo de Conta: <b>{{ strtoupper($user->tipo_usuario) }}</b></li>
            <li>Tipo de Cadastro: <b>{{$user->tipo}}</b></li>
            <li>Sexo: <b>{{$user->sexo}}</b></li>
            <li>UF: <b>{{$user->uf}}</b></li>
            <li>Cidade: <b>{{$user->cidade}}</b></li>
            <li>Telefone: <b>{{$perfil->telefone}}</b></li>
        </ul>


    </div>
</div>



@stop