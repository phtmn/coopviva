@extends('site.master')


@section('content')

    @include('dashboard.menu')

    <div class="container">
        <div class="form-group" style="margin-top: 25px">
            <a href="{{ route('galeria.create') }}" class="btn btn-primary">Incluir foto</a>
        </div>
        <h2>Galerias de Imagens</h2>
        <div class="portfolio-wrap">
            <div class="container">
                <div class="row portfolio-container">
                    @forelse($galerias as $g)
                    <div class="col-12 col-md-6 col-lg-4 portfolio-item">
                        <div class="portfolio-cont">
                            <a href="#"><img src="{{asset($g->url)}}" alt=""></a>
                            <h3 class="entry-title"><a href="#">{{$g->descricao}}</a></h3>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>




@endsection