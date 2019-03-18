@extends('investidor.painel')

@section('conteudo_painel')
    {!! Form::open(['route'=>'perfil.store']) !!}
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-dados" role="tabpanel" aria-labelledby="pills-dados-tab">
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


    <h4 class="text-primary">Endereço </h4>
    <hr>
    <div class="row">
        <div class="form-group col-md-3">
            <label for="cep">CEP</label>
            {!! Form::text('cep',null,['class'=> 'form-control','required'=>'true','id'=>'cep']) !!}
        </div>
        <div class="form-group col-md-6">
            <label for="rua">Rua/Logradouro</label>
            {!! Form::text('rua',null,['class'=> 'form-control','required'=>'true','id'=>'endereco']) !!}
        </div>

        <div class="form-group col-md-3">
            <label for="numero">Bairro</label>
            {!! Form::text('bairro',null,['class'=> 'form-control','id'=>'bairro']) !!}
        </div>

    </div>

    <div class="row">
        <div class="form-group col-md-2">
            <label for="numero">Número</label>
            {!! Form::text('numero',null,['class'=> 'form-control']) !!}
        </div>
        <div class="form-group col-md-5">
            <label for="cidade">Cidade</label>
            {!! Form::text('cidade',null,['class'=> 'form-control','id'=>'cidade']) !!}
        </div>
        <div class="form-group col-md-2">
            <label for="uf">Estado</label>
            {!! Form::text('uf',null,['class'=> 'form-control','id'=>'estado']) !!}
        </div>
        <div class="form-group col-md-3">
            <label for="complemento">Complemento</label>
            {!! Form::text('complemento',null,['class'=> 'form-control']) !!}
        </div>
    </div>
   <br>
        <center>  <input type="submit" value="Salvar" class="btn btn-outline-success"> </center>

    </div>
    </div>
    </div>
    {!! Form::close() !!}
@stop
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
@stop