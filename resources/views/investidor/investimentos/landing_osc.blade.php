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
				
                    <h2 class="text-center text-white font-weight-900">{{$osc->nome_fantasia}}
					</h2>                               
                </div>
				
				
				<div class="d-flex bd-highlight">
				<div class="p-2 mt-3 flex-grow-1 bd-highlight text-white font-weight-900 ">{{$osc->cidade}}   {{$osc->uf}}
				
				  <a href="{{ route('quero_investir') }}" class="btn bt-sm btn-outline text-white">Voltar</a>
				</div>
  
				<div class="p-0 align-self-center d-flex flex-row justify-content-center mb-2">  
  
					@forelse($metas->unique('objetivo_id') as $obj)
                        <div class="thumb">
                            <img class="" style="width:40px; height:40px;" src="{{asset('/vendor/site/images/ods/ods'.$obj->objetivo_id.'.png')}}">
                        </div>
                    @empty
					{{--<p class="font-weight-900 text-white">0 ODS</p>--}}
                    @endforelse
  
				</div>
				<div class="p-2 mt-3 bd-highlight text-white font-weight-900 text-center">{{ $metas->count() }} Meta(s)</div>
				<div class="p-2 mt-3 bd-highlight text-white font-weight-900 text-center">{{ $projetos->count() }} Projeto(s)</div>
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

                            <div class="descricao mt-5 text-justify mx-5">
								<p align="justify" style="text-indent: 25px;">{{$osc->descricao}}</p>
									{{--<p align="justify" style="text-indent: 15px;">{{$osc->surgimento_osc}}</p>--}}
                                {{--<p align="justify" style="text-indent: 15px;">{{$osc->missao_osc}}</p>--}}
                                {{--<p align="justify" style="text-indent: 15px;">{{$osc->visao_osc}}</p>--}}
								<hr>
					


					<div class="d-flex justify-content-center mb-2 ">
						
						<a class="nav-link nav-link-icon" target="_blank"  >
						<i class="ni ni-world-2  text-Primary"></i>
						</a>
						
						<a class="nav-link nav-link-icon"  target="_blank" >
						<i class="fa fa-facebook  text-Primary"></i>
						</a>
						
						<a class="nav-link nav-link-icon"  target="_blank" >
						<i class="fa fa-instagram  text-Primary"></i>
						</a>
						
						<a class="nav-link nav-link-icon"  target="_blank"  >
						<i class="ni ni-square-pin text-Primary"></i>
						</a>
					
					</div>	
							
                            </div>
                        </div>
						{{--  @if($osc->video_institucional)--}}
                        {{--    <div class="card shadow mt-5 text-center "> --}}
                            {{--    <p>Video Institucional</p> --}}
                                {{--<div class="p-3"> --}}
                                    {{--<div class="embed-responsive embed-responsive-16by9"> --}}
                                        {{--<iframe class="embed-responsive-item" src="{{$osc->video_institucional}}" allowfullscreen></iframe> --}}
                                    {{--</div>--}}
                                {{--</div> --}}
                            {{--</div>                         --}}
                            
                        {{--@endif --}}

                    </div>

                    <div class="col-md-4">
                        <div class="card card-profile shadow mt--500">

                            <div class="mt-5 d-flex justify-content-center mb-4">
                                   @if(!$osc->logo)
                                        <img src="{{asset('vendor/site/images/jacareCoopViva.png')}}" class="thumbnail" style="width:205px; height:205px;">
                                    @else
                                        <img src="{{$osc->logo}}" class="" style="width:205px; height:205px;">
                                    @endif
                            </div>	
													
							<div class="botao mx-2 mb-4 mt-0">
                                <a href="" data-toggle="modal" data-target="#modal-default" class="btn btn-success btn-block">Investir</a>
                            </div>		
                        </div>

                       {{--  <div class="projetos d-flex flex-column justify-content-between">--}}
                        {{--     @include('dashboard.investimentos.projetos')--}}
                       {{--  </div>--}}
					   
					   
					  
                    </div>
                </div>                
            </div>
			
			
			   <div class="projetos d-flex flex-column justify-content-between">
                            @include('osc.galeria.landing')
               </div>

				<div class="projetos d-flex flex-column justify-content-between">
                            @include('osc.galeria.youtube')							
							
               </div>
			   
			<section class="section section-lg">
	<div class="container">
		<div class="row row-grid justify-content-center">
			<div class="col-lg-12 text-center">
				<h1 class="display-2 text-success">Nossos Projetos
					
				</h1>
				
				<div class="d-flex bd-highlight">
				<div class="p-2 flex-fill bd-highlight"> <span class="badge badge-pill badge-success">Status  </span></div>
				<div class="p-2 flex-fill bd-highlight font-weight-900"> Cartilha - Boas Práticas na Gestão de materiais provenientes do Lixo Eletrônico</div>
				<div class="p-2 flex-fill bd-highlight">Meta R$ 1.000,000</div>
				<div class="p-0 flex-fill bd-highlight"> <a href="" class="btn-info btn btn-block px-2 py-2">Saiba Mais</a></div>
				</div>
				<hr>
					<div class="d-flex bd-highlight">
				<div class="p-2 flex-fill bd-highlight"> <span class="badge badge-pill badge-danger">Status  </span></div>
				<div class="p-2 flex-fill bd-highlight font-weight-900"> Cartilha provenientes do Lixo Eletrônico</div>
				<div class="p-2 flex-fill bd-highlight">Meta R$ 1.000,000</div>
				<div class="p-0 flex-fill bd-highlight"> <a href="" class="btn-success btn btn-block px-2 py-2">Saiba Mais</a></div>
				</div>
				<hr>
					<div class="d-flex bd-highlight">
				<div class="p-2 flex-fill bd-highlight"> <span class="badge badge-pill badge-warning">Status  </span></div>
				<div class="p-2 flex-fill bd-highlight font-weight-900"> Cartilha provenientes do Lixo Eletrônico</div>
				<div class="p-2 flex-fill bd-highlight">Meta R$ 1.000,000</div>
				<div class="p-0 flex-fill bd-highlight"> <a href="" class="btn-success btn btn-block px-2 py-2">Saiba Mais</a></div>
				</div>
			</div>
		</div>
	</div>
</section>
			   
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
            margin-top: 5px;
            margin-bottom: 5px;
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