@extends('osc.painel')

@section('cabecalho')

    <div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-image: url({{asset('vendor/argon-dash/assets/img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-success opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-10">
                    <h1 class="display-2 text-white">Olá, {{ auth()->user()->nome_social}}</h1>
                    <p class="text-white mt-0 mb-2">Precisamos de algumas informações para incluir o seu projeto, assim que finalizar ele será enviado
                        para aprovação da plataforma.
                    </p>
                    <p class="text-success">#SimEuQuero</p>

                </div>
            </div>
        </div>
    </div>
@stop
@section('conteudo')
    <div class="container-mt--7">
        {!! Form::model($projeto,['route'=> ['projetos.update',$projeto->id],'enctype'=>'multipart/form-data']) !!}
        @method('PUT')
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card shadow">
                    <div class="card-body bg-transparent">
                        <hr>
                        <label class="text-success">Dados Gerais</label>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label text-right">Nome do Projeto</label>
                            <div class="col-md-8">
                                {!! Form::text('nome_projeto',null,["class"=>"form-control",'required'=>'true']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label text-right">Descricao Resumida</label>
                            <div class="col-md-8">
                                {!! Form::textarea('descricao_resumida',null,["class"=>"form-control",'required'=>'true','rows'=>'2']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label text-right">Responsável pelo Projeto</label>
                            <div class="col-md-8">
                                {!! Form::text('responsavel_projeto',null,["class"=>"form-control",'required'=>'true']) !!}
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label text-right">Valor do Projeto</label>
                            <div class="col-md-5">
                                {!! Form::text('valor_projeto',null,['class'=>'input input-lg form-control','required'=>'true', 'placeholder'=>'R$','id'=>'valor_projeto']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label text-right">Valor de Meta</label>
                            <div class="col-md-5">
                                {!! Form::text('valor_meta',null,['class'=>'input input-lg form-control','required'=>'true', 'placeholder'=>'R$','id'=>'valor_meta']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label text-right">Início da Captação</label>
                            <div class="col-md-3">
                                {!! Form::date('data_inicio',null,['class'=>'input input-lg form-control','required'=>'true', 'placeholder'=>'R$','id'=>'project_value']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label text-right">Fim da Captação</label>
                            <div class="col-md-3">
                                {!! Form::date('data_final',null,['class'=>'input input-lg form-control','required'=>'true', 'placeholder'=>'R$','id'=>'project_value']) !!}
                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="tipo" class="col-sm-3 col-form-label text-right">Lei de Incentivo?</label>
                            <div class="col-md-3">
                                {!! Form::select('lei_incentivo',['1'=>'Sim','0'=>'Não'],null,['class'=>'form-control','placeholder'=>'Selecione...','id'=>'incentivo']) !!}
                                <span class="help-inline text-success" data-toggle="tooltip" title="Recebe via lei de incentivo?">
                                        Recebe via lei de incentivo?
                                    </span>
                            </div>

                        </div>

                        @if($projeto->lei_incentivo == 1)

                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right">Instância(Lei)</label>
                                <div class="col-md-4">
                                    {!! Form::select('lei',[
                                        'Lei Rouanet' => 'Lei Rouanet',
                                        'Fia'         => 'Fia',
                                        'Pronon'      => 'Pronon',
                                        'Pronas'      => 'Pronas',
                                        'Esporte'     => 'Esporte',
                                        'Idoso'       => 'Idoso'
                                    ],null,['placeholder'=>'Escolha uma opção','class'=>'form-control','id'=>'artigo']) !!}
                                </div>
                            </div>
                            @if($projeto->lei == 'Lei Rouanet')
                            <div id="box-artigo">
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label text-right" data-toggle="tooltip" title="Artigo de Enquadramento">Artigo EQDM</label>
                                    <div class="col-md-4">
                                        {!! Form::select('artigo',['18'=>'Art. 18','26'=>'Art. 26'],null,['class'=>'form-control','placeholder'=>'Selecione']) !!}
                                        <span class="help-inline danger">Artigo em que se encaixa o projeto</span>
                                    </div>
                                </div>
                            </div>
                            @endif

                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right">Ambito</label>
                                <div class="col-md-4">
                                    {!! Form::select('ambito',[
                                        'Federal'   => 'Federal',
                                        'Estadual'  => 'Estadual',
                                        'Municipal' => 'Municipal'
                                    ],null,['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                                </div>
                            </div>

                        @endif
                        @if($projeto->lei_incentivo == 0)
                            <div id="box-segmento">
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label text-right">Segmento</label>
                                    <div class="col-md-4">
                                        {!! Form::select('segmento',[
                                            'Meio Ambiente' => 'Meio Ambiente',
                                            'Cultura'       => 'Cultura',
                                            'Esporte'       => 'Esporte',
                                            'Criança e Adolescente' => 'Criança e Adolescente',
                                            'Idoso'             => 'Idoso',
                                            'Saúde'             => 'Saúde'
                                        ],null,['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        @endif
                        <hr>
                        <label for="Dadod do Poponente" class="text-success">Dados do Proponente</label>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label text-right">Proponente</label>
                            <div class="col-md-8">
                                {!! Form::text('prop_nome',null,['class'=>'form-control']) !!}
                                <span class="help-inline text-success">Responsável Legal do Projeto</span>
                            </div>
                        </div>

                        {{--                                    <div class="form-group row">--}}
                        {{--                                        <label for="" class="col-sm-3 col-form-label text-right">Tipo Documento</label>--}}
                        {{--                                        <div class="col-md-2">--}}
                        {{--                                            {!! Form::select('tipo_documento',[--}}
                        {{--                                                 'CPF'  => "CPF",--}}
                        {{--                                                 'CNPJ' => "CNPJ"],null,--}}
                        {{--                                             ['class'=>'form-control', 'id'=>'tipo-perfil','placeholder'=> 'selecione']) !!}--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}

                        <div class="form-group row" id="tipo-perfil">
                            <label for="" class="col-sm-3 col-form-label text-right">Nº Documento</label>
                            <div class="col-md-3">
                                {!! Form::text('prop_documento',null,['class'=>'form-control','id'=>'cpfcnpj']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label text-right">Telefone Principal</label>
                            <div class="col-md-3">
                                {!! Form::text('prop_telefone1',null,['class'=>'form-control','id'=>'telefone1']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label text-right">Telefone Sedunário</label>
                            <div class="col-md-3">
                                {!! Form::text('prop_telefone2',null,['class'=>'form-control','id'=>'telefone2']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label text-right">Email Principal</label>
                            <div class="col-md-6">
                                {!! Form::text('prop_email1',null,['class'=>'form-control','id'=>'email1']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label text-right">Email Secundário</label>
                            <div class="col-md-6">
                                {!! Form::text('prop_email2',null,['class'=>'form-control','id'=>'email2']) !!}
                            </div>
                        </div>
                        <hr>
                        <label class="text-success">Conta para receber Doações</label>
                        <div class="row">
                            <div class="form-group col-md-3">
                                {!! Form::label('Banco') !!}
                                {!! Form::select('banco_doacao',['lista'=>'lista'],null,['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                            </div>

                            <div class="form-group col-md-2">
                                {!! Form::label('Agência') !!}
                                {!! Form::text('agencia_doacao',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group col-md-3">
                                {!! Form::label('Conta') !!}
                                {!! Form::text('conta_doacao',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group col-md-1">
                                {!! Form::label('OP') !!}
                                {!! Form::text('op_doacao',null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <hr>
                        <label class="text-success">Conta para Receber Patrocínios</label>
                        <div class="row"><!--row-3-->
                            <div class="form-group col-md-3">
                                {!! Form::label('Banco') !!}
                                {!! Form::select('banco_patrocinio',['lista'=>'lista'],null,['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                            </div>

                            <div class="form-group col-md-2">
                                {!! Form::label('Agência') !!}
                                {!! Form::text('agencia_patrocinio',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group col-md-3">
                                {!! Form::label('Conta') !!}
                                {!! Form::text('conta_patrocinio',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group col-md-1">
                                {!! Form::label('OP') !!}
                                {!! Form::text('op_patrocinio',null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <hr>
                        <label for="" class="text-success">Fale sobre seu Projeto</label>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="">Resumo do Projeto</label>
                                {!! Form::textarea('resumo',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'5']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Objetivos</label>
                                {!! Form::textarea('objetivos',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'5']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Justificativa</label>
                                {!! Form::textarea('justificativa',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'5']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Público Alvo</label>
                                {!! Form::textarea('publico_alvo',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'5']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Impactos Esperados</label>
                                {!! Form::textarea('impactos_esperados',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'5']) !!}
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Contra Partidas</label>
                                {!! Form::textarea('contra_partidas',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'5']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-outline-success">Salvar</button>
                    </div>
                </div>
            </div>
        </div>


        </div>
        {!! Form::close() !!}
    </div>
    </div>

@stop

@section('js')
    <script src="{{asset('js/jquery.mask.min.js')}}"> </script>
    <script>
        $(document).ready(function(){
            $("#valor_projeto").mask('#.##0,00', {reverse: true});
            $("#valor_meta").mask('#.##0,00', {reverse: true});
            $("#telefone1").mask('(00)00000-0000');
            $("#telefone2").mask('(00)00000-0000');

        });

        $("#cpfcnpj").keydown(function(){
            try {
                $("#cpfcnpj").unmask();
            } catch (e) {}

            var tamanho = $("#cpfcnpj").val().length;

            if(tamanho < 11){
                $("#cpfcnpj").mask("999.999.999-99");
            } else if(tamanho >= 11){
                $("#cpfcnpj").mask("99.999.999/9999-99");
            }

            // ajustando foco
            var elem = this;
            setTimeout(function(){
                // mudo a posição do seletor
                elem.selectionStart = elem.selectionEnd = 10000;
            }, 0);
            // reaplico o valor para mudar o foco
            var currentValue = $(this).val();
            $(this).val('');
            $(this).val(currentValue);
        });
    </script>


@stop

