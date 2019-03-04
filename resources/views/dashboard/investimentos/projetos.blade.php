    <table class="table">
        <thead>
            <tr>
                <th>Nome do Projeto</th>
                <th>Valor (R$)</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @forelse($projetos as $p)
            <tr>
                <td>{{$p->descricao}}</td>
                <td>R$ {{ number_format($p->valor_meta,2,',','.')}}</td>
                
                <th><a href="{{route('projeto.landingPage',$p->id)}}"> Saiba mais</a></th>
            </tr>
                @empty
            <p>Não há projetos cadastrados e/ou ativos</p>
            @endforelse
        </tbody>
    </table>
