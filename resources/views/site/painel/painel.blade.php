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
                                    <h5> {{ Auth::user()->name }} - {{ $perfil->tipo_perfil }}</h5>
                                   
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

    <div class="container" style="margin-top:20px; padding:20px">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Investimentos</a>
            </li>
            @can('osc')
            <li class="nav-item">
                <a class="nav-link" id="projetos-tab" data-toggle="tab" href="#projetos" role="tab" aria-controls="projetos" aria-selected="false">Projetos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="osc-tab" data-toggle="tab" href="#osc" role="tab" aria-controls="osc" aria-selected="false">Dados da minha OSC</a>
            </li>
            @endcan
            <!-- <li class="nav-item">
                <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
            </li> -->
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">@include('site.painel.tabHome')</div>
            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">@include('site.painel.tabPerfil')</div>
            <div class="tab-pane" id="projetos" role="tabpanel" aria-labelledby="projetos-tab">@include('site.painel.tabProjetos')</div>
            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">@include('site.painel.tabInvestimentos')</div>
            <div class="tab-pane" id="osc" role="tabpanel" aria-labelledby="osc-tab">@include('site.painel.tabOsc')</div>
            <!-- <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">..ccccc.</div> -->
        </div> 
    </div>



         


  

   

        
@endsection