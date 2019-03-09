@extends('layouts.dashboard')


@section('cabecalho')




<div class="header bg-gradient-danger pb-8 pt-5 pt-md-8">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-3"></span>
        <!-- Header container -->
        <div class="container-fluid align-items-center">
           
    
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body bg-transparent">
                        <div class="tab-content" id="myTabContent">
                             	
								 <p class="text-danger">Upload de Imagens</p>
                                <hr>
                              
                             <form class="form form-investidor" action="{{route('galeria.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="form-group col-md-5">
            <br>
                {!! Form::file('img',null,['class'=>'form-control','required'=>'true']) !!}
            </div>
           
            <div class="form-group col-md-2">
              <br>
                <input type="text" name="legenda" class="form-control" id="name" aria-describedby="emailHelp" required="true" placeholder="Lengenda">
            </div>

            <div class="form-group col-md-3">                
           <br>
            <center>  {{ Form::select('situacao_imovel',[
                                            'Próprio'      => 'OSC',
                                            'Alugado'       => 'Projeto',
                                            'Emprestado'       => 'Emprestado',
                                            'Outro'    => 'Outro'
                                            ],null,['class'=>'form-control custom-select'])
                                        }} </center>
            </div>
			<div class="form-group col-md-2">                
           <br>
            <center>  <button type="submit" class="btn btn-outline-success">Salvar</button> </center>
            </div>

            </div>

          
<div class="row  ">


                    @forelse($galerias as $g)
                    <div class="col-xs-12 ">
                        <div class="portfolio-cont text-center">
                        
                            <a href="#"><img src="{{asset($g->url)}}" alt="" class="img-responsive border-light" style="width:120px; height:120px; " data-toggle="tooltip" data-placement="top" title="{{$g->descricao}}"></a>
                            <h3 class="entry-title"><a href="#"></a></h3>
                        </div>
                    </div>
                    @empty
                    @endforelse 
                </div>
  
        </form> 
							 
		       
                           
                        </div>
              
           
                </div>
            </div>
        </div>
      
    </div>









    

        
</div>



@endsection