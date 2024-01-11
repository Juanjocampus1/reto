<?php
require_once('producto.php');

$nombreProducto = ''; // Inicializamos las variables
$tipoProducto = '';
$fechaCaducidad = '';

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $nombreProducto = $_POST['nombre_producto'];
    $tipoProducto = $_POST['tipo_producto'];

    // Crear una instancia de la clase Producto
    $miProducto = new Producto($nombreProducto, $tipoProducto);

    // Calcular la fecha de caducidad
    $fechaCaducidad = $miProducto->calcularFechaCaducidad();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Producto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Formulario Producto</h1>

        <form method="post" action="">
            <div class="form-group">
                <label for="nombre_producto">Nombre del producto: </label>
                <input type="text" class="form-control" name="nombre_producto" required>
            </div>

            <div class="form-group">
                <label for="tipo_producto">Tipo de producto (A, B, C): </label>
                <input type="text" class="form-control" name="tipo_producto" required>
            </div>

            <button type="submit" class="btn btn-primary">Calcular Fecha de Caducidad</button>
        </form>

        <?php
        if (!empty($fechaCaducidad)) {
            echo "<br><br><h2 class='mt-3'>Fecha de caducidad para el producto '$nombreProducto' (tipo $tipoProducto): $fechaCaducidad</h2>";
        }
        ?>
    </div>
</body>
</html>
