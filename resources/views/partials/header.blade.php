<header class="main-header">
    <nav class="main-nav">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="nav-brand">
            <img 
                src="{{ asset('favlogo.ico') }}" 
                alt="Logotipo CBTA 35" 
                class="nav-logo"
            >
        </a>

        <!-- enlaces -->
        <div class="nav-links">
            <a href="{{ route('Inicio') }}" class="nav-link {{ request()->routeIs('Inicio') ? 'active' : '' }}">
                Inicio
            </a>
            <a href="{{ route('Suelos') }}" class="nav-link {{ request()->routeIs('Suelos') ? 'active' : '' }}">
                Suelos y Problemática
            </a>
            <a href="{{ route('Arboles') }}" class="nav-link {{ request()->routeIs('Arboles') ? 'active' : '' }}">
                Árboles recomendados
            </a>
            <a href="{{ route('Beneficios') }}" class="nav-link {{ request()->routeIs('Beneficios') ? 'active' : '' }}">
                Beneficios
            </a>
        </div>
    </nav>
</header>