@extends('site.master')

@section('content')
    @include('dashboard.menu')
    <div class="container">
        <div class="table" style="margin-top:20px">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Sigla</th>
                        <th>Fundação</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $d)
                    <tr>
                        <td>{{$d->nome_fantasia}}</td>
                        <td>{{$d->sigla_osc}}</td>
                        <td>{{$d->ano_fundacao}}</td>
                        <td>{{$d->telefone}}</td>
                    </tr>
                    @empty
                        <p>Não há Registros. <span></span><a href="{{ route('osc.create') }} ">Clique aqui para cadastrar uma OSC</a></p>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
    

@endsection

