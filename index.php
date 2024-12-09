<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IntroPHP Grupo X</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="problema.css">
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
    <header>
        <h1 class="logo"><a href="index.html">StemPhp</a></h1>
        <nav>
            <ul>
                <li><a href="index.php" class="current">Inicio</a></li>
            </ul>
        </nav>
    </header>
    
    <div id="container">
        <section id="contenedor">
            <section class="problema">
                <h2>Problema</h2>
                <p>Calcular la cantidad de energía (en calorías) que habrá entrado en una casa durante el mes de agosto si tiene una cristalera de 3 x 2 m y no se han producido pérdidas de vidrio.</p>
            </section>
            <section class="datos">
                <h2>Datos:</h2>
                <ul>
                    <li>K = 950 W/m²</li>
                    <li>Tiempo = 31 días, 10 horas al día</li>
                    <li>Área = 3 x 2 m²</li>
                </ul>
            </section>
            <section class="formulas">
                <h2>Fórmulas:</h2>
                <p>E = K × t × S</p>
            </section>
            <section class="calculos">
                <h2>Cálculos:</h2>
                <form action="" method="post">
                    <label for="k">K (W/m²):</label>
                    <input type="number" id="k" name="k" value="950" required>
                    <label for="t_horas">Tiempo (horas):</label>
                    <input type="number" id="t_horas" name="t_horas" value="310" required>
                    <label for="s">Área (m²):</label>
                    <input type="number" id="s" name="s" value="6" required>
                    <input type="submit" value="Calcular">
                </form>
            </section>
            <section class="resultado">
                <h2>Resultado:</h2>
                <div>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $K = $_POST['k'];
                        $t_horas = $_POST['t_horas'];
                        $S = $_POST['s'];
                        $E_Wh = $K * $t_horas * $S; // Energía en Wh
                        $E_Kcal = $E_Wh * 0.86; // Convertir Wh a Kcal
                        echo "<h3>La energía es: " . round($E_Kcal, 2) . " Kcal</h3>";
                    }
                    ?>
                </div>
            </section>
        </section>
    </div>

    <footer>
        <p>Creative Commons versión 4.0 SciSoft 2024</p>
    </footer>
</body>
</html>
