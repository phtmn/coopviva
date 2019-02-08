@extends('site.master')

@section('content')

    @include('dashboard.menu')



    <div class="container" style="margin-top:20px; padding:20px">


<!--<div class="row">
    <div class="col-lg-12 col-xlg-3 col-md-5">
                    <div class="card blog-widget">
                        <div class="card-body">
                            <div class="blog-image">
                         
                            
                            </div>
                            <h3>Você Sabia disso?  </h3>
                            
                            <p align="justify" class="m-t-20 m-b-20">
                                Aqui você tem a oportunidade de participar do maior programa de VOLUNTARIADO  para ações sustentáveis.
                            </p>
                            <div class="d-flex">
                             
                             
                            </div>
                        </div>
                    </div>
                </div>

                          
</div> -->



    <div class="row">
        <div class="col-lg-8  col-md-12">
                    <div class="card card-inverse card-primary">
                        <div class="card-body">
                        <div class="d-flex no-block">
                               <h2 class="card-title"> <p>{{$osc->sigla_osc}}</p></h2> 
                              <div class="ml-auto">
                              <ul class="nav nav-tabs justify-content-center ">
                                            <li class="nav-item">
                                            <a class="nav-link active" id="pills-osc-tab" data-toggle="pill" href="#pills-osc" role="tab" aria-controls="pills-osc" aria-selected="true"><b class="text-dark" >Perfil </b></a>
                                            </li> 
                                           {{--  <li class="nav-item"> --}}
                                           {{--  <a class="nav-link " id="pills-projetos-tab" data-toggle="pill" href="#pills-projetos" role="tab" aria-controls="pills-projetos" aria-selected="true"><b class="text-dark" >Projetos</b></a> --}}
                                           {{--  </li>   --}}
                                            <li class="nav-item">
                                            <a class="nav-link " id="pills-ods-tab" data-toggle="pill" href="#pills-ods" role="tab" aria-controls="pills-ods" aria-selected="true"><b class="text-dark" >ODS</b></a>
                                            </li>      
                  
                                            <li class="nav-item">
                                            <a class="nav-link " id="pills-galeria-tab" data-toggle="pill" href="#pills-galeria" role="tab" aria-controls="pills-galeria" aria-selected="true"><b class="text-dark" >Galeria</b></a>
                                            </li>                                                                     
                                    </ul>                                
                                </div> 
                            </div> 



            <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-osc" role="tabpanel" aria-labelledby="pills-osc-tab">                        
                            <div class="table-responsive m-t-20">
                           
                                    <p align="justify" class="sample-text" style="text-indent: 15px;"><h4><strong> {{$osc->nome_fantasia}}</strong></h4></p>
                                    
                                    <p align="justify" class="sample-text" style="text-indent: 15px;"><strong>Ano de Fundação:</strong> {{$osc->ano_fundacao}}</p>
                                    <p align="justify" class="sample-text" style="text-indent: 15px;"><strong>CNAE:</strong> {{$osc->cnae}}</p>
                                    <p align="justify" class="sample-text" style="text-indent: 15px;"><strong>Cidade:</strong> {{ $enderecos->cidade}} <strong>Estado:</strong> {{ $enderecos->uf}}</p>
                                    
                                    <hr>
                                    
                                    <h3>O que a OSC faz?</h3> 
                                    <p align="justify" class="sample-text" style="text-indent: 15px;">{{$osc->descricao_osc}} </p>
                                    <h3>Como surgiu a OSC?</h3> 
                                    <p align="justify" class="sample-text" style="text-indent: 15px;">{{$osc->descricao_osc}} </p>
                                    <h3>Missão da OSC?</h3> 
                                    <p align="justify" class="sample-text" style="text-indent: 15px;">{{$osc->missao_osc}} </p>
                                    <h3>Visão da OSC?</h3> 
                                    <p align="justify" class="sample-text" style="text-indent: 15px;">{{$osc->visao_osc}} </p>
                                                           
                            </div>
                    </div> 

                    <div class="tab-pane fade " id="pills-ods" role="tabpanel" aria-labelledby="pills-ods-tab">                        
                            <div class="table-responsive m-t-20">
                           
                                <p align="justify" class="sample-text" style="text-indent: 15px;"><h4><strong> {{$osc->nome_fantasia}}</strong></h4></p>

                                @forelse($metas->unique('objetivo_id') as $obj)
                                    <a style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods'.$obj->objetivo_id.'.png')}}"></a>
                                    @empty
                                        
                                @endforelse

                                @forelse($metas as $meta)
                                    <p align="justify" class="sample-text" style="text-indent: 5px;"><b >{{ $meta->meta_codigo }} </b >- {{ $meta->meta_descricao }}</p>
                                    <hr>
                                    @empty
                                    <p style="color:red">Nenhuma ODS cadastrada </p>
                                @endforelse
                                                           
                            </div>
                    </div>

                    <div class="tab-pane fade " id="pills-projetos" role="tabpanel" aria-labelledby="pills-projetos-tab">                        
                            <div class="table-responsive m-t-20">
                           
                                    <p align="justify" class="sample-text" style="text-indent: 15px;"><h4><strong> {{$osc->nome_fantasia}}</strong></h4></p>
                                    
                                    Colocar os PRojetos Aqui


                                    
                                                           
                            </div>
                    </div>

                    <div class="tab-pane fade " id="pills-galeria" role="tabpanel" aria-labelledby="pills-galeria-tab">                        
                            <div class="table-responsive m-t-20">
                           
                                    <p align="justify" class="sample-text" style="text-indent: 15px;"><h4><strong> {{$osc->nome_fantasia}}</strong></h4></p>

                                @forelse($galerias as $galeria)
                                
    
                                    <a style="cursor: pointer"><img src="{{asset($galeria->url)}}" class="img-responsive border " style="width:162px; height:162px; margin-left:4px"></a>
                                
                                @empty
                                
                                <p style="color:red">Nenhuma galeria cadastrada </p>
                                @endforelse

                            </div>
                    </div>             





            </div>

            






                        </div>
                    </div>
                  
                </div>
     
            <div class="col-lg-4 col-md-12">
                    <div class="card">
                            <div class="card-body">
                                <div class="circular-progress-bar">
                                    @if($osc->logo != null)
                                        <img src="{{asset($osc->logo)}}" alt="{{$osc->logo}}" class="img rounded-circle" style="width:200px; height: 200px ">
                                     @else
                                         <img src="{{asset('/uploads/osc/default-logo.png')}}" alt="Osc sem logo" style="width:200px; height: 200px ">
                                    @endif
                            
                                </div>  
                            </div>


                            <div class="card-body">
                                <div class="card-body">
                                <div class="row">
                                @cannot('osc')
                                    <div class="form-group col-md-12">
                                        <input class="form-check-input" type="radio" name=" " id=" " value="OSC" disabled="disabled" checked="checked"  >
                                        <label class="form-check-label" for="">Desejo realizar uma <strong>Doação</strong> </label>
                                    </div>
                                    <!--<div class="form-group col-md-12">
                                        <input class="form-check-input" type="radio" name="" id="" value="PROJETO">
                                        <label class="form-check-label" for="">Desejo <strong>Patrocinar</strong> um projeto </label>
                                    </div> 
                                    <div class="form-group col-md-12">
                                        <label for="">Escolha um Projeto</label>
                                            {{--{{ Form::select('situacao_imovel',[--}}
                                                {{--'Próprio'      => 'Próprio',--}}
                                                {{--'Alugado'       => 'Alugado', --}}
                                                {{--'Emprestado'       => 'Emprestado',                                --}}
                                                {{--'Outro'    => 'Outro'                                --}}
                                                {{--],null,['class'=>'form-control custom-select']) --}}
                                            {{--}}  --}}
                                    </div>--><center>
                                    <div class="form-group col-md-8">
                                        <form class="form form-investidor" action="{{route('pagar')}}" method="POST">
                                            @csrf

                                           

                                            <input type="text" name="valor" class="form-control form-control-lg" id="valor" aria-describedby="emailHelp" placeholder="Valor R$">
                                        <br>
                                            <input type="hidden" name="osc_id" value="{{$osc->id}}">
                                            <button type="submit" class="btn gradient-bg" >Investir </button>

                                        </form>
                                    </div> 
                                    @endcannot 
                                     </center>


                                </div>

                           
                                </div>  
                            </div>

                                    
                    </div>
                            
        
        
        </div>
            </div> 


        </div>

        </div>



    

@stop

@section('js')
    <script src="{{asset('js/jquery.mask.min.js')}}"> </script>
    <script>
        $(document).ready(function(){
            $("#valor").mask('#.##0,00', {reverse: true});
        });
    </script>
    @stop