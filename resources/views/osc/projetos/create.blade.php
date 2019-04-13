@extends('layouts.dashboard') 

@section('cabecalho')
    <div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-image: url({{asset('vendor/argon-dash/assets/img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-success opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-10">
				<h1 class="display-2 text-white">Olá, {{ auth()->user()->apelido}}</h1>
                    <p class="text-white mt-0 mb-2">Precisamos de algumas informações para incluir o seu projeto, assim que finalizar ele será enviado
                        para aprovação da plataforma. 
                    </p>
                    

                </div>
            </div>
        </div>
    </div>
@stop
@section('conteudo')
    <div class="container-mt--7">
	 <div class="col-xl-12 order-xl-1">
            {!! Form::open(['route'=>'projetos.store']) !!}
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body bg-transparent">

                       
                            <label class="text-success mt-2">Dados Gerais</label>
							<hr>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Nome do Projeto <b class="text-success" data-toggle="tooltip" data-placement="right" title="Publicado na Landing Page"> * </b></label>
                                        <div class="col-md-9">
                                            {!! Form::text('nome_projeto',null,["class"=>"form-control",'required'=>'true']) !!}
                                            @if ($errors->has('nome_projeto'))
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $errors->first('nome_projeto') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Descrição Resumida do Projeto <b class="text-success" data-toggle="tooltip" data-placement="right" title="Publicado na Landing Page"> * </b></label>
                                        <div class="col-md-9">
                                            {!! Form::textarea('descricao_resumida',null,["class"=>"form-control",'required'=>'true','style'=>'resize: none', 'rows'=>'3','maxlenght'=>'250', 'placeholder'=>'Use no máximo 250 caracteres!']) !!}
                                            @if ($errors->has('descricao_resumida'))
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $errors->first('descricao_resumida') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Responsável pelo Projeto</label>
                                        <div class="col-md-6	">
                                            {!! Form::text('responsavel_projeto',null,["class"=>"form-control",'required'=>'true','placeholder'=>'Nome do responsável pelo projeto']) !!}
                                            @if ($errors->has('responsavel_projeto'))
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $errors->first('responsavel_projeto') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Valor do Projeto</label>
                                        <div class="col-md-3">
                                            {!! Form::text('valor_projeto',null,['class'=>'input input-lg form-control','required'=>'true', 'placeholder'=>'R$','id'=>'valor_projeto']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Meta de Captação <b class="text-success" data-toggle="tooltip" data-placement="right" title="Publicado na Landing Page"> * </b></label>
                                        <div class="col-md-3">
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

                                        <label for="tipo" class="col-sm-3 col-form-label text-right">Lei de Incentivo</label>
                                        <div class="col-md-3">
                                            {!! Form::select('lei_incentivo',['1'=>'Sim','0'=>'Não'],null,['class'=>'form-control','placeholder'=>'Selecione...','id'=>'incentivo','required']) !!}
                                            <span class="help-inline text-success" data-toggle="tooltip" title="Recebe via Lei de incentivo?">
                                               Recebe via lei de incentivo?
                                            </span>
                                        </div>

                                    </div>

                        <div id="box-lei" style="display: none">

                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right">Instância (Lei)</label>
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

                            <div id="box-artigo" style="display: none">
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label text-right" data-toggle="tooltip" title="Artigo de Enquadramento">Artigo EQDM</label>
                                    <div class="col-md-4">
                                        {!! Form::select('artigo',['18'=>'Art. 18','26'=>'Art. 26'],null,['class'=>'form-control','placeholder'=>'Selecione']) !!}
                                        <span class="help-inline text-success">Artigo em que se encaixa o projeto?</span>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right">Âmbito</label>
                                <div class="col-md-4">
                                    {!! Form::select('ambito',[
                                        'Federal'   => 'Federal',
                                        'Estadual'  => 'Estadual',
                                        'Municipal' => 'Municipal'
                                    ],null,['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                                </div>
                            </div>

                        </div>

                        <div id="box-segmento" style="display: none">
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right">Segmento</label>
                                <div class="col-md-4">
                                    {!! Form::select('segmento',[
                                        'Meio Ambiente' => 'Meio Ambiente',
                                        'Cultura'       => 'Cultura',
                                        'Esporte'               => 'Esporte',
                                        'Criança e Adolescente' => 'Criança e Adolescente',
                                        'Idoso'             => 'Idoso',
                                        'Saúde'             => 'Saúde'
                                    ],null,['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        
                        <label for="Dadod do Poponente" class="text-success mt-2">Dados do Proponente</label>
						<hr>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Proponente</label>
                                        <div class="col-md-6">
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
                                            {!! Form::text('prop_documento',null,['class'=>'form-control','id'=>'cpfcnpj' ,'placeholder'=>'CPF ou CNPJ' ]) !!}
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
                                        <label for="" class="col-sm-3 col-form-label text-right">E-mail Principal</label>
                                        <div class="col-md-6">
                                            {!! Form::text('prop_email1',null,['class'=>'form-control','id'=>'email1']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">E-mail Secundário</label>
                                        <div class="col-md-6">
                                            {!! Form::text('prop_email2',null,['class'=>'form-control','id'=>'email2']) !!}
                                        </div>
                                    </div>
                        
                                    <label class="text-success mt-2">Dados Bancários</label>
									<hr>
									
									
									<div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right mt-3">Conta para Receber <b class="text-success">Patrocínios</b></label>
                                        <div class="col-md-9">
                                            <div class="row">
                                        <div class="form-group col-md-5">
                                            {!! Form::label('Banco') !!}
                                            {!! Form::select('banco_doacao',$bancos,null,['placeholder'=>'Selecione..','class'=>'form-control']) !!}
                                        </div>

                                        <div class="form-group col-md-2">
                                            {!! Form::label('Agência') !!}
                                            {!! Form::text('agencia_doacao',null,['class'=>'form-control']) !!}
                                        </div>

                                        <div class="form-group col-md-3">
                                            {!! Form::label('Conta') !!}
                                            {!! Form::text('conta_doacao',null,['class'=>'form-control']) !!}
                                        </div>
                                        <div class="form-group col-md-2">
                                            {!! Form::label('OP') !!}
                                            {!! Form::text('op_doacao',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                        </div>
                                    </div>
									
									<div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right mt-3">Conta para Receber <b class="text-success">Doações</b></label>
                                        <div class="col-md-9">
                                            <div class="row">
                                        <div class="form-group col-md-5">
                                            {!! Form::label('Banco') !!}
                                            {!! Form::select('banco_patrocinio',['001'=>'001 - BANCO DO BRASIL S/A'],null,['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                                        </div>

                                        <div class="form-group col-md-2">
                                            {!! Form::label('Agência') !!}
                                            {!! Form::text('agencia_patrocinio',null,['class'=>'form-control']) !!}
                                        </div>

                                        <div class="form-group col-md-3">
                                            {!! Form::label('Conta') !!}
                                            {!! Form::text('conta_patrocinio',null,['class'=>'form-control']) !!}
                                        </div>
                                        <div class="form-group col-md-2">
                                            {!! Form::label('OP') !!}
                                             {!! Form::text('op_patrocinio',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                     
                       
                        <label for="" class="text-success mt-2">Fale sobre seu Projeto</label>
						 <hr>
                         <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right">Resumo do Projeto<b class="text-primary" data-toggle="tooltip" data-placement="right" title="Publicado na Landing Page"> * </b></label>
                                <div class="col-md-9">
								 {!! Form::textarea('resumo',null,['class'=>'form-control contador1','style'=>'resize: none','rows'=>'5','maxlenght'=>'500','maxlenght'=>'500', 'placeholder'=>'Use no máximo 500 caracteres!']) !!}
                                    <span class='caracteres1'></span>
									 @if ($errors->has('resumo'))
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('resumo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
							
							<div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right">Objetivos que deseja atingir<b class="text-primary" data-toggle="tooltip" data-placement="right" title="Publicado na Landing Page"> * </b> </label>
                                <div class="col-md-9">
								{!! Form::textarea('objetivos',null,['class'=>'form-control contador2','maxlenght'=>'500', 'style'=>'resize: none', 'rows'=>'5','maxlenght'=>'500', 'placeholder'=>'Use no máximo 500 caracteres!']) !!}
                                    <span class='caracteres2'></span>
									@if ($errors->has('objetivos'))
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('objetivos') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
							
							<div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right">Justifictiva <b class="text-primary" data-toggle="tooltip" data-placement="right" title="Publicado na Landing Page"> * </b></label>
                                <div class="col-md-9">
								 {!! Form::textarea('justificativa',null,['class'=>'form-control contador3', 'style'=>'resize: none', 'rows'=>'5','maxlenght'=>'500', 'placeholder'=>'Use no máximo 500 caracteres!']) !!}
                                    <span class='caracteres3'></span>
									@if ($errors->has('justificativa'))
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('justificativa') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
							
							<div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right">Publico Alvo <b class="text-primary" data-toggle="tooltip" data-placement="right" title="Publicado na Landing Page"> * </b></label>
                                <div class="col-md-9">
								{!! Form::textarea('publico_alvo',null,['class'=>'form-control contador4', 'style'=>'resize: none', 'rows'=>'5','maxlenght'=>'500', 'placeholder'=>'Use no máximo 500 caracteres!']) !!}
                                    <span class='caracteres4'></span>
										@if ($errors->has('missao'))
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('publico_alvo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
							
							<div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right"> Impactos Esperados<b class="text-primary" data-toggle="tooltip" data-placement="right" title="Publicado na Landing Page"> * </b> </label>
                                <div class="col-md-9">
								{!! Form::textarea('impactos_esperados',null,['class'=>'form-control contador5', 'style'=>'resize: none', 'rows'=>'5','maxlenght'=>'500', 'placeholder'=>'Use no máximo 500 caracteres!']) !!}
                                    <span class='caracteres5'></span>
									@if ($errors->has('visao'))
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('impactos_esperados') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
							
							<div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right"> Contra Partida<b class="text-primary" data-toggle="tooltip" data-placement="right" title="Publicado na Landing Page"> * </b> </label>
                                <div class="col-md-9">
                                    {!! Form::textarea('contr_partida',null,['class'=>'form-control contador6', 'style'=>'resize: none', 'rows'=>'5','maxlenght'=>'500','placeholder'=>'Use no máximo 500 caracteres!']) !!}
                                    <span class='caracteres6'></span>
									@if ($errors->has('valores'))
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('contra_partida') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
						
                                </div>
                            </div>
							</div>
                     </div>
                   
                    <div class="card-footer text-center">
                       <button type="submit" class="btn btn-outline-success">Salvar</button> 
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
            // $("#cpf").mask('000.000.000-00');
            // $("#cnpj").mask('00.000.000/0000-00');

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
    <script>
        $(document).ready(function(){
            let incentivo        = $('#incentivo');
            let boxLei           = $('#box-lei');
            let boxSegmento      = $('#box-segmento');

            incentivo.change(function(){
                if(incentivo.val() == 1){
                    boxLei.css({'display':'block'});
                    boxSegmento.css({'display':'none'})
                }else{
                    boxLei.css({'display':'none'});
                    boxSegmento.css({'display':'block'})
                }
            });
        });


        $(document).ready(function(){
            let artigo     = $('#artigo');
            let boxArtigo  = $('#box-artigo');

            artigo.change(function(){
                if(artigo.val() == 'Lei Rouanet'){
                    boxArtigo.css({'display':'block'});
                }else{
                    boxArtigo.css({'display':'none'});
                }
            });
        });
    </script>

@stop

