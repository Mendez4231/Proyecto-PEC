<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beneficios</title>
    <link rel="stylesheet" href="{{ asset('Estilos.css') }}">
    <link rel="icon" href="{{ asset('img/favlogo.ico') }}" type="image/x-icon">
</head>
<body>
    @include('partials.header')
    <main>
        <section class="hero">
            <h1>Reforestar es sembrar bienestar para nuestro CBTA</h1>
            <p>Cada árbol plantado mejora el aire, protege el suelo, da sombra y crea un espacio mejor para aprender y convivir.</p>
            <p>Reforestar el área afectada por el Trolebús en el CBTA 35 "Leona Vicario" no solo recuperará la vegetación: también traerá beneficios ambientales, educativos y sociales para toda la comunidad escolar.</p>
        </section>

        <section class="text">
            <section class="list">
                <h2>Beneficios ambientales</h2>
                <ul>
                    <li>Mejora la calidad del aire al capturar CO2 y liberar oxígeno.</li>
                    <li>Reduce la erosión del suelo.</li>
                    <li>Favorece la infiltración del agua de lluvia.</li>
                    <li>Disminuye la temperatura mediante sombra.</li>
                    <li>Ofrece refugio y alimento para aves, insectos y polinizadores.</li>
                    <li>Contribuye a la captura de carbono.</li>
                </ul>
                <p>Los árboles reducen las altas temperaturas, disminuyen los escurrimientos de agua pluvial y evitan la erosión del suelo gracias a sus raíces.</p>
            </section>

            <section class="list">
                <h2>Beneficios para la escuela</h2>
                <ul>
                    <li>Crea espacios más frescos y agradables.</li>
                    <li>Mejora la imagen y el paisaje del plantel.</li>
                    <li>Reduce el calor en patios y zonas de espera.</li>
                    <li>Puede disminuir el ruido exterior.</li>
                    <li>Convierte áreas vacías en espacios útiles y bonitos.</li>
                    <li>Favorece la convivencia y el orgullo escolar.</li>
                </ul>
                <p>Los árboles en zonas urbanas filtran el aire cálido, refrescan patios y paredes, y pueden reducir el uso de aire acondicionado.</p>
            </section>

            <section class="list">
                <h2>Beneficios educativos</h2>
                <ul>
                    <li>Permite aprender sobre biología, ecología, suelo, agua y cambio climático.</li>
                    <li>Desarrolla responsabilidades mediante el cuidado de las plantas.</li>
                    <li>Promueve el trabajo en equipo.</li>
                    <li>Fomenta la conciencia ambiental.</li>
                    <li>Permite realizar prácticas, investigaciones y registros de crecimiento.</li>
                </ul>
                <p>Los árboles contribuyen a tener aire puro, suelos sanos y fértiles, agua limpia y suficiente, además de proteger la biodiversidad y ofrecer refugio a fauna silvestre.</p>
            </section>

            <section class="list">
                <h2>Beneficios sociales</h2>
                <ul>
                    <li>Involucra a estudiantes, docentes, familias y personal del plantel.</li>
                    <li>Fortalece la colaboración entre la comunidad escolar.</li>
                    <li>Genera sentido de pertenencia.</li>
                    <li>Inspira a otras escuelas a realizar proyectos similares.</li>
                </ul>
            </section>

            <section class="list">
                <h2>Beneficios para las carreras</h2>
                <dl>
                    <dt>Agropecuario:</dt>
                    <dd>manejo del suelo, producción de plantas y cuidado de áreas verdes.</dd>
                    <dt>Biotecnología:</dt>
                    <dd>análisis del suelo, selección de especies y monitoreo del crecimiento.</dd>
                    <dt>Apicultura:</dt>
                    <dd>protección de polinizadores y plantas melíferas.</dd>
                    <dt>Agroindustrias:</dt>
                    <dd>producción, transformación y aprovechamiento responsable de recursos naturales.</dd>
                </dl>
            </section>

            <p>Reforestar nuestro CBTA es sembrar bienestar, educación y un futuro más verde. Cada árbol plantado es una oportunidad para mejorar nuestro entorno y dejar una huella positiva en nuestra comunidad.</p>

            <div class="Cart" >
                <a href="{{ route('inicio') }}" >Sé parte de la generación que inició este proyecto</a>
            </div>
        </section>
    </main>
    @include('partials.footer')
</body>
</html>