@extends('site.master')

@section('content')
    @include('dashboard.menu')
    <div class="container">
        <div class="button" style="margin-top:10px">
            <a href="{{route('projetos.create')}}" class="btn orange-border">Incluir Projeto</a>
        </div>

        <div class="table" style="margin-top:20px">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Descricao do Projeto</th>
                        <th>Instancia</th>
                        <th>Segmento cultural</th>
                        <th>Valor_meta</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $d)
                    <tr>
                        <td>{{$d->descricao}}</td>
                        <td>{{$d->instancia}}</td>
                        <td>{{$d->segmento_cultural}}</td>
                        <td>{{$d->valor_meta}}</td>
                    </tr>
                    @empty
                        <p>Você ainda nao cadastrou nenhum Projeto. <span></span><a href="{{ route('projetos.create') }} ">Clique aqui para cadatrar ou use o botão acima</a></p>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
    

@endsection

