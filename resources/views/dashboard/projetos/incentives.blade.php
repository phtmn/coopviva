@extends('layouts.admin')


@section('content')



    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Incentivos desse Projeto</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">DashBoard</a></li>
                <li class="breadcrumb-item active">SSSSS</li>
            </ol>
        </div>
    </div>



    <div class="col-md-12 col-lg-12 col-sm-12">
        @if(Session::has('mensagem'))
            <div class="alert  {{ Session::get('mensagem')['class'] }} alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{--<h4><i class="icon fa  {{ Session::get('mensagem')['icon'] }} "></i> Bom Trabalho!</h4>--}}
                {{ Session::get('mensagem')['msg'] }}
            </div>
        @endif
    <div class="card">

        <div class="card-body">
            <table id="tb_projects" class="table table-hover">
                <thead>
                <tr>
                    <td>Código</td>
                    <td>TA</td>
                    <td>Valor do Projeto</td>                                        
                </tr>
                </thead>

                <tbody>
                @foreach($data as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->sponsor->code}}</td>                        
                        <td>{{$d->amount}}</td>                        
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div>
    </div>
@endsection

