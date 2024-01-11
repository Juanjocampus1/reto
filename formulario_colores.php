<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Color</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Seleccionar Color</h1>

    <form method="post" action="enumerador.php">
        <div class="form-group">
            <label>Seleccione un color:</label>
            <select class="form-control" name="color">
                <option value="rojo">Rojo</option>
                <option value="verde">Verde</option>
                <option value="azul">Azul</option>
                <option value="amarillo">Amarillo</option>
                <option value="violeta">Violeta</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Pintar</button>
    </form>

    <?php
    // Mostrar el nombre del color si está disponible
    if (!empty($nombreColor)) {
        echo "<p class='mt-3'>Color seleccionado: $nombreColor</p>";
    }
    ?>
</div>

</body>
</html>