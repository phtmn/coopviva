<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            @for ($i = 0; $i < 3; $i++)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
                    <div class="card-body">
                        <h4>Nome da OSC</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <a href="{{route('osc.show',1)}}" class="btn gradient-bg mr-2">Saiba Mais</a>
                            </div>
                            <small class="text-muted">Desde: 29/12/2018</small>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>

