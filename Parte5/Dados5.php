
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comparator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Comparator</h1>

    <?php
    // Comprueba si se ha enviado el formulario
    if (isset($_GET["calcular"])) {

        // Guarda los valores y el operador
        $valor1 = $_GET["valor1"];
        $valor2 = $_GET["valor2"];
        $operador = $_GET["operador"];

        // Convierte los textos true y false a booleanos
        if ($valor1 == "true") {
            $valor1 = true;
        } elseif ($valor1 == "false") {
            $valor1 = false;
        }

        if ($valor2 == "true") {
            $valor2 = true;
        } elseif ($valor2 == "false") {
            $valor2 = false;
        }

        // Comprueba qué operación se ha seleccionado
        if ($operador == "and") {
            $resultado = (bool)$valor1 && (bool)$valor2;

        } elseif ($operador == "or") {
            $resultado = (bool)$valor1 || (bool)$valor2;

        } elseif ($operador == "xor") {
            $resultado = (bool)$valor1 xor (bool)$valor2;

        } elseif ($operador == "+") {
            if (is_numeric($valor1) && is_numeric($valor2)) {
                $resultado = $valor1 + $valor2;
            } else {
                $resultado = "Error: introduce números";
            }

        } elseif ($operador == "-") {
            if (is_numeric($valor1) && is_numeric($valor2)) {
                $resultado = $valor1 - $valor2;
            } else {
                $resultado = "Error: introduce números";
            }

        } else {
            $resultado = "Operador no válido";
        }

        // Convierte los resultados booleanos a texto
        if ($resultado === true) {
            $resultado = "true";
        } elseif ($resultado === false) {
            $resultado = "false";
        }

        // Muestra  el resultado
        echo "<h2>Resultado:</h2>";
        echo "<p>" . htmlspecialchars((string)$resultado) . "</p>";
    }
    ?>

    <h2>Introduce los valores</h2>

    <form method="GET">

        <label>Primer valor:</label>
        <input type="text" name="valor1" required>

        <br><br>

        <label>Operador:</label>
        <select name="operador">
            <option value="and">and</option>
            <option value="or">or</option>
            <option value="xor">xor</option>
            <option value="+">+</option>
            <option value="-">-</option>
        </select>

        <br><br>

        <label>Segundo valor:</label>
        <input type="text" name="valor2" required>

        <br><br>

        <button type="submit" name="calcular">
            Calcular
        </button>

    </form>

</body>
</html>
