<h2>Dados da osc</h2>
<p>TODO: falta preencher caso existe</p>

<form action="{{ route('osc.store') }}" method="POST">
    @csrf
<div class="row">
    <div class="form-group col-md-6">
        <label for="">Nome Fantasia</label>
        <input type="text" name="nome_fantasia" class="form-control">
    </div>
    <div class="form-group col-md-2">
        <label for="">Sigla</label>
        <input type="text" name="sigla_osc" class="form-control">
    </div>
    <div class="form-group col-md-2">
        <label for="">Ano Fundação</label>
        <input type="text" name="ano_fundacao" class="form-control">
    </div>
    <div class="form-group col-md-2">
        <label for="">Ano Inscrição CNPJ</label>
        <input type="text" name="ano_inscricao_cnpj" class="form-control">
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
        <label for="">Responsável Legal</label>
        <input type="text" name="responsavel_legal" class="form-control">
    </div>
    <div class="form-group col-md-4">
        <label for="">Email do Responsável</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group col-md-2">
        <label for="">Telefone</label>
        <input type="text" name="telefone" class="form-control">
    </div>
</div>

<div class="row">
    <div class="form-group col-md-4">
        <label for="">Site</label>
        <input type="text" name="site" class="form-control">
    </div>
    <div class="form-group col-md-4">
        <label for="">Situacao do Imóvel</label>
        <input type="text" name="situacao_imovel" class="form-control">
    </div>
    <div class="form-group col-md-4">
        <label for="">Atividade Econômica</label>
        <input type="text" name="atividade_economica" class="form-control">
    </div>
</div>

<div class="row">
    <div class="form-group col-md-4">
        <label for="">Area de Atuação</label>
        <input type="text" name="area_atuacao" class="form-control">
    </div>
    <div class="form-group col-md-4">
        <label for="">Sub-Área 01</label>
        <input type="text" name="sub_area1" class="form-control">
    </div>
    <div class="form-group col-md-4">
        <label for="">Sub-Área 02</label>
        <input type="text" name="sub_area2" class="form-control">
    </div>
</div>

<div class="row">
    <div class="form-group">
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
</div>

</form>
