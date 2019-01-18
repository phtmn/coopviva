@extends('site.master')

@section('content')
    @include('dashboard.menu')
    
    <div class="container" style="margin-top:20px">
            <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Cadastro de Projeto</h3>
                        </div>
                        <!-- /.card-header -->
                       
                            @if( isset($projeto) )
                                {{ Form::model($projeto,['route'=> ['projetos.update',$projeto->id] ]) }}
                                    @method('PUT')
                            @else
                                {{ Form::open(['route'=>'projetos.store']) }}                                
                            @endif
                            {{ csrf_field() }}
                        <div class="card-body">
                            
                            <h3 class="card-title">Dados Gerais</h3>
                                <div class="row"> <!--row-1-->
                                    <div class="form-group col-md-6">
                                        {!! Form::label('Nome do Projeto') !!}
                                        {!! Form::text('descricao',null,["class"=>"form-control",'required'=>'true']) !!}                           
                                    </div>

                                    <div class="form-group col-md-3">                                    
                                        {!! Form::label('Instancia') !!}
                                        {!! Form::text('instancia',null,['placeholder'=>'Selecione uma opção','class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-md-3">
                                        {!! Form::label('Ambito') !!}
                                        {!! Form::select('ambito',[
                                                        'federal'   =>  "Federal",
                                                        'estadual'  => "Estadual",
                                                        'municipal' => "Municipal"
                                                        ],null,
                                        ['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}                            
                                    </div>
                                </div><!--endOfRow1-->
                            
                                <div class="row"><!--row-2-->
                                    <div class="form-group col-md-3">
                                        {!! Form::label('Numero de Registro 1') !!}
                                        {!! Form::text('num_registro1',null,['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-md-3">
                                        {!! Form::label('Numero de Registro 2') !!}
                                        {!! Form::text('num_registro2',null,['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-md-3">
                                        {!! Form::label('Segmento Cultural') !!}
                                        {!! Form::select('segmento_cultural',[
                                                        'esportes'  => "Esportes",
                                                        'cultura'   => "Cultura",
                                                        'educação'  => "Educação",
                                                        'saude'     => "Saúde"
                                                        ],null,
                                        ['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-md-3">
                                        {!! Form::label('Artigo de Enquadramento') !!}
                                        {!! Form::text('framework_article',null,['class'=>'form-control']) !!}
                                    </div>
                                </div><!--end-of-row-2-->

                                {{--<hr>--}}
                                {{--<h3 class="card-title">Dados Bancários</h3>--}}
                                    {{--<div class="row"><!--row-3-->--}}
                                        {{--<div class="form-group col-md-3">--}}
                                            {{--{!! Form::label('Banco') !!}--}}
                                            {{--{!! Form::select('bank',[--}}
                                                    {{--'CEF'   =>  "Caixa Economica Federal",--}}
                                                    {{--'BB'    =>  "Banco do Brasil",--}}
                                                    {{--'SA'    =>  "Banco Santander",--}}
                                                    {{--'IT'    =>  "Banco Itaú"  --}}
                                            {{--],null,['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}--}}
                                        {{--</div>--}}

                                        {{--<div class="form-group col-md-3">--}}
                                            {{--{!! Form::label('Agencia') !!}--}}
                                            {{--{!! Form::text('bank_agent',null,['class'=>'form-control']) !!}--}}
                                        {{--</div>--}}

                                        {{--<div class="form-group col-md-3">--}}
                                            {{--{!! Form::label('Conta') !!}--}}
                                            {{--{!! Form::text('checking_account',null,['class'=>'form-control']) !!}--}}
                                        {{--</div>--}}
                                    {{--</div><!--end-of-row-3-->--}}
                                {{--<hr>--}}
                                {{--<h3 class="card-title">Dados do Proponente</h3>--}}
                                    {{--<div class="row"><!--row-4-->--}}
                                        {{--<div class="form-group col-md-6">--}}
                                            {{--{!! Form::label('Nome do Proponente') !!}--}}
                                            {{--{!! Form::text('proponent_name',null,['class'=>'form-control']) !!}--}}
                                        {{--</div>--}}

                                        {{--<div class="form-group col-md-3">--}}
                                            {{--{!! Form::label('Documento') !!}--}}
                                            {{--{!! Form::text('proponent_document',null,['class'=>'form-control','placeholder'=>'CPF ou CNPJ']) !!}--}}
                                        {{--</div>                        --}}
                                    {{--</div><!--end-of-row-4-->--}}

                                    {{--<div class="row"><!--row-5-->--}}
                                        {{--<div class="form-group col-md-4">--}}
                                            {{--{!! Form::label('Responsável pela Empresa') !!}--}}
                                            {{--{!! Form::text('responsible_company',null,['class'=>'form-control']) !!}--}}
                                        {{--</div>--}}

                                        {{--<div class="form-group col-md-4">--}}
                                            {{--{!! Form::label('Numero de Telefone') !!}--}}
                                            {{--{!! Form::text('phone_number',null,['class'=>'form-control','id'=>'phone_number']) !!}--}}
                                        {{--</div>--}}

                                        {{--<div class="form-group col-md-4">--}}
                                            {{--{!! Form::label('Numero de Telefone 2') !!}--}}
                                            {{--{!! Form::text('phone_number2',null,['class'=>'form-control','id'=>'phone_number']) !!}--}}
                                        {{--</div>--}}
                                    {{--</div><!--end-of-row-5-->--}}

                                    {{--<div class="row"><!--row-6-->--}}
                                        {{--<div class="form-group col-md-6">--}}
                                            {{--{!! Form::label('Email Principal') !!}--}}
                                            {{--{!! Form::email('primary_email',null,['class'=>'form-control']) !!}--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group col-md-6">--}}
                                            {{--{!! Form::label('Email Secundário') !!}--}}
                                            {{--{!! Form::email('secondary_email',null,['class'=>'form-control']) !!}--}}
                                        {{--</div>--}}
                                    {{--</div><!--end-of-row-6-->--}}



                                        <div class="row"><!--row-7-->
                                            <div class="form-group col-md-6 pull-right">
                                                {!! Form::label('Valor do Projeto') !!}
                                                {!! Form::text('valor_meta',null,['class'=>'input input-lg form-control','required'=>'true']) !!}
                                            </div>
                                        </div><!--end-of-row-7-->

                                    <button type="submit" class="btn btn-primary">Salvar</button>                                   
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop


@section('js')
    <script src="{{asset('js/jquery.mask.min.js')}}"> </script>
    <script>
        $(document).ready(function(){
            $("#project_value").mask('#.##0,00', {reverse: true});
            $("#phone_number").mask('(00)00000-0000');
            $("#phone_number2").mask('(00)00000-0000');
        });

    </script>

@stop