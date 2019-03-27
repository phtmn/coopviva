@extends('layouts.dashboard')


@section('cabecalho')

    <div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-image: url({{asset('vendor/argon-dash/assets/img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-10">
                    <h1 class="display-2 text-white">{{$osc->nome_fantasia}}</h1>
                    {{--<p class="text-white mt-0 mb-2">Precisamos de algumas informações sobre sua Instiuição, preencha o formulario abaixo. Ele é--}}
                        {{--Pouco grande, mas vas nos ajudar!--}}
                    {{--</p>--}}
                    <div class="ods">
                        @forelse($metas->unique('objetivo_id') as $obj)
                            <a style="cursor: pointer"><img class="img-thumbnail" style="width:55px; height:55px;" src="{{asset('/vendor/site/images/ods/ods'.$obj->objetivo_id.'.png')}}"></a>
                        @empty
                            <p style="color:red">Você não está em nenhum objetivo ODS</p>
                        @endforelse
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop

@section('conteudo')
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    @if(!$osc->logo)
                                        <img src="{{asset('vendor/site/images/jacareCoopViva.png')}}" class="rounded-circle">
                                    @else
                                        <img src="{{$osc->logo}}" class="">
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-default float-right" data-toggle="modal" data-target="#modal-default" title="Abrir modal para ulpoad de logo">Alterar Logo</a>
                        </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    <div>
                                        <span class="heading">{{ $metas->count() ?? '0' }}</span>
                                        <span class="description">Metas</span>
                                    </div>
                                    <div>
                                        <span class="heading">{{ $metas->unique('objetivo_id')->count() }}</span>
                                        <span class="description">Objetivos</span>
                                    </div>
                                    <div>
                                        <span class="heading">{{ $projetos }}</span>
                                        <span class="description">Projetos</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="embed-responsive embed-responsive-1by1">
                                {!! $osc->video_institucional  !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8 order-xl-1">
                {!! Form::model($osc,['route'=> ['osc.update',$osc->id],'enctype'=>'multipart/form-data']) !!}
                @method('PUT')
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
                                    <strong title="Ano de inscrição no Cadastro de CNPJ" data-toggle="tooltip"> * </strong> Inscrição CNPJ
                                </label>
                                <div class="col-sm-3">
                                    {!! Form::text('ano_inscricao_cnpj',null,['class'=>'form-control','id'=>'ano','placeholder' => 'Ano']) !!}
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right">
                                    <strong title="Atividade Econômica" data-toggle="tooltip"> * </strong> CNAE Principal
                                </label>
                                <div class="col-sm-8">
                                    {!! Form::select('cnae',$ae,null,['class'=>'form-control','placeholder'=>'Selecione...']) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right">
                                    <strong title="Atividade Econômica" data-toggle="tooltip"> * </strong> CNAE Secundário
                                </label>
                                <div class="col-sm-8">
                                    {!! Form::select('cnae_sec',$ae,null,['class'=>'form-control','placeholder'=>'Selecione...']) !!}
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
                                    {{ Form::select('banco',$lista_bancos,$banco->banco,['class'=>'form-control custom-select','placeholder'=>'Selecione...']) }}
                                </div>
                                <div class="form-group col-md-2">
                                    {!! Form::label('Agência') !!}
                                    {!! Form::text('agencia',$banco->agencia,['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group col-md-3">
                                    {!! Form::label('Conta') !!}
                                    {!! Form::text('conta',$banco->conta,['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group col-md-2">
                                    {!! Form::label('DV') !!}
                                    {!! Form::text('contaDv',$banco->contaDv,['class'=>'form-control']) !!}
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
                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right">Video Institucional (link)</label>
                                <div class="col-md-8">
                                    {!! Form::text('video_institucional',null,['class'=>'form-control','placeholder'=>'https://youtube.com/urlDoVideo']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right">Fan Page</label>
                                <div class="col-md-8">
                                    {!! Form::text('fan_page',null,['class'=>'form-control','placeholder'=>'https://facebook.com.br/suainstituicao']) !!}
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

        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered"  role="document">
                {!! Form::open(['route'=>'osc.uploadFoto','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal-title-default">Carregue sua Foto</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            {!! Form::file('file',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <input type="hidden" name="osc_id" value="{{$osc->id}}">
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
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


