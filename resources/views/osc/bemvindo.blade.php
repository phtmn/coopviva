@extends('layouts.dashboard')


@section('cabecalho')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <h1 class="display-2 text-white">Olá, {{auth()->user()->nome_completo}}</h1>
                    <p class="text-white mt-0 mb-5">PARA QUE POSSAMOS VIABILIZAR MELHOR SEUS RECURSOS VAMOS PRECISAR COLHER DADOS IMPORTANTES. QUANTO MAIS DADOS E INFORMAÇÕES INSERIR, MAIS CHANCES DE  SUCESSO COM PATROCINADORES/DOADORES TERÁ.  ENGAJAMENTO ESTÁ DIRETAMENTE LIGADO A TRANSPARÊNCIA.  MOSTRE A AQUI TODO O SEU TALENTO E FORÇA E VAMOS CONSTRUIR ESSA REDE DE COOPERAÇÃO VIVA E CIDADÃ. BOA SORTE!</p>
                    <a href="{{ route('osc.create') }}" class="btn btn-outline-success">Preencher Dados</a>
                </div>
            </div>
        </div>
    </div>
@stop



