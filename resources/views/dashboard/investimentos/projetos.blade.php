<h2 class="text-dark ">Nossos Projetos</h2>
<br>
    @forelse($projetos as $p)
    <div class="col-lg-12">
        <a href="{{route('detalhe.osc',$p->id)}}" style="cursor: pointer;">
            <div class="card card-lift--hover shadow border-0 bg-default">
                
                <div class="card-footer">
				<h6 class="text-dark ">
				<a href="{{route('detalhe.projeto',$p->id)}}" class="btn btn-success btn-xs" style="text-transform: capitalize;">#SimEuQuero</a> |
				
				
				{{$p->nome}} | Meta R$ {{ number_format($p->valor_meta,2,',','.') }}</h6>
                </div>
            </div>
        </a>
    </div>
	<br>
    @empty
      <!--  <p>Não há projetos cadastrados e/ou ativos</p>-->
    @endforelse
