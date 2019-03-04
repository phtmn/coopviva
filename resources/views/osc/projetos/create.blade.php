@extends('osc.painel')

@section('cabecalho')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url({{asset('vendor/argon-dash/assets/img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <div class="container-fluid align-items-center">
            <div class="col-md-12">
                <div class="nav-wrapper">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">
                                <i class="ni ni-cloud-upload-96 mr-2"></i>Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">
                                <i class="ni ni-bell-55 mr-2"></i>Dados Informativos</a>
                        </li>
                    </ul>
                </div>
            </div>
            {!! Form::open(['route'=>'projetos.store']) !!}
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body bg-transparent">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                <div class="row"> <!--row-1-->
                                    <div class="form-group col-md-6">
                                        {!! Form::label('Nome do Projeto') !!}
                                        {!! Form::text('descricao',null,["class"=>"form-control",'required'=>'true']) !!}
                                    </div>

                                    <div class="form-group col-md-2 pull-right">
                                        {!! Form::label('Valor (R$)') !!}
                                        {!! Form::text('valor_meta',null,['class'=>'input input-lg form-control','required'=>'true', 'placeholder'=>'R$','id'=>'project_value']) !!}
                                    </div>

                                    <div class="form-group col-md-2">
                                        {!! Form::label('Nº de Registro 1') !!}
                                        {!! Form::text('num_registro1',null,['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-md-2">
                                        {!! Form::label('Nº de Registro 2') !!}
                                        {!! Form::text('num_registro2',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>

                                <div class="row"><!--row-2-->
                                    <div class="form-group col-md-3">
                                        {!! Form::label('Instância') !!}
                                        {!! Form::select('instancia',[
                                                        'Rouanet'   =>  "Lei Rouanet",
                                                        'Esporte'  => "Lei Incentivo ao Esporte",
                                                        'Criaca_Adolescente' => "Lei Incentivo a Criança e Adolescente"
                                                        ],null,
                                        ['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-md-3">
                                        {!! Form::label('Âmbito') !!}
                                        {!! Form::select('ambito',[
                                                        'Federal'   =>  "Federal",
                                                        'Estadual'  => "Estadual",
                                                        'Municipal' => "Municipal"
                                                        ],null,
                                        ['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-md-3">
                                        {!! Form::label('Segmento ') !!}
                                        {!! Form::select('segmento_cultural',[
                                                        'Educação'  => "Educação (Crianças/Jovens)",
                                                        'Meio'  => "Meio Ambiente",
                                                        'Idosos'   => "Idosos",
                                                        'Saúde'     => "Saúde",
                                                        'Esportes'  => "Esportes",
                                                        'Cultura'  => "Cultura"
                                                        ],null,
                                        ['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-md-3">
                                        {!! Form::label('Artigo de Enquadramento') !!}
                                        {!! Form::text('artigo',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>

                                <div class="row"><!--row-4-->
                                    <div class="form-group col-md-6">
                                        {!! Form::label('Nome do Proponente') !!}
                                        {!! Form::text('nome',null,['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-md-3">
                                        {!! Form::label('Documento') !!}
                                        {!! Form::select('tipo_documento',[
                                             'CPF'  => "CPF",
                                             'CNPJ' => "CNPJ"],null,
                                         ['class'=>'form-control', 'id'=>'tipo-perfil','placeholder'=> 'selecione']) !!}
                                    </div>

                                    <div class="form-group col-md-3" id="tipo-perfil">
                                        {!! Form::label('Nº do Documento') !!}
                                        {!! Form::text('documento',null,['class'=>'form-control','id'=>'cpfcnpj']) !!}
                                    </div>
                                </div>

                                <div class="row"><!--row-5-->
                                    <div class="form-group col-md-2">
                                        {!! Form::label('Telefone 1') !!}
                                        {!! Form::text('telefone_1',null,['class'=>'form-control','id'=>'phone_number']) !!}
                                    </div>

                                    <div class="form-group col-md-2">
                                        {!! Form::label('Telefone 2') !!}
                                        {!! Form::text('telefone_2',null,['class'=>'form-control','id'=>'phone_number2']) !!}
                                    </div>

                                    <div class="form-group col-md-4">
                                        {!! Form::label('E-mail Principal') !!}
                                        {!! Form::email('email_1',null,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-4">
                                        {!! Form::label('E-mail Secundário') !!}
                                        {!! Form::email('email_2',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="form-group col-md-4">
                                        <br><h5 class="text-right">Conta para receber Doações</h5>
                                    </div>

                                    <!--row-3-->
                                    <div class="form-group col-md-3">
                                        {!! Form::label('Banco') !!}
                                        {!! Form::select('banco_doacao',[
                                        'CEF'   =>  "Caixa Economica Federal",
                                        'BB'    =>  "Banco do Brasil",
                                        'SA'    =>  "Banco Santander",
                                        'IT'    =>  "Banco Itaú"
                                        ],null,['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-md-2">
                                        {!! Form::label('Agência') !!}
                                        {!! Form::text('agencia_doacao',null,['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-md-2">
                                        {!! Form::label('Conta') !!}
                                        {!! Form::text('conta_doacao',null,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-1">
                                        {!! Form::label('DV') !!}
                                        {!! Form::text('contaDv_doacao',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>

                                <div class="row"><!--row-3-->
                                    <div class="form-group col-md-4">
                                        <br><h5  class="text-right">Conta para receber Patrocínios</h5>
                                    </div>
                                    <div class="form-group col-md-3">
                                        {!! Form::label('Banco') !!}
                                        {!! Form::select('banco_patrocinio',[
                                        'BB'    =>  "Banco do Brasil"
                                        ],null,['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-md-2">
                                        {!! Form::label('Agência') !!}
                                        {!! Form::text('agencia_patrocinio',null,['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-md-2">
                                        {!! Form::label('Conta') !!}
                                        {!! Form::text('conta_patrocinio',null,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-1">
                                        {!! Form::label('DV') !!}
                                        {!! Form::text('contaDv_patrocinio',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show " id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="">Objetivo Geral</label>
                                        {!! Form::textarea('objetivo_geral',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'3']) !!}
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Objetivos Específicos</label>
                                        {!! Form::textarea('objetivos_esp',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'3']) !!}
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Justificativa</label>
                                        {!! Form::textarea('justificativa',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'3']) !!}
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Público Alvo</label>
                                        {!! Form::textarea('publico_alvo',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'3']) !!}
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Impactos Esperados</label>
                                        {!! Form::textarea('impactos_esperados',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'3']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-success">Salvar</button>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>



@stop

