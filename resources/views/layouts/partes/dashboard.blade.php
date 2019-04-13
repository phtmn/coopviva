<div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-image: url({{asset('vendor/argon-dash/assets/img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-dark opacity-0"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-10">
					<h1 class="display-2 text-white"> # Dashboard</h1>
				</div>				
							
            </div>
			
        </div>
    </div>

	
	
<div class="header bg-gradient-dark pb-4 pt-4 pt-md-4">
    
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center mt--9">
            <div class="row">
                <div class="col-lg-12 col-md-10">

                    
					 
					<div class="ods">
                        @forelse($metas->unique('objetivo_id') as $obj) 
                            <a style="cursor: pointer"><img class="img-thumbnail" style="width:55px; height:55px;" src="{{asset('/vendor/site/images/ods/ods'.$obj->objetivo_id.'.png')}}"></a>
                        @empty 
                            <p class="text-warning font-weight-900">#não há objetivos da Agenda 2030 cadastrados!</p> 
                        @endforelse 
                    </div>
					 <!-- ODS -->

					 
                </div>
            </div>
        </div>
</div>

	
<div class="header bg-gradient-dark pb-6 pt-6 pt-md-6">
    
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center mt--7">
            <div class="row">
                <div class="col-lg-12 col-md-10">

                    
					 
					<div class="ods">
                       
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


