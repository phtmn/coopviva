@extends('site.master')

@section('content')
    @include('dashboard.menu')
    
    <div class="container" style="margin-top:20px">
    <div class="row row justify-content-center">
                       


                @csrf
            <div class="col-md-12">

            <ul class="nav nav-tabs justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><b class="text-dark" > Dados Gerais </b></a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><b class="text-dark" > Dados Financeiros </b></a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><b class="text-dark" > Responsável </b></a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link " id="pills-resumo-tab" data-toggle="pill" href="#pills-resumo" role="tab" aria-controls="pills-resumo" aria-selected="true"><b class="text-dark" >Resumo </b></a>
                </li> 
            </ul>
            <br>
            {{ Form::model($projeto,['route'=>['projetos.update',$projeto->id] ]) }}
                @csrf
                @method('PUT')
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                {{--TabDadosGerais--}}
            
                    <div class="row"> <!--row-1-->
                        <div class="form-group col-md-6">
                            {!! Form::label('Nome do Projeto') !!}
                            {!! Form::text('descricao',null,["class"=>"form-control",'required'=>'true']) !!}
                        </div>

                       
                     <div class="form-group col-md-2 pull-right">
                                {!! Form::label('Valor do Projeto') !!}
                                    {!! Form::text('valor_meta',$projeto->valor_meta,['class'=>'input input-lg form-control','required'=>'true']) !!}
                                </div>

                    <div class="form-group col-md-2">
                            {!! Form::label('Nº de Registro 1') !!}
                            {!! Form::text('num_registro1',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group col-md-2">
                            {!! Form::label('Nº Registro 2') !!}
                            {!! Form::text('num_registro2',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group col-md-3">
                            {!! Form::label('Instância') !!}
                            {!! Form::text('instancia',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group col-md-3">
                            {!! Form::label('Âmbito') !!}
                            {!! Form::select('ambito',[
                                            'federal'   =>  "Federal",
                                            'estadual'  => "Estadual",
                                            'municipal' => "Municipal"
                                            ],null,
                            ['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                        </div>


                        <div class="form-group col-md-3">
                            {!! Form::label('Segmento Cultural') !!}
                            {!! Form::select('segmento_cultural',[
                                            'Educação'  => "Educação (Crianças/Jovens)",
                                            'Meio'  => "Meio Ambiente",
                                            'Idosos'   => "Idosos",
                                            'Saúde'     => "Saúde",
                                            'Esportes'  => "Esportes",
                                            'Cultura'  => "Cultura"
                                            ],null,
                            ['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                        </div>

                        <div class="form-group col-md-3">
                            {!! Form::label('Artigo de Enquadramento') !!}
                            {!! Form::text('artigo',null,['class'=>'form-control']) !!}
                        </div>
                    </div><!--endOfRow1-->

                  


                        
                  
                {{--FimDadosGerais--}}

                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    {{--DadosResponsavel--}}
                        <div class="row"><!--row-4-->
                            <div class="form-group col-md-6">
                            {!! Form::label('Nome do Proponente') !!}
                            {!! Form::text('nome',$proponente->nome,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group col-md-3">
                            {!! Form::label('CPF') !!}
                            {!! Form::text('cpf',$proponente->cpf,['class'=>'form-control','id'=>'cpf']) !!}
                            </div>

                            <div class="form-group col-md-3">
                                {!! Form::label('CNPJ') !!}
                                {!! Form::text('cnpj',$proponente->cnpj,['class'=>'form-control','id'=>'cnpj']) !!}
                            </div>
                        </div><!--end-of-row-4-->

                        <div class="row"><!--row-5-->
                            <div class="form-group col-md-2">
                            {!! Form::label('Telefone 1') !!}
                            {!! Form::text('telefone_1',$proponente->telefone_1,['class'=>'form-control','id'=>'phone_number']) !!}
                            </div>

                            <div class="form-group col-md-2">
                            {!! Form::label('Telefone 2') !!}
                            {!! Form::text('telefone_2',$proponente->telefone_2,['class'=>'form-control','id'=>'phone_number2']) !!}
                            </div>
                      
                            <div class="form-group col-md-4">
                            {!! Form::label('E-mail Principal') !!}
                            {!! Form::email('email_1',$proponente->email_1,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group col-md-4">
                            {!! Form::label('E-mail Secundário') !!}
                            {!! Form::email('email_2',$proponente->email_2,['class'=>'form-control']) !!}
                            </div>
                        </div><!--end-of-row-6-->
                    {{--fimDadosResponsavel--}}
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        
                            <div class="row"><!--row-3-->

                            <div class="form-group col-md-4">
                 <br><h5 class="text-right">Conta para receber Doações</h5>
                      </div>
                                <div class="form-group col-md-3">
                                {!! Form::label('Banco') !!}
                                    {!! Form::select('banco_docao',[
                                        'CEF'   =>  "Caixa Economica Federal",
                                        'BB'    =>  "Banco do Brasil",
                                        'SA'    =>  "Banco Santander",
                                        'IT'    =>  "Banco Itaú"
                                    ],$bancoDoacao->banco,['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group col-md-2">
                                {!! Form::label('Agência') !!}
                                {!! Form::text('agencia_doacao',$bancoDoacao->agencia,['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group col-md-2">
                                {!! Form::label('Conta') !!}
                                {!! Form::text('conta_doacao',$bancoDoacao->conta,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group col-md-1">
                                    {!! Form::label('DV') !!}
                                    {!! Form::text('contaDv_doacao',$bancoDoacao->contaDv,['class'=>'form-control']) !!}
                                </div>
                            </div><!--end-of-row-3-->

                          
                    <div class="row"><!--row-3-->
                    <div class="form-group col-md-4">
                 <br><h5  class="text-right">Conta para receber Patrocínios</h5>
                      </div>
                        <div class="form-group col-md-3">
                            {!! Form::label('Banco') !!}
                            {!! Form::select('banco_patrocinio',[                            
                            'BB'    =>  "Banco do Brasil"
                            ],$bancoPatrocinio->banco,['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                        </div>

                        <div class="form-group col-md-2">
                            {!! Form::label('Agência') !!}
                            {!! Form::text('agencia_patrocinio',$bancoPatrocinio->agencia,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group col-md-2">
                            {!! Form::label('Conta') !!}
                            {!! Form::text('conta_patrocinio',$bancoPatrocinio->conta,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group col-md-1">
                            {!! Form::label('Dv') !!}
                            {!! Form::text('contaDv_patrocinio',$bancoPatrocinio->contaDv,['class'=>'form-control']) !!}
                        </div>
                    </div><!--end-of-row-3-->

                           

                        {{--FimDadosFinaneiros--}}
                </div>



                <div class="tab-pane fade" id="pills-resumo" role="tabpanel" aria-labelledby="pills-resumo-tab">                                    
                                             
                <div class="row">
                <div class="form-group col-md-12">
                    <label for="">Objetivo Geral</label>
                    {!! Form::textarea('objetivo_geral',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'3']) !!}
                </div>
                <div class="form-group col-md-12">
                    <label for="">Objetivos Específicos</label>
                    {!! Form::textarea('objetivos_esp',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'3']) !!}
                </div>
                <div class="form-group col-md-12">
                    <label for="">Justificativa</label>
                    {!! Form::textarea('justificativa',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'3']) !!}
                </div>
                <div class="form-group col-md-12">
                    <label for="">Público Alvo</label>
                    {!! Form::textarea('publico_alvo',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'3']) !!}
                </div>
                <div class="form-group col-md-12">
                    <label for="">Impactos Esperados</label>
                    {!! Form::textarea('impactos_esperados',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'3']) !!}
                </div>
                

            </div>
                                             
                                             
                </div>
            </div>
           <center> <button type="submit" class="btn gradient-bg">Salvar</button> </center>
            {!! Form::close() !!}
            </div>
        </div>
        <br>
    </div>
@stop


@section('js')
    <script src="{{asset('js/jquery.mask.min.js')}}"> </script>
    <script>
        $(document).ready(function(){
            $("#project_value").mask('#.##0,00', {reverse: true});
            $("#phone_number").mask('(00)00000-0000');
            $("#phone_number2").mask('(00)00000-0000');
            $("#cpf").mask('000.000.000-00');
            $("#cnpj").mask('00.000.000/0000-00');
        });

    </script>

@stop