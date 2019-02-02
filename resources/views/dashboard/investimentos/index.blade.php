@extends('site.master')
@section('content')
    @include('dashboard.menu')

    <div class="container" style="margin-top:20px; padding:20px">
        <div class="row row justify-content-center">
            <div class="col-md-12">
                {{--@can('osc')--}}
                {{--<h4>Investimentos Recebidos em {{ Auth::user()->name }}  </h4>--}}
                {{--@endcan--}}
                {{--@cannot('osc')--}}
                {{--<h4>Investimentos Realizados  </h4>--}}
                {{--@endcannot--}}

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive table-hover m-t-20">
                            <table class="table stylish-table">
                                <thead>
                                <tr>
                                    <!-- <th colspan="2">Investidor</th> -->
                                    <th>Data</th>
                                    <th>Tipo</th>
                                    <th>Valor (R$)</th>
                                {{--@can('osc')    <th> Investidor </th> @endcan--}}
                                {{--@cannot('osc')                <th>OSC </th>   @endcannot--}}
                                <!--     <th>Projeto</th> -->
                                    <!--    <th>Recibo </th> -->
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($data as  $d)
                                    <tr>
                                        <td>{{date('d/m/Y',strtotime($d->created_at))}}</td>
                                        <td>Doacao</td>
                                        <td>{{$d->valor_investimento}}</td>
                                    </tr>
                                    {{--@can('osc')             <td> </td> @endcan--}}
                                    {{--@cannot('osc')  <th>{{$d->nome_fantasia}} </th>   @endcannot          --}}
                                    <!--    <td> <a href=""><i class="fas fa-file-alt" data-position="top"></i></a></td> -->
                                @empty
                                    <p>Nao ha registros</p>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection