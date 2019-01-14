@extends('layouts.admin')

@section('content')

    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Projetos</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">COOPVIVA</a></li>
                <li class="breadcrumb-item active">Detalhes do Projeto</li>
            </ol>
        </div>
    </div>

        @if( isset($projeto) )
            {{ Form::model($projeto,['route'=> ['project.update',$projeto->id] ]) }}

        @else
            {{ Form::open(['route'=>'project.create']) }}

        @endif
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="card card-outline-success">
                    <div class="card-body">
                        <h3 class="card-title"><strong> Dados do Projeto</strong></h3>
                             <hr>
                            @include('admin.projects.tabs.dadosGerais')
                        <h3 class="card-title"><strong> Dados Financeiros</strong></h3>
                             <hr>
                            @include('admin.projects.tabs.dadosFinanceiros')
                        <h3 class="card-title"><strong> Dados do Proponente</strong></h3>
                             <hr>
                            @include('admin.projects.tabs.dadosProponente')
                        <div align="center" class="form-actions">
                                <button type="submit" class="btn btn-info">Salvar</button>
                                <a href="{{route('project.index')}}" class="btn btn-primary">Voltar</a>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        {!! Form::close() !!}
@endsection


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

