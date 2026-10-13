
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lanzamiento de dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Lanzamiento de dados</h1>

    <form action="Dados.php" method="GET">
        <button type="submit" name="lanzar">
            Lanzar dado
        </button>
    </form>

    <?php
    // isset comprueba si la variable existe y no es null
    if (isset($_GET["lanzar"])) {
        $dado = rand(1, 6);

        $caras = [1 => "⚀", 2 => "⚁", 3 => "⚂", 4 => "⚃", 5 => "⚄", 6 => "⚅"];
        $emoji = $caras[$dado];

        echo "<h2>Ha salido el número: $dado <span style='font-size:1.2em;'>$emoji</span></h2>";
    }
    ?>

</body>
</html>
