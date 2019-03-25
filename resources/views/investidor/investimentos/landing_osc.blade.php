@extends('layouts.site')


@section('conteudo_principal')


    <main class="profile-page">
        <section class="section-profile-cover section-shaped my-0">
            <!-- Circles background -->

			<div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-size: cover; background-position: center top;">
        <!-- Mask -->


        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->

    </div>
			
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
						<br>
						  <center><div class="col-lg-12 order-lg-1">
						<div class="ods mt-8">
                        @forelse($metas->unique('objetivo_id') as $obj)
                                            <a style="cursor: pointer"><img class="" style="width:52px; height:52px;" src="{{asset('/vendor/site/images/ods/ods'.$obj->objetivo_id.'.png')}}"></a>
                                        @empty
                                            <p style="color:red">Você não está em nenhum objetivo ODS</p>
                                        @endforelse
                    </div>

						</div></center>

                            <div class="col-lg-3 order-lg-3">
							
                                <div class="card-profile-image">
								
                                    <a href="#">
										<BR>
											<BR>
												<BR>
                                        @if(!$osc->logo)
                                            <img src="{{asset('vendor/site/images/jacareCoopViva.png')}}" class="">
                                        @else
                                            <img src="{{$osc->logo}}" class="" style="width:205px; height:205px;">
                                        @endif
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                                <div class="card-profile-actions py-4 mt-lg-0">
                                    @if($osc->e_fins_lucrativos)
                                        <p> Essa Organização só pode receber verbas através de seus projetos. Escolha o projeto de sua preferência.</p>

                                    @else
                                        <a href="#" class="btn btn-outline-success" data-toggle="modal" data-target="#modal-default"> Investir </a>
                                        <a href="#" class="btn btn-danger pull-right" data-toggle="tooltip" data-title="Em Breve">
                                            <i class="fa fa-heart"> </i>
                                        </a>
									<!--	<a href="#" class="btn btn-default " >
                                            <i class="fa fa-facebook"> </i>
                                        </a> -->
										
                                    @endif

                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-1">
                                <div class="sharethis-inline-share-buttons"></div>
                                <div class="card-profile-stats d-flex justify-content-center">
                                    <div>
                                        <span class="heading"><a href="{{ route('quero_investir') }}" class="btn bt-sm btn-default"> Voltar</a></span> <!-- TODO :Falta calcular valor recebido e investimentos -->

                                    </div>
                                    <div>
                                        <span class="heading">{{ $metas->count() }}</span>
                                        <span class="description">Metas</span>
                                    </div>
                                    <div>
                                        <span class="heading">{{ $projetos->count() }}</span>
                                        <span class="description">Projetos</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
						<div class="text-center mt-5">
						<br>
						<br>
						<h3>{{$osc->sigla}} {{$osc->nome_fantasia}} 
						<span class="font-weight-light"></span>
						</h3>
       
						<div class="h6 mt-4" style="text-transform: capitalize;"><i class="ni business_briefcase-24 mr-2"></i> {{$osc->descricao}}</div>
						<br>
						

	
	
	

      <div class="shape shape-style-1 shape-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container py-md">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-5 mb-5 mb-lg-0">
            <h2 class="text-dark font-weight-light"><b>Como surgiu?</b></h2>
            <p class="lead text-dark mt-4">
			{{$osc->surgimento_osc}} </p>
			
			
			
          </div>
          <div class="col-lg-6 mb-lg-auto">
            <div class="rounded shadow-lg overflow-hidden transform-perspective-right">
              <div id="carousel_example" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel_example" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel_example" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="img-fluid" src="{{asset('vendor/site/images/meioa.jpg')}}" >
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid" src="{{asset('vendor/site/images/cultura.jpg')}}" >
                  </div>
				  <div class="carousel-item">
                    <img class="img-fluid" src="{{asset('vendor/site/images/idoso1.jpg')}}" >
                  </div>
				  <div class="carousel-item">
                    <img class="img-fluid" src="{{asset('vendor/site/images/esporte.jpg')}}" >
                  </div>
				  
                </div>
                <a class="carousel-control-prev" href="#carousel_example" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel_example" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
  
  
  
  
  
  
  
  

						</div>
						
						
                    
                        <div class=" col-xs-12 m-5">
						
						
						<div class="container">
		<div class="card bg-gradient-warning shadow-lg border-0">
			<div class="p-5">
				<div class="row align-items-center">
					<div class="col-lg-8">
						<h3 class="text-white">CNAE Principal {{$osc->area_atuacao}} </h3>
						
					</div>
					<div class="col-lg-3 ml-lg-auto">
					


							<a href="#" class="btn btn-lg btn-block btn-white" style="text-transform: capitalize;">{{$osc->cidade}} - {{$osc->uf}}</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>

                            <div class="row row-grid d-flex justify-content-between">
                                    @include('dashboard.investimentos.projetos')
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
                                    {!! Form::text('valor',null,['class'=>'form-control form-control-lg','required'=>'true','placeholder'=>'Quanto gostaria de Investir (R$)','id'=>'valor']) !!}
                                </div>
                                <div class="form-group">
                                    <label for="">Onde deseja Investir?</label>
                                    <select name="escolha" id="OndeInvestir" class="form-control custom-select" required>
                                        <option value="osc" selected>Investir em: {{$osc->nome_fantasia}}</option>
                                        <option value="projetos">Investir em Projetos</option>
                                    </select>
                                </div>
                                <div class="form-group" id="box-projetos" style="display: none">
                                    {!! Form::select('projeto_id',$projetos->pluck('nome','id'),null,['class'=>'form-control','placeholder'=>'Selecione o Projeto']) !!}
                                </div>
                                <input type="hidden" name="osc_id" value="{{$osc->id}}">
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