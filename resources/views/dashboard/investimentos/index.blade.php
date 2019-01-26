@extends('site.master')
    @section('content')
    @include('dashboard.menu')
    


    <div class="container" style="margin-top:20px; padding:20px">
        <div class="row row justify-content-center">

       
               


            <div class="col-md-12">
        
      
                @can('investidor') <h4>Investimentos Realizados </h4>@endcan
                
                @can('osc')<h4>Investimentos Recebidos   @endcan</h4>
             

          
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
                            @can('osc')    <th> Investidor </th> @endcan
                                            <th>OSC </th>   
                                            <th>Projeto</th>                                                                                   
                                            <th>Recibo </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($data as  $d)
                                    <tr>
                                        <td>{{$d->created_at}}</td>
                                        <td>Doacao</td>
                                        <td>{{$d->valor_investimento}}</td>
                            @can('osc')             <td> </td> @endcan
                                        <td>{{$d->osc->nome_fantasia}}</td>
                                        <td>{{$d->projeto->descricao}}</td>
                                        <td> <a href=""><i class="fas fa-file-alt" data-position="top"></i></a></td>

                                    </tr>
                                    @empty
                                        <p>Nao ha registros</p>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            
                     
                
                        <br>
                    </div>
                    
       
        </div>
    </div>
    </div>

    @endsection
