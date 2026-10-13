<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lanzamiento de dados 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Lanzamiento de dados 2</h1>

    <?php

    $caras = [1 => "⚀", 2 => "⚁", 3 => "⚂", 4 => "⚃", 5 => "⚄", 6 => "⚅"];

    // recoge el historial de la url, si no hay nada lo deja vacio
    $historial = isset($_GET["resultados"]) ? preg_replace('/[^1-6]/', '', $_GET["resultados"]) : "";

    // si se pulsa el boton lanza el dado
    if (isset($_GET["lanzar"])) {
        $dado = rand(1, 6);
        $historial .= $dado; // añadimos el resultado al historial
        echo "<h2>Ha salido el número: $dado <span style='font-size:1.2em;'>{$caras[$dado]}</span></h2>";
    }
    ?>

    <form action="Dados2.php" method="GET">
        <input type="hidden" name="resultados" value="<?= htmlspecialchars($historial) ?>">
        <button type="submit" name="lanzar">Lanzar dado</button>
    </form>

    <?php if (strlen($historial) > 0): ?>
        <h3>Historial de tiradas</h3>
        <table>
            <tr><th>Tirada</th><th>Resultado</th><th>Dado</th></tr>
            <?php
            // separa el string en un array de números
            $tiradas = str_split($historial);
            // $i es la posición y $n el número que salió
            foreach ($tiradas as $i => $n):
            ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $n ?></td>
                <td><?= $caras[(int)$n] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

</body>
</html>
