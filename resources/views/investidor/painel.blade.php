@extends('layouts.site')

@section('conteudo_principal')
    <main class="profile-page">
        <section class="section-profile-cover section-shaped my-0">
            <!-- Circles background -->
            <div class="shape shape-style-1 shape-primary alpha-4">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- SVG separator -->
            <div class="separator separator-bottom separator-skew">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="card card-profile shadow mt--500">
                    <div class="px-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-0 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                    <!-- <img src="{{asset('vendor/argon-site/assets/img/theme/team-4-800x800.jpg')}}" class="rounded-circle"> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-3 text-lg-right align-self-lg-center">
                                <div class="card-profile-actions py-4 mt-lg-0">
                                    
                                
                                    <a href="{{ route('perfil.show') }}" class="btn btn-sm btn-primary">Meu Perfil</a>
                                    <a href="{{ route('quero_investir')  }}" data-toggle="tooltip" data-title="Doação e/ou Patrocínio"class="btn btn-sm btn-success ">Quero Investir</a>
									<a href="#" class="btn btn-sm btn-info " data-toggle="tooltip" data-title="Em breve">O que me inspira</a>
									<a href="#" class="btn btn-sm btn-danger" data-toggle="tooltip" data-title="Em breve">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <!--Icones como menus -->
                                  
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="card-profile-stats d-flex justify-content-center">
                                <div> 
                                  
                                        <span class="heading">R$ 22</span>
                                        <a href="{{ route('investimentos.index')  }}" class="btn btn-sm btn-outline-success ">Investimentos</a>
                                    </div>
                                    <div>
                                        <span class="heading">10</span>
                                        <span class="description">OSC's</span>
                                    </div>
                                    <div>
                                        <span class="heading">89</span>
                                        <span class="description">Metas</span>
                                    </div>
									<div>
                                        <span class="heading">89</span>
                                        <span class="description">Objetivos</span>
                                    </div>
									<div>
                                        <span class="heading">89</span>
                                        <span class="description">Projetos</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            @yield('conteudo_painel')
                        </div>
                        <div class="mt-5 py-5 border-top text-center">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <p>Aqui você tem a oportunidade de participar do maior programa de <strong class="text-info">COOPERAÇÃO</strong> para ações sustentáveis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection