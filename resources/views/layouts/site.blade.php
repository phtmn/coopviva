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
								<a href="http://www.redeconexao.com.br/" class="media d-flex align-items-center" target="_blank">
								<img src="{{asset('vendor/argon-site/assets/img/brand/rede_c.png')}}" alt="..:: COOPVIVA ::.." style="width: 88px; height: auto;">
									<div class="media-body ml-3">
										<h6 class="heading text-default mb-md-1">Rede de Conexão</h6>
										<p class="description d-none d-md-inline-block mb-0">Inpiramos e geramos conexões sustentáveis.</p>
									</div>
								</a>
								<a href="http://www.agenda2030.com.br/" class="media d-flex align-items-center" target="_blank">
								<img src="{{asset('vendor/argon-site/assets/img/brand/agenda2030.png')}}" alt="..:: COOPVIVA ::.." style="width: 88px; height: auto;">
									<div class="media-body ml-3">
										<h6 class="heading text-primary mb-md-1">Plataforma Agenda 2030</h6>
										<p class="description d-none d-md-inline-block mb-0">Acelerando as transformações para a Agenda 2030 no Brasil.</p>
									</div>
								</a>
							  
								<a href="#" class="media d-flex align-items-center">
										<img src="{{asset('vendor/argon-site/assets/img/brand/agenda2030.png')}}" alt="..:: COOPVIVA ::.." style="width: 88px; height: auto;">
										<div class="media-body ml-3">
										<h5 class="heading text-warning mb-md-1"> Sim eu Quero</h5>
										<p class="description d-none d-md-inline-block mb-0">Browse our 50 beautiful handcrafted components offered in the Free version.</p>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link" data-toggle="modal" data-target="#modal01">
							
							<span class="nav-link-inner--text">Termo de Uso</span>
						</a>
						
					</li>
				</ul>

				<ul class="navbar-nav align-items-lg-center ml-lg-auto">
					<li class="nav-item">
						<a class="nav-link nav-link-icon" href="https://www.facebook.com/rededeconexao" target="_blank" data-toggle="tooltip" title="Facebook">
							<i class="fa fa-facebook"></i>
							<span class="nav-link-inner--text d-lg-none">Facebook</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-icon" href="https://www.instagram.com/rededeconexaooficial/" target="_blank" data-toggle="tooltip" title="Instagram">
							<i class="fa fa-instagram"></i>
							<span class="nav-link-inner--text d-lg-none">Instagram</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-icon" href="https://api.whatsapp.com/send?1=pt_BR&phone=5583994154978" target="_blank" data-toggle="tooltip" title=" Whatsapp">
							<i class="fa fa-whatsapp"></i>
							<span class="nav-link-inner--text d-lg-none">Twitter</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-icon" href="mailto:contato@redeconexão.com.br" target="" data-toggle="tooltip" title=" contato@redeconexao.com.br">
							<i class="fa fa-envelope"></i>
							<span class="nav-link-inner--text d-lg-none">Twitter</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="João Pessoa - Paraíba - Brasil">
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
							@if(auth()->user()->perfil_id == 1)
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

<!-- Modal -->
<div class="modal fade" id="modal01" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Termos de uso e Política de Privacidade</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <b><br>
<p align="justify" class="sample-text" style="text-indent: 15px;"> O acesso ao conteúdo daplataforma http://www.coopviva.com.br ("SITE") dependerá da sua plena concordância com o Termo de Uso e Política de Privacidade ("TERMO DE USO") aqui previstos, então a sua leitura e posterior aceitação são indispensáveis. 
O TERMO DE USO tem como objetivo estabelecer os direitos e obrigações aos INVESTIDORES e organizações da sociedade civil (OSC)USUÁRIOS, bem como parceiros fomentadores, e esclarecer qual o tratamento conferido aos dados e informações fornecidos por aqueles que se cadastrarem para acesso a qualquer área do SITE, conforme as regras e informações abaixo previstas:<br><br>
O QUE É O COOPVIVA?<br>
</p><p align="justify" class="sample-text" style="text-indent: 15px;">O COOPVIVA, é uma plataforma online que proporciona a realização colaborativa destinada a financiar OSC’s (Organizações da Sociedade Civil) através de doações/patrocínio diretas e/ou através de seus respectivos projetos de sustentabilidade, tendo identificação direta com a Agenda 2030 da ONU. Uma maneira inovadora e prática de viabilizar a perenidade das OSC’s com a colaboração de diversas pessoas, possibilitando escalabilidade e engajamento de stakeholders.
A plataforma permite que as OSC’s apresentem seus projetos e angariem fundos através de doações (sem benefício fiscal) e/ou patrocínio(com benefício fiscal) feitas internamente e diretamente pelos INVESTIDORES cadastrados.<br><br> 
PARCEIROS ESTRATÉGICOS E COMPARTILHAMENTO DE PLATAFORMA<br>
</p><p align="justify" class="sample-text" style="text-indent: 15px;">O COOPVIVA também apoia outros canais de captação de recursos para projetos, através do compartilhamento de sua plataforma, cadastro de usuários e outras funcionalidades, com o que o usuário, desde já, concorda. 
No entanto, é de exclusiva responsabilidade de cada canal parceiro o gerenciamento de suas atividades, incluindo, mas não se limitando, a curadoria dos projetos candidatos, o controle de valores recebidos, e regras de uso da plataforma para seus projetos.<br><br>
UTILIZAÇÃO DA PLATAFORMA<br>
</p><p align="justify" class="sample-text" style="text-indent: 15px;">O serviço é oferecido mediante a aceitação, sem modificação de todos os termos e condições contidas neste documento. Este termo e todas as outras regras operacionais, políticas e procedimentos que possam ser publicadas de tempos em tempos no Site, cada um dos quais é incorporada por referência e cada um dos quais pode ser atualizada pelo Site ao longo do tempo, sem aviso prévio. Além disso, alguns serviços oferecidos através do coopviva.com.br podem estar sujeitos aos termos e condições adicionais promulgada pelo Site ao longo do tempo.<br>
</p><p align="justify" class="sample-text" style="text-indent: 25px;">1. Qualquer pessoa maior de 18 anos pode doar/patrocinar ou divulgar seu projeto através do SITE, sendo expressamente proibida a participação de menores de 18 anos, mesmo que com a prévia autorização dos pais ou responsáveis. Em caso de irregularidade, o SITE poderá cancelar o cadastro desta pessoa e suas eventuais doações/patrocínio ou ações realizadas no SITE.<br>
</p><p align="justify" class="sample-text" style="text-indent: 25px;">2. Ademais, o USUÁRIO é o único responsável pela segurança e controle de sua conta (nome de usuário e senha), que é pessoal e intransferível. <br>
</p><p align="justify" class="sample-text" style="text-indent: 25px;">3. O USUÁRIO se compromete a manter seus dados sempre atualizados juntos ao SITE, sendo responsável pela veracidade das informações ali dispostas.<br>
</p><p align="justify" class="sample-text" style="text-indent: 25px;">4. Todos e quaisquer conteúdos enviados pelos usuários são de responsabilidade exclusiva do próprio usuário, não havendo qualquer responsabilidade solidária, subsidiária ou a qualquer título pelo SITE. Sendo assim, o SITE não se responsabiliza por quaisquer danos de qualquer natureza, em decorrência de conteúdos impróprios, ofensivos ou que violem direitos previstos na legislação brasileira.<br>
</p><p align="justify" class="sample-text" style="text-indent: 25px;">5. Caso haja qualquer suspeita de uso indevido ou não autorizado de sua conta, o usuário deve notificar imediatamente o SITE, pelo e-mail: contato@redeconexao.com.br<br><br>
MODIFICAÇÃO DOS TERMOS DE USO<br>
</p><p align="justify" class="sample-text" style="text-indent: 15px;">O Site se reserva o direito de, a seu exclusivo critério, modificar ou substituir qualquer um dos Termos de Uso, ou alterar, suspender ou descontinuar o Serviço (incluindo, sem limitação, a disponibilidade de qualquer recurso do banco de dados, ou conteúdo) a qualquer momento através de um aviso no site ou enviando por e-mail. O COOPVIVA também pode impor limites a certos recursos e serviços ou restringir seu acesso a partes ou a totalidade do Site, sem aviso ou responsabilidade. É da sua responsabilidade verificar os Termos de Uso periodicamente. O uso continuado do Site após a publicação de quaisquer alterações aos Termos de Uso constitui aceitação dessas mudanças.<br><br>
REGRAS PARA USO DO SITE<br>
</p><p align="justify" class="sample-text" style="text-indent: 25px;">Você poderá navegar pelo site e ver conteúdos sem cadastrar-se, mas para utilizar certos aspectos do Serviço, você pode ser obrigado a cadastrar-se no Site e escolher uma senha e usuário. Você deve fornecer informações cadastrais precisas, completas e atualizadas. Não fazê-lo constitui violação dos Termos de Uso, que pode resultar no cancelamento imediato de sua conta no site. Você não deve: (i) selecionar ou usar um nome de usuário de outra pessoa com a intenção de representar essa pessoa, (ii) usar um nome de usuário diferente do seu sem autorização adequada, (iii) usar um nome de usuário que seja ofensivo, grosseiro ou obsceno. Os representantes doCOOPVIVA estão permitidos a realizar checagens cadastrais de seu CPF para que o Site possa validar as informações por ele apresentadas, essa validação tem intuito de proteger os usuários do Site contra possíveis fraudes ou inadimplência; as informações obtidas através desta checagem não serão divulgadas aos usuários do Site.
O Site se reserva o direito de recusar o cadastro, ou cancelar o acesso de um usuário a seu exclusivo critério. Você é o único responsável pela atividade que ocorre em sua conta e será responsável por manter a confidencialidade de sua senha. Você nunca deve usar a conta de outro usuário sem a permissão expressa do usuário. Você vai notificar imediatamente o Site, por escrito, de qualquer uso não autorizado de sua conta, ou outra conta.<br><br>
SOBRE O CADASTRO:<br>
</p><p align="justify" class="sample-text" style="text-indent: 25px;"> 1. As OSC’s que tenham interesse em candidatar seu cadastro com seus respectivos projetos junto à plataforma, deverá efetuar seu pré cadastro, por meio de seu responsável legal, clicando no link“Cadastra-se” do SITE (www.coopviva.com.br) fornecendo as seguintes informações: <br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;"> 1.	Como se chama;<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;"> 2.	 Como você deseja usar o COOPVIVA; <br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;"> 3.	Estado;<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;"> 4.	Email;<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;"> 5.	Senha;<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;"> 6.	Confirmação da senha;<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;"> 7.	Aceitar este “Termo de Uso”<br>
</p><p align="justify" class="sample-text" style="text-indent: 25px;">2.	A OSC’s receberá um email automático para validação e liberação de seu acesso a plataforma.<br>
</p><p align="justify" class="sample-text" style="text-indent: 25px;">3.	Após sua validação a OSC deverá preencher os seguintes dados referente a instituição e seus projetos:<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;"> 3.1) Perfil do usuário:<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.1.1) Nome do contato da OSC;<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.1.2) Data de nascimento<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.1.3) Telefone<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.1.4) Gênero<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.1.5) CNPJ<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.1.6) Razão Social<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.1.7) Endereço (CEP, Logradouro, Número, Cidade, Estado e Complemento)<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2) OSC<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1) Perfil:<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.1) Dados gerais:<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.1.1) Nome fantasia<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.1.2) Sigla OSC<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.1.3) Ano de fundação<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.1.4) Inscrição CNPJ<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.1.5) CNAE<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.1.6) Responsável Legal<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.1.7) Email<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.1.8) Telefone<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.2) Dados financeiros:<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.2.1) Conta para receber doação<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.3) Endereço<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.3.1) Cep<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.3.2) Logradouro<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.3.3) Número<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.3.4) Cidade<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.3.5) Estado<br> 
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.3.6) Complemento<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.3.7) Situação do imóvel<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.4) Descrição<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.4.1) O que a OSC faz<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.4.2) Como surgiu a OSC<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.4.3) Missão da OSC<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.4.4) Visão da OSC<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.4.5) Link site<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.4.6) Link do Estatuto<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.4.7) Link da Finalidade Estatutária<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.5) ODS (Nesta tela apareceram todas as ODS cadastradas no cadastro específico ODS no site) Veja instrução específica.<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.1.6) Upload<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2) Projetos:<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1) Novo projeto<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.1) Dados gerais<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.1.1) Nome do projeto<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.1.2) Valor<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.1.3) Registro 1<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.1.4) Instância<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.1.5) Âmbito<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.1.6) Segmento<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.1.7) Artigo de enquadramento<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.2) Dados Financeiros<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.2.1) Conta para receber doações/patrocínio<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.2..2) Conta para receber patrocínios<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.3) Responsável<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.3.1) Nome do proponente<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.3.2) CPF<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.3.3) CNPJ<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.3.4) Telefone 1<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.3.5) Telefone 2<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.3.6) Email principal<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.3.7) Email secundário<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.4) Resumo<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.4.1) Objetivo Geral<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.4.2) Objetivos específicos<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.4.3) Justificativa<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.4.4) Público Alvo<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.2.1.4.5) Impactos esperados<br>
</p><p align="justify" class="sample-text" style="text-indent: 35px;">3.2.3) ODS – Selecionar os objetivos com suas respectivas metas que a OSC atende.<br>

</p><p align="justify" class="sample-text" style="text-indent: 25px;">4. Cada OSC poderá cadastrar mais de um projeto em seu cadastro. Todos os projetos cadastrados deverão ser de responsabilidade técnica, execução e financeira da OSC.<br> <br>
DEFINIÇÃO DOS USUÁRIOS<br>
</p><p align="justify" class="sample-text" style="text-indent: 15px;">USUÁRIO representa um grupo que contempla todos os papéis disponíveis a serem utilizados no COOPVIVA: OSC e INVESTIDORES<br><br>
OSC<br>
</p><p align="justify" class="sample-text" style="text-indent: 15px;">Conta criada por um representante reconhecido da Organização em questão do cadastro, podem ser ONG, OSCIP, Instituto, Empresa, Ministério, Associação, Organização.
Podem receber doações/patrocínio através da plataformaCOOPVIVA, exclusivamente em seu ambiente homologado pelos seus desenvolvedores.
Devem informar seus INVESTIDORES com atualizações de projetos no qual foram arrecadadasdoações/patrocínio através do COOPVIVA.
Devem possuir uma causa do bem e estarem dentro do critério de transparência e honestidade do COOPVIVA. OCOOPVIVA se reserva ao direito de remover qualquer usuário no qual não considere se encaixar nesses critérios de seleção interna.
Ao prometer incentivos/recompensas e/ou realização de tarefas, o RESPONSÁVEL PELA OSC assume as obrigações previstas no artigo 854 e seguintes do Código Civil brasileiro, tornando-se diretamente responsável pelo cumprimento de sua promessa perante os INVESTIDORES que preencherem as condições estipuladas, sem qualquer responsabilidade, direta ou indireta, por parte do COOPVIVA.<br><br>

INVESTIDOR<br>
</p><p align="justify" class="sample-text" style="text-indent: 15px;">Conta criada a fim de realizar contribuições financeiras para Organizações ou compartilhar informações através do COOPVIVA, podem ser Pessoas Física ou Pessoa Jurídica.
Tem o livre direito de escolher quem deseja apoiar financeiramente, de determinar o valor que desejar. Possui a opção de apoiar financeiramente uma Organização de forma recorrente, no qual ao realizar essa ação se compromete a contribuir financeiramente de forma automática num contrato de 1 ano (12 meses) que pode ser interrompido a qualquer momento. Nesse período será descontado automaticamente do cartão de crédito/boleto fornecido a quantia estipulada como determinada para doação recorrente na primeira vez.
Ao cumprir as condições estipuladas para o recebimento dos incentivos/recompensas ou verificação da realização de tarefas prometidas pelo RESPONSÁVEL PELA OSC, o INVESTIDOR adquire os direitos previstos no artigo 855 e seguintes do Código Civil brasileiro, devendo exigir diretamente do RESPONSÁVEL PELA OSC, o cumprimento de sua promessa, estando ciente de que não há qualquer responsabilidade, direta ou indireta, por parte do COOPVIVA a esse respeito.<br><br>

TAXAS E PAGAMENTOS<br>
</p><p align="justify" class="sample-text" style="text-indent: 15px;">O COOPVIVA, através de sua detentora REDE DE CONEXÃO, cobra 5% (Cinco porcento) de comissão pelos serviços prestados de captação de recursos a OSC, conforme previsto neste “Termo de Uso” e previamente aceito pela OSC ao se cadastrar, sobre todos os investimentos realizados através da plataforma.
Caso o INVESTIDOR opte por doar/patrocinar através de cartão de crédito/débito será repassado o valor da taxa negociadacom o COOPVIVAda operadora de cartão por transação concluída e aprovada. Desta forma garantiremos que o valor a ser repassado e definido pelo INVESTIDOR chegue de forma integral a OSC e seus projetos.Em alguns casos, o COOPVIVA oferece condições especiais para seus INVESTIDOREScaso consiga renegociar o valor total da taxa de cobrança podendo variar havendo decréscimos ou acréscimos.
A plataforma gerará automaticamente o recibo de doação/patrocínio para que seja disponibilizado para os INVESTIDORES cadastrados na plataforma. Para que esta ação seja possível a OSC autoriza desde já a utilização específica para emissão dos recibos a assinatura digitalizada do proponente e/ou do responsável legal da OSC.
Tendo em vista que o serviço de meios de pagamento online e de cartões de crédito/débito são independentes do COOPVIVA, o COOPVIVA não dá nenhuma garantia em relação aos pagamentos processados pelo Mercado Pago, nem responde por falhas de cartões de crédito.<br><br>

TRANSFERÊNCIA E PRAZO<br>
</p><p align="justify" class="sample-text" style="text-indent: 15px;">Cabe aoCOOPVIVA a responsabilidade de realizar a cobrança de todos comissionamentos e disponibilizar um painel administrativo online de acesso privado à OSC para controle e transparência de todas transações financeiras que forem intermediadas através do site para o recebimento de doações/patrocínios.
Todos os valores das doações/patrocínio cairão na conta da REDE DE CONEXÃO que fará as operações financeiras destinando os valores para cada conta corrente específica da OSC ou de seus projetos, garantindo desta forma a efetivação e validação do comprovante da transação financeira (DOC, TED, Depósito identificado, etc).
A transferência para as contas respectivas do projeto e/ou OSC terá o prazo máximo de 07 (sete) dias úteis após a efetivação da operação.
Todos os usuários da plataforma COOPVIVA,sendo eles investidor ou OSC, previamente cadastradas, autoriza desde já um representante oficial da empresa REDE DE CONEXÃO a realizar depósitos identificados ou transferências online (TED/DOC) em seu nome nas instituições financeiras, incluindo nestas: CAIXA ECONOMICA FEDERAL, BANDO DO BRASIL, BRADESCO, ITAÚ, SANTANDER, SICCOB, SICREDI, entre outras.<br><br>
PROPRIEDADE INTELECTUAL DE TERCEIROS<br>
</p><p align="justify" class="sample-text" style="text-indent: 15px;">O COOPVIVA respeita a propriedade intelectual de outros, e pedimos aos nossos usuários que façam o mesmo. O COOPVIVA pode, em circunstâncias adequadas e, a seu critério, encerrar as contas de usuários que violem os direitos de propriedade intelectual de terceiros. O Site irá remover materiais que infrinjam acordos de direito autoral quando devidamente notificado de que o conteúdo viola os direitos do autor.
Se você acredita que seu trabalho foi copiado de uma forma que constitua violação de direitos autorais, forneça ao site uma notificação contendo os dados referentes ao registro da obra. Nesses casos, envie a notificação para contato@redeconexao.com.br.
O COOPVIVA oferece a possibilidade de importar conteúdo para o Site. O Site não terá qualquer direito de propriedade sobre seu conteúdo, no entanto, a empresa precisa de licença a seguir para executar o serviço. Você concede à empresa o direito a nível mundial, não exclusivo, isento de royalties e permite que outros agindo em nome do Site a (i) utilizar,hospedar,exibir, e, executar material relativo ao projeto (por exemplo, uso, hospedagem, transmissão, reprodução, transcode, copiar, exibir,distribuir e explorar o conteúdo, juntamente com todos os trabalhos associados a direitos de autor ou metadados, incluindo, sem limitação, fotografias, gráficos e texto descritivo ("Obras") em conexão com o Site), (ii) permitir que outros usuários transmitam, reproduzam, baixem, exibam, distribuam e usem o conteúdo e as obras, e (iii) utilizar e publicar, e permitir que outros usem e publiquem o nome(s) da(s), marcas, sua imagem, e seus materiais pessoais e biográficos e dos membros de seu grupo, no âmbito da prestação do serviço.
Você concorda em pagar todos os royalties e outras importâncias devidas a qualquer pessoa ou entidade, devido à sua apresentação de seu conteúdo para o serviço ou a empresa de hospedagem de conteúdo contempladas por estes Termos de Uso.<br><br>
RECISÃO<br>
</p><p align="justify" class="sample-text" style="text-indent: 15px;">O COOPVIVA poderá rescindir seu acesso a todo ou qualquer parte do Site a qualquer momento, com ou sem motivo, com ou sem aviso prévio, imediatamente, o que pode resultar na perda e destruição de toda a informação associada com a sua filiação. Se você deseja encerrar sua conta, poderá fazê-lo seguindo as instruções no site. Todas as taxas pagas seguir não são reembolsáveis. Todas as disposições dos Termos de Uso, que por sua natureza devem sobreviver ao término após a rescisão, incluindo, sem limitação, as disposições da propriedade, renúncias de garantia, indenização e limitações de responsabilidade.<br><br>
INTEGRAÇÃO E AUTONOMIA<br>
</p><p align="justify" class="sample-text" style="text-indent: 15px;">Os Termos de Uso constituem o acordo completo entre você e o COOPVIVA em relação ao serviço e à utilização do Site, e substitui todas as comunicações anteriores ou contemporâneas e propostas (se oral, escrita ou eletrônica) entre você e o COOPVIVA em relação ao Site. Se qualquer disposição dos Termos de Uso for considerada inválida ou inexeqüível, essa disposição será eliminada ou limitada ao mínimo necessário para que os Termos de Uso permanecerão em pleno vigor e executória. A falha de qualquer das partes o exercício em qualquer aspecto de qualquer direito previsto neste documento não deve ser considerado como uma renúncia de quaisquer outros direitos.<br><br>
DISPOSIÇÕES GERAIS<br>
</p><p align="justify" class="sample-text" style="text-indent: 15px;"> Caso ainda tenha alguma dúvida, a REDE DE CONEXÃO está a disposição para receber e responder seus comentários e perguntas através do canal de ajuda disponibilizado no site www.redeconexao.com.br. Você pode entrar em contato pelo e-mail: contato@redeconexao.com.br. Teremos um enorme prazer em lhe ajudar a esclarecer quaisquer dúvidas.<br>
</p>

</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>



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
					<form id="form-login" name="form-login" action="{{route('login')}}" method="post" role="form" class="form-validate" novalidate>
						@csrf
						<input type="hidden" id="input-login" name="input-login" value="login">
						<div class="form-group mb-3">
							<div class="input-group input-group-alternative">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-email-83"></i></span>
								</div>
								<input id="login-email" name="email" class="form-control" placeholder="E-mail" type="email" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group input-group-alternative">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
								</div>
								<input id="login-senha" name="password" class="form-control" placeholder="Senha" type="password" required>
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