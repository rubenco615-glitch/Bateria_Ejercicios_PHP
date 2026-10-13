
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generador de frases cuñadas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Generador de frases cuñadas</h1>

    <form action="Dados3.php" method="GET">

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

        <button type="submit" name="generar">
            Generar frase
        </button>

    </form>

    <?php
    // Comprobamos si se ha pulsado el botón
    if (isset($_GET["generar"])) {

        // Guardamos las opciones seleccionadas
        $primera = $_GET["primera"];
        $segunda = $_GET["segunda"];
        $tercera = $_GET["tercera"];

        // Juntamos las tres partes de la frase
        $frase = $primera . " " . $segunda . " " . $tercera;

        // Mostramos la frase completa
        echo "<h2>Frase cuñada:</h2>";
        echo "<p>" . htmlspecialchars($frase) . ".</p>";
    }
    ?>

</body>
</html>
