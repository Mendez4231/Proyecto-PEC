<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arboles</title>
    <link rel="stylesheet" href="{{ asset('Estilos.css') }}">
    <link rel="icon" href="{{ asset('favlogo.ico') }}" type="image/x-icon">
</head>
<body>
    @include('partials.header')

    <main class="container">
        <div class="section-header">
            <span class="badge">Selección Técnica • CONAFOR (2022)</span>
            <h1>Catálogo Botánico Recomendado</h1>
            <p>
                Especies arbóreas seleccionadas por su adaptación fisiológica a suelos lacustres salino-sódicos, bajo requerimiento hídrico y capacidad de restauración ecológica en el CBTA 35.
            </p>
        </div>

        <section class="grid-3">
            <!-- Ficha 1: Huizache -->
            <article class="card">
                <div>
                    <img src="{{ asset('huizache.webp') }}" alt="Árbol de Huizache (Vachellia farnesiana)" class="tree-img">
                    <span class="tag-eco">Fijador de Nitrógeno</span>
                    <h3>Huizache</h3>
                    <span class="scientific-name">Vachellia farnesiana (Fam. Fabaceae)</span>
                    <ul class="tree-specs">
                        <li><strong>Tolerancia edáfica:</strong> Alta tolerancia a salinidad, pH alcalino y sequía prolongada.</li>
                        <li><strong>Sistema radicular:</strong> Raíz pivotante profunda capaz de perforar capas compactadas.</li>
                        <li><strong>Función ecológica:</strong> Fijación biológica de nitrógeno atmosférico y enriquecimiento de suelos pobres.</li>
                        <li><strong>Requerimiento hídrico:</strong> Muy bajo (sobrevive con lluvia estacional tras el primer año).</li>
                    </ul>
                </div>
            </article>

            <!-- Ficha 2: Pirul -->
            <article class="card">
                <div>
                    <img src="{{ asset('pirul.jpg') }}" alt="Árbol de Pirul (Schinus molle)" class="tree-img">
                    <span class="tag-eco">Barrera Rompevientos</span>
                    <h3>Pirul</h3>
                    <span class="scientific-name">Schinus molle (Fam. Anacardiaceae)</span>
                    <ul class="tree-specs">
                        <li><strong>Tolerancia edáfica:</strong> Muy resistente a suelos compactados, áridos y moderadamente salinos.</li>
                        <li><strong>Follaje y porte:</strong> Perennifolio de copa amplia (6 a 10 m) que brinda sombra todo el año.</li>
                        <li><strong>Función ecológica:</strong> Formación de barreras rompevientos y control efectivo de erosión eólica.</li>
                        <li><strong>Requerimiento hídrico:</strong> Bajo consumo de agua y alta resistencia a heladas ligeras.</li>
                    </ul>
                </div>
            </article>

            <!-- Ficha 3: Taray -->
            <article class="card">
                <div>
                    <img src="{{ asset('taray.jpg') }}" alt="Árbol de Taray (Tamarix ramosissima)" class="tree-img">
                    <span class="tag-eco">Especie Halófita</span>
                    <h3>Taray</h3>
                    <span class="scientific-name">Tamarix ramosissima (Fam. Tamaricaceae)</span>
                    <ul class="tree-specs">
                        <li><strong>Tolerancia edáfica:</strong> Especie halófita especializada en suelos lacustres con extrema salinidad y sodicidad.</li>
                        <li><strong>Mecanismo adaptativo:</strong> Excreta el exceso de sales a través de glándulas foliares especializadas.</li>
                        <li><strong>Función ecológica:</strong> Estabilización de suelos con alta concentración salina y humedad variable.</li>
                        <li><strong>Requerimiento hídrico:</strong> Adaptable tanto a encharcamiento temporal como a estiaje.</li>
                    </ul>
                </div>
            </article>
        </section>

        <!-- Tabla Comparativa Rápida -->
        <div class="table-wrapper">
            <table class="comp-table">
                <thead>
                    <tr>
                        <th>Especie</th>
                        <th>Nombre Científico</th>
                        <th>Zona Ideal en el Plantel</th>
                        <th>Beneficio Principal</th>
                        <th>Riego Post-Arraigo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Huizache</strong></td>
                        <td><em>Vachellia farnesiana</em></td>
                        <td>Parcelas degradadas y suelos pobres</td>
                        <td>Aporta nitrógeno y materia orgánica</td>
                        <td>Mínimo / Temporal</td>
                    </tr>
                    <tr>
                        <td><strong>Pirul</strong></td>
                        <td><em>Schinus molle</em></td>
                        <td>Perímetros abiertos y linderos</td>
                        <td>Frena tolvaneras y da sombra</td>
                        <td>Bajo</td>
                    </tr>
                    <tr>
                        <td><strong>Taray</strong></td>
                        <td><em>Tamarix ramosissima</em></td>
                        <td>Zonas bajas con costra salina severa</td>
                        <td>Tolera máxima concentración de sales</td>
                        <td>Variable / Muy bajo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <footer class="main-footer">
        Centro de Bachillerato Tecnológico Agropecuario No. 35 "Leona Vicario" - Portal Informativo
    </footer>
</body>
</html>