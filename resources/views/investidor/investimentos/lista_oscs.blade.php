@extends('layouts.site')


@section('conteudo_principal')
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
        <div class="container py-lg-md d-flex">
            <div class="col px-0">
                <div class="row">
                    <div class="col-lg-10">
                        <h1 class="display-3  text-white">Realize um investimento agora
                            <span style="line-height: 1.1;">Escolha uma Osc para Investir</span>
                        </h1>
                        <div class="btn-wrapper">
                        <!--  <a href="{{route('register')}}" class="btn btn-success btn-icon mb-3 mb-sm-0">
                                <span class="btn-inner--icon"><i class="fa fa-handshake-o"></i></span>
                                <span class="btn-inner--text">Seja um investidor</span>
                            </a>
                          <a href="{{route('register')}}" class="btn btn-white btn-icon mb-3 mb-sm-0">
                                <span class="btn-inner--icon"><i class="fa fa-registered"></i></span>
                                <span class="nav-link-inner--text">Cadastre-se</span>
                            </a> -->
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
    </section>
    <!-- 1st Hero Variation -->

</div>

<section class="section section-lg pt-lg-0 mt--300">

    <div class="container">

        {{--<div class="row m-3">--}}
            {{--<div class="col-md-12">--}}
                {{--<form action="#" class="form">--}}
                    {{--<div class="row">--}}
                        {{--<div class="form-group col-md-4 p-2 m-1">--}}
                            {{--<label for="" class="text-white">Objetivo 2030</label>--}}
                            {{--<select  name="ods" id="ods" class="form-control">--}}
                                {{--<option> 1 - Erradicação da Pobreza</option>--}}
                                {{--<option> 2 - Erradicação da Fome</option>--}}
                                {{--<option> 3 - Saúde e Qualidade</option>--}}
                                {{--<option> 4 - Educação de Qualidade</option>--}}
                                {{--<option> 5 - Igualdade de Genero</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-md-4 p-2 m-1">--}}
                            {{--<label for="" class="text-white">Segmento</label>--}}
                            {{--<select  name="ods" id="ods" class="form-control">--}}
                                {{--<option> Idoso </option>--}}
                                {{--<option> Meio Ambiente </option>--}}
                                {{--<option> </option>--}}
                                {{--<option> 4 - Educação de Qualidade</option>--}}
                                {{--<option> 5 - Igualdade de Genero</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}

                        {{--<div class="form-group col-md-2 p-2 m-1">--}}
                            {{--<label for=""></label>--}}
                            {{--<button class="btn btn-default form-control mt-2" type="button">Pesquisar</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form>--}}

            {{--</div>--}}
        {{--</div>--}}


        <div class="row justify-content-center mt-5">
            <div class="col-lg-12">
                @foreach($data->chunk(3) as $d)
                    <div class="row row-grid">
                        @foreach($d as $osc)
                            <div class="col-lg-3">
                                <a href="{{route('detalhe.osc',$osc->id)}}" style="cursor: pointer;">
                                    <div class="card card-lift--hover shadow border-0 bg-white-default">
									
                                        <div class="card-body py-4">
											
											
										
                                            @if(!$osc->logo)
                                               <center>  <img src="{{asset('vendor/site/images/jacareCoopViva.png')}}" class="rounded-circle img-thumbnail" style="width:205px; height:205px;"></center> 
                                            @else
                                                <center> <img src="{{$osc->logo}}" class="rounded-circle img-thumbnail" style="width:205px; height:205px;"> </center> 
                                            @endif
											<br>
											
                                            <h6 class="text-default text-uppercase text-center"><b>{{$osc->nome_fantasia}}</b></h6>
											<hr>
                                            <!--<p class="description mt-3 text-white">{{$osc->descricao ?? ''}}</p>-->
                                            <div>
											<div class="row justify-content-center">
											
												<div class="card-profile-stats d-flex justify-content-center">   
                                                
														<div class="alert alert-success text-center " role="alert">
															<strong>{{ $osc->projetos()->count() }}</strong> Projeto(s)
														</div>-
												
														<div class="alert alert-info text-center" role="alert">
															<strong>{{$osc->metas()->count() }}</strong> Meta(s)
														</div>
											
											</div>
												</div>		
																		
												
                                                
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
											<h4><a href="{{route('detalhe.osc',$osc->id)}}"><span class="badge badge-pill badge-dark"><b style="text-transform: capitalize;">#SimEuQuero</b></span></a></h4>
                                            
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>

            {{$data->links()}}
        </div>
    </div>
</section>



@endsection