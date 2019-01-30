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
                                            <a class="nav-link active" id="pills-osc-tab" data-toggle="pill" href="#pills-osc" role="tab" aria-controls="pills-osc" aria-selected="true"><b class="text-dark" >Perfil da OSC</b></a>
                                            </li>  
                                            <li class="nav-item">
                                            <a class="nav-link " id="pills-ods-tab" data-toggle="pill" href="#pills-ods" role="tab" aria-controls="pills-ods" aria-selected="true"><b class="text-dark" >ODS</b></a>
                                            </li>      
                                            <!--<li class="nav-item">
                                            <a class="nav-link " id="pills-projetos-tab" data-toggle="pill" href="#pills-projetos" role="tab" aria-controls="pills-projetos" aria-selected="true"><b class="text-dark" >Projetos</b></a>
                                            </li>  -->
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
                                    <p align="justify" class="sample-text" style="text-indent: 15px;"><strong>Cidade:</strong> Cidade - PB</p>
                                    
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
                                    
                                    Colocar as ODS, objetivos e metas aqui
                                                           
                            </div>
                    </div>

                    <div class="tab-pane fade " id="pills-galeria" role="tabpanel" aria-labelledby="pills-galeria-tab">                        
                            <div class="table-responsive m-t-20">
                           
                                    <p align="justify" class="sample-text" style="text-indent: 15px;"><h4><strong> {{$osc->nome_fantasia}}</strong></h4></p>
                                    
                                    youtube

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
                                        <h3 class="entry-title">Logo da OSC</h3>
                                    <div class="circle" id="loader_2">
                                            
                                           

                                           
                                     
                                    </div>                         
                            
                                </div>  
                            </div>


                            <div class="card-body">
                                <div class="card-body">
                                <div class="row">
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
                                            {{ Form::select('situacao_imovel',[
                                                'Próprio'      => 'Próprio',
                                                'Alugado'       => 'Alugado', 
                                                'Emprestado'       => 'Emprestado',                                
                                                'Outro'    => 'Outro'                                
                                                ],null,['class'=>'form-control custom-select']) 
                                            }}  
                                    </div>--><center>
                                    <div class="form-group col-md-8">
                                       <!-- <label for="name"><strong>VALOR (R$)</strong></label> -->                                        
                                        <input type="text" name="valor" class="form-control form-control-lg" id="valor" aria-describedby="emailHelp" placeholder="Valor (R$)"  >                
                                        <br><a href="{{route('investir',$osc->id)}}" class="btn gradient-bg" >Investir </a></center>
                                    </div>  </center>


                                </div>

                           
                                </div>  
                            </div>

                                    
                    </div>
                            
        
        
        </div>
            </div> 


        </div>

        </div>



    

@stop

