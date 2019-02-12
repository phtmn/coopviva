@extends('site.master')

@section('content')
    @include('dashboard.menu')

    
    
    
    <div class="container" style="margin-top:20px; padding:20px">
    <div class="row row justify-content-center">

        <div class="com-md-4">
            <div class="card-outline-success" style="width: 18rem;">   
                       
                <div class="card-body text-center">
              <!--  <img class="card-img-top" style="width:150px; height:150px;" src="data:image/png;base64,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" alt="Card image cap"> -->
                    <h4 class="card-title"> {{ Auth::user()->name }}</h4>
                    <h6><small>{{ Auth::user()->email }}</small> </h6>
                    <h5><small><strong>{{ Auth::user()->tipo_usuario ?? '' }}</strong></small> </h5>
                </div>
            </div>
        </div>
        

        <div class="col-md-8">
     
         
            {!! Form::open(['route'=>'perfil.store']) !!}

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
                      <center>  <input type="submit" value="Salvar" class="btn gradient-bg"> </center>
                    </div>
                {!! Form::close() !!}


        </div>

        </div>




    </div>
    <br>
    </div>


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