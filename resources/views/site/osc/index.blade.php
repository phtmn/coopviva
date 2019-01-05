@extends('site.master')

@section('content')    
<section class="jumbotron text-center our-causes">
    <div class="container">
      <h1 class="jumbotron-heading">Algumas das  Organizações</h1>
      <p class="lead text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod vel inventore necessitatibus aliquid. Aperiam, dolores atque voluptatibus eligendi ipsum recusandae adipisci consequuntur illo, sunt nemo saepe quia molestiae error quod.</p>
      <p>
        <a href="{{route('cadastro','osc')}}" class="btn gradient-bg mr-2">Cadastre a sua</a>
        <a href="{{route('cadastro','investidor')}}" class="btn gradient-bg mr-2">Seja um incentivador</a>
      </p>
    </div>
</section>

    <div class="form-filter">
        <div class="container">
    
        <form action="">
            <div class="row mt-20">
            <div class="form-group  col-6">
                <label for=""><h3>Escolha por uma Categoria</h3></label>
                <select name="categoria" id="" class="form-control">
                    <option value="Cidades">Crianças</option>
                    <option value="Cidades">Ciencia e Tecnologia</option>
                    <option value="Cidades">Cultura e Arte</option>
                    <option value="Cidades">Educação</option>
                    <option value="Cidades">Inovação</option>
                    <option value="Cidades">Empreendedorismo</option>
                    <option value="Cidades">Saúde e bem estar</option>
                    <option value="Cidades">Sustentabilidade</option>
                </select>
            </div>

            <div class="form-group  col-6">
                <label for=""><h3>Escolha por Estado</h3></label>
                <select name="categoria" id="" class="form-control">
                    <option value="Cidades">Crianças</option>
                    <option value="Cidades">Ciencia e Tecnologia</option>
                    <option value="Cidades">Cultura e Arte</option>
                    <option value="Cidades">Educação</option>
                    <option value="Cidades">Inovação</option>
                    <option value="Cidades">Empreendedorismo</option>
                    <option value="Cidades">Saúde e bem estar</option>
                    <option value="Cidades">Sustentabilidade</option>
                </select>
            </div>
            </div>
            <div class="row">
                <button class="btn btn-block btn-outline-success">Pesquisar</button>
            </div>
        </form>
    </div>
</div>

@include('site.osc.resultado-pesquisa')
@endsection