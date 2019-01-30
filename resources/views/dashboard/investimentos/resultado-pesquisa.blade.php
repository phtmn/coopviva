
<!--<div class="album py-4 ">
    <div class="container">
        <div class="row">
            @foreach($data as $d)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
                    <div class="card-body">
                        <h4>{{$d->nome_fantasia}}</h4>
                       
                        <p class="card-text">{{$d->descricao_osc}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <a href="{{route('detalhe.osc',$d->id)}}" class="btn gradient-bg mr-2">Saiba Mais</a>
                            </div>
                            <small class="text-muted">{{$d->ano_fundacao}}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>-->
                     
<div class="container">  <!--:::: Formulario :::::-->
	 <div class="row">
	 	<div class="col-xs-12 mx-auto ">
				<br>
		 	<form class="d-flex-end  justify-content-center " >
			  <div class="form-row ">
				<div class="col-xs-12 ">
				  <input type="search" class="form-control" placeholder="Cidade">
				</div>
				<div class="col-xs-12">
				  <input type="search" class="form-control" placeholder="Estado">
				</div>
				<div>
					<button type="button" class="btn btn-outline ">Pesquisar</button>
				</div>
			    </div><!--form-row-->
			</form>  <!--form-->
		</div>    <!--col-xs-->
	 </div>    <!-- row -->
 </div>   <!-- container -->
	  
	  <hr>
<div class="container"> <!--::::::::Lista de Cartões ::::::::::-->
	 <div class="row">
	 @foreach($data as $d)
	    <div class="col-xs-12 col-xl-12">
	       <ul class="list-unstyled">
		    <li class="media bg-light shadow p-3 mb-5">
			<img src="" class=" mr-3 img-responsive rounded" style="width:80px;" alt="...">
			<div class="media-body">
			  <h5 class="mt-0 mb-1">{{$d->nome_fantasia}} <small style="color:#99e699;"> São Paulo</small></h5>
			  {{$d->descricao_osc}}
				<div class="d-flex justify-content-end">
				<a href="{{route('detalhe.osc',$d->id)}}" class="btn gradient-bg mr-2">Saiba Mais</a>
				</div>
			</div><!---media-body-->
		  </li>  <!-- li-media-->
		 
	    </ul>
	   </div><!--col-->
    </div><!--row-->
	@endforeach
 </div> <!--container--> 