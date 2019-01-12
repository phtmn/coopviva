<div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link {{ $tab == 'dashboard' ? 'active' : ''}}" href="{{ route('dashboard.index') }}">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link {{ $tab == 'perfil' ? 'active' : ''}}"  href="{{route('perfil.create')}}">Perfil</a></li>
            <li class="nav-item"><a class="nav-link {{ $tab == 'investimentos' ? 'active' : ''}}"  href="#investimentos">Investimentos</a></li>
            <!-- <li class="nav-item"><a class="nav-link {{ $tab == 'projetos' ? 'active' : ''}}" href="{{ route('projetos.index') }}">Projetos</a></li> -->
            @can('osc')
            <li class="nav-item dropdown {{ $tab == 'projetos' ? 'active' : ''}}">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Projetos</a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('projetos.create') }}">Cadastrar Projeto</a>
                <a class="dropdown-item" href="{{ route('projetos.index') }}">Meus Projetos</a>
                <!-- <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a> -->
                </div>
            </li>
            <li class="nav-item dropdown {{ $tab == 'osc' ? 'active' : ''}}">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">OSC's</a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('osc.create') }}">Cadastrar OSC</a>
                <a class="dropdown-item" href="{{ route('osc.index') }}">Minhas OSC</a>
                <!-- <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a> -->
                </div>
            </li>
            @endcan
        </ul>
    </div>