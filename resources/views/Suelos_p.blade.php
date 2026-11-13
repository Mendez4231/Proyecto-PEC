<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suelos y problematica</title>
    <link rel="stylesheet" href="{{ asset('Estilos.css') }}">
    <link rel="icon" href="{{ asset('favlogo.ico') }}" type="image/x-icon">
</head>
<body>
    @include('partials.header')

    <main class="container">
        <div class="section-header">
            <span class="badge">Diagnóstico Edafológico</span>
            <h1>Características Edafológicas del Suelo Lacustre</h1>
            <p>
                Los terrenos del CBTA 35 se asientan sobre una zona de antiguo vaso lacustre en el Valle de Chalco. La evaporación intensa y el drenaje deficiente concentran sales solubles de <strong>sodio (Na⁺), calcio (Ca²⁺) y magnesio (Mg²⁺)</strong> en la superficie, generando alcalinidad y estrés hídrico (INECC, 2021).
            </p>
        </div>

        <!-- Comparativa Vertisoles vs Feozems -->
        <section class="grid-2" style="margin-bottom: 36px;">
            <article class="card">
                <div>
                    <span class="tag-eco">Orden Edáfico 1</span>
                    <h3>Suelos Vertisoles</h3>
                    <p>
                        Suelos con alto contenido de arcillas expandibles. En temporada de lluvias se saturan y vuelven pegajosos, mientras que en época de sequía (estiaje) se contraen formando <strong>grietas anchas y profundas</strong> que rompen las raíces de plantines jóvenes.
                    </p>
                </div>
            </article>

            <article class="card">
                <div>
                    <span class="tag-eco">Orden Edáfico 2</span>
                    <h3>Suelos Feozems</h3>
                    <p>
                        Suelos oscuros ricos en materia orgánica en su capa superficial, pero que en zonas de transición lacustre presentan fases salino-sódicas. Cuando pierden su cubierta vegetal sufren <strong>erosión eólica acelerada</strong> y compactación superficial.
                    </p>
                </div>
            </article>
        </section>

        <!-- Diagrama Visual de Horizontes del Suelo -->
       <!-- Diagrama Visual de Horizontes del Suelo -->
        <section class="diagram-box">
            <h2 style="color: #14532d; font-size: 22px; margin-bottom: 8px;">Perfil y Horizontes del Suelo en el Plantel</h2>
            <p style="font-size: 14px; color: #4b5563; margin-bottom: 20px;">
                Distribución vertical de sales y humedad en el antiguo lecho lacustre:
            </p>

            <!-- Imagen del diagrama guardada en public/img/diagrama-suelo.png -->
            <img 
                src="{{ asset('Diagrama-Suelo.jpg') }}" 
                alt="Diagrama ilustrativo de las capas y horizontes del suelo lacustre salino-sódico en el CBTA 35"
                style="max-width: 100%; max-height: 380px; border-radius: 10px; margin: 0 auto 20px auto; display: block;"
            >

            <!-- Leyenda detallada de las capas -->
            <div class="soil-layers">
                <div class="layer layer-top">
                    <strong>Horizonte Superficial (0 - 25 cm): Costra Salina y Zona de Evaporación</strong>
                    <span>Alta acumulación de sales de sodio y pH alcalino. Provoca estrés osmótico inmediato en árboles no adaptados.</span>
                </div>
                <div class="layer layer-mid">
                    <strong>Horizonte Subsuperficial (25 - 70 cm): Zona Radicular Compactada</strong>
                    <span>Arcillas dispersas con baja permeabilidad. Se agrieta severamente en época seca, asfixiando raíces débiles.</span>
                </div>
                <div class="layer layer-deep">
                    <strong>Horizonte Profundo (&gt; 70 cm): Subsuelo Lacustre Húmedo</strong>
                    <span>Reserva de humedad residual aprovechable únicamente por especies con raíces pivotantes profundas (Huizache, Pirul y Taray).</span>
                </div>
            </div>
        </section>

        <!-- 3 Factores Críticos -->
        <div class="section-header" style="margin-top: 40px;">
            <h2>Factores Limitantes para la Reforestación Convencional</h2>
        </div>

        <section class="grid-3">
            <article class="card">
                <div>
                    <span class="tag-alert">Limitante Químico</span>
                    <h3>Salinidad y Sodicidad</h3>
                    <p>
                        El exceso de sales eleva la presión osmótica del suelo; aunque exista agua, las raíces de especies convencionales no pueden absorberla ("sequía fisiológica").
                    </p>
                </div>
            </article>

            <article class="card">
                <div>
                    <span class="tag-alert">Limitante Físico</span>
                    <h3>Compactación y Agrietamiento</h3>
                    <p>
                        El sodio dispersa las partículas de arcilla, cerrando los poros del suelo, impidiendo la oxigenación radicular y provocando grietas en estiaje.
                    </p>
                </div>
            </article>

            <article class="card">
                <div>
                    <span class="tag-alert">Limitante Ambiental</span>
                    <h3>Erosión Hídrica y Eólica</h3>
                    <p>
                        Durante los meses secos, el viento arrastra la capa superficial desprotegida generando tolvaneras y pérdida progresiva de fertilidad.
                    </p>
                </div>
            </article>
        </section>

        <section class="info-banner">
            <p>
                <strong>Conclusión Técnica:</strong> Mejorar químicamente el suelo del plantel resulta costoso e insostenible. La estrategia recomendada por CONAFOR (2022) e INECC (2021) es introducir especies arbóreas tolerantes.
            </p>
            <a href="{{ route('Arboles') }}" class="btn-green">Ver Árboles Recomendados →</a>
        </section>
    </main>

    <footer class="main-footer">
        Centro de Bachillerato Tecnológico Agropecuario No. 35 "Leona Vicario" - Portal Informativo
    </footer>
</body>
</html>