<header class="main-header">
    <nav class="main-nav" aria-label="Navegación principal">
        <!-- Logo a la izquierda -->
        <a href="{{ route('inicio') }}" class="nav-brand" aria-label="Ir al inicio">
            <img src="{{ asset('img/logo-cbta35.svg') }}" alt="" class="nav-logo" width="48" height="48">
        </a>

        <!-- Links a la derecha -->
        <ul class="nav-links">
            <li><a href="{{ route('inicio') }}" class="nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}">Inicio</a></li>
            <li><a href="{{ route('suelos') }}" class="nav-link {{ request()->routeIs('suelos') ? 'active' : '' }}">Suelos</a></li>
            <li><a href="{{ route('arboles') }}" class="nav-link {{ request()->routeIs('arboles') ? 'active' : '' }}">Árboles recomendados</a></li>
            <li><a href="{{ route('beneficios') }}" class="nav-link {{ request()->routeIs('beneficios') ? 'active' : '' }}">Beneficios</a></li>
        </ul>
    </nav>
</header>