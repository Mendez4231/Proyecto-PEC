<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beneficos </title>
    <link rel="stylesheet" href="{{ asset('Estilos.css') }}">
    <link rel="icon" href="{{ asset('favlogo.ico') }}" type="image/x-icon">
</head>
<body>
 @include('partials.header')

    <main class="container">
        <div class="section-header">
            <span class="badge">Restauración Ecológica</span>
            <h1>Impacto Ambiental y Beneficios Ecosistémicos</h1>
            <p>
                La arborización estratégica con especies adaptadas transforma gradualmente las propiedades físicas, químicas y microclimáticas de los terrenos del CBTA 35.
            </p>
        </div>

        <section class="grid-2">
            <article class="card">
                <div>
                    <span class="tag-eco">Regulación Hídrica</span>
                    <h3>1. Retención de Humedad y Control de Grietas</h3>
                    <p>
                        La sombra proyectada por las copas reduce la evaporación directa del suelo, evitando que las sales suban por capilaridad a la superficie y disminuyendo el agrietamiento de los Vertisoles en época seca.
                    </p>
                </div>
            </article>

            <article class="card">
                <div>
                    <span class="tag-eco">Protección Eólica</span>
                    <h3>2. Control de Tolvaneras en Áreas Abiertas</h3>
                    <p>
                        Las cortinas arbóreas de Pirul y Huizache reducen la velocidad del viento a nivel del suelo, frenando la erosión eólica y mejorando la calidad del aire dentro de las instalaciones escolares.
                    </p>
                </div>
            </article>

            <article class="card">
                <div>
                    <span class="tag-eco">Mitigación Climática</span>
                    <h3>3. Captura de Carbono y Regulación Térmica</h3>
                    <p>
                        La vegetación perenne fija dióxido de carbono (CO₂) atmosférico en su biomasa aérea y radicular, además de amortiguar las temperaturas extremas en las parcelas agropecuarias.
                    </p>
                </div>
            </article>

            <article class="card">
                <div>
                    <span class="tag-eco">Rehabilitación Edáfica</span>
                    <h3>4. Enriquecimiento Orgánico y Descompactación</h3>
                    <p>
                        La caída de hojarasca y la fijación biológica de nitrógeno del Huizache incrementan la materia orgánica, favoreciendo la actividad microbiana y descompactando el suelo a mediano plazo.
                    </p>
                </div>
            </article>
        </section>

        <!-- Recomendaciones para la comunidad escolar -->
        <section class="info-banner" style="flex-direction: column; align-items: flex-start;">
            <h3 style="color: #14532d; font-size: 18px;">Buenas Prácticas para Jornadas de Reforestación en el CBTA 35:</h3>
            <ul style="margin-left: 20px; color: #374151; font-size: 15px; line-height: 1.7;">
                <li><strong>Época de plantación:</strong> Realizar el trasplante al inicio de la temporada de lluvias (junio-julio) para asegurar el anclaje radicular antes del estiaje.</li>
                <li><strong>Cajeteo y acolchado:</strong> Formar cajetes de captación de agua de lluvia y cubrir con hojarasca o rastrojo para frenar la evaporación superficial.</li>
                <li><strong>Riego de auxilio:</strong> Aplicar riegos espaciados pero profundos durante el primer año para estimular raíces pivotantes hacia el subsuelo húmedo.</li>
            </ul>
        </section>

        <!-- Botones de cierre -->
        <div style="text-align: center; margin-top: 40px; display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
            <a href="{{ route('Inicio') }}" class="btn-outline">← Volver al Inicio</a>
            <a href="{{ route('Arboles') }}" class="btn-green">Explorar Catálogo Botánico</a>
        </div>
    </main>

    <footer class="main-footer">
        Centro de Bachillerato Tecnológico Agropecuario No. 35 "Leona Vicario" - Portal Informativo
    </footer>
</body>
</html>