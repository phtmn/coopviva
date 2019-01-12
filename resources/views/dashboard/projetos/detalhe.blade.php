<!--@extends('adminlte::page') -->
@extends('adminlte::master')


@section('title', 'Usuários')

@section('content_header')
    <div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>$ {{ number_format($total,2,',','.') }}</h3>
                <p>Total disponivel para esse Projeto</p>
            </div>
            <div class="icon">
                <i class="fa fa-money"></i>
            </div>
            <a href="#" class="small-box-footer">
               
            </a>
        </div>
    </div>
        <div class="col-lg col-xs-6">
            
        </div>
    </div>



@stop

@section('content')
<div class="row">
    <div class="col-md-8 sm-12">
         <div class="box box-primary">
             <div class="box-header with-border">
                <h3>Detalhe do Projeto: {{$row->description}} </h3>
             </div>

             <div class="box-body">
                 <div class="box-title with-border">
                     <h4>Dados Gerais</h4>
                 </div>
                <dl class="dl-horizontal">
                    <dt>Nome do Projeto</dt>
                    <dd>{{$row->description}}</dd>
                    <dt>Instancia do Projeto</dt>
                    <dd>{{$row->project_instance}}</dd>
                    <dt>Ambito</dt>
                    <dd>{{$row->ambit}}</dd>
                    <dt>Numero de Registro</dt>
                    <dd>{{$row->register_number1}}</dd>
                    <dt>Numero de Registro 2</dt>
                    <dd>{{$row->register_number2}}</dd>
                    <dt>Segmento Cultural</dt>
                    <dd>{{$row->cultural_segment}}</dd>
                    <dt>Artigo de Enquadramento</dt>
                    <dd>{{$row->framework_article}}</dd>
                </dl>
                 <div class="box-title">
                     <h4>Dados Bancários</h4>
                 </div>
                 <dl class="dl-horizontal">
                     <dt>Banco</dt>
                     <dd>{{$row->bank}}</dd>
                     <dt>Agencia</dt>
                     <dd>{{$row->bank_agent}}</dd>
                     <dt>Conta</dt>
                     <dd>{{$row->checking_account}}</dd>
                 </dl>

                 <div class="box-title">
                     <h4>Dados do Proponente</h4>
                 </div>
                 <dl class="dl-horizontal">
                     <dt>Nome do Proponente</dt>
                     <dd>{{$row->proponent_name}}</dd>
                     <dt>Documento</dt>
                     <dd>{{$row->proponent_document}}</dd>
                     <dt>Responsável</dt>
                     <dd>{{$row->responsible_company}}</dd>
                     <dt>Numero de Telefone</dt>
                     <dd>{{$row->phone_number}}</dd>
                     <dt>Numero de Contato</dt>
                     <dd>{{$row->phone_number2}}</dd>
                     <dt>Email Principal</dt>
                     <dd>{{$row->primary_email}}</dd>
                     <dt>Email Secundário</dt>
                     <dd>{{$row->secondary_email}}</dd>
                 </dl>
            </div>
         </div>
    </div>

    <div class="col-md-4 sm-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3>Painel de Opções</h3>
            </div>
            <div class="box box-body">
                <a href="{{ route('projects.capturar',[$row->id]) }}" class="btn btn-small btn-primary">Capturar Recursos para esse projeto</a>
            <p></p>
                <a href="list-group-item" class="btn btn-small btn-primary" data-toggle="modal" data-target="#myModal">Capturar um valor para esse projeto</a>
            </div>
        </div>
    </div>


</div>

<form action="#" method="POST">
    <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Digite o Valor para capturar</h4>
                </div>
                <div class="modal-body">

                    {{ csrf_field() }}
                    <h4 class="">Valor Disponivel: {{$total}}</h4>
                    <div class="form-group">
                        <label for="Arquivo">Valor:</label>
                        <input type="text" name="value" class="form-control" required="">
                    </div>
                    <input type="hidden" name="project_id" value="{{$row->id}}">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>

            </div>
        </div>
    </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('vendor/material-lite/lite/css/style.css')}}">
@stop


@section('js')


@stop