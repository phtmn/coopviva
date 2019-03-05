@extends('layouts.dashboard')


@section('cabecalho')

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid align-items-center">
            <div class="col-md-12">
                <div class="nav-wrapper">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">
                                <i class=" mr-2"></i>Dados Gerais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">
                                <i class=" mr-2"></i>Descrição</a>
                        </li>

                    </ul>
                </div>
            </div>
            {!! Form::model($osc,['route'=> ['osc.update',$osc->id],'enctype'=>'multipart/form-data']) !!}
                  @method('PUT')
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body bg-transparent">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                            
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">Nome Fantasia</label>
                                        {!! Form::text('nome_fantasia',null,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="">Sigla OSC</label>
                                        {!! Form::text('sigla_osc',null,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for=""> <strong title="Ano de Fundação" data-toggle="tooltip"> * </strong> Fundação</label>
                                        {!! Form::text('ano_fundacao',null,['class'=>'form-control','id'=>'anofun',  'placeholder' => 'Ano']) !!}
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="">  <strong title="Ano de inscrição no Cadastro de CNPJ" data-toggle="tooltip"> * </strong> Inscrição CNPJ</label>
                                        {!! Form::text('ano_inscricao_cnpj',null,['class'=>'form-control','id'=>'ano','placeholder' => 'Ano']) !!}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <label for=""><strong title="Atividade Econômica" data-toggle="tooltip"> * </strong> CNAE</label>
                                        {!! Form::text('cnae',null,['class'=>'form-control','id'=>'cnae']) !!}
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="">Responsável Legal</label>
                                        {!! Form::text('responsavel_legal',null,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">E-mail </label>
                                        {!! Form::text('email',null,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="">Telefone</label>
                                        {!! Form::text('telefone',null,['class'=>'form-control','id'=>'telefone']) !!}
                                    </div>
                                </div>
                                <p class="text-primary">Localização e Endereço</p> 
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="cep">CEP</label>
                                        {!! Form::text('cep',$endereco->cep,['class'=> 'form-control','id'=>'cep']) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="rua">Rua/Logradouro</label>
                                        {!! Form::text('rua',$endereco->rua,['class'=> 'form-control','id'=>'endereco']) !!}
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="numero">Bairro</label>
                                        {!! Form::text('bairro',$endereco->bairro,['class'=> 'form-control','id'=>'bairro']) !!}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <label for="numero">Número</label>
                                        {!! Form::text('numero',$endereco->numero,['class'=> 'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="cidade">Cidade</label>
                                        {!! Form::text('cidade',$endereco->cidade,['class'=> 'form-control','id'=>'cidade']) !!}
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="uf">Estado</label>
                                        {!! Form::text('uf',$endereco->uf,['class'=> 'form-control','id'=>'estado']) !!}
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="complemento">Complemento</label>
                                        {!! Form::text('complemento',$endereco->complemento,['class'=> 'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="">Tipo Imóvel</label>
                                        {{ Form::select('situacao_imovel',[
                                            'Próprio'      => 'Próprio',
                                            'Alugado'       => 'Alugado',
                                            'Emprestado'       => 'Emprestado',
                                            'Outro'    => 'Outro'
                                            ],null,['class'=>'form-control custom-select'])
                                        }}
                                    </div>
                                </div>

                                <p class="text-primary">Dados Bancários</p>
                                <hr>

                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <br><h5 class="text-right">Conta para receber Doações</h5>
                                    </div>
                                    <div class="form-group col-md-3">
                                        {!! Form::label('Banco') !!}

                                        {{ Form::select('banco',[
                                          'CEF'      => 'Caixa Economica Federal',
                                          'BB'       => 'Banco do Brasil',
                                          'SA'       => 'Banco Santander',
                                          'IT'       =>  'Banco Itaú',
                                          'Outro'    => 'Outro'
                                          ],$banco->banco,['class'=>'form-control custom-select','selected'=>'Outro'])
                                      }}
                                    </div>

                                    <div class="form-group col-md-2">
                                        {!! Form::label('Agência') !!}
                                        {!! Form::text('agencia',$banco->agencia,['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-md-2">
                                        {!! Form::label('Conta') !!}
                                        {!! Form::text('conta',$banco->conta,['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-md-1">
                                        {!! Form::label('DV') !!}
                                        {!! Form::text('contaDv',$banco->contaDv,['class'=>'form-control']) !!}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-5">
                                        {!! Form::file('logo',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="">O que a OSC faz?</label>
                                        {!! Form::textarea('descricao_osc',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'5']) !!}
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Como surgiu a OSC?</label>
                                        {!! Form::textarea('surgimento_osc',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'5']) !!}
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Missão da OSC?</label>
                                        {!! Form::textarea('missao_osc',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'5']) !!}
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Visão da OSC?</label>
                                        {!! Form::textarea('visao_osc',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'5']) !!}
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Link do Site </label>
                                        {!! Form::text('site',null,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Link do Estatuto </label>
                                        {!! Form::text('link_estatuto_osc',null,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Link da Finalidade Estatutária</label>
                                        {!! Form::text('finalidades_estatutarias_ods',null,['class'=>'form-control']) !!}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <center>   <button type="submit" class="btn btn-outline-success">Salvar </button> </center>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@stop

@section('js')
    <script src="{{asset('js/jquery.mask.min.js')}}"> </script>
    <script>
        $(document).ready(function(){
            $('#telefone').mask('(99) 9 9999-9999');
            $("#cpf").mask('000.000.000-00');
            $("#cnpj").mask('00.000.000/0000-00');
            $("#cep").mask('00.000-000');
            $("#ano").mask('0000');
            $("#anofun").mask('0000');
            $("#cnae").mask('0000000');

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#endereco").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#estado").val("");
                $("#ibge").val("");
            }

            //Quando o campo cep perde o foco.
            $("#cep").blur(function () {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if (validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#endereco").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#estado").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("//viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#endereco").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#estado").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alertify.error("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alertify.error("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });





        });




    </script>


@stop




