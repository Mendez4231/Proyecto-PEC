<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suelos y problemática · CBTA 35</title>
    <link rel="stylesheet" href="{{ asset('Estilos.css') }}">
    <link rel="icon" href="{{ asset('img/favlogo.ico') }}" type="image/x-icon">
</head>
<body>
    @include('partials.header')
    <main>
        <section class="hero">
            <span class="eyebrow">Diagnóstico del terreno</span>
            <h1>El suelo: la base para <em>reforestar</em></h1>
            <p>Conocer el tipo de suelo y sus capas nos permite elegir las especies adecuadas y aumentar las posibilidades de que los árboles crezcan sanos en el CBTA 35.</p>
        </section>

        <div class="text">
            <section>
                <h2>¿Qué es el suelo?</h2>
                <p>El suelo es la capa superficial de la Tierra donde crecen las plantas y viven muchos organismos. Está formado por minerales, materia orgánica, agua, aire y seres vivos como lombrices, hongos, bacterias e insectos.</p>
                <p>Para reforestar, el suelo es fundamental porque proporciona nutrientes, agua y soporte a las raíces. Un suelo sano favorece el crecimiento de árboles y arbustos, mientras que un suelo degradado, compactado o salino puede dificultar el desarrollo de la vegetación.</p>
            </section>

            <!-- NUEVA SECCIÓN: CAPAS DEL SUELO CON IMAGEN -->
            <section>
                <h2>Capas u horizontes del suelo</h2>
                <p>Si hacemos un corte vertical en el terreno (perfil del suelo), observaremos distintas capas llamadas <strong>horizontes</strong>. Conocer su profundidad es clave antes de excavar las cepas para plantar árboles.</p>
                
                <div class="diagram-split">
                    <div>
                        <ul class="horizons-list">
                            <li><strong>Horizonte O (Materia orgánica):</strong> Capa superficial formada por hojarasca, ramas y restos orgánicos en descomposición. Protege contra la erosión y conserva la humedad.</li>
                            <li><strong>Horizonte A (Capa arable o mantillo):</strong> Zona oscura rica en humus y minerales. Aquí se concentra la mayor actividad biológica y las raíces jóvenes absorben nutrientes.</li>
                            <li><strong>Horizonte B (Subsuelo):</strong> Contiene arcillas, hierro y minerales arrastrados desde la superficie. Da anclaje profundo a las raíces de los árboles adultos.</li>
                            <li><strong>Horizonte C (Material parental):</strong> Fragmentos de roca parcialmente desintegrados con muy poca materia orgánica.</li>
                            <li><strong>Horizonte R (Roca madre):</strong> Capa rocosa continua y dura. Si está muy cerca de la superficie, limita el crecimiento de árboles grandes.</li>
                        </ul>
                    </div>

                    <figure class="figure">
                        <img src="{{ asset('img/Diagrama-Suelo.jpg') }}" alt="Diagrama de los horizontes y capas del suelo: O, A, B, C y R">
                        <figcaption>Perfil del suelo y distribución de sus horizontes desde la superficie hasta la roca madre.</figcaption>
                    </figure>
                </div>
            </section>

            <section class="list">
                <h2>Componentes del suelo</h2>
                <p>Un suelo equilibrado está integrado por cinco elementos esenciales:</p>
                <dl>
                    <dt>Partículas minerales:</dt>
                    <dd>Arena, limo y arcilla; provienen de la descomposición gradual de las rocas.</dd>
                    <dt>Materia orgánica:</dt>
                    <dd>Restos de plantas, hojas, raíces y organismos en descomposición que aportan fertilidad.</dd>
                    <dt>Agua:</dt>
                    <dd>Disuelve los minerales para que las raíces puedan absorber los nutrientes.</dd>
                    <dt>Aire:</dt>
                    <dd>Ocupa los poros del suelo, permitiendo que las raíces respiren y vivan microorganismos benéficos.</dd>
                    <dt>Seres vivos:</dt>
                    <dd>Lombrices, hongos micorrícicos, bacterias e insectos que airean y enriquecen el sustrato.</dd>
                </dl>
            </section>

            <section class="table">
                <h2>Propiedades del suelo</h2>
                <p>Antes de reforestar un área, es importante evaluar ciertas propiedades físicas y químicas. La CONAFOR señala que deben revisarse características como textura, profundidad, pH, pedregosidad y presencia de capas endurecidas.</p>
                <table>
                    <thead>
                        <tr>
                            <th>Propiedad</th>
                            <th>¿Qué significa?</th>
                            <th>Importancia para reforestar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Textura</td>
                            <td>Proporción de arena, limo y arcilla.</td>
                            <td>Determina cuánta agua y nutrientes puede retener el suelo.</td>
                        </tr>
                        <tr>
                            <td>Estructura</td>
                            <td>Forma en que se agrupan las partículas.</td>
                            <td>Un suelo con buena estructura permite que las raíces crezcan y que el agua se infiltre.</td>
                        </tr>
                        <tr>
                            <td>Fertilidad</td>
                            <td>Cantidad de nutrientes disponibles para las plantas.</td>
                            <td>Un suelo fértil favorece el rápido establecimiento de árboles y arbustos.</td>
                        </tr>
                        <tr>
                            <td>pH</td>
                            <td>Nivel de acidez o alcalinidad del suelo.</td>
                            <td>Afecta la disponibilidad de nutrientes; suelos muy alcalinos bloquean minerales clave.</td>
                        </tr>
                        <tr>
                            <td>Drenaje</td>
                            <td>Capacidad del suelo para absorber y evacuar el agua.</td>
                            <td>Un mal drenaje provoca encharcamiento y pudrición de raíces.</td>
                        </tr>
                        <tr>
                            <td>Profundidad</td>
                            <td>Espesor del suelo antes de encontrar roca o tepetate.</td>
                            <td>Un suelo profundo permite raíces pivotantes bien ancladas.</td>
                        </tr>
                        <tr>
                            <td>Salinidad</td>
                            <td>Cantidad de sales solubles acumuladas en el suelo.</td>
                            <td>El exceso de sales impide que las raíces absorban agua ("sequía fisiológica").</td>
                        </tr>
                        <tr>
                            <td>Compactación</td>
                            <td>Dureza del suelo por tránsito peatonal, maquinaria o falta de materia orgánica.</td>
                            <td>Bloquea la entrada de aire, agua y el avance de las raíces.</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="list">
                <h2>Tipos principales de suelo</h2>
                <p>Dependiendo de su composición predominante, encontramos cuatro tipos comunes:</p>
                <ol>
                    <li><strong>Suelo arenoso:</strong> Tiene partículas gruesas y sueltas. Drena el agua muy rápido y se seca con facilidad; requiere aportes constantes de materia orgánica.</li>
                    <li><strong>Suelo limoso:</strong> Partículas de tamaño intermedio. Retiene buena humedad y nutrientes, siendo fértil si cuenta con un drenaje adecuado.</li>
                    <li><strong>Suelo arcilloso:</strong> Partículas muy finas que retienen mucha agua, pero tienden a compactarse, volverse pegajosas en lluvias y agrietarse en sequía.</li>
                    <li><strong>Suelo salino (Solonchak):</strong> Contiene alta concentración de sales. Es característico de zonas lacustres como Valle de Chalco y exige especies tolerantes a la salinidad.</li>
                </ol>
            </section>

            <section>
                <h2>¿Por qué importa para el CBTA 35?</h2>
                <p>El área que se pretende reforestar en el CBTA 35 se encuentra dentro de Valle de Chalco, una zona de antiguo lecho lacustre con suelos que presentan problemas de salinidad, drenaje deficiente y compactación por obras recientes.</p>
                <p>El Atlas de Riesgos del municipio indica que, en la parte plana, predominan suelos franco limosos, franco arcillosos y franco arenosos, con colores oscuros, profundidad variable y presencia de sales.</p>
            </section>

            <section class="list">
                <h2>¿Cómo mejorar el suelo antes de reforestar?</h2>
                <p>Si el terreno del plantel está compactado o pobre en nutrientes, se deben aplicar las siguientes prácticas de acondicionamiento:</p>
                <ul>
                    <li>Retirar basura, cascajo, escombros y maleza invasora.</li>
                    <li>Aflojar o subsolar el suelo compacto con pico y pala sin dañar raíces existentes.</li>
                    <li>Incorporar composta o abono orgánico para mejorar la estructura y reducir el impacto de las sales.</li>
                    <li>Delimitar las áreas de plantación para evitar el pisoteo continuo.</li>
                    <li>Excavar cepas (hoyos) amplias de al menos 40 × 40 × 40 cm para facilitar el enraizamiento inicial.</li>
                    <li>Seleccionar especies rústicas adaptadas a condiciones salinas y semiáridas.</li>
                    <li>Aplicar riegos de auxilio moderados evitando encharcamientos.</li>
                </ul>
                <p>La CONAFOR señala que el composteo mejora la porosidad del suelo y aporta microorganismos que aceleran la supervivencia de las plantas forestales.</p>
            </section>

            <p class="cta">
                “Conocer el suelo es el primer paso para reforestar de manera correcta. En el CBTA 35 ‘Leona Vicario’, identificar las capas y características del terreno nos permitirá elegir especies resistentes y asegurar que nuestros árboles crezcan sanos y fuertes.”
            </p>

            <div class="card">
                <a href="{{ route('arboles') }}" class="btn">Ver árboles recomendados para nuestro CBTA</a>
            </div>
        </div>
    </main>
    @include('partials.footer')
</body>
</html>