@extends('investidor.painel')

@section('conteudo_painel')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($perfil,['route'=> ['perfil.update'] ]) !!}
    <h4 class="text-primary">Dados Pessoais</h4>
    <hr>

        <div class="form-group row">
            <label for="nome_completo" class="col-sm-3 col-form-label text-right">Nome Completo</label>
            <div class="col-md-8">
                {!! Form::text('nome_completo',$perfil->name,['class'=> 'form-control','required'=>'true']) !!}
            </div>
        </div>

        <div class="form-group row">
            <label for="data_nascimento" class="col-sm-3 col-form-label text-right">Data Nascimento</label>
            <div class="col-md-4">
                {!! Form::date('dt_nascimento',null,['class'=> 'form-control','required'=>'true']) !!}
            </div>
        </div>

        @if(auth()->user()->tipo_conta == 'investidor-pj')
        <div class="form-group row">
                <label for="cargo" class="col-sm-3 col-form-label text-right">Cargo</label>
                <div class="col-md-3">
                    {{ Form::select('cargo',[
                                'Analista'      => 'Analista',
                                'Auditor'       => 'Auditor',
                                'Ceo'           => 'CEO',
                                'Conselheiro'   => 'Conselheiro',
                                'Diretor'       => 'Diretor',
                                'Empresário'    => 'Empresário',
                                'Estagiário'    => 'Estagiário',
                                'Gerente'       => 'Gerente',
                                'Supervisor'    => 'Supervisor',
                                'Outro'         => 'Outro'
                        ],null,['class'=>'form-control custom-select','placeholder'=> 'Selecione', 'required'=>'true'])
                    }}
                </div>
            </div>
        @endif



        <div class="form-group row">
            <label for="telefone" class="col-sm-3 col-form-label text-right">Telefone </label>
            <div class="col-md-4">
                {!! Form::text('telefone',null,['class'=> 'form-control', 'id'=>'telefone','required'=>'true','id'=>'telefone']) !!}
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-right">Gênero</label>
            <div class="col-md-3">
                {{ Form::select('genero',[
                'M'             => 'Masculino',
                'F'             => 'Feminino',
                'Outros'        => 'Outros'
                ],null,['class'=>'form-control custom-select','placeholder'=> 'selecione um gênero', 'required'=>'true'])
            }}
            </div>
        </div>

        @if(Auth::user()->tipo_conta == 'investidor-pf')
            <div class="form-group row">
                <label for="cpf" class="col-sm-3 col-form-label text-right">CPF</label>
                <div class="col-md-5">
                    {!! Form::text('cpf_cnpj',null,['class'=> 'form-control','required'=>'true','id'=>'cpf']) !!}
                </div>
            </div>
        @else
            <div class="form-group row">
                <label for="cnpj" class="col-sm-3 col-form-label text-right">CNPJ</label>
                <div class="col-md-4">
                    {!! Form::text('cpf_cnpj',null,['class'=> 'form-control','required'=>'true','id'=>'cnpj']) !!}
                </div>
            </div>

            <div class="form-group row">
                <label for="razao_social" class="col-sm-3 col-form-label text-right">Razão Social</label>
                <div class="col-md-8">
                    {!! Form::text('razao_social',null,['class'=> 'form-control','required'=>'true']) !!}
                </div>
            </div>

            <div class="form-group row">
                <label for="razao_social" class="col-sm-3 col-form-label text-right" >Fantasia</label>
                <div class="col-md-8">
                    {!! Form::text('razao_social',null,['class'=> 'form-control','required'=>'true']) !!}
                </div>
            </div>

            <div class="form-group row">
                <label for="cnpj" class="col-sm-3 col-form-label text-right">Número aprox. de funcionários</label>
                <div class="col-md-3">
                    {{ Form::select('qtd_funcionarios',[
                        'A'    => 'de 1 a 3',
                        'B'    => 'de 3 a 8',
                        'C'    => 'acima de 10',
                        'D'    => 'acima de 50',
                        'E'    => 'acima de 100',
                        'F'    => 'acima de 500',
                        ],null,['class'=>'form-control custom-select','placeholder'=> 'Selecione', 'required'=>'true'])
                    }}
                </div>
            </div>

            <div class="form-group row">
                <label for="cnpj" class="col-sm-3 col-form-label text-right">Faturamento Mensal</label>
                <div class="col-md-3">
                    {{ Form::select('faturamento_mensal',[
                        'F0'    => 'até R$ 9.999,99',
                        'F1'    => 'entre R$ 10.000,00 e R$ 15.000,00',
                        'F2'    => 'entre R$ 15.000,00 e R$ 30.000,00',
                        'F3'    => 'entre R$ 30.000,00 e R$ 50.000,00',
                        'F4'    => 'entre R$ 50.000,00 e R$ 100.000,00',
                        'F5'    => 'entre R$ 100.000,00 e R$ 200.000,00',
                        'F6'    => 'acima de R$ 500.000,00',
                        'F7'    => 'acima de R$ 1.000.000,00'
                        ],null,['class'=>'form-control custom-select','placeholder'=> 'Selecione', 'required'=>'true'])
                    }}
                </div>
            </div>            
        @endif

    <h4 class="text-primary">Endereço </h4>
        <div class="form-group row">
            <label for="cep" class="col-sm-3 col-form-label text-right">Cep</label>
            <div class="col-md-3">
                {!! Form::text('cep',null,['class'=> 'form-control','required'=>'true','id'=>'cep']) !!}
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label text-right">Rua/Logradouro</label>
            <div class="col-md-5">
                {!! Form::text('logradouro',null,['class'=> 'form-control','required'=>'true','id'=>'endereco']) !!}
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label text-right">Bairro</label>
            <div class="col-md-5">
                {!! Form::text('bairro',null,['class'=> 'form-control','id'=>'bairro','maxlength'=>'5']) !!}
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label text-right">Número</label>
            <div class="col-md-2">
                {!! Form::text('numero',null,['class'=> 'form-control']) !!}
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label text-right"> Cidade </label>
            <div class="col-md-5">
                {!! Form::text('cidade',null,['class'=> 'form-control','id'=>'cidade','disabled']) !!}
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label text-right">Estado</label>
            <div class="col-md-2">
                {!! Form::text('uf',null,['class'=> 'form-control','id'=>'estado','disabled']) !!}
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label text-right">Complemento</label>
            <div class="col-md-8">
                {!! Form::text('complemento',null,['class'=> 'form-control']) !!}
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-outline-success">Salvar</button>
        </div>


        
 
    </div>
    {!! Form::close() !!}

@stop
@section('js')
<script src="{{asset('js/jquery.mask.min.js')}}"> </script>
<script src="{{asset('js/viaCep.js')}}"> </script>
<script>
        $(document).ready(function() {
            $('#telefone').mask('(99) 9 9999-9999');
            $("#cpf").mask('000.000.000-00');
            $("#cnpj").mask('00.000.000/0000-00');
            $("#cep").mask('00.000-000');
        })

</script>
        


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
}); -->




    @stop

