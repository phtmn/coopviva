@extends('osc.painel')

@section('cabecalho')
    <div class="header bg-gradient-success pb-8 pt-5 pt-md-8">        <!-- Mask -->
        
        <div class="container-fluid align-items-center">
            
            {!! Form::open(['route'=>'projetos.store']) !!}
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body bg-transparent">
                        <div class="tab-content" id="myTabContent">
                        <p class="text-success">Dados Gerais</p>
                            <hr>
                                <div class="row"> <!--row-1-->
                                    <div class="form-group col-md-6">
                                        <label for="">Nome do Projeto</label>
                                        {!! Form::text('descricao',null,["class"=>"form-control",'required'=>'true']) !!}
                                    </div>

                                    <div class="form-group col-md-2 pull-right">
                                        {!! Form::label('Valor (R$)') !!}
                                        {!! Form::text('valor_meta',null,['class'=>'input input-lg form-control','required'=>'true', 'placeholder'=>'R$','id'=>'project_value']) !!}
                                    </div>

                                    <div class="form-group col-md-2">
									<label for="">Nº de Registro 1</label>
                                        
                                        {!! Form::text('num_registro1',null,['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-md-2">
									<label for="">Nº de Registro 2</label>
                                        
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
										<label for="">Artigo de Enquadramento</label> 
                                    
                                        {!! Form::text('artigo',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>

                                <div class="row"><!--row-4-->
                                    <div class="form-group col-md-6">
                                       	<label for="">Nome do Proponente</label> 
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
										<label for="">Nº do Documento</label> 
                                        
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
                                        <br><h5 class="text-right text-success">Conta para receber Doações</h5>
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
                                        <br><h5  class="text-right text-success">Conta para receber Patrocínios</h5>
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
                            <p class="text-success">Descrição</p>
                            <hr>
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

