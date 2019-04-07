<div class="row mt-5">
		<div class="col-xl-3">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0 text-center text-warning">ODS</h3>
                </div>
                <!--<div class="col text-right"> -->
                <!--  <a href="#!" class="btn btn-sm btn-primary">See all</a> -->
                <!--  </div> -->
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Objetivos</th>
                    <th scope="col"></th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                   
					 <td class="text-center font-weight-bold">
                       {{ $metas->unique('objetivo_id')->count() }}
                    </td>	
				   <th scope="row">
                      <div class="icon icon-shape text-white shadow">
                        <i class=""><img src="{{asset('vendor/site/images/agenda2030ODS2.ico')}}" class="navbar-brand-img" alt="..."></i>
                      </div>
                    </th>
                   
                   
                  </tr>
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>

	<div class="col-xl-3">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0 text-center text-warning">ODS</h3>
                </div>
                <!--<div class="col text-right"> -->
                <!--  <a href="#!" class="btn btn-sm btn-primary">See all</a> -->
                <!--  </div> -->
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Metas  </th>
                    <th scope="col"></th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
				   <td class="text-center font-weight-bold">
                      {{ $metas->count() ?? '0' }}
                    </td>
                    <th scope="row">
                      <div class="icon icon-shape text-white shadow">
                        <i class=""><img src="{{asset('vendor/site/images/agenda2030ODS2.ico')}}" class="navbar-brand-img" alt="..."></i>
                      </div>
                    </th>
                   
                  </tr>
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
		
		<div class="col-xl-3">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0 text-center text-success">Projetos</h3>
                </div>
                <!--<div class="col text-right"> -->
                <!--  <a href="#!" class="btn btn-sm btn-primary">See all</a> -->
                <!--  </div> -->
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Enviados</th>
                    <th scope="col"></th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
				  <td class="text-center font-weight-bold">
                      0
                    </td>
                    <th scope="row">
                     <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                        <i class="ni ni-collection"></i>
                      </div>
                    </th>
                    
                   
                  </tr>
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
		
		<div class="col-xl-3">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0 text-center text-success">Projetos</h3>
                </div>
                <!--<div class="col text-right"> -->
                <!--  <a href="#!" class="btn btn-sm btn-primary">See all</a> -->
                <!--  </div> -->
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col " >Aprovados</th>
                    <th scope="col"></th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
				   <td class="text-center font-weight-bold">
                      0
                    </td>
                    <th scope="row">
					
                      <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                        <i class="ni ni-collection"></i>
                      </div>
                    </th>
                   
                   
                  </tr>
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>

        
        



