@extends('site.master')

@section('content')
    @include('dashboard.menu')
    <div class="container">
        <div class="button" style="margin-top:10px">
            <a href="{{route('projetos.create')}}" class="btn orange-border">Incluir Projeto</a>
        </div>

        <div class="table" style="margin-top:20px">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Descricao do Projeto</th>
                        <th>Instancia</th>
                        <th>Segmento cultural</th>
                        <th>Valor_meta</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $d)
                    <tr>
                        <td>{{$d->descricao}}</td>
                        <td>{{$d->instancia}}</td>
                        <td>{{$d->segmento_cultural}}</td>
                        <td>{{$d->valor_meta}}</td>
                        <td class="text-center ">

                                <a href="{{route('projetos.edit',$d->id)}}"><i class="fa fa-pencil"></i></a>


                        </td>
                    </tr>
                    @empty
                        <p>Você ainda nao cadastrou nenhum Projeto. <span></span><a href="{{ route('projetos.create') }} ">Clique aqui para cadatrar ou use o botão acima</a></p>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
    

@endsection

