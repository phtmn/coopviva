@extends('layouts.site')


@section('conteudo_principal')


    <main class="profile-page">

        <section class="section-profile-cover section-shaped my-0" style="background-image: url('{{asset('images/2.jpg')}}')">

        </section>
		
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-profile shadow mt--300">

                            <div class="titulo mt-2 text-center">
                                <h3>{{$osc->nome_fantasia}}</h3>
                            </div>

                            <div class="descricao mt-4 text-justify mx-4">
                                <p>{{$osc->surgimento_osc}}</p>
                                <p>{{$osc->missao_osc}}</p>
                                <p>{{$osc->visao_osc}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-profile shadow mt--300 my-2">

                            <div class="mt-3 d-flex justify-content-center">
                                @forelse($metas->unique('objetivo_id') as $obj)
                                    <a style="cursor: pointer"><img class="img-thumbnail" style="width:80px; height:80px;" src="{{asset('/vendor/site/images/ods/ods'.$obj->objetivo_id.'.png')}}"></a>
                                @empty
                                    <p style="color:red">Você não está em nenhum objetivo ODS</p>
                                @endforelse
                            </div>


                            <div class="card-profile-stats d-flex justify-content-center">
                                <div>
                                    <span class="heading">{{ $metas->count() }}</span>
                                    <span class="description">Metas</span>
                                </div>
                                <div>
                                    <span class="heading">{{ $projetos->count() }}</span>
                                    <span class="description">Projetos</span>
                                </div>
                            </div>

                            <div class="botao mx-4 mb-2">
                                <a href="" data-toggle="modal" data-target="#modal-default" class="btn btn-outline-success btn-block">Investir</a>
                            </div>


                        </div>

                        <div class="projetos text-center">
                            @include('dashboard.investimentos.projetos')

                        </div>




                    </div>

                </div>

            </div>


                <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                    <div class="modal-dialog"  role="document">
                        {!! Form::open(['route'=>'pagar']) !!}
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="modal-title-default"></h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    {!! Form::text('valor',null,['class'=>'form-control form-control-lg','required'=>'true','placeholder'=>'Quanto gostaria de Investir (R$)','id'=>'valor']) !!}
                                </div>
                                <div class="form-group">
                                    <label for="">Onde deseja Investir?</label>
                                    <select name="escolha" id="OndeInvestir" class="form-control custom-select" required>
                                        <option value="osc" selected>Investir em: {{$osc->nome_fantasia}}</option>
                                        <option value="projetos">Investir em Projetos</option>
                                    </select>
                                </div>
                                <div class="form-group" id="box-projetos" style="display: none">
                                    {!! Form::select('projeto_id',$projetos->pluck('nome','id'),null,['class'=>'form-control','placeholder'=>'Selecione o Projeto']) !!}
                                </div>
                                <input type="hidden" name="osc_id" value="{{$osc->id}}">
                            </div>
                            <div class="modal-footer">
                                <center> <button type="submit" class="btn btn-primary">Sim EU QUERO</button> <center>
                                
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>



        </section>
    </main>
@stop

@section('js')
    <script src="{{asset('js/jquery.mask.min.js')}}"> </script>
    <script>
        $(document).ready(function(){
            let Ondeinvestir      = $('#OndeInvestir');
            let boxOndeInvestir   = $('#box-projetos');

            Ondeinvestir.change(function(){
                console.log(Ondeinvestir.val())
                if(Ondeinvestir.val() == 'osc'){
                    boxOndeInvestir.css({'display':'none'});
                }else{
                    boxOndeInvestir.css({'display':'block'});
                    //radioPJ.attr('checked', false);
                }
            });
        });

        $(document).ready(function(){
            $("#valor").mask('#.##0,00', {reverse: true});
        });
    </script>
@stop