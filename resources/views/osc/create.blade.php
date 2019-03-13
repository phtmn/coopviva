@extends('layouts.dashboard')


@section('cabecalho')

    <div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-image: url({{asset('vendor/argon-dash/assets/img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-10">
                    <h1 class="display-2 text-white">Olá, {{ auth()->user()->nome_social}}</h1>
                    <p class="text-white mt-0 mb-2">Precisamos de algumas informações sobre sua Instiuição, preencha o formulario abaixo. Ele é
                        Pouco grande, mas vas nos ajudar!
                    </p>
                    <p><b>Campos com * são obrigatórios</b></p>

                </div>
            </div>
        </div>
    </div>
@stop

@section('conteudo')
    <div class="container mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{asset('vendor/argon-dash/assets/img/theme/team-4-800x800.jpg')}}" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-default float-right" data-toggle="tooltip" title="Abrir modal para ulpoad de logo">Alterar Foto</a>
                        </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    <div>
                                        <span class="heading">22</span>
                                        <span class="description">Metas</span>
                                    </div>
                                    <div>
                                        <span class="heading">10</span>
                                        <span class="description">Objetivos</span>
                                    </div>
                                    <div>
                                        <span class="heading">89</span>
                                        <span class="description">Projetos</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3>
                                {{auth()->user()->nome_social}}<span class="font-weight-light"></span>
                            </h3>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>{{ auth()->user()->email}}
                            </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>{{ auth()->user()->cidade }} - {{auth()->user()->uf}}
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>Outra Informação ??
                            </div>
                            <hr class="my-4" />
                            <p>Aqui pode ser mostrado uma breve descriçao da osc, o usuario ode editar clicando no link abaixo</p>
                            <a href="#" data-toggle="tooltip" title="Abrir modal para editar essa informação?">Editar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8 order-xl-1">
                {!! Form::open(['route'=>'osc.store','enctype'=>'multipart/form-data']) !!}
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body bg-transparent">
                                <p class="text-primary">Dados Gerais</p>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 col-form-label text-right">Nome Fantasia</label>
                                        <div class="col-sm-8">
                                            {!! Form::text('nome_fantasia',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 col-form-label text-right">Sigla OSC</label>
                                        <div class="col-sm-4">
                                            {!! Form::text('sigla_osc',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 col-form-label text-right">
                                                <strong title="Ano de Fundação" data-toggle="tooltip"> * </strong> Fundação
                                        </label>
                                        <div class="col-sm-3">
                                            {!! Form::text('ano_fundacao',null,['class'=>'form-control','id'=>'anofun',  'placeholder' => 'Ano']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 col-form-label text-right">
                                            <strong title="Ano de inscrição no Cadastro de CNPJ" data-toggle="tooltip"> * </strong> Inscrição CNPJ
                                        </label>
                                        <div class="col-sm-3">
                                            {!! Form::text('ano_inscricao_cnpj',null,['class'=>'form-control','id'=>'ano','placeholder' => 'Ano']) !!}
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 col-form-label text-right">
                                            <strong title="Atividade Econômica" data-toggle="tooltip"> * </strong> CNAE
                                        </label>
                                        <div class="col-sm-8">
                                            {!! Form::select('cnae',$ae,null,['class'=>'form-control','placeholder'=>'Selecione...']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 col-form-label text-right">Responsável Legal</label>
                                        <div class="col-sm-8">
                                            {!! Form::text('responsavel_legal',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 col-form-label text-right">E-mail </label>
                                        <div class="col-sm-8">
                                            {!! Form::text('email',null,['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 col-form-label text-right">Telefone</label>
                                        <div class="col-sm-8">
                                            {!! Form::text('telefone',null,['class'=>'form-control','id'=>'telefone']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="cep" class="col-sm-4 col-form-label text-right">CEP</label>
                                        <div class="col-sm-3">
                                            {!! Form::text('cep',null,['class'=> 'form-control','id'=>'cep']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rua" class="col-sm-4 col-form-label text-right">Rua/Logradouro</label>
                                        <div class="col-sm-8">
                                            {!! Form::text('rua',null,['class'=> 'form-control','id'=>'endereco']) !!}
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label for="Bairro" class="col-sm-4 col-form-label text-right">Bairro</label>
                                        <div class="col-sm-8">
                                            {!! Form::text('bairro',null,['class'=> 'form-control','id'=>'bairro']) !!}
                                        </div>
                                    </div>



                                <div class="form-group row">
                                    <label for="numero" class="col-sm-4 col-form-label text-right">Número</label>
                                    <div class="col-sm-3">
                                        {!! Form::text('numero',null,['class'=> 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cidade" class="col-sm-4 col-form-label text-right">Cidade</label>
                                    <div class="col-sm-8">
                                        {!! Form::text('cidade',null,['class'=> 'form-control','id'=>'cidade','disabled']) !!}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="uf" class="col-sm-4 col-form-label text-right">Estado</label>
                                    <div class="col-sm-3">
                                        {!! Form::text('uf',null,['class'=> 'form-control','id'=>'estado','disabled']) !!}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="complemento" class="col-sm-4 col-form-label text-right">Complemento</label>
                                    <div class="col-sm-8">
                                        {!! Form::text('complemento',null,['class'=> 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label text-right">Tipo Imóvel</label>
                                    <div class="col-sm-3">
                                        {{ Form::select('situacao_imovel',$si,null,['class'=>'form-control']) }}
                                    </div>
                                </div>


                                <p class="text-primary ">Dados Bancários</p>
                                <label>Conta para receber Doações</label>
                                <div class="row">
                                    <div class="form-group col-md-5">
                                        {!! Form::label('Banco') !!}
                                        {{ Form::select('banco',['CEF'=>'Caixa Economica','BB'=>'Banco do Brasil','BA'=>'Bradesco'],null,['class'=>'form-control custom-select','placeholder'=>'Selecione...']) }}
                                    </div>
                                    <div class="form-group col-md-2">
                                        {!! Form::label('Agência') !!}
                                        {!! Form::text('agencia',null,['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-md-3">
                                        {!! Form::label('Conta') !!}
                                        {!! Form::text('conta',null,['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-md-2">
                                        {!! Form::label('DV') !!}
                                        {!! Form::text('contaDv',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>







                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="" >O que a OSC faz?</label>
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

                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right">Link do Site </label>
                                <div class="col-md-8">
                                    {!! Form::text('site',null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right">Link do Estatuto </label>
                                <div class="col-md-8">
                                    {!! Form::text('link_estatuto_osc',null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right">Link da Finalidade Estatutária</label>
                                <div class="col-md-8">
                                    {!! Form::text('finalidades_estatutarias_ods',null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-outline-success">Salvar</button>
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


