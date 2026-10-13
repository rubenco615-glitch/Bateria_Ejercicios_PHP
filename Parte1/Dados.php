
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lanzamiento de dados</title>
</head>
<body>

    <h1>Lanzamiento de dados</h1>

    <form action="Dados.php" method="GET">
        <button type="submit" name="lanzar">
            Lanzar dado
        </button>
    </form>

    <?php
    if (isset($_GET["lanzar"])) {
        $dado = rand(1, 6);

        echo "<h2>Ha salido el número: $dado</h2>";
    }
    ?>

</body>
</html>
