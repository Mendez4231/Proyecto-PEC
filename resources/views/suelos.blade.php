<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suelos y problematica</title>
    <link rel="stylesheet" href="{{ asset('Estilos.css') }}">
    <link rel="icon" href="{{ asset('img/favlogo.ico') }}" type="image/x-icon">
</head>
<body>
    @include('partials.header')
    <main>
        <section class="hero">
            <h1>El suelo: la base para reforestar</h1>
            <p>Conocer el tipo de suelo nos permite elegir las especies adecuadas y aumentar las posibilidades de que los árboles crezcan sanos.</p>
       </section>
       <section class="text">
        <h2>¿Qué es el suelo?</h2>
        <p>El suelo es la capa superficial de la Tierra donde crecen las plantas y viven muchos organismos. Está formado por minerales, materia orgánica, agua, aire y seres vivos como lombrices, hongos, bacterias e insectos.</p>
        <p>Para reforestar, el suelo es fundamental porque proporciona nutrientes, agua y soporte a las raíces. Un suelo sano favorece el crecimiento de árboles, arbustos y plantas, mientras que un suelo degradado, compactado o salino puede dificultar el desarrollo de la vegetación.</p>
        <section class="list">
        <h2>Componentes del suelo</h2>
        <p>El suelo está formado por cuatro componentes principales:</p>
        <dl>
            <dt>Partículas minerales:</dt>
            <dd>arena, limo y arcilla; provienen de la descomposición de rocas.</dd>
            <dt>Materia orgánica:</dt>
            <dd>restos de plantas, hojas, raíces y organismos en descomposición.</dd>
            <dt>Agua:</dt>
            <dd>necesaria para que las plantas absorban nutrientes.</dd>
            <dt>Aire:</dt>
            <dd>permite que las raíces respiren y que vivan organismos benéficos.</dd>
            <dt>Seres vivos:</dt>
            <dd>lombrices, hongos, bacterias e insectos que ayudan a descomponer materia orgánica y mejorar el suelo.</dd>
       </dl>
        </section>
        <section class="table">
            <h2>Propiedad del suelo</h2>
            <p>Antes de reforestar un área, es importante observar algunas propiedades del suelo. La Conafor señala que deben revisarse características como textura, profundidad, pH, pedregosidad y presencia de capas endurecidas.</p>
            <table>
                <tr>
                    <th>Propiedad</th>
                    <th>¿Que significa?</th>
                    <th>Importancia para reforestar</th>
                </tr>
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
                    <td>Un suelo fértil favorece el crecimiento de árboles y plantas.</td>
                </tr>
                <tr>
                    <td>pH</td>
                    <td>Nivel de acidez o alcalinidad del suelo.</td>
                    <td>Afecta la disponibilidad de nutrientes para las plantas.</td>
                </tr>
                <tr>
                    <td>Drenaje</td>
                    <td>Capacidad del suelo para absorber y eliminar el agua.</td>
                    <td>Un mal drenaje puede causar encharcamiento y dañar las raíces.</td>
                </tr>
                <tr>
                    <td>Profundidad</td>
                    <td>Espesor del suelo antes de encontrar roca u otra capa dura.</td>
                    <td>Un suelo más profundo permite raíces más desarrolladas.</td>
                </tr>
                <tr>
                    <td>Salinidad</td>
                    <td>Cantidad de sales disueltas en el suelo.</td>
                    <td>El exceso de sales puede dificultar el crecimiento de muchas especies.</td>
                </tr>
                <tr>
                    <td>Compactacion</td>
                    <td>Dureza del suelo por pisadas, maquinaria o falta de materia orgánica.</td>
                    <td>Dificulta la entrada de aire, agua y el crecimiento de raíces.</td>
                </tr>
            </table>
       </section>
       <section class="list">
        <h2>Tipos de suelos</h2>
        <p>Existen muchos tipos de suelo:</p>
        <ol>
            <li>Suelo arenoso:Tiene mucha arena. Es suelto, permite que el agua pase rápido y se seca con facilidad. Puede tener pocos nutrientes, por lo que suele necesitar materia orgánica.</li>
            <li>Suelo limoso:Tiene partículas más finas que la arena, pero más gruesas que la arcilla. Retiene humedad y nutrientes, por lo que puede ser bueno para plantas si tiene buen drenaje.</li>
            <li>Suelo arcilloso:Contiene mucha arcilla. Retiene mucha agua, pero puede compactarse y dificultar el drenaje. Cuando está seco puede endurecerse y cuando está húmedo puede volverse pegajoso.</li>
            <li>Suelo salino:Contiene una cantidad alta de sales. Puede afectar el crecimiento de muchas plantas porque dificulta la absorción de agua y nutrientes. En Valle de Chalco, este tipo de suelo se relaciona con el Solonchak.</li>
            <li></li>


        </ol>

       </section>
    




       </section>









    </main>
    @include('partials.footer')
</body>
</html>