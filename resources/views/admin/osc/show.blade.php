@extends('admin.home')

@section('content')
<div class="x_panel">

    <div class="x_title">
        <a href="{{route('admin-osc.index')}}"><i class="fa fa-arrow-left"></i> Voltar para Lista</a>

        <h3>Informações de: {{$osc->nome_fantasia}}</h3>
    </div>


    <div class="x_content">
        <h3>Dados Gerais</h3>
        <ul>
            <li>Fantasia: <b>{{$osc->nome_fantasia}}</b></li>
            <li>Telefone: <b>{{$osc->telefone}}</b></li>
            <li>Responsável: <b>{{$osc->responsavel_legal}}</b></li>
            <li>Email: <b>{{$osc->email}}</b></li>
            <li>Site: <b>{{$osc->site}}</b></li>
            <li>Fansatisa: <b>{{$osc->nome_fantasia}}</b></li>
        </ul>
        <h4>Metas ODS</h4>
        @foreach($metas as $meta)
            <ul>
                <li><b class="text-dark">{{$meta->meta_codigo}}</b> - {{$meta->meta_descricao}}</li>
            </ul>

        @endforeach
    </div>
</div>



@stop