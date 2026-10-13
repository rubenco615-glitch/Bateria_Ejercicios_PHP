<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generador de frases cuñadas 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Generador de frases cuñadas 2</h1>

    <form action="Dados4.php" method="POST">

        <label>Primera parte:</label>
        <select name="primera">
            <option value="Yo en tu lugar">Yo en tu lugar</option>
            <option value="La verdad es que">La verdad es que</option>
            <option value="Tú sabes que">Tú sabes que</option>
            <option value="No hay duda de que">No hay duda de que</option>
            <option value="Al final">Al final</option>
        </select>

        <br><br>

        <label>Segunda parte:</label>
        <select name="segunda">
            <option value="siempre hay que invertir en">siempre hay que invertir en</option>
            <option value="lo importante es">lo importante es</option>
            <option value="nunca subestimes">nunca subestimes</option>
            <option value="yo siempre digo que">yo siempre digo que</option>
            <option value="el secreto está en">el secreto está en</option>
        </select>

        <br><br>

        <label>Tercera parte:</label>
        <select name="tercera">
            <option value="la bolsa de valores">la bolsa de valores</option>
            <option value="no tener dinero en el banco">no tener dinero en el banco</option>
            <option value="los chemtrails">los chemtrails</option>
            <option value="la nube">la nube</option>
            <option value="las crypto">las crypto</option>
        </select>

        <br><br>

        <button type="submit" name="generar">Generar frase</button>
        <button type="submit" name="aleatorio">Frase aleatoria</button>

    </form>

    <?php

    // Arrays con las opciones de cada parte
    $opciones1 = [
        "Yo en tu lugar",
        "La verdad es que",
        "Tú sabes que",
        "No hay duda de que",
        "Al final"
    ];

    $opciones2 = [
        "siempre hay que invertir en",
        "lo importante es",
        "nunca subestimes",
        "yo siempre digo que",
        "el secreto está en"
    ];

    $opciones3 = [
        "la bolsa de valores",
        "no tener dinero en el banco",
        "los chemtrails",
        "la nube",
        "las crypto"
    ];

    // Comprueba si se ha pulsado algún botón
    if (isset($_POST["generar"]) || isset($_POST["aleatorio"])) {

        // Si se pulsa el botón aleatorio
        if (isset($_POST["aleatorio"])) {

            // Elegimos una opción aleatoria de cada array
            $primera = $opciones1[array_rand($opciones1)];
            $segunda = $opciones2[array_rand($opciones2)];
            $tercera = $opciones3[array_rand($opciones3)];

        } else {

            // Guarda las opciones seleccionadas
            $primera = $_POST["primera"];
            $segunda = $_POST["segunda"];
            $tercera = $_POST["tercera"];

        }

        // Junta las tres partes
        $frase = $primera . " " . $segunda . " " . $tercera;

        // Muestra la frase generada
        echo "<h2>Frase cuñada:</h2>";
        echo "<p>" . htmlspecialchars($frase) . ".</p>";
    }

    ?>

</body>
</html>
