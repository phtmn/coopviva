@extends('site.master')

@section('content')
    @include('dashboard.menu')





    <div class="container" style="margin-top:20px; padding:20px">

    <div class="row">
    <div class="col-lg-4 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row">
                <div class="round round-lg align-self-center round-coopviva"><i class="mdi mdi-cash-usd"></i></div>
                <div class="m-l-10 align-self-center">
                    <h3 class="m-b-0 font-light">R$ </h3>
                    <h5 class="text-muted m-b-0"> Total Investido</h5></div>
            </div>
        </div>
    </div>
</div>
<!-- Column -->
<!-- Column -->
<div class="col-lg-4 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row">
                <div class="round round-lg align-self-center "><i class="icon-doc text-white"></i></div>
                <div class="m-l-10 align-self-center">
                    <h3 class="m-b-0 font-lgiht">R$ </h3>
                    <h5 class="text-muted m-b-0">Investimentos do mês</h5></div>
            </div>
        </div>
    </div>
</div>
<!-- Column -->
<!-- Column -->
<div class="col-lg-4 col-md-6">
    <div class="card">
        <div class="card-body">
        <div class="circular-progress-bar">
                <h3 class="entry-title">Perfil do Usuário</h3>
                <div class="circle" id="loader_1">
                    <strong class="d-flex justify-content-center"></strong>                   
                </div>                
            </div>  
        </div>
    </div>
</div>
    </div>

    <div class="row">
    <div class="col-lg-4 col-md-12">
                        <div class="card card-inverse card-primary">
                            <div class="card-body">
                                <div class="d-flex">
                                    
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="mdi mdi-chart-areaspline"></i></h1></div>
                                    <div>
                                        <h3 class="card-title">Recursos arrecadados</h3>
                                        <h6 class="card-subtitle">Ano  2018</h6> </div>
                                </div>
                                <div class="row">
                                   
                                    <div class="col-6 align-self-center">
                                        <h2 class="font-light text-white"> R$ 66</h2>
                                    </div>
                                    <!-- <div class="col-8 p-t-10 p-b-20 align-self-center">
                                        <div class="usage chartist-chart" style="height:65px"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="card card-inverse card-success">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="mdi mdi-chart-line"></i></h1></div>
                                    <div>
                                        <h3 class="card-title">Investimentos em projetos</h3>
                                        <h6 class="card-subtitle">Ano  2018</h6> </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 align-self-center">
                                        <h2 class="font-light text-white"> R$ </h2>
                                    </div> 
                                    <!-- <div class="col-8 p-t-10 p-b-20 text-right">
                                        <div class="spark-count" style="height:65px"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"> ENGAJAMENTO SOCIAL </h3>
                                <h6 class="card-subtitle">Veja aqui como você se mobiliza em torno de nossas causas 
</h6>
                                 <hr>
                              <center>  <div id="visitor" style="height:260px; width:100%;"><img src="{{asset('imgs/enagajamento.png')}}" alt="img" /></div>
                            </div> </center>

                                                    
                        </div>
</div>
        
<div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                            <div class="circular-progress-bar">
                <h3 class="entry-title">Perfil da OSC</h3>
                <div class="circle" id="loader_2">
                    <strong class="d-flex justify-content-center"></strong>                   
                </div>
                
            </div>  
                            </div>
                        </div>
                    </div>
    </div> 



    <div class="row">
    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card blog-widget">
                            <div class="card-body">
                                <div class="blog-image"><img src="{{asset('imgs/gerar_incentivo.jpg')}}" alt="img" class="img-responsive" /></div>
                                <h3>Você Sabia disso?  </h3>
                                
                                <p class="m-t-20 m-b-20">
                                    Aqui você tem a oportunidade de participar do maior programa de VOLUNTARIADO  para ações sustentáveis. Participe!
                                </p>
                                <div class="d-flex">
                                 
                                 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-xlg-3 col-md-5">
                        <div class="card blog-widget">
                            <div class="card-body">
                                <div class="blog-image"><img src="{{asset('imgs/gerar_incentivo.jpg')}}" alt="img" class="img-responsive" /></div>
                                <h3>SEJA UM VOLUNTÁRIO  </h3>
                                <label class="label label-rounded label-success">Cultura</label>
                                <label class="label label-rounded label-success">Educação</label>
                                <label class="label label-rounded label-success">Saúde</label>
                                 <label class="label label-rounded label-success">Esporte</label>
                                <p class="m-t-20 m-b-20">
                                    Aqui você tem a oportunidade de participar do maior programa de VOLUNTARIADO  para ações sustentáveis. Participe!
                                </p>
                                <div class="d-flex">
                                    <div class="read"><a href="javascript:void(0)" class="link font-medium">Saiba Mais</a></div>
                                 
                                </div>
                            </div>
                        </div>
                    </div>           
    </div> 

</div>

<div class="container" style="margin-top:20px; padding:20px">
    <div class="row">
        <div class="com-md-4">
            <div class="circular-progress-bar">
                <h3 class="entry-title">Perfil do Usuário</h3>
                <div class="circle" id="loader_1">
                    <strong class="d-flex justify-content-center"></strong>                   
                </div>
                <h3 class="entry-title">Perfil do Usuário</h3>
            </div>          
            <div class="circular-progress-bar">
                <div class="circle" id="loader_2">
                    <strong class="d-flex justify-content-center"></strong>
                </div>
                <h3 class="entry-title">Perfil da OSC</h3>      
            </div>
        </div>          
    </div>

    




</div>
@stop


