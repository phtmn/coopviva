@forelse($projetos as $p)
        <div class="col-md-12">
            <div class="card card-profile shadow my-1" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-title font-weight-900">{{ $p->nome }}</p>
                    <p class="card-text font-weight-200">Descricao do projeto</p>
                    <p class="card-text font-weight-900">Meta R$ {{ number_format($p->valor_meta,2,',','.') }}</p>
                </div>

                <div class="p-4">
                    <a href="{{ route('detalhe.projeto',$p->id )}}" class="btn-success btn btn-block">Saiba Mais</a>
                </div>

            </div>
        </div>
@empty
  <!--  <p>Não há projetos cadastrados e/ou ativos</p>-->
@endforelse
