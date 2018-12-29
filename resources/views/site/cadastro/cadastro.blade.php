@extends('site.master')


@section('content')
<section class="jumbotron text-center our-causes">
    <div class="container">
      <h1 class="jumbotron-heading">Alterar esse texto???</h1>
      <p class="lead text-muted">alterar esse texto ????????</p>
      <p>
        <a href="{{ route('cadastro','investidor') }}" class="btn gradient-bg mr-2">Sou um Invenstidor</a>
        <a href="{{ route('cadastro','osc') }}" class="btn gradient-bg mr-2">Sou uma OSC</a>
      </p>
    </div>
</section>

@include('site.partes.icons-boxes')


@endsection