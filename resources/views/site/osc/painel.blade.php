@extends('site.master')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header text-right">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Sair</a>         
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
        </form>

        <div class="card-body">
            Conteudo do painel OSC
        
        </div>
    
    </div>


</div>

@endsection