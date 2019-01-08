@extends('site.master')


@section('content')
<section class="jumbotron text-center our-causes">
    <div class="container">
      <h1 class="jumbotron-heading">Como você quer se CONECTAR nesta REDE???</h1>
      <p class="lead text-muted">Venha fazer parte da maior rede do BEM. Escolha uma das opções abaixo e faça seu pré-cadastro!</p>
       <p>
        <a href="{{ route('cadastro','investidor') }}" class="btn gradient-bg mr-2">Sou um Investidor</a>
        <a href="{{ route('cadastro','osc') }}" class="btn gradient-bg mr-2">Sou uma OSC</a>
      </p>
    
      
    </div>
</section>




@endsection