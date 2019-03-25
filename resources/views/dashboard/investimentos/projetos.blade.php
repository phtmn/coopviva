
    @forelse($projetos as $p)

                <div class="card card-profile shadow my-1" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-title font-weight-900">{{ $p->nome }}</p>
                        <p class="card-text font-weight-200">Descricao do projeto</p>
                        <p class="card-text font-weight-900">Meta R$ {{ number_format($p->valor_meta,2,',','.') }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="" class=" btn-outline-success btn btn-block" data-toggle="modal" data-target="#modal-default">SimEuQuero</a>
                    </div>
                </div>

    @empty
      <!--  <p>Não há projetos cadastrados e/ou ativos</p>-->
    @endforelse
