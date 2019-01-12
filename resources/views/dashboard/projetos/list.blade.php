@extends('layouts.admin')

@section('content')

    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Projetos</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">COOPVIVA</a></li>
                <li class="breadcrumb-item active">Projetos</li>
            </ol>
        </div>
    </div>

    @if(Session::has('mensagem'))
        <div class="alert  {{ Session::get('mensagem')['class'] }} alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{--<h4><i class="icon fa  {{ Session::get('mensagem')['icon'] }} "></i> Bom Trabalho!</h4>--}}
            {{ Session::get('mensagem')['msg'] }}
        </div>
    @endif


<div class="row">
       <div class="col-lg-5 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-block little-profile text-center">
                    <h3 class="m-b-0">Projetos</h3>
                    <p>{{$data->count()}}</p>
                    <a href="{{ route('project.create') }}" class="m-t-10 waves-effect waves-dark btn btn-info btn-md btn-rounded">Cadastrar Projeto</a>
                    <div class="row text-center m-t-20">
                        <div class="col-lg-6 col-md-4 m-t-20">
                            <h3 class="m-b-0 font-light">Projetos Totais </h3><small> R$ {{ number_format($data->sum('project_value'),2,',','.')}}</small>
                        </div>
                        <div class="col-lg-6 col-md-4 m-t-20">
                            <h3 class="m-b-0 font-light">Arrecadado </h3><small>R$ 0</small>
                        </div>
                    </div>
                </div>
            </div>
       </div>

    <div class="col-md-12 col-lg-7 col-sm-12">
        <div class="card card-outline-success">
            <div class="card-body">
                <table id="tb_projects" class="table-responsive table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome </th>
                            <th>Valor (R$)</th>
                            <th>Arrecadado (R$)</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $d)
                        <tr>
                            <td> {{ $d->id }}</td>
                                <td>
                                    <a href="{{ route('project.detail',[$d->id]) }}" title="Detalhes do Projeto" data-toggle="tooltip" > {{ $d->description }}
                                </td>
                            <td> R$ {{ number_format($d->project_value,2,',','.') }} </td>
                            <td> R$ {{ $d->totalIncentives }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection



