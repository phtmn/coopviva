@extends('layouts.site')

@section('conteudo_principal')
    @include('site.partes.Banner')

    @include('site.partes.sessao1')
    @include('site.partes.sessao2')
    @include('site.partes.sessao3')
   
    @include('site.partes.sessao5')
    @include('site.partes.sessao6')

    @include('site.partes.contato')

    @include('site.partes.sessaoFinal')
   

@stop