



    <div class="col">
    @forelse($projetos as $p)
            <a href="{{route('detalhe.osc',$p->id)}}" style="cursor: pointer;">
                <div class="card my-1" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-title font-weight-900">{{ $p->nome }}</p>
                        <p class="card-text font-weight-600">{{ $p->descricao }}</p>
                    </div>
                    <div class="card-footer">
                        Valor do Projeto: R$ {{ number_format($p->valor_meta,2,',','.') }}
                    </div>
                </div>
            </a>
    @empty
      <!--  <p>Não há projetos cadastrados e/ou ativos</p>-->
    @endforelse
    </div>