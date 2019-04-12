<div class="header bg-gradient-dark pb-8 pt-8 pt-md-8">
    
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-10">

                    <h1 class="display-2 text-white">{{$osc->nome_fantasia}}</h1>
                    <p class="text-white mt-0 mb-2">Olá, {{auth()->user()->name}}</p>
{{--                    <div class="ods">--}}
{{--                        @forelse($metas->unique('objetivo_id') as $obj)--}}
{{--                            <a style="cursor: pointer"><img class="img-thumbnail" style="width:55px; height:55px;" src="{{asset('/vendor/site/images/ods/ods'.$obj->objetivo_id.'.png')}}"></a>--}}
{{--                        @empty--}}
{{--                            <p class="text-warning font-weight-900">#não há objetivos da Agenda 2030 cadastrados!</p>--}}
{{--                        @endforelse--}}
{{--                    </div>--}}
					<div class="ods">
                        @forelse($metas->unique('objetivo_id') as $obj) 
                            <a style="cursor: pointer"><img class="img-thumbnail" style="width:55px; height:55px;" src="{{asset('/vendor/site/images/ods/ods'.$obj->objetivo_id.'.png')}}"></a>
                        @empty 
                            <p class="text-warning font-weight-900">#não há objetivos da Agenda 2030 cadastrados!</p> 
                        @endforelse 
                    </div>
					 <!-- ODS -->

					 @include('layouts.partes.dashboard.sessao1')
					
					  <!-- ODS -->
                       @include('layouts.partes.dashboard.sessao2')
					 
					  <!-- ODS -->
					 @include('layouts.partes.dashboard.sessao3')
                </div>
            </div>
        </div>
</div>
