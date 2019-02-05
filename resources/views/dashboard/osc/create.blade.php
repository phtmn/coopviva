@extends('site.master')

@section('content')
    @include('dashboard.menu')


    <div class="container" style="margin-top:20px; padding:20px">
    <div class="row row justify-content-center">
        <div class="col-md-12">
        
          
          
            <ul class="nav nav-tabs justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-dados-tab" data-toggle="pill" href="#pills-dados" role="tab" aria-controls="pills-dados" aria-selected="true" ><b class="text-dark" >Dados Gerais</b></a>
                </li>
                {{-- <li class="nav-item"> --}}
                    {{--  <a class="nav-link" id="pills-financeiro-tab" data-toggle="pill" href="#pills-financeiro" role="tab" aria-controls="pills-financeiro" aria-selected="false"><b class="text-dark" >Dados Financeiros</b></a> --}}
                        {{--</li> --}}

                            {{-- <li class="nav-item"> --}}
                                {{--   <a class="nav-link" id="pills-end-tab" data-toggle="pill" href="#pills-end" role="tab" aria-controls="pills-end" aria-selected="false"><b class="text-dark" >Endereço</b></a>--}}
                                    {{--  </li> --}}
                <li class="nav-item">
                    <a class="nav-link" id="pills-descricao-tab" data-toggle="pill" href="#pills-descricao" role="tab" aria-controls="pills-descricao" aria-selected="false"><b class="text-dark" >Descrição</b></a>
                </li>
                {{--  <li class="nav-item"> --}}
                    {{--  <a class="nav-link" id="pills-atuacao-tab" data-toggle="pill" href="#pills-atuacao" role="tab" aria-controls="pills-atuacao" aria-selected="false">Atuação</a> --}}
                        {{--  </li> --}}
                <li class="nav-item">
                    <a class="nav-link" id="pills-ods-tab" data-toggle="pill" href="#pills-ods" role="tab" aria-controls="pills-ods" aria-selected="false"><b class="text-dark" >Remover ODS</b></a>
                </li>
            

            </ul>
                <br>
                    <div class="row">
                    <div class="form-group col-md-12">
                                    

            {!! Form::open(['route'=>'osc.store','enctype'=>'multpart/form-data']) !!}


    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-dados" role="tabpanel" aria-labelledby="pills-dados-tab">
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

                <div class="form-group col-md-5">
                    <label for="">Responsável Legal</label>
                    {!! Form::text('responsavel_legal',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-md-3">
                    <label for="">E-mail </label>
                    {!! Form::text('email',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-md-2">
                    <label for="">Telefone</label>
                    {!! Form::text('telefone',null,['class'=>'form-control','id'=>'telefone']) !!}
                </div>
            </div>

            <br>
        <h4>Endereço </h4>
            <hr>
            
            <div class="row">
                        <div class="form-group col-md-3">
                            <label for="cep">CEP</label>
                            {!! Form::text('cep',null,['class'=> 'form-control','id'=>'cep']) !!}
                        </div>
                        <div class="form-group col-md-7">
                            <label for="rua">Rua/Logradouro</label>
                            {!! Form::text('rua',null,['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group col-md-2">
                            <label for="numero">Número</label>
                            {!! Form::text('numero',null,['class'=> 'form-control']) !!}                           
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-5">
                            <label for="cidade">Cidade</label>
                            {!! Form::text('cidade',null,['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group col-md-2">
                            <label for="uf">Estado</label>
                            {!! Form::text('uf',null,['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group col-md-3">
                            <label for="complemento">Complemento</label>
                            {!! Form::text('complemento',null,['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Situação do Imóvel</label>
                            {{ Form::select('situacao_imovel',[
                                'Próprio'      => 'Próprio',
                                'Alugado'       => 'Alugado', 
                                'Emprestado'       => 'Emprestado',                                
                                'Outro'    => 'Outro'                                
                                ],null,['class'=>'form-control custom-select']) 
                            }}                             
                        </div>                
            </div>
    
        
            <br>
        <h4>Dados Financeiros </h4>
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
                                ],null,['class'=>'form-control custom-select','selected'=>'Outro'])
                            }} 

                      </div>

                      <div class="form-group col-md-2">
                                {!! Form::label('Agência') !!}
                                {!! Form::text('agencia',null,['class'=>'form-control']) !!}
                      </div>

                      <div class="form-group col-md-2">
                                {!! Form::label('Conta') !!}
                                {!! Form::text('conta',null,['class'=>'form-control']) !!}
                      </div> 
                      <div class="form-group col-md-1">
                                {!! Form::label('DV') !!}
                                {!! Form::text('contaDv',null,['class'=>'form-control']) !!}
                      </div>
                 </div>
                 
                

                 </div>


        




        <div class="tab-pane fade " id="pills-descricao" role="tabpanel" aria-labelledby="pills-descricao-tab">
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
    



        <div class="tab-pane fade " id="pills-ods" role="tabpanel" aria-labelledby="pills-ods-tab">
            <div class="row">
                 <div class="form-group col-md-12">
                <label for="">Os 17 Objetivos de Desenvolvimento Sustentável</label>
                

                 </div> 
         
  
          
             </div>
        </div>

        
  
        <br>

       

        
     
            <center>    <button type="submit" class="btn gradient-bg">Salvar</button> </center>
        

        {!! Form::close() !!}


                                </div>
                            </div>
                        
                    </div>
                    <br>
    
                    </div>
                
        </div>
        </div>
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
        });
    </script>


    @stop
