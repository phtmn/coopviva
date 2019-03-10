<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Start your development with a Design System for Bootstrap 4.">
	<meta name="author" content="Creative Tim">
	<title>.:: COOPVIVA ::. </title>
	<!-- Favicon -->
	<link href="{{asset('vendor/site/images/favicon.ico')}}" rel="icon" type="image/png">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- Icons -->
	<link href="{{asset('vendor/argon-site/assets/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
	<link href="{{asset('vendor/argon-site/assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<!-- Argon CSS -->
	<link type="text/css" href="{{asset('vendor/argon-site/assets/css/argon.css?v=1.0.1')}}" rel="stylesheet">
	<!-- Docs CSS -->
	<link type="text/css" href="{{asset('vendor/argon-site/assets/css/docs.min.css')}}" rel="stylesheet">
	<link type="text/css" href="{{asset('vendor/argon-site/assets/vendor/toastr/toastr.css')}}" rel="stylesheet">
</head>

<body>
<header class="header-global">
	<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
		<div class="container">
			<a class="navbar-brand mr-lg-5" href="{{url('/')}}">
				<img src="{{asset('vendor/argon-site/assets/img/brand/brandlogo-white.png')}}" alt="..:: COOPVIVA ::.." style="width: 188px; height: auto;">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="navbar-collapse collapse" id="navbar_global">
				<div class="navbar-collapse-header">
					<div class="row">
						<div class="col-6 collapse-brand">
							<a href="{{url('/')}}">
							<img src="{{ asset('vendor/site/images/coopvidapreta_logo.png') }}" alt="..:: COOPVIVA ::.." style="width: 188px; height: auto;">
							</a>
						</div>
						<div class="col-6 collapse-close">
							<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
								<span></span>
								<span></span>
							</button>
						</div>
					</div>
				</div>
				<ul class="navbar-nav navbar-nav-hover align-items-lg-center">
					<li class="nav-item dropdown">
						<a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
							<i class="ni ni-ui-04 d-lg-none"></i>
							<span class="nav-link-inner--text">Conheça</span>
						</a>
						<div class="dropdown-menu dropdown-menu-xl">
							<div class="dropdown-menu-inner">
								<a href="#" class="media d-flex align-items-center">
								<img src="{{asset('vendor/argon-site/assets/img/brand/rede_c.png')}}" alt="..:: COOPVIVA ::.." style="width: 88px; height: auto;">
									<div class="media-body ml-3">
										<h6 class="heading text-default mb-md-1">Rede de Conexão</h6>
										<p class="description d-none d-md-inline-block mb-0">Inpiramos e geramos conexões sustentáveis.</p>
									</div>
								</a>
								<a href="#" class="media d-flex align-items-center">
								<img src="{{asset('vendor/argon-site/assets/img/brand/agenda2030.png')}}" alt="..:: COOPVIVA ::.." style="width: 88px; height: auto;">
									<div class="media-body ml-3">
										<h6 class="heading text-primary mb-md-1">Plataforma Agenda 2030</h6>
										<p class="description d-none d-md-inline-block mb-0">Acelerando as transformações para a Agenda 2030 no Brasil.</p>
									</div>
								</a>
							  
								<a href="#" class="media d-flex align-items-center">
									<div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
										<i class="ni ni-ui-04"></i>
									</div>
									<div class="media-body ml-3">
										<h5 class="heading text-warning mb-md-1"> Sim eu Quero</h5>
										<p class="description d-none d-md-inline-block mb-0">Browse our 50 beautiful handcrafted components offered in the Free version.</p>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
							<i class="ni ni-collection d-lg-none"></i>
							<span class="nav-link-inner--text">Termo de Uso</span>
						</a>
					</li>
				</ul>

				<ul class="navbar-nav align-items-lg-center ml-lg-auto">
					<li class="nav-item">
						<a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
							<i class="fa fa-facebook"></i>
							<span class="nav-link-inner--text d-lg-none">Facebook</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
							<i class="fa fa-instagram"></i>
							<span class="nav-link-inner--text d-lg-none">Instagram</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
							<i class="fa fa-whatsapp"></i>
							<span class="nav-link-inner--text d-lg-none">Twitter</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
							<i class="fa fa-envelope"></i>
							<span class="nav-link-inner--text d-lg-none">Twitter</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
							<i class="ni ni-pin-3"></i>
							<span class="nav-link-inner--text d-lg-none">Twitter</span>
						</a>
					</li>
					<li class="nav-item d-none d-lg-block ml-lg-4">
						@guest
							<!-- <a href="{{url('entrar')}}"class="btn btn-success btn-icon">
								<span class="nav-link-inner--text">ENTRAR</span>
							</a> -->
							<button type="button" class="btn btn-success btn-icon mb-3 mb-sm-0" data-toggle="modal" data-target="#modal-login">ENTRAR</button>
							<a href="{{route('register')}}"class="btn btn-neutral btn-icon">
								<span class="nav-link-inner--text">Cadastre-se</span>
							</a>
						@else
							@if(auth()->user()->tipo_usuario == 'investidor')
								<a href="{{route('perfil.index')}}" class="btn btn-neutral btn-icon">
									<span class="btn-inner--icon">
									  <i class="ni ni-tv-2 mr-2"></i>
									</span>
									<span class="nav-link-inner--text">Painel do Investidor</span>
								</a>
							@else
								<a href="{{route('osc.index')}}" class="btn btn-neutral btn-icon">
								<span class="btn-inner--icon">
								  <i class="ni ni-tv-2 mr-2"></i>
								</span>
									<span class="nav-link-inner--text">Painel da OSC</span>
								</a>
							@endif
							<a href="{{route('logout')}}" target="_blank" class="btn btn-neutral btn-icon"
							   onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();" data-toggle="tooltip" title="Sair do Sistema">
								<span class="btn-inner--icon">
								  <i class="fa fa-sign-out"></i>
								</span>
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						@endguest
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<main class="coopviva">
	@yield('conteudo_principal')
</main>
<footer class="footer has-cards">
	<div class="container">
		<hr>
		<div class="row align-items-center justify-content-md-between">
			<div class="col-md-5 ">
				<div class="copyright text-center text-primary text-xl-left text-muted">
					&copy; 2019
					<a href="#" target="_blank">COOPVIVA</a>
				</div>
			</div>
			<div class="col-md-7">
				<ul class="nav nav-footer justify-content-end">
					<li class="nav-item">
						<a href="#" class="nav-link" target="_blank">Rede de Conexão</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link" target="_blank">Agenda 2030</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link" target="_blank">Sim EU QUERO</a>
					</li>
				   
					<li class="nav-item">
						<a href="#" class="nav-link" target="_blank">Termo de Uso</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<!-- Modal Login -->
<div id="modal-login" class="modal fade usuario-login" tabindex="-1" role="dialog" aria-labelledby="modal-login" aria-hidden="true">
	<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-body p-0">
				<div class="modal-header bg-white">
					<h3 class="modal-title text-muted text-center">Faça seu login</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body px-lg-5 py-lg-2">
					<div class="text-center text-muted mb-4">
						<small>Entre no sistema preenchendo corretamente os campos abaixo.</small>
					</div>
					<form id="form-login" name="form-login" action="" method="post" role="form" class="form-validate" novalidate>
						<input type="hidden" id="input-login" name="input-login" value="login">
						<div class="form-group mb-3">
							<div class="input-group input-group-alternative">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-email-83"></i></span>
								</div>
								<input id="login-email" name="login-email" class="form-control" placeholder="E-mail" type="email" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group input-group-alternative">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
								</div>
								<input id="login-senha" name="login-senha" class="form-control" placeholder="Senha" type="password" required>
							</div>
						</div>
						<div class="custom-control custom-control-alternative custom-checkbox">
							<input class="custom-control-input" id=" customCheckLogin" type="checkbox">
							<label class="custom-control-label" for=" customCheckLogin"><span>Lembrar minha senha</span></label>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-primary my-4">Acessar</button>
						</div>
					</form>
					<div class="text-center text-muted mb-4">
						<small><a href="#">Esqueci minha senha</a></small>
					</div>
					<div class="text-center text-muted mb-4">
						<small>Sua primeira vez aqui? <a href="#"> <b>Cadastre-se</b></a>.</small>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Modal Login -->
<!-- Core -->
<script src="{{asset('vendor/argon-site/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/argon-site/assets/vendor/popper/popper.min.js')}}"></script>
<script src="{{asset('vendor/argon-site/assets/vendor/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/argon-site/assets/vendor/headroom/headroom.min.js')}}"></script>
<script src="{{asset('vendor/argon-site/assets/vendor/toastr/toastr.js')}}"></script>
<!-- Argon JS -->
<script src="{{asset('vendor/argon-site/assets/js/argon.js?v=1.0.1')}}"></script>
<script src="{{asset('vendor/site/js/coopviva.js')}}"></script>
<iframe width="70" height="70" src="https://whatsmagic.bitnix.com.br/embed/?id=cc90179e0f&tl=NTU4Mzk5NDE1NDk3OA==" frameborder="0" style="position:fixed;z-index:1000;bottom:20px;right:20px;"></iframe>
@yield('js')
</body>

</html>