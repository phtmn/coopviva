@extends('layouts.dashboard')

@section('cabecalho')

    <div class="header bg-gradient-danger pb-8 pt-5 pt-md-8">
        <span class="mask bg-gradient-default opacity-3"></span>
    </div>
@stop

@section('conteudo')

        <div class="container-fluid">
            <div class="col-md-12">
                <a href="" class="btn btn-success m-4" data-toggle="modal" data-target="#modal-default"> Carregar Foto</a>
                <div class="card shadow">
                    <h3 class="display-3 text-center">Carregue suas fotos </h3>
                    @forelse($galerias as $g)
                            <div class="col-xs-12 ">
                                <div class="portfolio-cont p-2">
                                    <a href="#">
                                        <img src="{{asset($g->url)}}" alt="" class="img-responsive border-light" style="width:120px; height:120px; " data-toggle="tooltip" data-placement="top" title="{{$g->descricao}}"></a>
                                        <h3 class="entry-title"><a href="{{route('galeria.show',$g->id)}}">Remover</a></h3>
                                </div>
                            </div>
                        @empty
                    @endforelse
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
