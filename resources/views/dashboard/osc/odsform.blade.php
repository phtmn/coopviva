@extends('layouts.dashboard')


@section('cabecalho')
	<div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-image: url({{asset('vendor/argon-dash/assets/img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
		<!-- Mask -->
		<span class="mask bg-gradient-default opacity-8"></span>
		<!-- Header container -->
		<div class="container-fluid d-flex align-items-center">
			<div class="row">
				<div class="col-lg-12 col-md-10">
					<h1 class="display-2 text-white">Foco</h1>
					<p class="text-white mt-0 mb-2">Aqui você seleciona as metas da sua OSC, e tambem dos seus projetos!
						Clique em um dos 17 Objetivos para escolher, é bem facil =)
					</p>
					<p class="text-success">#SimEuQuero</p>

				</div>
			</div>
		</div>
	</div>

@stop
@section('conteudo')
<div class="row">
    
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body bg-transparent">

						<div class="nav-wrapper">
							<ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-text" role="tablist">
								<li class="nav-item">
									<a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-tab" data-toggle="tab" href="#tabs-text-1" role="tab" aria-controls="tabs-text-1" aria-selected="true">Selecionar Metas</a>
								</li>
								<li class="nav-item">
									<a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-2-tab" data-toggle="tab" href="#tabs-text-2" role="tab" aria-controls="tabs-text-2" aria-selected="false">Metas Escolhidas</a>
								</li>
							</ul>
						</div>
						<div class="tab-content" id="myTabContent">
							 <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
								 <div class="objetivos">
									 <a href="{{route('metas',1)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods1.png')}}"></a>
									 <a href="{{route('metas',2)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods2.png')}}"></a>
									 <a href="{{route('metas',3)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods3.png')}}"></a>
									 <a href="{{route('metas',4)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods4.png')}}"></a>
									 <a href="{{route('metas',5)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods5.png')}}"></a>
									 <a href="{{route('metas',6)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods6.png')}}"></a>
									 <a href="{{route('metas',7)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods7.png')}}"></a>
									 <a href="{{route('metas',8)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods8.png')}}"></a>
									 <a href="{{route('metas',9)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods9.png')}}"></a>
									 <a href="{{route('metas',10)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods10.png')}}"></a>
									 <a href="{{route('metas',11)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods11.png')}}"></a>
									 <a href="{{route('metas',12)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods12.png')}}"></a>
									 <a href="{{route('metas',13)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods13.png')}}"></a>
									 <a href="{{route('metas',14)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods14.png')}}"></a>
									 <a href="{{route('metas',15)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods15.png')}}"></a>
									 <a href="{{route('metas',16)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods16.png')}}"></a>
									 <a href="{{route('metas',17)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods17.png')}}"></a>
									 <a href="#" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods_logo_icon.png')}}"></a>
								 </div>
							{{ Form::open(['route'=>'metas.salvar']) }}

								 <div class="metas mt-5">
									 @forelse($metas as $meta)
										 <div class="form-check">
											 <label class="form-check-label" for="{{$meta->descricao}}" style="cursor:pointer;">
												 <input class="form-check-input" name="codigos[]" type="checkbox" value="{{$meta->id}}" id="{{$meta->descricao}}" >
												 <p align="justify" class="sample-text" style="text-indent: 5px;"><b >{{$meta->codigo}}</b> - {{$meta->descricao}} </p>
												 <hr>
											 </label>
										 </div>
									 @empty
										 <p>Clique em um dos 17 Objetivos</p>
									 @endforelse
								 </div>

								 <div class="text-center col-md-12">
									 @if(isset($metas))

										 <div class="form-group col-md-12">
											 <input class="form-check-input" type="radio" name="opcao" id="osc" value="OSC"  onclick="radioEscolhido()" required>
											 <b><label class="form-check-label" for="osc">Desejo adicionar essa(s) ODS em minha OSC </label> </b>
											 <br>
											 <input class="form-check-input" type="radio" name="opcao" id="projeto" value="PROJETO" onclick="radioEscolhido()" required>
											 <b><label class="form-check-label" for="projeto">Desejo adicionar essa(s) ODS no Projeto </label> </b>


											 <div id="projetos" style="display: none;">
												 {!! Form::select('projeto_id',$projetos,null,['class'=>'form-control','placeholder'=>'Selecione seu Projeto']) !!}
											 </div>
										 </div>


										 {!! Form::submit('Salvar',['class'=>'btn btn-outline-success']) !!} </center>

									 @endif

								 </div>

						 	{!! Form::close() !!}
							 </div>

							<div class="tab-pane fade" id="tabs-text-2" role="tabpanel" aria-labelledby="tabs-text-2-tab">
								 <div class="metas-escolhidas m-3">
									 @forelse($metas_osc->unique('objetivo_id') as $obj)
										 <a style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods'.$obj->objetivo_id.'.png')}}"></a>
									 @empty
										 <p style="color:red">Você não está em nenhum objetivo ODS</p>
									 @endforelse

									 @forelse($metas_osc as $meta)
										 <p align="justify" class="sample-text" style="text-indent: 5px;"><b >{{ $meta->meta_codigo }} </b >- {{ $meta->meta_descricao }}</p>
										 <a href="{{route('meta.remover',$meta->id)}}"><i class="fa fa-trash" style="color:red"></i> Remover</a>
										 <hr>
									 @empty
										 <h4>Você precisa Adicionar suas metas da Agenda 2030 na aba ODS </h4>
									 @endforelse
								 </div>
							 </div>

						</div>
					</div>
				</div>
			</div>
</div>

@stop
@section('js')

@section('js')
    <script>

        function radioEscolhido(){
            let divProjetos = $('#projetos')
            let Opcao = $('input:radio[name=opcao]:checked').val()

            if(Opcao === 'PROJETO'){
                divProjetos.css({'display':'block'})
            }else{
                divProjetos.css({'display':'none'})
            }
            //alert($('input:radio[name=opcao]:checked').val());
        }

    </script>
@stop
@stop


