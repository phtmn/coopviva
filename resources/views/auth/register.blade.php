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
                <div class="col-lg-5">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-header bg-white pb-5">
                            <div class="text-muted text-center mb-3">
                                <small>Não tenho cadastro!</small>
                            </div>
                            <div class="text-center">
								
									<div class="container">
			<div class="row">
				<div class="col-12 col-lg-10">
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
									<select name="tipo_usuario" id="tipo-perfil" class="form-control" >
										<option value="investidor">Perfil Investidor</option>
										<option value="osc">Perfil OSC (Organização Social Civil)</option>
									</select>
								</div>
								<div class="form-group" id="box-tipo-usuario">
									<div class="form-group" style="margin-left: 25px">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="tipo" id="radioPF" value="PF" checked="checked">
											<label class="form-check-label" for="radioPF">Pessoa Física</label>
										</div>
										<br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="tipo" id="radioPJ" value="PJ">
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
											<label class="form-check-label" >Aceito os <a href="{{ url('/termodeuso') }}"> Termos de Uso </a></label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<center>  <button type="submit" class="btn gradient-bg">Cadastrar</button> </center>
								</div>
							</form>
						</div>
					</div><!-- .cause-wrap -->
				</div><!-- .col -->
				
			</div><!-- .row -->
			
			@section('js')
				<script>
					$(document).ready(function(){
						let tipoPerfil      = $('#tipo-perfil');
						let boxTipoUsuario  = $('#box-tipo-usuario');
						let radioPJ         = $('#radioPJ');
						tipoPerfil.change(function(){
							if(tipoPerfil.val() === 'osc'){
									boxTipoUsuario.css({'display':'none'});
									radioPJ.attr('checked', true);
							}else{
									boxTipoUsuario.css({'display':'block'});
									radioPJ.attr('checked', false);
							}
						});
					});
					window.onload = function(){
						$('main').removeClass('coopviva');
					}
				</script>
			@stop
		</div><!-- .row -->
								
                            </div>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <small>Ou digite suas informações</small>
                            </div>
                            <form role="form" action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                        </div>
                                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nome" type="text" name="name">
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" type="email" name="email">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Senha" type="password" name="password">
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Confirme a senha" type="password" name="password_confirmation">
                                        @if ($errors->has('password_confirmation'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="text-muted font-italic">
                                    <small>nivel de senha
                                        <span class="text-success font-weight-700">Segura</span>
                                    </small>
                                </div>
                                <div class="row my-4">
                                    <div class="col-12">
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                                            <label class="custom-control-label" for="customCheckRegister">
                                                  <span>Eu aceito os termos
                                                    <a href="#">Politicas do Site</a>
                                                  </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-4">Criar Contaa</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
