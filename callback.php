<?php
function tiradaAleatoria(): int {
    return rand(1, 100);
}

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Incrementar el contador de tiradas
    $_SESSION['contador'] = isset($_SESSION['contador']) ? $_SESSION['contador'] + 1 : 1;

    // Realizar la tirada y almacenar el resultado
    $_SESSION['resultado'] = tiradaAleatoria();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirada Aleatoria</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body class="text-center">

<div class="container mt-5">
    <h1 class="mb-4">Tirada Aleatoria</h1>

    <form method="post" action="">
        <button type="submit" class="btn btn-primary btn-lg">Hacer tirada</button>
    </form>

    <?php
    // Mostrar contador y resultado si están disponibles
    if (isset($_SESSION['contador']) && isset($_SESSION['resultado'])) {
        echo "<p class='mt-3'>Tirada número: {$_SESSION['contador']}</p>";
        echo "<h2 class='mt-3'>Número obtenido: {$_SESSION['resultado']}</h2>";
    }
    ?>
</div>

</body>
</html>

