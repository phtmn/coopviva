extends('site.master')

@section('content')
    @include('dashboard.menu')
    
    <div class="container" style="margin-top:20px">
            <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Dados do Projeto</h3>
                        </div>


                @csrf
            <div class="card-body">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Dados Gerais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Respons�vel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Financeiro</a>
                </li>
            </ul>
            <hr>
                {{ Form::open(['route'=>'projetos.store']) }}
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                {{--TabDadosGerais--}}
                    <div class="row"> <!--row-1-->
                        <div class="form-group col-md-6">
                            {!! Form::label('Nome do Projeto') !!}
                            {!! Form::text('descricao',null,["class"=>"form-control",'required'=>'true']) !!}
                        </div>

                        <div class="form-group col-md-3">
                            {!! Form::label('Inst�ncia') !!}
                            {!! Form::text('instancia',null,['placeholder'=>'Selecione uma op��o','class'=>'form-control']) !!}
                        </div>

                        <div class="form-group col-md-3">
                            {!! Form::label('�mbito') !!}
                            {!! Form::select('ambito',[
                                            'federal'   =>  "Federal",
                                            'estadual'  => "Estadual",
                                            'municipal' => "Municipal"
                                            ],null,
                            ['placeholder'=>'Escolha uma op��o','class'=>'form-control']) !!}
                        </div>
                    </div><!--endOfRow1-->

                    <div class="row"><!--row-2-->
                        <div class="form-group col-md-3">
                            {!! Form::label('N�mero de Registro 1') !!}
                            {!! Form::text('num_registro1',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group col-md-3">
                            {!! Form::label('N�mero de Registro 2') !!}
                            {!! Form::text('num_registro2',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group col-md-3">
                            {!! Form::label('Segmento Cultural') !!}
                            {!! Form::select('segmento_cultural',[
                                            'esportes'  => "Esportes",
                                            'cultura'   => "Cultura",
                                            'educa��o'  => "Educa��o",
                                            'saude'     => "Sa�de"
                                            ],null,
                            ['placeholder'=>'Escolha uma op��o','class'=>'form-control']) !!}
                        </div>

                        <div class="form-group col-md-3">
                            {!! Form::label('Artigo de Enquadramento') !!}
                            {!! Form::text('artigo',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                {{--FimDadosGerais--}}

                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    {{--DadosResponsavel--}}
                        <div class="row"><!--row-4-->
                            <div class="form-group col-md-6">
                            {!! Form::label('Nome do Proponente') !!}
                            {!! Form::text('nome',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group col-md-3">
                            {!! Form::label('CPF') !!}
                            {!! Form::text('cpf',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group col-md-3">
                                {!! Form::label('CNPJ') !!}
                                {!! Form::text('cnpj',null,['class'=>'form-control','placeholder'=>'CPF ou CNPJ']) !!}
                            </div>
                        </div><!--end-of-row-4-->

                        <div class="row"><!--row-5-->
                            <div class="form-group col-md-4">
                            {!! Form::label('Telefone 1') !!}
                            {!! Form::text('telefone_1',null,['class'=>'form-control','id'=>'phone_number']) !!}
                            </div>

                            <div class="form-group col-md-4">
                            {!! Form::label('Telefone 2') !!}
                            {!! Form::text('telefone_2',null,['class'=>'form-control','id'=>'phone_number']) !!}
                            </div>
                        </div><!--end-of-row-5-->

                        <div class="row"><!--row-6-->
                            <div class="form-group col-md-6">
                            {!! Form::label('E-mail Principal') !!}
                            {!! Form::email('email_1',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group col-md-6">
                            {!! Form::label('E-mail Secund�rio') !!}
                            {!! Form::email('email_2',null,['class'=>'form-control']) !!}
                            </div>
                        </div><!--end-of-row-6-->
                    {{--fimDadosResponsavel--}}
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <h5>Conta para receber Doa��es</h5>
                            <div class="row"><!--row-3-->
                                <div class="form-group col-md-3">
                                {!! Form::label('Banco') !!}
                                {!! Form::select('banco_doacao',[
                                'CEF'   =>  "Caixa Economica Federal",
                                'BB'    =>  "Banco do Brasil",
                                'SA'    =>  "Banco Santander",
                                'IT'    =>  "Banco Ita�"
                                ],null,['placeholder'=>'Escolha uma op��o','class'=>'form-control']) !!}
                                </div>

                                <div class="form-group col-md-3">
                                {!! Form::label('Ag�ncia') !!}
                                {!! Form::text('agencia_doacao',null,['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group col-md-3">
                                {!! Form::label('Conta') !!}
                                {!! Form::text('conta_doacao',null,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group col-md-3">
                                    {!! Form::label('DV') !!}
                                    {!! Form::text('contaDV_doacao',null,['class'=>'form-control']) !!}
                                </div>
                            </div><!--end-of-row-3-->

                            <h5>Conta para receber Patroc�nios</h5>
                    <div class="row"><!--row-3-->
                        <div class="form-group col-md-3">
                            {!! Form::label('Banco') !!}
                            {!! Form::select('banco_patrocinio',[                       
                            'BB'    =>  "Banco do Brasil"                         
                            ],null,['placeholder'=>'Escolha uma op��o','class'=>'form-control']) !!}
                        </div>

                        <div class="form-group col-md-3">
                            {!! Form::label('Ag�ncia') !!}
                            {!! Form::text('agencia_patrocinio',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group col-md-3">
                            {!! Form::label('Conta') !!}
                            {!! Form::text('conta_patrocinio',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group col-md-3">
                            {!! Form::label('Dv') !!}
                            {!! Form::text('contaDv_patrocinio',null,['class'=>'form-control']) !!}
                        </div>
                    </div><!--end-of-row-3-->

                            <div class="row">
                                <div class="form-group col-md-6 pull-right">
                                    {!! Form::label('Valor do Projeto') !!}
                                    {!! Form::text('valor_meta',null,['class'=>'input input-lg form-control','required'=>'true']) !!}
                                </div>
                            </div>

                        {{--FimDadosFinaneiros--}}
                </div>
                <div class="tab-pane fade" id="pills-messages" role="tabpanel" aria-labelledby="pills-messages-tab">
                    {{--Resumo--}}
                        <div class="row"><!--row-4-->
                            <div class="form-group col-md-6">
                            {!! Form::label('Objetivo Geral') !!}
                            {!! Form::text('objetivo',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group col-md-3">
                            {!! Form::label('Objetivos Espec�ficos') !!}
                            {!! Form::text('obj_especifico',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group col-md-3">
                                {!! Form::label('Justificativa') !!}
                                {!! Form::text('justificativa',null,['class'=>'form-control']) !!}
                            </div>
                        </div><!--end-of-row-4-->

                        <div class="row"><!--row-5-->
                            <div class="form-group col-md-4">
                            {!! Form::label('Publico Alvo') !!}
                            {!! Form::text('publico_alvo',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group col-md-4">
                            {!! Form::label('Impactos Esperados') !!}
                            {!! Form::text('impactos_esperados',null,['class'=>'form-control']) !!}
                            </div>
                        </div><!--end-of-row-5-->
                    {{--fimResumo--}}
                </div>
            </div>
         <center>   <button type="submit" class="btn gradient-bg">Salvar</button> </center>
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
        });

    </script>

@stop