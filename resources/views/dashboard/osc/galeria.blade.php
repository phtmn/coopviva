@extends('layouts.dashboard')

@section('cabecalho')

    <div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-image: url({{asset('vendor/argon-dash/assets/img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-danger opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-10">
                    <h1 class="display-2 text-white">Envie suas fotos</h1>
                   {{-- <p class="text-white mt-0 mb-2">Precisamos de algumas informações para incluir o seu projeto, assim que finalizar ele será enviado
				   para aprovação da plataforma. --}}
                    </p>
                    {{--<a href="" class="btn btn-success m-4" data-toggle="modal" data-target="#modal-default"> Carregar uma Foto</a>--}}

                </div>
            </div>
        </div>
    </div>
@stop

@section('conteudo')
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header border-0">
                     <a href="" class="btn btn-primary m-4" data-toggle="modal" data-target="#modal-default"> Carregar uma Foto</a>
                </div>
                <div class="container d-flex">
                    @forelse($galerias as $g)

                            <div class="portfolio-cont p-4">
                                <a href="#">
                                    <img src="{{asset($g->aws_url)}}" alt="" class="img-responsive border-light img-thumbnail" style="width:50px; height:50px;"  data-toggle="tooltip" data-placement="top" title="{{$g->legenda}}"></a>
                                <h3 class="entry-title text-center"><a href="{{route('galeria.show',$g->id)}}"><i class="fa fa-trash" style="color:red" data-toggle="tooltip" data-placement="left" title="Remover "></i></a></h3>
                            </div>
                    @empty

                    @endforelse
                </div>
            </div>
        </div>
		
		
		<div class="col-md-4">
            <div class="card shadow">
                <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    @if(!$osc->logo)
                                        <img src="{{asset('vendor/site/images/jacareCoopViva.png')}}" class="rounded-circle">
                                    @else
                                        <img src="{{$osc->logo}}" class="">
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-default float-right" data-toggle="modal" data-target="#modal-default-logo" title="Abrir modal para ulpoad de logo">Alterar Logo</a>
                        </div>
                    </div>
					
                </div>
                <div class="container d-flex">
                   
				   
				   
                </div>
            </div>
        </div>
    </div>
	
	<div class="modal fade" id="modal-default-logo" tabindex="-1" role="dialog" aria-labelledby="modal-default-logo" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered"  role="document">
                {!! Form::open(['route'=>'osc.uploadFoto','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal-title-default">Carregue sua Logo</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            {!! Form::file('file',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>


        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered"  role="document">
                {!! Form::open(['route'=>'galeria.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal-title-default">Carregue sua Foto</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            {!! Form::file('file',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">Título  
                            {!! Form::text('legenda',null,['class'=>'form-control','placeholder'=>'Insira uma legenda para essa foto']) !!}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
@stop
