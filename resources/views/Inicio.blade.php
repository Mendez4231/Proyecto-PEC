<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEC</title>
    <link rel="stylesheet" href="{{ asset('Estilos.css') }}">
    <link rel="icon" href="{{ asset('favlogo.ico') }}" type="image/x-icon">
</head>
<body >
    @include('partials.header')

    <main class="container">
        <!-- Hero Principal -->
        <section class="hero">
            <span class="badge">Divulgación Ambiental • Valle de Chalco</span>
            <h1>Reforestación Sustentable y Conservación del Suelo en el CBTA 35</h1>
            <p>
                Plataforma educativa para el diagnóstico edafológico de los suelos lacustres salino-sódicos del plantel y la selección técnica de especies arbóreas con tolerancia fisiológica comprobada.
            </p>
            <div style="display: flex; gap: 14px; justify-content: center; flex-wrap: wrap;">
                <a href="{{ route('Arboles') }}" class="btn-primary">Explorar Catálogo Botánico</a>
                <a href="{{ route('Suelos') }}" class="btn-outline" style="border-color: #fff; color: #fff;">Conocer Problemática del Suelo</a>
            </div>
        </section>

        <!-- Indicadores Clave del Proyecto -->
        <section class="stats-bar">
            <div class="stat-item">
                <span class="stat-number">pH &gt; 8.5</span>
                <span class="stat-label">Alcalinidad característica en suelos de antiguo lecho lacustre</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">2 Órdenes</span>
                <span class="stat-label">Suelos predominantes: Vertisoles y Feozems</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">3 Especies</span>
                <span class="stat-label">Árboles halófitos y xerófitos validados por CONAFOR</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">0 Químicos</span>
                <span class="stat-label">Restauración biológica sin correctores costosos</span>
            </div>
        </section>

        <!-- Tarjetas de Navegación -->
        <div class="section-header">
            <h2>Ejes de Consulta Agroecológica</h2>
            <p>Explora cada módulo para planificar las jornadas de arborización en las áreas verdes y terrenos agrícolas del plantel.</p>
        </div>

        <section class="grid-3">
            <article class="card">
                <div>
                    <span class="tag-eco">Módulo 01 • Edafología</span>
                    <h3>Diagnóstico de Suelo</h3>
                    <p>
                        Analiza por qué fallan las reforestaciones convencionales en el CBTA 35 debido a la acumulación de sales de sodio, calcio y magnesio en los horizontes superficiales.
                    </p>
                </div>
                <a href="{{ route('Suelos') }}" class="card-link">Revisar análisis edafológico →</a>
            </article>

            <article class="card">
                <div>
                    <span class="tag-eco">Módulo 02 • Botánica</span>
                    <h3>Catálogo Botánico</h3>
                    <p>
                        Consulta las fichas técnicas del Huizache, Pirul y Taray: especies con adaptación osmótica capaces de sobrevivir al estiaje y fijar nitrógeno natural.
                    </p>
                </div>
                <a href="{{ route('Arboles') }}" class="card-link">Consultar fichas de especies →</a>
            </article>

            <article class="card">
                <div>
                    <span class="tag-eco">Módulo 03 • Sustentabilidad</span>
                    <h3>Impacto Ambiental</h3>
                    <p>
                        Conoce cómo la cobertura arbórea permanente frena las tolvaneras, captura CO₂ y descompacta los terrenos agrietados del plantel.
                    </p>
                </div>
                <a href="{{ route('Beneficios') }}" class="card-link">Ver beneficios ecosistémicos →</a>
            </article>
        </section>
    </main>

    <footer class="main-footer">
        Centro de Bachillerato Tecnológico Agropecuario No. 35 "Leona Vicario" - Portal Informativo
    </footer>
</body>
</html>