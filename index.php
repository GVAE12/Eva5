 <!DOCTYPE html>
 <html lang="es-mx">
 <head>
 <meta charset="UTF-8">
 <title>IntroPhp7 Grupo X__</title>
 <link rel="stylesheet" href="estilos.css">
 <link rel="stylesheet" href="menu.css">
 <link rel="stylesheet" href="problemas.css">
 <link href="https://fonts.googleapis.com/css?family=Rambla"
 rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Comfortaa"
 rel="stylesheet">
 <!--Script de MathJax-->
 <script
 src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
 <script id="MathJax-script" async
 src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></scr
 ipt>
 </head>
 <body>
 <section class="wrapper">
 <header>
 <h1 class="logo"><a href="index.html">StemPhp</a></h1>
 </header>
 <section id="contenedor">
 <section class="problema">
 3
<h2>Problema: Calcular energía generada por un panel
 fotovoltaico</h2>
 <p>Descripción:</p>
 <p>Un panel fotovoltaico tiene dimensiones de \(6 \,
 \text{m} \times 3 \, \text{m}\), un rendimiento del 20% y está expuesto
 a radiación solar durante 5 horas con un coeficiente de radiación de
 \(0.9 \, \text{kCal/m}^2\). Se necesita calcular:</p>
 <ul>
 <li>La energía generada en \(kCal\).</li>
 <li>La conversión a \(kWh\).</li>
 </ul>
 </section>
 <section class="formulas">
 <h2>Fórmulas:</h2>
 <ul>
 <li>Energía generada (\(Q\)): \(Q = k \cdot s \cdot t
 \cdot \text{rendimiento}\)</li>
 <li>Conversión a \(kWh\): \(1 \, \text{kWh} = 860 \,
 \text{kCal}\)</li>
 </ul>
 </section>
 <section class="datos">
 <h2>Datos:</h2>
 <ul>
 <li>Coeficiente de radiación (\(k\)): \(0.9 \,
 \text{kCal/m}^2\)</li>
 <li>Superficie del panel (\(s\)): \(6 \cdot 3 = 18 \,
 \text{m}^2\)</li>
 <li>Tiempo de exposición (\(t\)): \(5 \,
 \text{horas}\)</li>
 <li>Rendimiento: \(20\% = 0.2\)</li>
 </ul>
 4
</section>
 <section class="calculos">
 <h2>Solución:</h2>
 <?php
 // Función para calcular la energía generada y su
 conversión
 function calcular_energia() {
 // Datos iniciales
 $coeficiente_radiacion = 0.9; // kCal/m²
 $superficie = 6 * 3; // m²
 $tiempo = 5; // horas
 $rendimiento = 0.2; // 20%
 // Cálculo de la energía generada en kCal
 $energia_kcal = $coeficiente_radiacion * $superficie *
 $tiempo * $rendimiento;
 // Conversión a kWh
 $energia_kwh = $energia_kcal / 860;
 return [
 'kcal' => $energia_kcal,
 'kwh' => $energia_kwh
 ];
 }
 // Llamada a la función y mostrar los resultados
 $resultados = calcular_energia();
 ?>
 <p>Energía generada en \(kCal\): <strong><?php echo
 number_format($resultados['kcal'], 2); ?> kCal</strong></p>
 5
<p>Energía generada en \(kWh\): <strong><?php echo
 number_format($resultados['kwh'], 2); ?> kWh</strong></p>
 </section>
 <section class="resultado">
 <h2>Resultado:</h2>
 <?php
 echo "<div id='resultado0'>";
 echo "<p>El panel genera <strong>" .
 number_format($resultados['kcal'], 2) . " kCal</strong> de energía, que
 equivale a <strong>" . number_format($resultados['kwh'], 2) . "
 kWh</strong>.</p>";
 echo "</div>";
 ?>
 </section>
 </section>
 <footer class="pie">
 </footer>
 </section>
 </body>
 </html
