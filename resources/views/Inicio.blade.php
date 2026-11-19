<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Proyecto de reforestación del CBTA 35 Leona Vicario: conoce el suelo, las especies y cómo participar.">
    <title>Inicio · Reforestación CBTA 35 Leona Vicario</title>
    <link rel="stylesheet" href="{{ asset('Estilos.css') }}">
    <link rel="icon" href="{{ asset('img/favlogo.ico') }}" type="image/x-icon">
</head>
<body id="top">
    @include('partials.header')

    <main>
        <section class="hero">
            <h1>Somos la generación de Leones que hará florecer el mañana</h1>
            <p>Conoce el suelo de tu plantel, las especies que pueden crecer en él y cómo participar en la reforestación del CBTA 35.</p>
        </section>

        <section class="text">
            <h2>¿Por qué reforestar el CBTA 35?</h2>
            <p>Reforestar no es solo plantar árboles. También es proteger el suelo, recuperar el paisaje, favorecer la biodiversidad y hacer conciencia en la comunidad sobre el cuidado del ambiente.</p>

            <h2>¿Qué es la reforestación?</h2>
            <p>Reforestar es devolver la vegetación a un lugar donde antes la hubo, con las especies adecuadas para ese suelo, ese clima y ese terreno. No se trata de sembrar cualquier árbol: hay que elegir el correcto.</p>

            <h2>¿Qué buscamos con este proyecto?</h2>
            <p>La construcción del Trolebús Elevado sobre la autopista México-Puebla modificó parte del terreno del CBTA 35 Leona Vicario. Por eso, nuestro proyecto busca conocer el tipo de suelo, sus características y las especies que pueden adaptarse mejor para reforestar el área afectada.</p>
            <p>Reforestar contribuirá a recuperar la vegetación, mejorar el suelo y crear un espacio más verde para la comunidad estudiantil, mientras estudiantes de Agroindustrias, Apicultura, Agropecuaria y Biotecnología aplican sus conocimientos en el cuidado ambiental.</p>

            <p class="cta">
                Como estudiante del CBTA 35 Leona Vicario, tienes el poder de transformar tu plantel. Sé parte de la generación que inició este proyecto y deja una huella verde en la comunidad.
            </p>

            <div class="card">
                <h2>Antes de reforestar, debemos conocer el suelo que pisamos.</h2>
                <a href="{{ route('suelos') }}" class="btn">Conoce el suelo de tu plantel</a>
            </div>
        </section>
    </main>
 @include('partials.footer')
</body>
</html>