@extends('site.master')

@section('content')
    @include('dashboard.menu')
<div class="container">

        @if( $osc)
            {!! Form::model($osc, [ 'route' => ['osc.update', $osc->id ],'method'=>'PUT']) !!}
            @method('PUT')
        @else
            {!! Form::open(['route'=>'osc.store']) !!}
        @endif
        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Nome Fantasia</label>
                {!! Form::text('nome_fantasia',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-md-2">
                <label for="">Sigla</label>
                {!! Form::text('sigla_osc',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-md-2">
                <label for="">Ano Fundação</label>
                {!! Form::text('ano_fundacao',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-md-2">
                <label for="">Ano Inscrição CNPJ</label>
                {!! Form::text('ano_inscricao_cnpj',null,['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Responsável Legal</label>
                {!! Form::text('responsavel_legal',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-md-4">
                <label for="">Email do Responsável</label>
                {!! Form::text('email',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-md-2">
                <label for="">Telefone</label>
                {!! Form::text('telefone',null,['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="">Site</label>
                {!! Form::text('site',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-md-4">
                <label for="">Situacao do Imóvel</label>
                {!! Form::text('situacao_imovel',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-md-4">
                <label for="">Atividade Econômica</label>
                {!! Form::text('atividade_economica',null,['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="">Area de Atuação</label>
                {!! Form::text('area_atuacao',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-md-4">
                <label for="">Sub-Área 01</label>
                {!! Form::text('sub_area1',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-md-4">
                <label for="">Sub-Área 02</label>
                {!! Form::text('sub_area2',null,['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </div>

        {!! Form::close() !!}
</div>
@endsection