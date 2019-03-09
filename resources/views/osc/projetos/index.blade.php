@extends('osc.painel')


@section('conteudo')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header border-0">
                    <a href="{{route('projetos.create')}}" class="btn btn-outline-success pull-left">Novo Projeto</a>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Projeto</th>
                                <th scope="col">Valor (R$)</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $d)
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">{{$d->descricao}}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        R$ {{ number_format($d->valor_meta,2,',','.') }}
                                    </td>
                                    <td>
                                      <span class="badge badge-dot mr-4">
                                        <i class="bg-success"></i> Publicado
                                      </span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{route('projetos.edit',$d->id)}}"></i> Editar </a>                                
                                           
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <p style="color:red">Você ainda não cadastrou nenhum Projeto! <span></span></p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop