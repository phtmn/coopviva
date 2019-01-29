
<div class="album py-4 ">
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
</div>

