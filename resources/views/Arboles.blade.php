<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Árboles recomendados · CBTA 35</title>
    <link rel="stylesheet" href="{{ asset('Estilos.css') }}">
    <link rel="icon" href="{{ asset('img/favlogo.ico') }}" type="image/x-icon">
</head>
<body>
    @include('partials.header')
    <main>
        <section class="hero">
            <span class="eyebrow">Selección de especies</span>
            <h1>Elegir el árbol correcto: el siguiente paso para <em>recuperar</em> nuestro CBTA</h1>
            <p>Después de analizar el suelo del CBTA 35 "Leona Vicario", es momento de seleccionar especies resistentes que puedan prosperar en las áreas afectadas por la construcción del Trolebús y beneficiar a toda la comunidad escolar.</p>
        </section>

        <div class="text">
            <!-- 1. TARJETAS INFORMATIVAS DE ESPECIES CLAVE -->
            <section>
                <h2>Especies clave para las condiciones de Valle de Chalco</h2>
                <p>Debido a la salinidad, compactación y periodos de estiaje en nuestro entorno, estas tres especies destacan por su alta capacidad de adaptación, bajo requerimiento hídrico y resistencia:</p>

                <div class="species-grid">
                    <!-- Tarjeta 1: Huizache -->
                    <article class="species-card">
                        <div class="species-media">
                            <span class="species-badge">Nativa · Fijadora de nitrógeno</span>
                            <img src="{{ asset('img/Huizache.webp') }}" alt="Árbol de Huizache (Vachellia farnesiana)">
                        </div>
                        <div class="species-body">
                            <h3>Huizache</h3>
                            <span class="species-scientific">Vachellia farnesiana</span>
                            <p>Árbol nativo sumamente resistente a la sequía y a suelos pobres o compactados. Sus raíces fijan nitrógeno atmosférico, mejorando la fertilidad del terreno para otras plantas, y sus flores amarillas atraen polinizadores.</p>
                            <ul class="species-meta">
                                <li><strong>Altura promedio:</strong> 4 a 7 metros</li>
                                <li><strong>Ubicación ideal:</strong> Perímetros, bordos y áreas abiertas (evitar pasos estrechos por sus espinas).</li>
                            </ul>
                        </div>
                    </article>

                    <!-- Tarjeta 2: Pirul -->
                    <article class="species-card">
                        <div class="species-media">
                            <span class="species-badge">Sombra · Alta rusticidad</span>
                            <img src="{{ asset('img/pirul.jpg') }}" alt="Árbol de Pirul (Schinus molle)">
                        </div>
                        <div class="species-body">
                            <h3>Pirul</h3>
                            <span class="species-scientific">Schinus molle</span>
                            <p>Especie ampliamente naturalizada en la Cuenca de México. Tolera suelos alcalinos, salinos y con poca agua, proporcionando una copa frondosa de sombra perenne y refugio para aves locales.</p>
                            <ul class="species-meta">
                                <li><strong>Altura promedio:</strong> 8 a 15 metros</li>
                                <li><strong>Ubicación ideal:</strong> Patios amplios y zonas alejadas de banquetas o tuberías.</li>
                            </ul>
                        </div>
                    </article>

                    <!-- Tarjeta 3: Taray -->
                    <article class="species-card">
                        <div class="species-media">
                            <span class="species-badge">Tolerante a salinidad</span>
                            <img src="{{ asset('img/taray.jpg') }}" alt="Arbusto o árbol de Taray (Tamarix spp.)">
                        </div>
                        <div class="species-body">
                            <h3>Taray</h3>
                            <span class="species-scientific">Tamarix spp.</span>
                            <p>Especie especialista en suelos salinos (Solonchak) y terrenos con nivel freático variable como los de Valle de Chalco. Ayuda a controlar la erosión eólica y soporta condiciones extremas donde otros árboles no sobreviven.</p>
                            <ul class="species-meta">
                                <li><strong>Altura promedio:</strong> 3 a 8 metros</li>
                                <li><strong>Ubicación ideal:</strong> Zonas con alta salinidad, franjas de amortiguamiento y bordes del plantel.</li>
                            </ul>
                        </div>
                    </article>
                </div>
            </section>

            <!-- 2. TABLA COMPLEMENTARIA DE ESPECIES NATIVAS -->
            <section class="table">
                <h2>Otras especies recomendadas para el plantel</h2>
                <p>Para lograr diversidad ecológica y evitar monocultivos, se recomienda combinar las especies anteriores con árboles y arbustos nativos de la Cuenca de México:</p>
                <table>
                    <thead>
                        <tr>
                            <th>Especie</th>
                            <th>Tipo</th>
                            <th>Uso recomendado</th>
                            <th>Ventajas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tepozán (<em>Buddleja cordata</em>)</td>
                            <td>Árbol o arbusto nativo</td>
                            <td>Áreas verdes, bordes y zonas de restauración</td>
                            <td>Atrae polinizadores, crece rápido y contribuye a la recuperación ecológica.</td>
                        </tr>
                        <tr>
                            <td>Palo loco (<em>Pittocaulon praecox</em>)</td>
                            <td>Arbusto nativo</td>
                            <td>Zonas degradadas y rocosas</td>
                            <td>Muy resistente a la sequía y útil para iniciar la cobertura vegetal.</td>
                        </tr>
                        <tr>
                            <td>Chapulixtle (<em>Dodonaea viscosa</em>)</td>
                            <td>Arbusto nativo</td>
                            <td>Bordos, jardineras y setos</td>
                            <td>Estabiliza el suelo, retiene humedad y requiere mínimo mantenimiento.</td>
                        </tr>
                        <tr>
                            <td>Encino (<em>Quercus spp.</em>)</td>
                            <td>Árbol nativo</td>
                            <td>Áreas amplias con suelo profundo</td>
                            <td>Favorece la biodiversidad y ofrece refugio permanente a la fauna.</td>
                        </tr>
                        <tr>
                            <td>Fresno (<em>Fraxinus uhdei</em>)</td>
                            <td>Árbol de sombra</td>
                            <td>Áreas amplias y calzadas internas</td>
                            <td>Brinda excelente sombra en zonas con disponibilidad de riego inicial.</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- 3. PRECAUCIONES DE PLANTACIÓN -->
            <section class="list">
                <h2>Especies y ubicaciones que conviene evitar</h2>
                <p>Para proteger la infraestructura escolar y garantizar la seguridad de los estudiantes, es necesario considerar las siguientes restricciones:</p>
                <ul>
                    <li>Evitar árboles de gran porte o raíces superficiales agresivas (como ficus o eucaliptos) cerca de aulas, bardas, tuberías o cables.</li>
                    <li>No plantar especies con espinas (como el huizache) en andadores estrechos o zonas de tránsito estudiantil.</li>
                    <li>Evitar plantas invasoras que desplacen a la flora nativa o demanden riego excesivo en época de sequía.</li>
                </ul>
            </section>

            <!-- 4. PLAN DE REFORESTACIÓN POR ETAPAS -->
            <section class="table">
                <h2>Plan de reforestación por etapas</h2>
                <p>De acuerdo con las recomendaciones de la SEMARNAT, una reforestación exitosa requiere ejecutar seis fases ordenadas:</p>
                <table>
                    <thead>
                        <tr>
                            <th>Etapa</th>
                            <th>Actividad principal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1. Diagnóstico</td>
                            <td>Evaluar el tipo de suelo, salinidad, disponibilidad de agua, exposición solar y espacios libres de infraestructura.</td>
                        </tr>
                        <tr>
                            <td>2. Selección de especies</td>
                            <td>Asignar cada especie según su tolerancia al suelo y su tamaño adulto.</td>
                        </tr>
                        <tr>
                            <td>3. Preparación del terreno</td>
                            <td>Limpiar escombros, deshierbar, abrir cepas de 40 × 40 × 40 cm y enriquecer con composta.</td>
                        </tr>
                        <tr>
                            <td>4. Obtención de planta</td>
                            <td>Adquirir ejemplares sanos en vivero, con tallo lignificado y buen sistema radicular.</td>
                        </tr>
                        <tr>
                            <td>5. Plantación</td>
                            <td>Ejecutar al inicio de la temporada de lluvias (junio-julio) para aprovechar la humedad natural.</td>
                        </tr>
                        <tr>
                            <td>6. Mantenimiento</td>
                            <td>Realizar cajeteo, riego de auxilio en estiaje, control de plagas y reposición de fallas.</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- 5. PLAN OPERATIVO Y PARTICIPACIÓN POR CARRERAS -->
            <section class="list">
                <h2>Ejemplo de plan operativo escolar</h2>
                <p><strong>Meta:</strong> Establecer de 20 a 50 árboles y arbustos en las áreas verdes y perímetros del CBTA 35.</p>
                <ol>
                    <li>Jornada comunitaria de limpieza y retiro de escombro.</li>
                    <li>Trazo y marcaje de cepas respetando distancias entre árboles (mínimo 3 a 5 m).</li>
                    <li>Excavación y mejoramiento del sustrato con composta.</li>
                    <li>Plantación guiada con participación de estudiantes y docentes.</li>
                    <li>Calendarización de riego semanal durante la temporada seca.</li>
                    <li>Bitácora fotográfica y evaluación de supervivencia a los 3, 6 y 12 meses.</li>
                </ol>
            </section>

            <section class="list">
                <h2>Vinculación con las carreras técnicas del CBTA 35</h2>
                <p>El proyecto integra los conocimientos prácticos de las especialidades que se imparten en nuestro plantel:</p>
                <dl>
                    <dt>Técnico Agropecuario:</dt>
                    <dd>Preparación del terreno, manejo de sustratos, apertura de cepas, plantación y mantenimiento agronómico.</dd>
                    <dt>Técnico en Biotecnología:</dt>
                    <dd>Análisis físico-químico del suelo (pH y salinidad), uso de biofertilizantes y monitoreo de desarrollo vegetal.</dd>
                    <dt>Técnico en Apicultura:</dt>
                    <dd>Selección de flora melífera (como huizache y tepozán) para fortalecer el hábitat de abejas y polinizadores locales.</dd>
                    <dt>Técnico en Agroindustrias:</dt>
                    <dd>Aprovechamiento sustentable de subproductos vegetales, elaboración de compostas y gestión ambiental.</dd>
                </dl>
            </section>

            <p class="cta">
                “Seleccionar especies adaptadas a nuestro suelo y darles seguimiento técnico permitirá recuperar las áreas afectadas del CBTA 35, creando un entorno escolar más fresco, biodiverso y sostenible.”
            </p>

            <div class="Cart">
                <a href="{{ route('beneficios') }}">Conocer los beneficios de reforestar</a>
            </div>
        </div>
    </main>
    @include('partials.footer')
</body>
</html>