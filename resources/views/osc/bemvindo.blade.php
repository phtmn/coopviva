@extends('layouts.dashboard')


@section('cabecalho')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <h1 class="display-2 text-white">Bem Vindo(a), {{auth()->user()->nome_social}}</h1>
                    <p class="text-white mt-0 mb-5">Estamos Felizes por chegar até aqui, para continuar preencha algumas informações sobre sua OSC.</p>
                    <a href="{{ route('osc.create') }}" class="btn btn-outline-success">Preencher Dados</a>
                </div>
            </div>
        </div>
    </div>
@stop
