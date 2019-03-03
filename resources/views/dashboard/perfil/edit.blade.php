@extends('layouts.site')

@section('conteudo_principal')

    <main class="profile-page">
        <section class="section-profile-cover section-shaped my-0">
            <!-- Circles background -->
            <div class="shape shape-style-1 shape-primary alpha-4">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- SVG separator -->
            <div class="separator separator-bottom separator-skew">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="card card-profile shadow mt--500">
                    <div class="px-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                     <!--   <img src="{{asset('vendor/argon-site/assets/img/theme/team-4-800x800.jpg')}}" class="rounded-circle"> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                                <div class="card-profile-actions py-4 mt-lg-0">
                                    <a href="{{route('perfil.index')}}" class="btn btn-sm btn-info mr-4">Voltar</a>
                                    <a href="#" class="btn btn-sm btn-default float-right">Investimentos</a>
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-1">
                                <div class="card-profile-stats d-flex justify-content-center">
                                    <div>
                                        <span class="heading">R$ 22</span>
                                        <span class="description">Investimentos</span>
                                    </div>
                                    <div>
                                        <span class="heading">10</span>
                                        <span class="description">OSC's</span>
                                    </div>
                                    <div>
                                        <span class="heading">89</span>
                                        <span class="description">Projetos</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {!! Form::model($perfil,['route'=> ['perfil.update',$perfil->id] ]) !!}
                            @method('PUT')
                        <h4>Dados Pessoais</h4>
                        <hr>
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label for="nome_completo">Nome do Contato</label>
                                {!! Form::text('nome_completo',null,['class'=> 'form-control','required'=>'true']) !!}
                            </div>
                            <div class="form-group col-md-4">
                                <label for="data_nascimento">Data Nascimento</label>
                                {!! Form::date('data_nascimento',null,['class'=> 'form-control','required'=>'true']) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="telefone">Telefone </label>
                                {!! Form::text('telefone',null,['class'=> 'form-control', 'id'=>'telefone','required'=>'true','id'=>'telefone']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Gênero</label>
                                {{ Form::select('genero',[
                                    'Masculino'      => 'Masculino',
                                    'Feminino'       => 'Feminino',
                                    'Outro'         => 'Outro'
                                    ],null,['class'=>'form-control custom-select','placeholder'=> 'selecione um gênero', 'required'=>'true'])
                                }}
                            </div>
                        </div>

                        <div class="row">
                            @if(Auth::user()->tipo == 'PF')
                                <div class="form-group col-md-6">
                                    <label for="cpf">CPF</label>
                                    {!! Form::text('cpf',null,['class'=> 'form-control','required'=>'true','id'=>'cpf']) !!}
                                </div>
                            @else
                                <div class="form-group col-md-6">
                                    <label for="cnpj">CNPJ</label>
                                    {!! Form::text('cnpj',null,['class'=> 'form-control','required'=>'true','id'=>'cnpj']) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="razao_social">Razão Social</label>
                                    {!! Form::text('razao_social',null,['class'=> 'form-control','required'=>'true']) !!}
                                </div>
                            @endif
                        </div>


                        <br>


                        <h4>Endereço </h4>
                        <hr>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="cep">CEP</label>
                                {!! Form::text('cep',$endereco->cep,['class'=> 'form-control','required'=>'true','id'=>'cep']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                <label for="rua">Rua/Logradouro</label>
                                {!! Form::text('rua',$endereco->rua,['class'=> 'form-control','required'=>'true','id'=>'endereco']) !!}
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
                            <div class="form-group col-md-5">
                                <label for="cidade">Cidade</label>
                                {!! Form::text('cidade',$endereco->cidade,['class'=> 'form-control','id'=>'cidade']) !!}
                            </div>
                            <div class="form-group col-md-2">
                                <label for="uf">Estado</label>
                                {!! Form::text('uf',$endereco->uf,['class'=> 'form-control','id'=>'estado']) !!}
                            </div>
                            <div class="form-group col-md-3">
                                <label for="complemento">Complemento</label>
                                {!! Form::text('complemento',$endereco->complemento,['class'=> 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group mb-5 pull-center">
                        <center>  <input type="submit" value="Salvar" class="btn gradient-bg"> </center>
                        </div>
                    </div>
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </section>
    </main>


@section('js')
<script src="{{asset('js/jquery.mask.min.js')}}"> </script>
<script>
        $(document).ready(function(){
            $('#telefone').mask('(99) 9 9999-9999');
            $("#cpf").mask('000.000.000-00');
            $("#cnpj").mask('00.000.000/0000-00');
            $("#cep").mask('00.000-000');

           
        


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
    @endsection

    @stop

