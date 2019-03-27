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
            {!! Form::open(['route'=>'projetos.store']) !!}
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body bg-transparent">
                        <label class="text-danger">Campos com * são obrigatórios</label>
                        <hr>
                            <label class="text-success">Dados Gerais</label>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Nome do Projeto</label>
                                        <div class="col-md-8">
                                            {!! Form::text('nome',null,["class"=>"form-control",'required'=>'true']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Valor do Projeto</label>
                                        <div class="col-md-5">
                                            {!! Form::text('valor_meta',null,['class'=>'input input-lg form-control','required'=>'true', 'placeholder'=>'R$','id'=>'project_value']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Início da Captação</label>
                                        <div class="col-md-3">
                                            {!! Form::date('inicio_captacao',null,['class'=>'input input-lg form-control','required'=>'true', 'placeholder'=>'R$','id'=>'project_value']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Fim da Captação</label>
                                        <div class="col-md-3">
                                            {!! Form::date('fim_captacao',null,['class'=>'input input-lg form-control','required'=>'true', 'placeholder'=>'R$','id'=>'project_value']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
									<label for="" class="col-sm-3 col-form-label text-right">Nº de Registro 1</label>
                                        <div class="col-md-3">
                                            {!! Form::text('num_registro1',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Nº de Registro 1</label>
                                        <div class="col-md-3">
                                            {!! Form::text('num_registro2',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Instância</label>
                                        <div class="col-md-4">
                                            {!! Form::select('instancia_id',$instancias,null,['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Ambito</label>
                                        <div class="col-md-4">
                                            {!! Form::select('ambito_id',$ambitos,null,['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Segmento</label>
                                        <div class="col-md-4">
                                            {!! Form::select('segmento_id',$segmentos,null,['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right" data-toggle="tooltip" title="Artigo de Enquadramento">Artigo EQDM</label>
                                        <div class="col-md-4">
                                            {!! Form::text('artigo',null,['class'=>'form-control']) !!}
                                            <span class="help-inline danger">Artigo em que se encaixa o projeto</span>
                                        </div>
                                    </div>
                        <hr>
                        <label for="Dadod do Poponente" class="text-success">Dados do Proponente</label>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Proponente</label>
                                        <div class="col-md-8">
                                            {!! Form::text('responsavel_nome',null,['class'=>'form-control']) !!}
                                            <span class="help-inline text-success">Responsável Legal do Projeto</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Tipo Documento</label>
                                        <div class="col-md-2">
                                            {!! Form::select('tipo_documento',[
                                                 'CPF'  => "CPF",
                                                 'CNPJ' => "CNPJ"],null,
                                             ['class'=>'form-control', 'id'=>'tipo-perfil','placeholder'=> 'selecione']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row" id="tipo-perfil">
                                        <label for="" class="col-sm-3 col-form-label text-right">Nº Documento</label>
                                        <div class="col-md-3">
                                            {!! Form::text('responsavel_cpf_cnpj',null,['class'=>'form-control','id'=>'cpfcnpj']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Telefone Principal</label>
                                        <div class="col-md-3">
                                            {!! Form::text('responsavel_telefone1',null,['class'=>'form-control','id'=>'phone_number']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Telefone Sedunário</label>
                                        <div class="col-md-3">
                                            {!! Form::text('responsavel_telefone2',null,['class'=>'form-control','id'=>'phone_number']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Email Principal</label>
                                        <div class="col-md-6">
                                            {!! Form::text('responsavel_email1',null,['class'=>'form-control','id'=>'email1']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Email Secundário</label>
                                        <div class="col-md-6">
                                            {!! Form::text('responsavel_email2',null,['class'=>'form-control','id'=>'email2']) !!}
                                        </div>
                                    </div>
                        <hr>
                                    <label class="text-success">Conta para receber Doações</label>
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            {!! Form::label('Banco') !!}
                                            {!! Form::select('banco_doacao',$lista_bancos,null,['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
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
                                            {!! Form::label('DV') !!}
                                            {!! Form::text('contaDv_doacao',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                        <hr>
                                <label class="text-success">Conta para Receber Patrocínios</label>
                                <div class="row"><!--row-3-->
                                    <div class="form-group col-md-3">
                                        {!! Form::label('Banco') !!}
                                        {!! Form::select('banco_patrocinio',$lista_bancos,null,['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
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
                                        {!! Form::label('DV') !!}
                                        {!! Form::text('contaDv_patrocinio',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                        <hr>
                        <label for="" class="text-success">Mais informações</label>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="">Objetivo Geral</label>
                                        {!! Form::textarea('objetivo_geral',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'5']) !!}
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Objetivos Específicos</label>
                                        {!! Form::textarea('objetivos_esp',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'5']) !!}
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
                                </div>
                            </div>
                     
                   
                    <div class="card-footer">
                       <center> <button type="submit" class="btn btn-outline-success">Salvar</button> </center>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>



@stop

