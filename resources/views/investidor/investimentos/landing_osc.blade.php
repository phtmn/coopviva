@extends('layouts.site')


@section('conteudo_principal')


    <main class="profile-page">

        <section class="section-profile-cover section-shaped my-0">
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

        <section class="section-profile-cover section-shaped my-0">
            <div class="container">
                <div class="descricao mt-4 text-justify mx-4 mt--500">
                    <h1 class="text-center text-white">{{$osc->nome_fantasia}}</h1>                               
                </div>
                <div class="d-flex flex-row justify-content-center mb-2">
                    @forelse($metas->unique('objetivo_id') as $obj)
                        <div class="thumb">
                            <img class="img-thumbnail" style="width:55px; height:55px;" src="{{asset('/vendor/site/images/ods/ods'.$obj->objetivo_id.'.png')}}">
                        </div>
                    @empty
                        <p style="color:red">Esta organização sem fins lucrativos não possui nenhum objetivo de desenvolvimento sustetável (ODS)</p>
                    @endforelse
                </div>
            </div>
        </section>
       
        	
		<section class="section">
			<div class="container">	
                <div class="row">				
                    <div class="col-md-8">
                        <div class="card card-profile shadow mt--500">

                            <!-- <div class="descricao mt-4 text-justify mx-4">
								<h2 class="text-center" >{{$osc->nome_fantasia}}</h2>
                               
                            </div> -->

                            <div class="descricao mt-4 text-justify mx-4">
								
                                <p align="justify" style="text-indent: 15px;">{{$osc->surgimento_osc}}</p>
                                <p align="justify" style="text-indent: 15px;">{{$osc->missao_osc}}</p>
                                <p align="justify" style="text-indent: 15px;">{{$osc->visao_osc}}</p>
                            </div>
                        </div>
                        @if($osc->video_institucional)
                            <div class="card shadow mt-5 text-center ">
                                <p>Video Institucional</p>
                                <div class="p-3">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="{{$osc->video_institucional}}" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>                         
                            
                        @endif

                    </div>

                    <div class="col-md-4">
                        <div class="card card-profile shadow mt--500">

                            <div class="mt-3 d-flex justify-content-center mb-4">
                                   @if(!$osc->logo)
                                        <img src="{{asset('vendor/site/images/jacareCoopViva.png')}}" class="thumbnail" style="width:205px; height:205px;">
                                    @else
                                        <img src="{{$osc->logo}}" class="" style="width:205px; height:205px;">
                                    @endif
                            </div>							
							<div class="botao mx-4 mb-2 mt-4">
                                <a href="" data-toggle="modal" data-target="#modal-default" class="btn btn-success btn-block">Investir</a>
                            </div>						

                            <!-- <div class="card-profile-stats d-flex justify-content-center">
                                <div>
                                    <span class="heading">{{ $projetos->count() }}</span>
                                    <span class="description text-success">Projetos</span>
                                </div>
								
								<div>
                                    <span class="heading">{{ $metas->count() }}</span>
                                    <span class="description text-info">Metas</span>
                                </div>
                                
                            </div>
							<hr> -->
                            <!-- <div class="botao mx-4 mb-2">
                                <div class="descricao mt-4 text-justify mx-4">
                               
                               <div class="mt-3 d-flex justify-content-center">
                                @forelse($metas->unique('objetivo_id') as $obj)
                                    <div class="thumb">
                                        <img class="img-thumbnail" style="width:55px; height:55px;" src="{{asset('/vendor/site/images/ods/ods'.$obj->objetivo_id.'.png')}}">
                                    </div>
                                @empty
                                    <p style="color:red">Esta organização sem fins lucrativos não possui nenhum objetivo de desenvolvimento sustetável (ODS)</p>
                                @endforelse
                                </div>
                            </div> -->

                        </div>

                        <!-- <div class="projetos d-flex flex-column justify-content-between">
                            @include('dashboard.investimentos.projetos')
                        </div> -->
                    </div>
                </div>

                               
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fNMcuBkgZd4" allowfullscreen></iframe>
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
                                    {!! Form::text('valor',null,['class'=>'form-control form-control-lg','required'=>'true','placeholder'=>'Quanto gostaria de Investir (R$)','id'=>'valor']) !!}
                                </div>

                                <input type="hidden" name="osc_id" value="{{$osc->id}}">
                            </div>

                            <div class="modal-footer text-center">
                               <button type="submit" class="btn btn-success btn-block">Sim EU QUERO</button>
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