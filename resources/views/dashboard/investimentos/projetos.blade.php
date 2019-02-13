<div class="projetos mt-2">
    <table class="table table-bordered table-condensed">
        <thead>
            <tr>
                <th>Nome do Projeto</th>
                <th>Valor</th>
                <th>Categoria</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @forelse($projetos as $p)
            <tr>
                <td>{{$p->descricao}}</td>
                <td>R$ {{ number_format($p->valor_meta,2,',','.')}}</td>
                <td>{{$p->segmento_cultural}}</td>
                <th><a href="{{route('projeto.landingPage',$p->id)}}"> Investir nesse Projeto</a></th>
            </tr>
                @empty
            <p>Não há projetos cadastrados e/ou ativos</p>
            @endforelse
        </tbody>
    </table>

</div>