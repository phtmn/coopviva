@extends('layouts.dashboard')

@section('cabecalho')

    <div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-image: url({{asset('vendor/argon-dash/assets/img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-10">
                    <h1 class="display-2 text-white">Envie suas fotos</h1>
                    <p class="text-white mt-0 mb-2">Precisamos de algumas informações para incluir o seu projeto, assim que finalizar ele será enviado
                        para aprovação da plataforma.
                    </p>
                    <a href="" class="btn btn-success m-4" data-toggle="modal" data-target="#modal-default"> Carregar uma Foto</a>

                </div>
            </div>
        </div>
    </div>
@stop

@section('conteudo')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header border-0">
                    <label for="" class="text-center">Suas Fotos serão carregadas aqui...</label>
                </div>
                <div class="container d-flex">
                    @forelse($galerias as $g)

                            <div class="portfolio-cont p-4">
                                <a href="#">
                                    <img src="{{asset($g->aws_url)}}" alt="" class="img-responsive border-light img-thumbnail" style="width:200px; height:200px;"  data-toggle="tooltip" data-placement="top" title="{{$g->legenda}}"></a>
                                <h3 class="entry-title"><a href="{{route('galeria.show',$g->id)}}">Remover</a></h3>
                            </div>
                    @empty

                    @endforelse
                </div>
            </div>
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
                        <div class="form-group">
                            {!! Form::text('legenda',null,['class'=>'form-control','placeholder'=>'Insira uma legenda para essa foto']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::select('album',['osc'=>'OSC','projetos'=>'projetos'],null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::select('projeto_id',$projetos,null,['class'=>'form-control']) !!}
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
