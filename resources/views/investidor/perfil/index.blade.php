@extends('investidor.painel')

@section('conteudo_painel')
    <div class="text-center mt-5">
        <h3>bem vindo(a), {{ auth()->user()->nome_social }}
            <span class="font-weight-light"></span>
        </h3>
       
        <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i> {{auth()->user()->email}}</div>
    </div>
@endsection