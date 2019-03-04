@extends('investidor.painel')

@section('conteudo_painel')
    <div class="text-center mt-5">
        <h3>{{ auth()->user()->name }}
            <span class="font-weight-light">, 27</span>
        </h3>
        <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>João Pessoa, Paraíbass</div>
        <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i> {{auth()->user()->email}}</div>
        <div class="text-primary"><i class="ni education_hat mr-2 "></i>{{auth()->user()->tipo_usuario}} - {{auth()->user()->tipo}} </div>
    </div>
@endsection