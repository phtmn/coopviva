@extends('layouts.site')

@section('conteudo_principal')
    <section class="section section-shaped section-sm">
        <div class="shape shape-style-1 bg-gradient-success">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="container pt-lg-md">
            <div class="row justify-content-center">
				<div class="card shadow border-0">
                	<div class="col-lg-12">
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="cause-wrap  flex-wrap justify-content-between">
								<header class="entry-header  flex-wrap align-items-center">
									@if ($errors->any())
										<div class="alert alert-danger">
											<ul>
												@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
												@endforeach
											</ul>
										</div>
									@endif
									@if (session('success'))
										<div class="alert alert-success">
											{{ session('success') }}
										</div>
									@endif
									<br>
									<h3 class="entry-title w-100 m-0 text-center">Faça seu cadastro aqui!</h3>
								</header><!-- .entry-header -->
								<div class="card-body">
									<form class="form form-investidor" action="{{route('register')}}" method="POST">
										@csrf
										<div class="form-group">
											<label for="name">Como se chama?</label>
											<input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Digite seu nome" required="true">
										</div>
										<div class="form-group">
											<label for="tipo_usuario">Como você deseja usar o Coopviva?</label>
											<select name="tipo_usuario" id="tipo_usuario" class="form-control" >
												<option value="1">Perfil Investidor</option>
												<option value="2">Perfil OSC (Organização Social Civil)</option>
											</select>
										</div>
										<div class="form-group" id="box-tipo-usuario">
											<div class="form-group" style="margin-left: 25px">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="tipo_pessoa" id="radioPF" value="F" checked="checked">
													<label class="form-check-label" for="radioPF">Pessoa Física</label>
												</div>
												<br>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="tipo_pessoa" id="radioPJ" value="J">
													<label class="form-check-label" for="radioPJ">Pessoa Jurídica</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="name"> Selecione o seu Estado?</label>
											<select name="uf" id="" class="form-control" >
												<option value="#">...  Selecione um Estado...</option>
												<option value="AC">AC - Acre</option>
												<option value="AL">AL - Alagoas</option>
												<option value="AP">AP - Amapá</option>
												<option value="AM">AM - Amazonas</option>
												<option value="BA">BA - Bahia</option>
												<option value="CE">CE - Ceará</option>
												<option value="DF">DF - Distrito Federal</option>
												<option value="ES">ES - Espírito Santo</option>
												<option value="GO">GO - Goiás</option>
												<option value="MA">MA - Maranhão</option>
												<option value="MT">MT - Mato Grosso</option>
												<option value="MS">MS - Mato Grosso do Sul</option>
												<option value="MG">MG - Minas Gerais</option>
												<option value="PA">PA - Pará</option>
												<option value="PB">PB - Paraíba</option>
												<option value="PR">PR - Paraná</option>
												<option value="PE">PE - Pernanbuco</option>
												<option value="PI">PI - Piauí</option>
												<option value="RJ">RJ - Rio de Janeiro</option>
												<option value="RN">RN - Rio Grande do Norte</option>
												<option value="RS">RS - Rio Grande do Sul</option>
												<option value="RO">RO - Rondônia</option>
												<option value="RR">RR - Roraima</option>
												<option value="SC">SC - Santa Catarina</option>
												<option value="SP">SP - São Paulo</option>
												<option value="SE">SE - Sergipe</option>
												<option value="TO">TO - Tocantins</option>
											</select>
										</div>

										<div class="form-group">
											<label for="email">E-mail</label>
											<input type="email" name="email" class="form-control" id="email" placeholder="Digite seu e-mail" required="true">
										</div>

										<div class="form-group">
											<label for="password">Senha</label>
											<input type="password" name="password" class="form-control" id="password" placeholder="Digite sua senha">
										</div>

										<div class="form-group">
											<label for="password_confirmation">Repita a Senha</label>
											<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Repita sua senha">
										</div>
										<div class="form-group">
											<div class="form-group" style="margin-left: 25px">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" name="termo" value="ACEITO" disabled="disabled" checked="checked"     >
													<label class="form-check-label" >Aceito os <a href="{{url('/termo-de-uso')}}" target="_blank"> Termos de Uso </a></label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<center>  <button type="submit" class="btn btn-outline-success">Cadastrar</button> </center>
										</div>
									</form>
								</div>
							</div><!-- .cause-wrap -->
						</div><!-- .col -->
						<div class="col-12 col-lg-6">
						<div class="cause-wrap d-flex flex-wrap justify-content-between">
							<header class="entry-header  flex-wrap align-items-center ">
							<br>
							<h3 class="entry-title w-100 m-0 text-center">Perfis de Acesso</h3>
								
							</header><!-- .entry-header -->
							<div class="card-body">
								<div class="form-group">
									<label for="name"><strong>Investidor Social</strong></label>
									<p class="text-justify class="sample-text" style="text-indent: 20px;">O cadastro como investidor é possivel realizar investimentos (doação ou patrocínio / pessoa física ou jurídica) em instituições ou projetos cadastradas em nossa base. Ou você pode, também, tornar-se um voluntário.</p>
								</div>
								
								<hr>
								<div class="form-group">
									<label for="name"><strong>Voluntário Ativo</strong></label>
									<p class="text-justify" class="sample-text" style="text-indent: 20px;">	Contabilizar suas horas dedicadas a instituição. Registrar sua ações e resultados. Consultar instituições que comunguem com seus valores e necessitam de suas habilidades . Participar do banco de ações positivas. Fazer doações de bens e serviços</p>
								</div>

								<hr>
								<div class="form-group">
									<label for="name"><strong>Voluntário Passivo</strong></label>
									<p class="text-justify" class="sample-text" style="text-indent: 20px;"> Pesquisar Organizações no mundo inteiro. Contribuir  com uma causa sem sair de casa e que encaixe com seu tempo disponível . Contabilizar sua dedicação a organização ou projeto especifico. Trocar experiências e expertise. Gerar uma rede de relacionamento para o bem. Divulgar para seus familiares, amigos, empresas e pontuar  por engajamento.</p>
								</div>
							</div>
						</div>
					</div>
				</div><!-- .row -->
				</div>
				</div>
			</div>
		</div>
@stop

@section('js')
	<script>
		$(document).ready(function(){
			let tipoUsuario      = $('#tipo_usuario');
			let boxTipoUsuario  = $('#box-tipo-usuario');
			let radioPJ         = $('#radioPJ');

			tipoUsuario.change(function(){

				console.log(tipoUsuario.val())
				if(tipoUsuario.val() == 2){
					boxTipoUsuario.css({'display':'none'});
					radioPJ.attr('checked', true);
				}else{
					boxTipoUsuario.css({'display':'block'});
					radioPJ.attr('checked', false);
				}
			});
		});
	</script>
@stop
