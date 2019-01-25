@extends('site.master')
    @section('content')
    @include('dashboard.menu')
    


    <div class="container" style="margin-top:20px; padding:20px">
        <div class="row row justify-content-center">

            <div class="col-md-12">
                <div class="card-header">


            <div class="col-md-12">
            <div class="card-header">
                
                </div>
                <br>



                <h4>Investimentos Realizados / Recebidos </h4>
                <hr>
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
                                            <th>Projeto</th>
                                            <th>OSC / Investidor </th>
                                            <th>Recibo </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($data as  $d)
                                    <tr>
                                        <td>{{$d->created_at}}</td>
                                        <td>Doacao</td>
                                        <td>{{$d->valor_investimento}}</td>
                                        <td>{{$d->projeto->descricao}}</td>
                                        <td>{{$d->osc->nome_fantasia}}</td>
                                        <td> <a href=""><i class="fas fa-file-alt" data-position="top"></i></a></td>

                                    </tr>
                                    @empty
                                        <p>Nao ha registros</p>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            
                        </div>
                
                        <br>
                    </div>
                    
            </div>
        </div>
    </div>

    @endsection
