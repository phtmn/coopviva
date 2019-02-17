@extends('site.master')
@section('content')

    @include('dashboard.menu')

        <div class="container">
            <br>
                <div class="row row justify-content-center">
            
                    <div class="col-md-12">     
                        
                        <ul class="nav nav-tabs justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-add-tab" data-toggle="pill" href="#pills-add" role="tab" aria-controls="pills-add" aria-selected="true"><b class="text-dark" >Adicionar</b></a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" id="pills-remove-tab" data-toggle="pill" href="#pills-remove" role="tab" aria-controls="pills-remove" aria-selected="false"><b class="text-dark" >Remover</b></a>
                           </li> 
                        </ul>    
                        

                        <br>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-add" role="tabpanel" aria-labelledby="pills-add-tab">
                            <div class="row">
                                <div class="form-group col-md-12">
                                     
                                <h4 class="text-center">Qual é o seu ODS?</h4>

<center>
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
</center>
        @if(isset($metas))
            {{ Form::open(['route'=>'metas.salvar']) }}
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


                <center>
                                    <div class="form-group col-md-8">
                                       <!-- <label for="name"><strong>VALOR (R$)</strong></label> -->                                        
                                        <input class="form-check-input" type="radio" name="opcao" id="osc" value="OSC"  onclick="radioEscolhido()" required>
                                        <b><label class="form-check-label" for="osc">Desejo adicionar essa(s) ODS em minha OSC </label> </b>
                                        <br>
                                        <input class="form-check-input" type="radio" name="opcao" id="projeto" value="PROJETO" onclick="radioEscolhido()" required>
                                        <b><label class="form-check-label" for="projeto">Desejo adicionar essa(s) ODS no Projeto </label> </b>

                                        <br>
                                        <div id="projetos" style="display: none;">
                                            {!! Form::select('projeto_id',$projetos,null,['class'=>'form-control','placeholder'=>'Selecione seu Projeto']) !!}
                                        </div>

                                        <br>
                                    </div>  </center>


           <center> {!! Form::submit('Salvar',['class'=>'btn gradient-bg']) !!} </center>
            {!! Form::close() !!}
        @endif
                                        
                                        
                                </div> 
                            </div> 
                        </div> 


                        <div class="tab-pane fade " id="pills-remove" role="tabpanel" aria-labelledby="pills-remove-tab">
                            <div class="row">
                                <div class="form-group col-md-12">
                                     
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


