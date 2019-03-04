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
                                        <img src="{{asset('uploads/osc/cause-4.jpg')}}" class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                                <div class="card-profile-actions py-4 mt-lg-0">
                                    <a href="#" class="btn btn-outline-success" data-togle="tooltip" title="Abrir modal?">Investir</a>
                                    <a href="#" class="btn btn-danger pull-right" data-togle="tooltip" title="Add Favoritos versoes futuras">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-1">
                                <div class="card-profile-stats d-flex justify-content-center">
                                    <div>
                                        <span class="heading">R$ 22 k</span> <!-- TODO :Falta calcular valor recebido e investimentos -->
                                        <span class="description text-success">Investimentos</span>
                                    </div>
                                    <div>
                                        <span class="heading">{{ $metas->count() }}</span>
                                        <span class="description">Metas</span>
                                    </div>
                                    <div>
                                        <span class="heading">{{ $projetos->count() }}</span>
                                        <span class="description">Projetos</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div class="text-center mt-5">
                                <h3>{{$osc->nome_fantasia}}
                                    <span class="font-weight-light">, {{$osc->sigla_osc}}</span>
                                </h3>
                                <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>{{$osc->responsavel_legal}}, Responsável Legal</div>
                                <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>Ano Fundação: {{$osc->ano_fundacao}}</div>
                                <div><i class="ni education_hat mr-2"></i>Outro texto</div>
                            </div>
                        </div>

                        <div class="border-top mt-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="display-4 text-center">Projetos</h4>
                                        @include('dashboard.investimentos.projetos')
                                </div>
                            </div>
                        </div>


                        <div class="border-top">
                            <div class="row">
                                <div class="col-lg-12 mb-2">
                                    <h4 class="display-4 text-center">Objetivos e metas da Agenda 2030</h4>
                                    @forelse($metas->unique('objetivo_id') as $obj)
                                        <a style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods'.$obj->objetivo_id.'.png')}}"></a>
                                    @empty
                                    @endforelse
                                </div>

                                <div class="col-lg-12">
                                    @forelse($metas as $meta)
                                        <p align="justify" class="sample-text" style="text-indent: 5px;"><b >{{ $meta->meta_codigo }} </b >- {{ $meta->meta_descricao }}</p>

                                    @empty
                                        <p style="color:red">Nenhuma ODS cadastrada </p>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection