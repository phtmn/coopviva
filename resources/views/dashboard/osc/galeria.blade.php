@extends('site.master')


@section('content')

    @include('dashboard.menu')

    <div class="container">

  

        <div class="form-group" style="margin-top: 25px">
            <a href="{{ route('galeria.create') }}" class="btn gradient-bg">Incluir foto</a>
        </div>
        <div class="container ">
        <h2>Galerias de Imagens</h2>
        <div class="portfolio-wrap ">
            <div class="container">
                <div class="row  ">
                    @forelse($galerias as $g)
                    <div class="col-xs-12 ">
                        <div class="portfolio-cont text-center">
                            <a href="#"><img src="{{asset($g->url)}}" alt="" class="img-responsive border" style="width:200px; height:200px; margin-left:4px"></a>
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