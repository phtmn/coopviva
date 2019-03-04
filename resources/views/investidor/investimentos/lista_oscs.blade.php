@extends('layouts.site')


@section('conteudo_principal')
<div class="position-relative">
    <!-- shape Hero -->
    <section class="section section-lg section-shaped pb-250">
        <div class="shape shape-style-1 bg-gradient-success">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="container py-lg-md d-flex">
            <div class="col px-0">
                <div class="row">
                    <div class="col-lg-10">
                        <h1 class="display-3  text-white">Realize um investimento agora
                            <span style="line-height: 1.1;">Escolha uma Osc para Investir</span>
                        </h1>
                        <div class="btn-wrapper">
                        <!--  <a href="{{route('register')}}" class="btn btn-success btn-icon mb-3 mb-sm-0">
                                <span class="btn-inner--icon"><i class="fa fa-handshake-o"></i></span>
                                <span class="btn-inner--text">Seja um investidor</span>
                            </a>
                          <a href="{{route('register')}}" class="btn btn-white btn-icon mb-3 mb-sm-0">
                                <span class="btn-inner--icon"><i class="fa fa-registered"></i></span>
                                <span class="nav-link-inner--text">Cadastre-se</span>
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>
    <!-- 1st Hero Variation -->

</div>

<section class="section section-lg pt-lg-0 mt--300">

    <div class="container">

        <div class="row m-3 text-center">
            <div class="col-md-12">
                <form action="#" class="form form-inline">
                    @csrf
                    <div class="form-group p-2">
                        <input type="text" name="pesquisa" class="form-control" placeholder="Digite algo...">
                    </div>

                    <div class="form-group p-2">
                        <select  name="ods" id="ods" class="form-control">
                            <option> 1 - Erradicação da Pobreza</option>
                            <option> 2 - Erradicação da Fome</option>
                            <option> 3 - Saúde e Qualidade</option>
                            <option> 4 - Educação de Qualidade</option>
                            <option> 5 - Igualdade de Genero</option>
                        </select>
                    </div>

                    <div class="form-group p-2">
                        <select  name="ods" id="ods" class="form-control">
                            <option> Idoso </option>
                            <option> Meio Ambiente </option>
                            <option> </option>
                            <option> 4 - Educação de Qualidade</option>
                            <option> 5 - Igualdade de Genero</option>
                        </select>
                    </div>

                    <div class="form-group p2">

                        <button type="submit" class="btn btn-primary">Procurar</button>
                    </div>


                </form>

            </div>


        </div>


        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row row-grid">
                    <div class="col-lg-4">
                        <a href="{{url('painel-investidor/quero_investir/1')}}" style="cursor: pointer;">
                            <div class="card card-lift--hover shadow border-0 bg-gradient-dark">
                                <div class="card-body py-5">
                                    <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                                        <i class="ni ni-check-bold text-white"></i>
                                    </div>
                                    <h6 class="text-success text-uppercase">Nome da OSC</h6>
                                    <p class="description mt-3 text-white">Breve descricao da OSC</p>
                                    <div>
                                        <span class="badge badge-pill badge-success text-white">6 Projetos</span>
                                        <span class="badge badge-pill badge-success text-white">20 Metas</span>
                                        <span class="badge badge-pill badge-success text-white">2 ODS</span>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <a href="{{url('painel-investidor/quero_investir/1')}}" class="btn btn-primary btn-xs">Investir</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{url('painel-investidor/quero_investir/1')}}" style="cursor: pointer;">
                            <div class="card card-lift--hover shadow border-0 bg-gradient-gray-dark">
                                <div class="card-body py-5">
                                    <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                                        <i class="ni ni-check-bold text-white"></i>
                                    </div>
                                    <h6 class="text-success text-uppercase text-white">Nome da OSC</h6>
                                    <p class="description mt-3 text-white">Breve descricao da OSC</p>
                                    <div>
                                        <span class="badge badge-pill badge-success text-white">6 Projetos</span>
                                        <span class="badge badge-pill badge-success text-white">20 Metas</span>
                                        <span class="badge badge-pill badge-success text-white">2 ODS</span>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <a href="{{url('painel-investidor/quero_investir/1')}}" class="btn btn-success btn-xs">Investir</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{url('painel-investidor/quero_investir/1')}}" style="cursor: pointer;">
                            <div class="card card-lift--hover shadow border-0">
                                <div class="card-body py-5">
                                    <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                                        <i class="ni ni-check-bold"></i>
                                    </div>
                                    <h6 class="text-success text-uppercase">Nome da OSC</h6>
                                    <p class="description mt-3">Breve descricao da OSC</p>
                                    <div>
                                        <span class="badge badge-pill badge-success">6 Projetos</span>
                                        <span class="badge badge-pill badge-success">20 Metas</span>
                                        <span class="badge badge-pill badge-success">2 ODS</span>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <a href="{{url('painel-investidor/quero_investir/1')}}" class="btn btn-success btn-xs">Investir</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row row-grid">
                    <div class="col-lg-4">
                        <a href="" style="cursor: pointer;">
                            <div class="card card-lift--hover shadow border-0">
                                <div class="card-body py-5">
                                    <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                                        <i class="ni ni-check-bold"></i>
                                    </div>
                                    <h6 class="text-success text-uppercase">Nome da OSC</h6>
                                    <p class="description mt-3">Breve descricao da OSC</p>
                                    <div>
                                        <span class="badge badge-pill badge-success">6 Projetos</span>
                                        <span class="badge badge-pill badge-success">20 Metas</span>
                                        <span class="badge badge-pill badge-success">2 ODS</span>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-success btn-xs">Investir</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="" style="cursor: pointer;">
                            <div class="card card-lift--hover shadow border-0">
                                <div class="card-body py-5">
                                    <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                                        <i class="ni ni-check-bold"></i>
                                    </div>
                                    <h6 class="text-success text-uppercase">Nome da OSC</h6>
                                    <p class="description mt-3">Breve descricao da OSC</p>
                                    <div>
                                        <span class="badge badge-pill badge-success">6 Projetos</span>
                                        <span class="badge badge-pill badge-success">20 Metas</span>
                                        <span class="badge badge-pill badge-success">2 ODS</span>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-warning btn-xs">Investir</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="" style="cursor: pointer;">
                            <div class="card card-lift--hover shadow border-0">
                                <div class="card-body py-5">
                                    <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                                        <i class="ni ni-check-bold"></i>
                                    </div>
                                    <h6 class="text-success text-uppercase">Nome da OSC</h6>
                                    <p class="description mt-3">Breve descricao da OSC</p>
                                    <div>
                                        <span class="badge badge-pill badge-success">6 Projetos</span>
                                        <span class="badge badge-pill badge-success">20 Metas</span>
                                        <span class="badge badge-pill badge-success">2 ODS</span>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-default btn-xs">Investir</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection