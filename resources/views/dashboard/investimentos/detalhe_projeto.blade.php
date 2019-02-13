@extends('site.master')

@section('content')

    @include('dashboard.menu')






    <div class="container" style="margin-top:20px; padding:20px">



        <div class="row">
            <div class="col-lg-8  col-md-12">
                <div class="card card-inverse card-primary">
                    <div class="card-body">
                        <div class="d-flex no-block">
                            <h2 class="card-title"> <p>{{$projeto->descricao}}</p></h2>
                            <div class="ml-auto">
                                <ul class="nav nav-tabs justify-content-center ">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-osc-tab" data-toggle="pill" href="#pills-osc" role="tab" aria-controls="pills-osc" aria-selected="true"><b class="text-dark" >Perfil </b></a>
                                    </li>
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

                                    <p align="justify" class="sample-text" style="text-indent: 15px;"><h4><strong> {{$projeto->descricao}}</strong></h4></p>

                                    <p align="justify" class="sample-text" style="text-indent: 15px;"><strong>XX</strong> {{$projeto->instancia}}</p>
                                    <p align="justify" class="sample-text" style="text-indent: 15px;"><strong>XX:</strong> {{$projeto->ambito}}</p>
                                    <p align="justify" class="sample-text" style="text-indent: 15px;"><strong>XXX:</strong> {{ $projeto->segmento_cultural}} <strong>XXX:</strong></p>

                                    <hr>

                                    <h3>O que a OSC faz?</h3>
                                    <p align="justify" class="sample-text" style="text-indent: 15px;">{{$projeto->objetivo_geral}} </p>
                                    <h3>Como surgiu a OSC?</h3>
                                    <p align="justify" class="sample-text" style="text-indent: 15px;">{{$projeto->objetivos_esp}} </p>
                                    <h3>Missão da OSC?</h3>
                                    <p align="justify" class="sample-text" style="text-indent: 15px;">{{$projeto->justificativa}} </p>
                                    <h3>Visão da OSC?</h3>
                                    <p align="justify" class="sample-text" style="text-indent: 15px;">{{$projeto->publico_alvo}} </p>

                                </div>
                            </div>

                            <div class="tab-pane fade " id="pills-ods" role="tabpanel" aria-labelledby="pills-ods-tab">
                                <div class="table-responsive m-t-20">

                                    <p align="justify" class="sample-text" style="text-indent: 15px;"><h4><strong> {{$projeto->descricao}}</strong></h4></p>

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

                                    {{--<p align="justify" class="sample-text" style="text-indent: 15px;"><h4><strong> {{$osc->nome_fantasia}}</strong></h4></p>--}}






                                </div>
                            </div>

                            <div class="tab-pane fade " id="pills-galeria" role="tabpanel" aria-labelledby="pills-galeria-tab">
                                <div class="table-responsive m-t-20">

                                    <p align="justify" class="sample-text" style="text-indent: 15px;"><h4><strong> {{$projeto->descricao}}</strong></h4></p>

                                    @forelse($galerias as $galeria)
                                        <div class="thumbnail-* wow fadeInLeft ">
                                            <img src="{{asset($galeria->url)}}" alt="" />

                                        </div>

                                        <div class="large-* wow bounceInLeft ">
                                            <img src="{{asset($galeria->url)}}" class="img rounded " alt="" />
                                            <span class="close"><h1>✕</h1></span>
                                        </div>

                                    <!--  <a style="cursor: pointer"><img src="{{asset($galeria->url)}}" class="img-responsive border " style="width:162px; height:162px; margin-left:4px"></a>  -->

                                    @empty

                                        <p style="color:red">Nenhuma galeria cadastrada </p>
                                    @endforelse



                                </div><!--table-responsive-->
                            </div><!--tabe-pane-->

                            <script> /* ----::::::::::::: Script javaScript da galeria ::::::::::::------*/
                                $(document).ready(function(){
                                    $("[class^='thumbnail-']").click(function(){
                                        $("[class^='thumbnail-']").slideToggle("fast");
                                        $(this).next("[class^='large-']").slideToggle();
                                    });

                                    $(".close").click(function(){
                                        $("[class^='large-']:visible").toggle();
                                        $("[class^='thumbnail-']").fadeToggle("fast");;
                                    });

                                });

                                new WOW().init();
                            </script>



                        </div> <!---tab-content--->








                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="circular-progress-bar">
                            {{--@if($osc->logo != null)--}}
                                {{--<img src="{{asset($osc->logo)}}" alt="{{$osc->logo}}" class="img rounded-circle" style="width:200px; height: 200px ">--}}
                            {{--@else--}}
                                {{--<img src="{{asset('/uploads/osc/default-logo.png')}}" alt="Osc sem logo" style="width:200px; height: 200px ">--}}
                            {{--@endif--}}

                        </div>
                    </div>

                    @cannot('osc')
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row">

                                    <div class="form-group col-md-12">
                                        <label class="form-check-label" for="">Ivestir nesse projeto</label>
                                    </div>
                                        <div class="form-group col-md-8">
                                            <form class="form form-investidor" action="{{route('pagar')}}" method="POST">
                                                @csrf
                                                <input type="text" name="valor" class="form-control form-control-lg" id="valor" aria-describedby="emailHelp" placeholder="Valor R$">
                                                <br>
                                                <input type="hidden" name="projeto_id" value="{{$projeto->id}}">
                                                <input type="hidden" name="osc_id" value="{{$projeto->osc_id}}">
                                                <button type="submit" class="btn gradient-bg" >Investir </button>
                                            </form>
                                        </div>
                            </div>

                        </div>
                    </div>
                        @endcannot


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


<style>  /*---:::::::::: CSS da galeria :::::::::::--*/
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
    }


    [class*='thumbnail-']{

        width: 169px;
        height: 169px;
        float: left;
        cursor: zoom-in;
        margin-left:4px;

    }

    [class*='thumbnail-'] img{
        max-width: 100%;
    }

    [class*='large-']{
        background: #fff;
        width: 60%;
        margin: 0 auto;
        padding: 20px;
        display: none;

    }

    [class*='large-'] img{
        width: 100%;
        max-width: 100%;
        margin: 0 auto;
    }



    .close{
        color: #000000;
        font-size: 50px;
        position: absolute;
        top: 100px;
        right: 135px;
        float: right;
        font-size: 14px;
    }

    [class*='thumbnail-']{
        overflow: hidden;
        padding: 0;
        position: relative;
        cursor: zoom-in;
    }

    [class*='thumbnail-']:hover img{
        transition: .3s linear;
        transition-delay: 300ms;
        transform: /* rotate(5deg) */ scale(1.1);
    }

</style>

<!--::::::::::::: bibliotecas da galeria :::::::::::::::::-->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>