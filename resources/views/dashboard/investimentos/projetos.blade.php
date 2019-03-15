
    @forelse($projetos as $p)
    <div class="col-lg-4">
        <a href="{{route('detalhe.osc',$p->id)}}" style="cursor: pointer;">
            <div class="card card-lift--hover shadow border-0 bg-default">
                <div class="card-body py-5 text-center">
                    {{--<img  class="card-img-top" src="{{asset('vendor/argon-site/assets/img/coopviva/jacareCoopViva.png')}}" alt="">--}}
                    <h6 class="text-white text-uppercase">{{$p->nome}}</h6>
                    {{--<p class="description mt-3 text-white">{{$p->descricao ?? ''}}</p>--}}
                    {{--<div>--}}
                        {{--<span class="badge badge-pill badge-success text-white">{{ $p->projetos()->count() }} projetos</span>--}}
                        {{--<span class="badge badge-pill badge-success text-white">{{$p->metas()->count() }} Metas</span>--}}
                        {{--<span class="badge badge-pill badge-success text-white">2 ODS</span>--}}
                    {{--</div>--}}
                </div>
                <div class="card-footer text-center">
                    <a href="{{route('detalhe.osc',$osc->id)}}" class="btn btn-success btn-xs">#SimEuQuero</a>
                </div>
            </div>
        </a>
    </div>
    @empty
        <p>Não há projetos cadastrados e/ou ativos</p>
    @endforelse
