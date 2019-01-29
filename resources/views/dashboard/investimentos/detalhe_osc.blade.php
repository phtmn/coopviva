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
                               <h4 class="card-title"> <p>{{$osc->nome_fantasia}}</p></h4> 
                              <div class="ml-auto">
                              <ul class="nav nav-tabs justify-content-center ">
                                            <li class="nav-item">
                                            <a class="nav-link active" id="pills-osc-tab" data-toggle="pill" href="#pills-osc" role="tab" aria-controls="pills-osc" aria-selected="true">Perfil da OSC</a>
                                            </li>                                                                           
                                    </ul>                                
                                </div> 
                            </div> 



            <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-osc" role="tabpanel" aria-labelledby="pills-osc-tab">                        
                            <div class="table-responsive m-t-20">

                            <hr>

                            <p>{{$osc->nome_fantasia}}</p>
                        <p>{{$osc->sigla_osc}}</p>
                        <p>{{$osc->ano_fundacao}}</p>
                        <p>{{$osc->area_atuacao}}</p>
                        <h4>Missao</h4>
                            <p>
                                {{$osc->missao_osc}}
                            </p>
                        <h4>Visaoo</h4>
                            <p>
                                {{$osc->visao_osc}}
                            </p>                   
                                                        
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
                                            <hr>

                                           

                                           
                                     
                                    </div>                         
                            
                                </div>  
                            </div>


                            <div class="card-body">
                                <div class="circular-progress-bar">
                                        
                                        <input class="form-check-input" type="radio" name="tipo" id="radioPJ" value="PROJETO">
                            <label class="form-check-label" for="radioPJ">Desejo realizar uma Doação </label>

                            <label for="name"><strong>VALOR (R$)</strong></label>
                            <input type="text" name="valor" class="form-control form-control-lg" id="valor" aria-describedby="emailHelp" placeholder="">                
                            <a href="{{route('investir',$osc->id)}}" class="btn gradient-bg">Investir </a>
                                </div>  
                            </div>

                                    
                    </div>
                            
        
        
        </div>
            </div> 


        </div>

        </div>



    

@stop

