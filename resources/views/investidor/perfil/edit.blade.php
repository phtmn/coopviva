@extends('investidor.painel')

@section('conteudo_painel')
    {!! Form::model($perfil,['route'=> ['perfil.update'] ]) !!}
   	
	<div class="container-mt--7">
               
                <div class="col-md-12">
                 
                        <div class="card-body bg-transparent">
                           
							<p class="text-primary">Dados Gerais</p>							
							<hr>
                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right">Nome do Contato (RETIRAR)</label>
                                <div class="col-sm-8">
                                    {!! Form::text('nome_completo',null,['class'=> 'form-control','required'=>'true']) !!}
                                </div>
                            </div>
							
							<div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right">Nome (NOVO) </label>
                                <div class="col-sm-5">
                                    {!! Form::text('nome',null,['class'=> 'form-control','required'=>'true']) !!}
                                </div>
                            </div>
							
							<div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right">Sobrenome (NOVO)</label>
                                <div class="col-sm-5">
                                    {!! Form::text('sobrenome',null,['class'=> 'form-control','required'=>'true']) !!}
                                </div>
                            </div>
							
                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right">Data Nascimento</label>
                                <div class="col-sm-3">
                                    {!! Form::date('dt_nascimento',null,['class'=> 'form-control','required'=>'true']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right"> Telefone  </label>  
                                <div class="col-sm-3">
                                     {!! Form::text('telefone',null,['class'=> 'form-control', 'id'=>'telefone','required'=>'true','id'=>'telefone']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right"> Gênero </label>
                                <div class="col-sm-3">
                                    {{ Form::select('genero',[
									'M'             => 'Masculino',
									'F'             => 'Feminino',
									'Outro'         => 'Outro'
									],null,['class'=>'form-control custom-select','placeholder'=> 'selecione um gênero', 'required'=>'true'])
									}}
                                </div>
                            </div>
							
							
							
							
						 @if(Auth::user()->tipo_pessoa == 'F')	
							<div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right"> CPF  </label>  
                                <div class="col-sm-3">
                                    {!! Form::text('cpf_cnpj',null,['class'=> 'form-control','required'=>'true','id'=>'cpf']) !!}
                                </div>
                            </div>
						@else	
							
							
							<div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right"> CNPJ  </label>  
                                <div class="col-sm-3">
                                    {!! Form::text('cpf_cnpj',null,['class'=> 'form-control','required'=>'true','id'=>'cnpj']) !!}
                                </div>
                            </div>
							
							<div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right"> Razão Social  </label>  
                                <div class="col-sm-8">
                                    {!! Form::text('razao_social',null,['class'=> 'form-control','required'=>'true']) !!}
                                </div>
                            </div>
							
							<div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right"> Nome Fantasia (NOVO)  </label>  
                                <div class="col-sm-8">
                                    {!! Form::text('razao_fantasia',null,['class'=> 'form-control','required'=>'true']) !!}
                                </div>
                            </div>
						@endif	
						
							
							
							<p class="text-primary">Endereço</p>							
							<hr>
							<div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right"> CEP  </label>  
                                <div class="col-sm-2">
                                    {!! Form::text('cep',null,['class'=> 'form-control','required'=>'true','id'=>'cep']) !!}
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right"> Rua/Logradouro  </label>  
                                <div class="col-sm-8">
                                    {!! Form::text('logradouro',null,['class'=> 'form-control','required'=>'true','id'=>'endereco']) !!}
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right"> Bairro  </label>  
                                <div class="col-sm-4">
                                    {!! Form::text('bairro',null,['class'=> 'form-control','id'=>'bairro']) !!}
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right"> Número  </label>  
                                <div class="col-sm-2">
                                    {!! Form::text('numero',null,['class'=> 'form-control']) !!}
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right"> Cidade  </label>  
                                <div class="col-sm-3">
                                    {!! Form::text('cidade',null,['class'=> 'form-control','id'=>'cidade']) !!}
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right"> Estado  </label>  
                                <div class="col-sm-3">
                                     {!! Form::text('uf',null,['class'=> 'form-control','id'=>'estado']) !!}
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label text-right"> Complemento  </label>  
                                <div class="col-sm-2">
                                    {!! Form::text('complemento',null,['class'=> 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                              <input type="submit" value="Salvar" class="btn btn-outline-success"> 
                        </div>
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

