@extends('layouts.site')


@section('conteudo_principal')


    <main class="profile-page">
        <section class="section-profile-cover section-shaped my-0" style="background-image: url('{{asset('images/2.jpg')}}')">

        </section>
		
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-profile shadow mt--500">
                            <div class="titulo mt-2 text-center">
                                <h3>{{$osc->nome_fantasia}}</h3>
                            </div>

                            <div class="descricao mt-4 text-center">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget ex nec mauris lacinia vestibulum eu at ante. Donec ut metus sodales, consequat orci ac, efficitur dui. Suspendisse dictum ultrices sapien eu viverra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque sed nibh porta, egestas purus eget, pulvinar nisi. Etiam sed fringilla nibh. Vivamus sed libero id massa finibus auctor sed vel libero. Vivamus vel est nibh. In hac habitasse platea dictumst. Integer ullamcorper sapien leo. Phasellus vel tempor odio, quis dictum felis. Pellentesque ultricies lectus lectus, non fermentum odio molestie nec. Donec justo nisl, posuere in lacus sit amet, aliquam dictum mi. Quisque non ultrices massa. Vestibulum pharetra bibendum convallis.

                                Donec eget mollis felis. Nam eu neque iaculis, gravida lacus eget, sodales ipsum. Nam rutrum rutrum massa. Proin laoreet non velit a rutrum. Donec varius lectus in quam mollis, non fermentum quam mollis. Ut dapibus mauris in magna commodo, eget commodo velit ultricies. Quisque consectetur faucibus purus. Ut porttitor, odio porttitor maximus rhoncus, arcu mauris hendrerit enim, id ultricies risus sapien quis leo. In at congue risus. Nam porttitor sodales massa nec placerat. Curabitur vel orci vitae felis tempor consectetur ac aliquam erat. Integer sed sem urna. Proin tempus sapien ultrices metus hendrerit molestie. Vivamus egestas, enim vitae dictum tristique, enim lectus euismod nisl, at viverra mi nulla id lacus. Donec ut tellus est.

                                Morbi tempor leo eget nisi lobortis, ac blandit dui tempus. Vestibulum vitae semper nunc. Nullam egestas dolor ligula, eget pretium massa dignissim at. In quis risus sit amet mauris auctor ornare. Donec lobortis nulla ut lectus placerat, luctus convallis odio dignissim. Duis tempus at velit quis dapibus. Praesent tincidunt arcu nunc, finibus blandit metus dignissim vitae.

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc convallis hendrerit semper. Nam pellentesque dui tincidunt nisl posuere, at commodo elit mattis. Maecenas ut congue libero. Quisque facilisis nec lectus eu gravida. Proin semper consequat nisl nec rhoncus. Nullam a efficitur felis. Integer sed nisl non odio iaculis semper. Pellentesque volutpat, tellus vestibulum malesuada efficitur, dolor tortor tincidunt ex, sit amet pharetra leo nunc at tellus. Aliquam a massa varius, rutrum erat eget, porta ex. Quisque pretium lacinia nunc, feugiat euismod leo sagittis in. Sed dapibus ante in lorem vestibulum imperdiet.

                                Vivamus euismod nisl quis ligula malesuada, non placerat dui facilisis. Vestibulum aliquam tortor purus, vestibulum mollis ipsum tempor at. Nunc tristique sapien tortor, nec pulvinar nibh malesuada sed. Cras sagittis sollicitudin nisi non viverra. In ut dapibus est. Vivamus sed lacus vel neque iaculis gravida. Nunc eget eleifend est. Aliquam et malesuada ligula. Maecenas ac viverra ante. Vestibulum quis bibendum arcu, eu congue turpis. Praesent accumsan metus massa, et sollicitudin leo tristique et. Phasellus ut odio in dolor tincidunt congue nec quis mauris. Donec ac ligula eget lectus luctus viverra. Cras risus est, vehicula vel mi vitae, viverra elementum eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc vel dui eu tellus aliquam efficitur.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-profile shadow mt--500 my-2">

                            <div class="text-center mt-3">
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


                        @include('dashboard.investimentos.projetos')

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