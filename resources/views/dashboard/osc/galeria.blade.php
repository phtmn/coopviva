@extends('site.master')


@section('content')

    @include('dashboard.menu')

    <div class="container" style="margin-top:20px; padding:20px">
    <div class="row row justify-content-center">
<br>
    <form class="form form-investidor" action="{{route('galeria.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="form-group col-md-6">
            <br>
                {!! Form::file('img',null,['class'=>'form-control','required'=>'true']) !!}
            </div>
           
            <div class="form-group col-md-3">
                <label for="name">Legenda</label>
                <input type="text" name="legenda" class="form-control" id="name" aria-describedby="emailHelp" required="true">
            </div>

            <div class="form-group col-md-3">                
                <br>
            <center>  <button type="submit" class="btn gradient-bg">Salvar</button> </center>
            </div>

            </div>

          

                  









        </form>

      {{--  <div class="form-group" style="margin-top: 25px"> --}}
      {{--      <a href="{{ route('galeria.create') }}" class="btn gradient-bg">Incluir foto</a>--}}
      {{--  </div> --}}
        <div class="container ">
       
 
            <div class="container">
                <div class="row  ">


                    @forelse($galerias as $g)
                    <div class="col-xs-12 ">
                        <div class="portfolio-cont text-center">
                        
                            <a href="#"><img src="{{asset($g->url)}}" alt="" class="img-responsive border-light" style="width:150px; height:150px; margin-left:4px" data-toggle="tooltip" data-placement="top" title="{{$g->descricao}}"></a>
                            <h3 class="entry-title"><a href="#"></a></h3>
                        </div>
                    </div>
                    @empty
                    @endforelse 
                </div>
            </div>
     
        </div><!--jumbotrin-->
    </div>
    </div>




@endsection