@extends('investidor.painel')

@section('conteudo_painel')
    <div class="text-center mt-5">
        <h3>bem vindo(a), {{ auth()->user()->apelido }}
            <span class="font-weight-light"></span>
        </h3>
       
        <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i> {{auth()->user()->email}}</div>
		
    </div>
	
	
	<div class="col-lg-12 mt-5 mt-lg-0">
              <!-- Menu -->
              <div class="mb-3">
                
              </div>
              <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-text" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-tab" data-toggle="tab" href="#tabs-text-1" role="tab" aria-controls="tabs-text-1" aria-selected="true">Investidor Social</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-2-tab" data-toggle="tab" href="#tabs-text-2" role="tab" aria-controls="tabs-text-2" aria-selected="false">Voluntário Ativo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-3-tab" data-toggle="tab" href="#tabs-text-3" role="tab" aria-controls="tabs-text-3" aria-selected="false">Voluntário Passivo
                </ul>
              </div>
              <div class="card shadow">
                <div class="card-body">
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
                      <p class="description"> O cadastro como investidor é possível realizar investimentos (doação ou patrocínio PESSOA FISICA OU JURÍDICA em instituições ou projetos cadastrados em nossa base. Ou você pode, também, tornar-se um voluntário.</p>
                      
                    </div>
                    <div class="tab-pane fade" id="tabs-text-2" role="tabpanel" aria-labelledby="tabs-text-2-tab">
                      <p class="description"> -	Contabilizar suas horas dedicadas a instituição. -	Registrar sua ações e resultados. -	Consultar instituições que comunguem com seus valores e necessitam de suas habilidades . -	Participar do banco de ações positivas. -	Fazer doações de bens e serviços.</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-text-3" role="tabpanel" aria-labelledby="tabs-text-3-tab">
                      <p class="description"> -	Pesquisar Organizações no mundo inteiro. -	Contribuir  com uma causa sem sair de casa e que encaixe com seu tempo disponível . -	Contabilizar sua dedicação a organização ou projeto especifico. -	Trocar experiências e expertise. -	Gerar uma rede de relacionamento para o bem. - 	Divulgar para seus familiares, amigos, empresas e pontuar  por engajamento.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection