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
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                     <img src="{{asset('vendor/argon-site/assets/img/theme/team-4-800x800.jpg')}}" class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                                <div class="card-profile-actions py-4 mt-lg-0">
                                    <a href="{{ route('perfil.create') }}" class="btn btn-sm btn-info">Perfil</a>
                                    <a href="{{ route('quero_investir')  }}" class="btn btn-sm btn-success ">Investir</a>
                                    <a href="{{ route('investimentos.index')  }}" class="btn btn-sm btn-outline-success ">Investimentos</a>

                                    <!--Icones como menus -->
                                    {{--<ul class="nav nav-pills nav-pills-circle mb-3" id="tabs_2" role="tablist">--}}
                                        {{--<li class="nav-item">--}}
                                            {{--<a class="nav-link rounded-circle active" id="home-tab" data-toggle="tooltip" data-title="teste" href="#tabs_2_1" role="tab" aria-controls="home" aria-selected="true">--}}
                                                {{--<span class="nav-link-icon d-block"><i class="ni ni-money-coins"></i></span>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="nav-item">--}}
                                            {{--<a class="nav-link" id="profile-tab" data-toggle="tab" href="#tabs_2_2" role="tab" aria-controls="profile" aria-selected="false">--}}
                                                {{--<span class="nav-link-icon d-block"><i class="ni ni-chat-round"></i></span>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="nav-item">--}}
                                            {{--<a class="nav-link" id="contact-tab" data-toggle="tab" href="#tabs_2_3" role="tab" aria-controls="contact" aria-selected="false">--}}
                                                {{--<span class="nav-link-icon d-block"><i class="ni ni-cloud-download-95"></i></span>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-1">
                                <div class="card-profile-stats d-flex justify-content-center">
                                    <div>
                                        <span class="heading">R$ 22</span>
                                        <span class="description text-success">Investimentos</span>
                                    </div>
                                    <div>
                                        <span class="heading">10</span>
                                        <span class="description">OSC's</span>
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
                                <div class="col-lg-9">
                                    <p>An artist of considerable range, Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. An artist of considerable range.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection