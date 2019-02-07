@extends('site.master')


@section('content')

    @include('dashboard.menu')

    <div class="container">
        <div class="form-group" style="margin-top: 25px">
            <a href="{{ route('galeria.create') }}" class="btn gradient-bg">Incluir foto</a>
        </div>
        <div class="jumbotron jumbotrn-fluid">
        <h2>Galerias de Imagens</h2>
        <!--<div class="portfolio-wrap">-->
            <div class="container">
                <div class="row ">
                    @forelse($galerias as $g)
                    <div class="col-xs-12 col-md-6 col-lg-4 portfolio-item">
                        <div class="portfolio-cont">
                            <a href="#"><img src="{{asset($g->url)}}" alt="" class="img img-responsive" style="width:300px; height:300px; margin-left:-4px"></a>
                            <h3 class="entry-title"><a href="#">{{$g->descricao}}</a></h3>
                        </div>
                    </div>
                    @empty
                    @endforelse 
                </div>
            </div>
        </div>
        </div><!--jumbotrin-->
    </div>




@endsection