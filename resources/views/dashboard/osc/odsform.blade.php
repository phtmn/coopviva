@extends('site.master')
@section('content')

    @include('dashboard.menu')

<div class="container">
<
      <h4 class="text-center">Qual é o seu ODS?</h4>


      <a href="{{route('metas',1)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods1.png')}}"></a>
      <a href="{{route('metas',2)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods2.png')}}"></a>
      <a href="{{route('metas',3)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods3.png')}}"></a>
      <a href="{{route('metas',4)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods4.png')}}"></a>
      <a href="{{route('metas',5)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods5.png')}}"></a>
      <a href="{{route('metas',6)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods6.png')}}"></a>
      <a href="{{route('metas',7)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods7.png')}}"></a>
      <a href="{{route('metas',8)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods8.png')}}"></a>
      <a href="{{route('metas',9)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods9.png')}}"></a>
      <a href="{{route('metas',10)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods10.png')}}"></a>
      <a href="{{route('metas',11)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods11.png')}}"></a>
      <a href="{{route('metas',12)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods12.png')}}"></a>
      <a href="{{route('metas',13)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods13.png')}}"></a>
      <a href="{{route('metas',14)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods14.png')}}"></a>
      <a href="{{route('metas',15)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods15.png')}}"></a>
      <a href="{{route('metas',16)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods16.png')}}"></a>
      <a href="{{route('metas',17)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods17.png')}}"></a>
      <a href="#" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods_logo_icon.png')}}"></a>

        @if(isset($metas))
            {{ Form::open(['route'=>'metas.salvar']) }}
                @forelse($metas as $meta)

                <div class="form-check">
                    <input class="form-check-input" name="codigos[]" type="checkbox" value="{{$meta->id}}" id="{{$meta->descricao}}" >
                    <label class="form-check-label" for="{{$meta->descricao}}" style="cursor:pointer;">
                       <b>{{$meta->codigo}}</b> - {{$meta->descricao}}
                    </label>
                </div>

                @empty
                    <p>Clique em um dos 17 Objetivos</p>
                @endforelse
            {!! Form::submit('Gravar',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        @endif

</div>
@endsection


