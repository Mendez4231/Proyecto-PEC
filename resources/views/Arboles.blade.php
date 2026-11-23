<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arboles</title>
    <link rel="stylesheet" href="{{ asset('Estilos.css') }}">
    <link rel="icon" href="{{ asset('img/favlogo.ico') }}" type="image/x-icon">
</head>
<body>
    @include('partials.header')
    <main>
        <section class="hero">
            <h1>Elegir el árbol correcto: el siguiente paso para recuperar nuestro CBTA</h1>
            <p>No todos los árboles son iguales. Conocer el suelo y el espacio nos permite seleccionar especies que puedan crecer sanas y beneficiar a toda la comunidad escolar.</p>
            <p>Después de conocer el suelo del CBTA 35 "Leona Vicario", es momento de elegir las especies adecuadas para reforestar el área afectada por la construcción del Trolebús. Aquí encontrarás árboles, arbustos y plantas recomendadas para el entorno escolar, así como un plan para plantarlas y cuidarlas.</p>
        </section>

        <section class="text">
            <h2>Árboles recomendados</h2>
            <p>Para el CBTA 35, se recomienda priorizar especies nativas o adaptadas a la Cuenca de México, que resistan las condiciones de Valle de Chalco y no dañen instalaciones escolares. Las especies nativas son importantes porque favorecen la recuperación de la estructura original, la riqueza y la diversidad del ecosistema.</p>

            <section class="table">
                <table>
                    <tr>
                        <th>Especie</th>
                        <th>Tipo</th>
                        <th>Uso recomendado</th>
                        <th>Ventajas</th>
                    </tr>
                    <tr>
                        <td>Tepozán (Buddleja cordata)</td>
                        <td>Árbol o arbusto nativo</td>
                        <td>Áreas verdes, bordes y zonas de restauración</td>
                        <td>Atrae polinizadores, es resistente y contribuye a la recuperación ecológica.</td>
                    </tr>
                    <tr>
                        <td>Palo loco (Pittocaulon praecox)</td>
                        <td>Arbusto o árbol pequeño nativo</td>
                        <td>Zonas degradadas y áreas de restauración</td>
                        <td>Resistente y útil para recuperar suelos y vegetación.</td>
                    </tr>
                    <tr>
                        <td>Chapulixtle (Dodonaea viscosa)</td>
                        <td>Arbusto nativo</td>
                        <td>Bordos, jardineras y zonas con suelo degradado</td>
                        <td>Ayuda a estabilizar el suelo y requiere poco mantenimiento.</td>
                    </tr>
                    <tr>
                        <td>Pirul (Schinus molle)</td>
                        <td>Árbol de sombra</td>
                        <td>Patios amplios y zonas abiertas</td>
                        <td>Proporciona sombra y ha sido utilizado en reforestaciones de la región.</td>
                    </tr>
                    <tr>
                        <td>Encino (Quercus spp.)</td>
                        <td>Árbol nativo</td>
                        <td>Áreas amplias con espacio suficiente</td>
                        <td>Favorece la biodiversidad y ofrece refugio a fauna.</td>
                    </tr>
                    <tr>
                        <td>Fresno (Fraxinus spp.)</td>
                        <td>Árbol de sombra</td>
                        <td>Áreas amplias y caminos internos</td>
                        <td>Puede dar sombra, pero debe elegirse según disponibilidad y condiciones del predio.</td>
                    </tr>
                </table>
            </section>

            <section class="list">
                <h2>Especies que conviene evitar</h2>
                <p>No se recomienda plantar especies con raíces agresivas, espinas peligrosas, frutos que manchen mucho o copas demasiado grandes cerca de aulas, bardas, tuberías o cables.</p>
                <ul>
                    <li>Evitar árboles muy grandes en banquetas estrechas.</li>
                    <li>No plantar cerca de tuberías, drenajes o cimientos.</li>
                    <li>Evitar especies con espinas en zonas de paso estudiantil.</li>
                    <li>No usar plantas invasoras que puedan desplazar a las especies nativas.</li>
                    <li>Evitar especies que requieran mucho riego si el área no cuenta con agua suficiente.</li>
                </ul>
</section>
            <section class="list">
                <h2>Plan de reforestación</h2>
                <p>El plan debe realizarse por etapas para asegurar que los árboles sobrevivan y crezcan sanos. SEMARNAT señala que la reforestación debe incluir la selección del sitio, la preparación del terreno, la plantación y el mantenimiento posterior.</p>
                <table>
                    <tr>
                        <th>Etapa</th>
                        <th>Actividad</th>
                    </tr>
                    <tr>
                        <td>1. Diagnóstico</td>
                        <td>Observar el área, el tipo de suelo, la disponibilidad de agua, la cantidad de sol y las zonas que necesitan sombra.</td>
                    </tr>
                    <tr>
                        <td>2. Selección de especies</td>
                        <td>Elegir árboles nativos o adaptados, considerando tamaño adulto, raíces, sombra y mantenimiento.</td>
                    </tr>
                    <tr>
                        <td>3. Preparación del terreno</td>
                        <td>Limpiar basura, retirar maleza, abrir hoyos y mejorar el suelo con composta o tierra vegetal si es necesario.</td>
                    </tr>
                    <tr>
                        <td>4. Producción o compra de plantas</td>
                        <td>Conseguir plantas en vivero, preferentemente nativas, sanas y del tamaño adecuado.</td>
                    </tr>
                    <tr>
                        <td>5. Plantación</td>
                        <td>Realizarla durante la temporada de lluvias, cuando el suelo tiene humedad.</td>
                    </tr>
                    <tr>
                        <td>6. Mantenimiento</td>
                        <td>Regar, deshierbar, proteger los árboles, revisar plagas y reponer plantas que no sobrevivan.</td>
                    </tr>
                </table>
            </section>

            <section class="list">
                <h2>Ejemplo de plan escolar</h2>
                <p>Meta: plantar de 20 a 50 árboles y arbustos en áreas verdes del CBTA 35.</p>
                <p>Actividades:</p>
                <ol>
                    <li>Jornada de limpieza.</li>
                    <li>Medición del área.</li>
                    <li>Selección de especies.</li>
                    <li>Preparación de hoyos.</li>
                    <li>Plantación con participación estudiantil.</li>
                    <li>Riego semanal durante los primeros meses.</li>
                    <li>Registro fotográfico del crecimiento.</li>
                    <li>Evaluación de supervivencia después de 3, 6 y 12 meses.</li>
                </ol>
            </section>

            <section class="list">
                <h2>Participación de las carreras</h2>
                <dl>
                    <dt>Agropecuario:</dt>
                    <dd>puede apoyar en el manejo del suelo, la producción de plantas y el cuidado de las áreas verdes.</dd>
                    <dt>Biotecnología:</dt>
                    <dd>puede participar en la selección de especies, el análisis del suelo y el monitoreo del crecimiento.</dd>
                    <dt>Apicultura:</dt>
                    <dd>puede promover la protección de polinizadores mediante plantas melíferas y flores.</dd>
                    <dt>Agroindustrias:</dt>
                    <dd>puede vincular el proyecto con la producción, transformación y aprovechamiento responsable de recursos naturales.</dd>
                </dl>
                <p>El CBTA 35 ofrece carreras técnicas como Agropecuario, Biotecnología, Apicultura y Agroindustrias, por lo que el proyecto puede vincularse directamente con la formación técnica y ambiental de los estudiantes.</p>
            </section>

            <p>Elegir las especies adecuadas y seguir un plan de reforestación permitirá recuperar el área afectada, mejorar el entorno escolar y crear un espacio más verde, saludable y sostenible para toda la comunidad del CBTA 35.</p>

            <div class="Cart" >
                <a href="{{ route('beneficios') }}" >Conocer los beneficios de reforestar</a>
            </div>
        </section>
    </main>
    @include('partials.footer')
</body>
</html>