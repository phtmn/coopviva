@extends('osc.painel')

@section('cabecalho')
    <div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-image: url({{asset('vendor/argon-dash/assets/img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-success opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-10">
                    <h1 class="display-2 text-white">Cadastre seus Projetos</h1>
                    <p class="text-white mt-0 mb-2">Receba investimentos e Doações de Grandes Investidores</p>
                    <p class="text-success">#SimEuQuero</p>

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
                    <a href="{{route('projetos.create')}}" class="btn btn-outline-success pull-left">Novo Projeto</a>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nome </th>
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
                                                <span class="mb-0 text-sm">{{$d->nome}}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        R$ {{ number_format($d->valor_meta,2,',','.') }}
                                    </td>
                                    <td>
                                      <span class="badge badge-dot mr-4">
                                        <i class="bg-success"></i> {{$d->status}}
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