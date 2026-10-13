
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Trabajando con strings</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Trabajando con strings</h1>

    <?php

    // Guarda la frase original
    $frase = "Hace frío mucho frío tiempo frío que frío me frío estoy frío quedando frío contigo frío";

    // Muestra la frase original
    echo "<h2>Frase original:</h2>";
    echo "<p>$frase</p>";

    // Convierte la frase en un array de palabras
    $palabras = explode(" ", $frase);

    // PARTE 1: Eliminar palabras en posiciones pares

    // Crea un array vacío
    $resultado = [];

    // Recorremos las palabras de dos en dos
    for ($i = 0; $i < count($palabras); $i += 2) {
        $resultado[] = $palabras[$i];
    }

    // Une las palabras con espacios
    $fraseFinal = implode(" ", $resultado);

    // Muestra el resultado
    echo "<h2>Frase sin posiciones pares:</h2>";
    echo "<p>$fraseFinal</p>";


    // PARTE 2: Elimina la palabra frío (EXTRA)

    // Crea otro array vacío
    $resultado2 = [];

    // Recorre todas las palabras
    for ($i = 0; $i < count($palabras); $i++) {

        // Si la palabra no es frío, la guardamos
        if ($palabras[$i] != "frío") {
            $resultado2[] = $palabras[$i];
        }
    }

    // Une las palabras con espacios
    $fraseFinal2 = implode(" ", $resultado2);

    // Muestra el resultado extra
    echo "<h2>Frase sin la palabra frío (Extra):</h2>";
    echo "<p>$fraseFinal2</p>";

    ?>

</body>
</html>
