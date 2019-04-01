@extends('layouts.dashboard')


@section('cabecalho')

    <div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-image: url({{asset('vendor/argon-dash/assets/img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-10">
                    <h1 class="display-2 text-white">Olá, {{ auth()->user()->apelido}}</h1>
                    <p class="text-white mt-0 mb-2">Nesta etapa será preenchido todos os dados de sua Instituição. Preencha com cuidado, pois elas serão enviadas para os patrocinadores/doadores.
                    </p>
                    <p class="text-white font-weight-300">Campos com * são obrigatórios</p>

                </div>
            </div>
        </div>
    </div>
@stop

@section('conteudo')
    <div class="container mt--7">
        <div class="row">
            {{--<div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">--}}
                {{--<div class="card card-profile shadow">--}}
                    {{--<div class="row justify-content-center">--}}
                        {{--<div class="col-lg-3 order-lg-2">--}}
                            {{--<div class="card-profile-image">--}}
                                {{--<a href="#">--}}
                                  {{--<!--  <img src="{{asset('vendor/site/images/jacareCoopViva.png')}}" class="rounded-circle"> -->--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">--}}
                        {{--<div class="d-flex justify-content-between">--}}
                         {{--<!--   <a href="#" class="btn btn-sm btn-default float-right" data-toggle="tooltip" title="Assim que preencher o formulário você poderá alterar a logo">Alterar Logo</a> -->--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="card-body pt-0 pt-md-4">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col">--}}
                                {{--<div class="card-profile-stats d-flex justify-content-center mt-md-5">--}}
                                    {{--<div>--}}
                                        {{--<span class="heading">22</span>--}}
                                        {{--<span class="description">Metas</span>--}}
                                    {{--</div>--}}
                                    {{--<div>--}}
                                        {{--<span class="heading">10</span>--}}
                                        {{--<span class="description">Objetivos</span>--}}
                                    {{--</div>--}}
                                    {{--<div>--}}
                                        {{--<span class="heading">89</span>--}}
                                        {{--<span class="description">Projetos</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="text-center">--}}
                            {{--<h3>--}}
                                {{--{{auth()->user()->nome_social}}<span class="font-weight-light"></span>--}}
                            {{--</h3>--}}
                            {{--<div class="h5 font-weight-300">--}}
                                {{--<i class="ni location_pin mr-2"></i>{{ auth()->user()->email}}--}}
                            {{--</div>--}}
                            {{--<div class="h5 mt-4">--}}
                             {{--<!--   <i class="ni business_briefcase-24 mr-2"></i>{{ auth()->user()->cidade }} - {{auth()->user()->uf}} -->--}}
                            {{--</div>--}}
                            {{--<div>--}}
                               {{--<!-- <i class="ni education_hat mr-2"></i>Outra Informação ?? -->--}}
                            {{--</div>--}}
                            {{--<hr class="my-4" />--}}
                            {{--<!--<p>Aqui pode ser mostrado uma breve descriçao da osc, o usuario ode editar clicando no link abaixo</p>--}}
                            {{--<a href="#" data-toggle="tooltip" title="Abrir modal para editar essa informação?">Editar</a> -->--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            <div class="col-xl-12 order-xl-1">
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
                                    {!! Form::text('sigla',null,['class'=>'form-control']) !!}
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
                                    <strong> * </strong>CNPJ
                                </label>
                                <div class="col-sm-4">
                                    {!! Form::text('cnpj',null,['class'=>'form-control','id'=>'ano','id'=>'cnpj']) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right">Responsável Legal</label>
                                <div class="col-sm-8">
                                    {!! Form::text('responsavel',null,['class'=>'form-control']) !!}
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
                                    {{ Form::select('situacao_imovel',['Alugado'=>'Alugado'],null,['class'=>'form-control']) }}
                                </div>
                            </div>


                            <p class="text-primary ">Dados Bancários</p>
                            <label>Conta para receber Doações</label>
                            <div class="row">
                                <div class="form-group col-md-5">
                                    {!! Form::label('Banco') !!}
                                    {{ Form::select('banco_investimentos',['lista'=>'lista'],null,['class'=>'form-control custom-select','placeholder'=>'Selecione...']) }}
                                </div>
                                <div class="form-group col-md-2">
                                    {!! Form::label('Agência') !!}
                                    {!! Form::text('agencia_investimentos',null,['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group col-md-3">
                                    {!! Form::label('Conta') !!}
                                    {!! Form::text('conta_investimentos',null,['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group col-md-2">
                                    {!! Form::label('OP') !!}
                                    {!! Form::text('op_investimentos',null,['class'=>'form-control']) !!}
                                </div>
                            </div>







                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="" >Conte-nos sua história:</label>
                                    {!! Form::textarea('historia',null,['class'=>'form-control contador1','style'=>'resize: none','rows'=>'5','maxlenght'=>'500']) !!}
                                    <span class='caracteres1'></span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Os objetivos que deseja atingir</label>
                                    {!! Form::textarea('objetivos',null,['class'=>'form-control contador2','maxlenght'=>'500', 'style'=>'resize: none', 'rows'=>'5']) !!}
                                    <span class='caracteres2'></span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Impactos gerados no úlitmo ano</label>
                                    {!! Form::textarea('impactos',null,['class'=>'form-control contador3', 'style'=>'resize: none', 'rows'=>'5']) !!}
                                    <span class='caracteres3'></span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Missão</label>
                                    {!! Form::textarea('missao',null,['class'=>'form-control contador4', 'style'=>'resize: none', 'rows'=>'5']) !!}
                                    <span class='caracteres4'></span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Visão</label>
                                    {!! Form::textarea('visao',null,['class'=>'form-control contador5', 'style'=>'resize: none', 'rows'=>'5']) !!}
                                    <span class='caracteres5'></span>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">Valores</label>
                                    {!! Form::textarea('valores',null,['class'=>'form-control contador6', 'style'=>'resize: none', 'rows'=>'5','maxlenght'=>'500']) !!}
                                    <span class='caracteres6'></span>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">Espaço Livre</label>
                                    {!! Form::textarea('espaco_livre',null,['class'=>'form-control contador7',
                                             'style'=>'resize: none', 'rows'=>'5',
                                             'placeholder'=>'Se uma revista internacional  - muito importante  lhe convidasse para escrever uma matéria sobre sua organização. Qual seria o título e quais os diferenciais você indicaria para esta matéria?']) !!}
                                    <span class='caracteres7'></span>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right">Link do Site </label>
                                <div class="col-md-8">
                                    {!! Form::text('site',null,['class'=>'form-control']) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right">Video Institucional (link)</label>
                                <div class="col-md-8">
                                    {!! Form::text('video_institucional',null,['class'=>'form-control','placeholder'=>'https://youtube.com/urlDoVideo']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right">Fan Page</label>
                                <div class="col-md-8">
                                    {!! Form::text('facebook',null,['class'=>'form-control','placeholder'=>'https://facebook.com.br/suainstituicao']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right">Instagram</label>
                                <div class="col-md-8">
                                    {!! Form::text('instagram',null,['class'=>'form-control']) !!}
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
    <script src="{{asset('js/caracter_count.js')}}"> </script>

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


