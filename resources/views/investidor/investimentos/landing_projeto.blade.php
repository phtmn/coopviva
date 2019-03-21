@extends('layouts.site')

@section('conteudo_principal')
    <main class="profile-page">
        <section class="section-profile-cover section-shaped my-0">
            <!-- Circles background -->
            <div class="shape shape-style-1 shape-dark alpha-4">
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
            <div class="sharethis-inline-share-buttons"></div>
            <div class="container">
                <div class="card card-profile shadow mt--500">
                    <div class="px-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        @if(!$projeto->osc->logo)
                                            <img src="{{asset('vendor/site/images/jacareCoopViva.png')}}" class="rounded-circle">
                                        @else
                                            <img src="{{$projeto->osc->logo}}" class="rounded-circle">
                                        @endif
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                                <div class="card-profile-actions py-4 mt-lg-0">

                                        <a href="#" class="btn btn-outline-success" data-toggle="modal" data-target="#modal-default">Investir</a>
                                        <a href="#" class="btn btn-danger pull-right" data-toggle="tooltip" data-title="Add Favoritos versoes futuras">
                                            <i class="fa fa-heart"></i>
                                        </a>

                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-1">
                                <div class="card-profile-stats">
                                    <div class="pull-left">
                                        <span class="heading">
                                            <a href="{{ route('quero_investir') }}" class="btn bt-sm btn-info">Voltar</a>
                                        </span>
                                    </div>
                                    {{--<div>--}}
                                        {{--<span class="heading">{{ $metas->count() }}</span>--}}
                                        {{--<span class="description">Metas</span>--}}
                                    {{--</div>--}}
                                    {{--<div>--}}
                                        {{--<span class="heading">{{ $projetos->count() }}</span>--}}
                                        {{--<span class="description">Projetos</span>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="">
                                        <h3>{{ $projeto->nome }}</h3>
                                    </div>

                                    <div class="h4 font-weight-300">{{$projeto->nome}}, Responsável Legal</div>
                                    <div class="h4 font-weight-300">Valor Meta: {{ $projeto->valor_meta }}</div>

                                </div>
                                {{--<div class="col-md-4">--}}
                                    {{--<div class="ods pull-right">--}}
                                        {{--<label for="" class="display-4">Objetivos agenda 2030</label>--}}
                                        {{--@forelse($metas->unique('objetivo_id') as $obj)--}}
                                            {{--<a style="cursor: pointer"><img class="img-thumbnail" style="width:80px; height:80px;" src="{{asset('/vendor/site/images/ods/ods'.$obj->objetivo_id.'.png')}}"></a>--}}
                                        {{--@empty--}}
                                            {{--<p style="color:red">Você não está em nenhum objetivo ODS</p>--}}
                                        {{--@endforelse--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    
                        <div class=" col-xs-12 m-5">
                            <div class="text-center">
                                <label for="Publico Algo" class="display-3">Publico Alvo</label>
                                <p> {{ $projeto->publico_alvo }}</p>
                            </div>

                            <div class="text-center">
                                <label for="Publico Algo" class="display-3">Objetivo Geral</label>
                                <p> {{ $projeto->objetivo_geral }}</p>
                            </div>

                            <div class="text-center">
                                <label for="Publico Algo" class="display-3">Objetivo Especificos</label>
                                <p> {{ $projeto->objetivos_especificos }}</p>
                            </div>

                            <div class="text-center">
                                <label for="Publico Algo" class="display-3">Inpactos Esperados</label>
                                <p> {{ $projeto->impactos_esperados }}</p>
                            </div>

                        </div>
                        
                    </div>
                </div>

                <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                    <div class="modal-dialog"  role="document">
                        {!! Form::open(['route'=>'pagar']) !!}
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="modal-title-default"></h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    {!! Form::text('valor',null,['class'=>'form-control form-control-lg','placeholder'=>'Quanto gostaria de Investir Nesse Projeto (R$)','id'=>'valor']) !!}
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<label for="">Onde deseja Investir?</label>--}}
                                    {{--<select name="escolha" id="OndeInvestir" class="form-control custom-select" required>--}}
                                        {{--<option value="osc" selected>Investir em: {{$osc->nome_fantasia}}</option>--}}
                                        {{--<option value="projetos">Investir em Projetos</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                                {{--<div class="form-group" id="box-projetos" style="display: none">--}}
                                    {{--{!! Form::select('projeto_id',$projetos->pluck('nome','id'),null,['class'=>'form-control','placeholder'=>'Selecione o Projeto']) !!}--}}
                                {{--</div>--}}
                                <input type="hidden" name="osc_id" value="{{$projeto->osc->id}}">
                                <input type="hidden" name="projeto_id" value="{{$projeto->id}}">
                            </div>
                            <div class="modal-footer">
                                <center> <button type="submit" class="btn btn-primary">Sim EU QUERO</button> <center>
                                
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>


        </section>
    </main>
@stop

@section('js')
    <script src="{{asset('js/jquery.mask.min.js')}}"> </script>
    <script>
        $(document).ready(function(){
            let Ondeinvestir      = $('#OndeInvestir');
            let boxOndeInvestir   = $('#box-projetos');

            Ondeinvestir.change(function(){
                console.log(Ondeinvestir.val())
                if(Ondeinvestir.val() == 'osc'){
                    boxOndeInvestir.css({'display':'none'});
                }else{
                    boxOndeInvestir.css({'display':'block'});
                    //radioPJ.attr('checked', false);
                }
            });
        });

        $(document).ready(function(){
            $("#valor").mask('#.##0,00', {reverse: true});
        });
    </script>
@stop