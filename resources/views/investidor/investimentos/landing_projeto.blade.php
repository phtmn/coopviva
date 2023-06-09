@extends('layouts.site')


@section('conteudo_principal')


    <main class="profile-page">

       <div class="position-relative">
    <!-- shape Hero -->
    <section class="section section-lg section-shaped pb-250">
        <div class="shape shape-style-1 bg-gradient-success">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-profile shadow mt--500">

                            <div class="titulo mt-2 text-center">
                                <h3>{{$projeto->nome}}</h3>
                            </div>

                            <div class="descricao mt-4 text-justify mx-4">
                                <p>{{$projeto->descricao}}</p>
                                <p>{{$projeto->publico_alvo}}</p>
                                {{--<p>{{$projeto->objetivo_geral}}</p>--}}
                                {{--<p>{{$projeto->justificativa}}</p>--}}
                                <p>{{$projeto->impactos_esperados}}</p>

                            </div>
                        </div>


                    </div>

                    <div class="col-md-4">
                        <div class="card card-profile shadow mt--500 my-2">

                            <div class="card-profile-stats text-center d-flex flex-column">
                                <h5 class="display-5">Status do projeto </h5>
                                <h2 class="text-success">{{$projeto->status}}</h2>
                            </div>

                            <div class="card-profile-stats d-flex justify-content-center">
                                <div>
                                    <span class="heading">$ {{ number_format($projeto->valor_meta,2,',','.') }}</span>
                                    <span class="description text-success font-weight-900">Meta</span>
                                </div>
                                <div>
                                    <span class="heading">$ {{ 0 }}</span>
                                    <span class="description font-weight-900">Arrecadado</span>
                                </div>
                            </div>

                            <div class="card-profile-stats text-center d-flex flex-column">
                                <h5 class="display-5">Responsável pelo Projeto </h5>
                                <p>{{$projeto->responsavel_nome}}</p>
                            </div>

                            <div class="card-profile-stats text-center d-flex flex-column">
                                <h5 class="display-5 text-warning">{{ $dias }} Dias Restantes</h5>
                            </div>

                            <div class="botao mx-4 mb-2">
                                <a href="" data-toggle="modal" data-target="#modal-default" class="btn btn-outline-success btn-block">Investir</a>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="row">
                    @include('osc.galeria.landing')
                </div>
            </div>


            <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                <div class="modal-dialog"  role="document">
                    {!! Form::open(['route'=>'pagar']) !!}
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title" id="modal-title-default">Investir em {{$projeto->nome}}</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                {!! Form::text('valor',null,['class'=>'form-control form-control-lg','required'=>'true','placeholder'=>'Quanto gostaria de Investir (R$)','id'=>'valor']) !!}
                            </div>

                            <input type="hidden" name="osc_id" value="{{$projeto->osc->id}}">
                            <input type="hidden" name="projeto_id" value="{{$projeto->id}}">
                        </div>
                        <div class="modal-footer text-center">
                             <button type="submit" class="btn btn-primary">Investir Agora</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>



        </section>
    </main>
@stop

@section('css')
    <style>
        .btn:focus, .btn:active, button:focus, button:active {
            outline: none !important;
            box-shadow: none !important;
        }

        #image-gallery .modal-footer{
            display: block;
        }

        .thumb{
            margin-top: 15px;
            margin-bottom: 15px;
        }
    </style>

@stop

@section('js')
    <script src="{{asset('js/jquery.mask.min.js')}}"> </script>
    <script src="{{asset('js/galeria.js')}}"> </script>
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