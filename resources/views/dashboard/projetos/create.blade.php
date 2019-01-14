@extends('site.master')

@section('content')

 <div class="swiper-container ">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-content-wrap">
                <img src="/vendor/site/images/about-bg.jpg" alt="">
                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-12 d-flex flex-column justify-end ">
                                <header  class="entry-header">
                                    <div align="right"> <h4 >Bem Vindo </h4> 
                                    <h5> {{ Auth::user()->name }}</h5>
                                   
                                    <a class="text-white" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sair</a>
                                    </div> 
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>   
                                </header><!-- .entry-header -->
                            </div><!-- .col -->
                        
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->
    </div><!-- .hero-slider -->

    <div class="container" style="margin-top:20px">

        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="card card-outline-success">
                    <div class="card-body">
                        <h3 class="card-title"><strong> Dados do Projeto</strong></h3>
                             <hr>
                            @include('admin.projects.tabs.dadosGerais')
                        <h3 class="card-title"><strong> Dados Financeiros</strong></h3>
                             <hr>
                            @include('admin.projects.tabs.dadosFinanceiros')
                        <h3 class="card-title"><strong> Dados do Proponente</strong></h3>
                             <hr>
                            @include('admin.projects.tabs.dadosProponente')
                        <div align="center" class="form-actions">
                                <button type="submit" class="btn btn-info">Salvar</button>
                                <a href="{{route('project.index')}}" class="btn btn-primary">Voltar</a>
                        </div>
                    </div>
               </div>
            </div>
        </div>

    </div>
@endsection