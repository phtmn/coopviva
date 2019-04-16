<section class="section section-lg bg-success">
<!--<section class="section section-lg bg-default"> -->
<!--<section class="section section-lg bg-success"> -->
<!--<section class="section section-lg bg-success"> -->
      <div class="container-fluid pt-lg pb-100 ">
        <div class="row text-center justify-content-center">
			<h1 class="display-3 text-white font-weight-900 ">Nossos Projetos</h1>
        <div class="col-lg-12">
			 <table class="table text-white">
					@isset($projetos)
				 	<thead class="">
						<tr>
							<th>Título</th>
							<th>Custo (R$)</th>
							<th>Meta de Captação (R$) </th>
							<th></th>
						</tr>
					</thead>
				 	@endisset
				 	<tbody class="font-weight-900">
						@forelse($projetos as $p)
						<tr>
							<td>{{$p->nome_projeto}}</td>
							<td>R$ {{ number_format($p->valor_projeto,2,',','.')}}</td>
							<td>R$ {{ number_format($p->valor_meta,2,',','.')}}</td>
							<td>
							
							<a href="" data-toggle="modal" data-target="#modal-default" class="btn btn-dark" > Quero Investir</a>
								<a href="javascript:void(0)" class="btn btn-dark detalhe-projeto" data-id="{{ $p->id }}" > Saiba Mais</a>
								@auth
									<a href="{{ route('projeto.sendFile',$p->id) }}" class="text-white">Receber Proposta </a>
								@endauth
							</td>

						</tr>
						@empty
							<p class="font-weight-900 text-white">#não há Projetos para exibir!</p>
						@endforelse
						
					</tbody>

			 </table>

        </div>
		<hr color="white">
		
		
		
		</div>
		
		
      </div>
   
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>

	<div class="modal fade" id="kalahun-modal" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
		<div class="modal-dialog  modal-lg"  role="document">

			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title" id="nome">Quem é KA LAHUN? </h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<h3>Resumo</h3>
					<p class="text-justify mt-3 mx-3" style="text-indent: 15px;" id="resumo"></p>
					
					<h3>Objetivos</h3>
					<p class="text-justify mt-3 mx-3" style="text-indent: 15px;" id="objetivos"></p>

					<h3>Público Alvo</h3>
					<p class="text-justify mt-3 mx-3" style="text-indent: 15px;" id="publico_alvo"></p>

					<h3>Impactos Esperados</h3>
					<p class="text-justify mt-3 mx-3" style="text-indent: 15px;" id="impactos_esperados"></p>

					<h3>Contra Partidas</h3>
					<p class="text-justify mt-3 mx-3" style="text-indent: 15px;" id="contra_partidas"></p>

				</div>
			</div>
		</div>
	</div>
</section>
	

@section('js')

	<script>
		$('body').on('click', '.detalhe-projeto', function () {
			var projeto_id = $(this).data('id');
				$.get("{{ url('sim_eu_quero/projeto') }}" +'/' + projeto_id, function (data) {

				$('#kalahun-modal').modal('show');
					$('#nome').html(data.nome_projeto);
					$('#objetivos').html(data.objetivos);
					$('#resumo').html(data.resumo);
					$('#publico_alvo').html(data.publico_alvo);
					$('#impactos_esperados').html(data.impactos_esperados);
					$('#contra_partidas').html(data.contra_partidas);

			})
		});
	</script>


@stop
	
	
	
	
	
	
