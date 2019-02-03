

    <div class="container" >
            <ul class="nav nav-tabs justify-content-center  ">
                    {{--  <li class="nav-item"><a class="nav-link {{ $tab == 'dashboard' ? 'active' : ''}}" href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard " style="color:#8DDF6A;"></i> <b class="text-dark" >Dashboard</b></a></li> --}}
                    <li class="nav-item"><a class="nav-link {{ $tab == 'perfil' ? 'active' : ''}}"  href="{{route('perfil.create')}}"><i class="fa fa-user"  style="color:#8DDF6A;"></i> <b class="text-dark" >Perfil do Usuário</b></a></li>
                    <li class="nav-item"><a class="nav-link {{ $tab == 'investimentos' ? 'active' : ''}}" href="{{ route('investimentos.index') }}"  ><i class="fa fa-line-chart" style="color:#8DDF6A;" > </i><b class="text-dark" > Investimentos</b> </a></li>

                @cannot('osc')
                    <li class="nav-item"><a class="nav-link {{ $tab == 'investir' ? 'active' : ''}}" href="{{ route('listar.oscs') }}"  ><i class="fa fa-money " style="color:#8DDF6A;"></i><b class="text-dark" > Investir</b></a></li>
                @endcannot

                @can('osc')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ $tab == 'osc' ? 'active' : ''}}" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-institution" style="color:#8DDF6A;"></i><b class="text-dark"> OSC</b></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item {{ $tab == 'osc' ? 'active' : ''}}"  href="{{route('osc.create')}}"> <b class="text-dark">Perfil</b></a>
                            <a class="dropdown-item {{ $tab == 'lista-projetos' ? 'active' : ''}}"  href="{{route('projetos.index')}}"> <b class="text-dark">Projetos</b></a>
                            <a class="dropdown-item {{ $tab == 'ods' ? 'active' : ''}}"  href="{{route('osc.objetivos')}}" ><b class="text-dark">ODS</b></a>
                            <a class="dropdown-item {{ $tab == 'galeria' ? 'active' : ''}}"  href="{{route('galeria.index')}}"> <b class="text-dark">Galeria</b></a>
                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item {{ $tab == 'landing' ? 'active' : ''}}"  href="{{route('osc.landingPage')}}"> <b class="text-dark">Landing Page</b></a>
                            <a class="dropdown-item {{ $tab == 'destaque' ? 'active' : ''}}"  href="{{route('listar.oscs')}}"> <b class="text-dark">Em Destaque</b></a>
                        </div>
                    </li>
                @endcan
            </ul>
    </div>


   