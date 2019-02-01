
<div class="container">
	 <div class="row">
	 	<div class="col-xs-12 mx-auto ">
				<br>
		 	<form class="d-flex-end  justify-content-center "  action="{{route('listar.oscs')}}" method="GET">
			  <div class="form-row ">
				<div class="col-xs-12 ">
				  <input type="search" class="form-control" name="cidade" placeholder="Cidade">
				</div>
				{{--<div class="col-xs-12">--}}
				  {{--<input type="search" class="form-control" name="estado" placeholder="Estado">--}}
				{{--</div>--}}
                <div class="col-xs-12">
                    <select name="categoria" id="" class="form-control">
                        <option value="1">Educação</option>
                        <option value="2">Idoso</option>
                        <option value="3">Meio Ambiente</option>
                        <option value="4">Saúde</option>
                        <option value="5">Esporte</option>
                        <option value="6">Cultura</option>
                    </select>
                </div>
                  
				<div>
					<button type="submit" class=" btn-p  flex-end">Pesquisar</button>
				</div>
			    </div>
			</form>
		</div>
	 </div>
</div>
<br>
<div class="container">

    @foreach($data as $d)
    <div class="row">

	    <div class="col-xs-12 col-xl-12">
		    <li class="media bg-light shadow p-3 mb-5">
			    <img src="{{ $d->logo ? asset($d->logo) : asset('/uploads/osc/default-logo.png') }}" class=" mr-3 img-responsive rounded" style="width:150px;" alt="...">
                <div class="media-body">
                        <h5 class="mt-0 mb-1">{{$d->sigla_osc}} <small style="color:#99e699;"> São Paulo</small></h5>
                        {{$d->nome_fantasia}}
                        <div class="d-flex justify-content-end">
                            <a href="{{route('detalhe.osc',$d->id)}}" class="btn gradient-bg mr-2">Saiba Mais</a>
                        </div>
                </div>
		    </li>
	   </div>
    </div>
	@endforeach


 </div>

@section('css')
    <style>
        .shadow {
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
        }
        .btn-p{
            display: inline-block;
            font-weight: 400;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 2px solid ;color: #8DDF6A ;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out; background-color :15s ease-in-out;border-color:15s ease-in-out; box-shadow :15s ease-in-out;
        }
        .btn-p- {
            color: #8DDF6A;
            border-color: #8DDF6A;
        }
    </style>

@stop