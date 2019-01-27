@extends('site.master')

@section('content')

    @include('dashboard.menu')

<div class="container">

    <div class="row" style="margin-top: 20px; margin-bottom: 20px">
        <div class="col-md-8">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Sobre a OSC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Meus Projetos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Metas ODS</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <p>{{$osc->nome_fantasia}}</p>
                        <p>{{$osc->sigla}}</p>
                        <p>{{$osc->ano_fundacao}}</p>
                        <p>{{$osc->area_atuacao}}</p>
                        <h4>Missao</h4>
                            <p>
                                {{$osc->missao}}
                            </p>
                        <h4>Visao</h4>
                            <p>
                                {{$osc->visao}}
                            </p>

                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                        <div class="d-flex flex-row">
                            <div class="projeto-logo">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDFa-X-JL0jL_8-xgueXHpQlZhkPZL5-tGT6vY3pkwd_TDT3wQ" alt="..." class="img-thumbnail">
                                <a href="#">Nome do Projeto</a>
                            </div>
                            <div class="projeto-logo">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDFa-X-JL0jL_8-xgueXHpQlZhkPZL5-tGT6vY3pkwd_TDT3wQ" alt="..." class="img-thumbnail">
                                <a href="#">Nome do Projeto</a>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$osc->sigla_osc}}</h5>
                    <p class="card-text">Meta R$ 1.000.000,00</p>
                </div>
                <div class="card-body">
                    {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>--}}
                    <a href="{{route('investir',$osc->id)}}" class="btn gradient-bg">Investir Agora</a>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                ...
            </div>
        </div>
    </div>

@stop

