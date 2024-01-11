<?php

// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "curso");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Crear la tabla pedidos si no existe
$sqlCrearTabla = "CREATE TABLE IF NOT EXISTS pedidos (id INT AUTO_INCREMENT PRIMARY KEY,fecha_pedido DATE,kg DECIMAL(5,2),producto VARCHAR(50),dni VARCHAR(10))";
$conexion->query($sqlCrearTabla);
// Procesar formulario de pedidos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fechaPedido = $_POST["fecha_pedido"];
    $kg = $_POST["kg"];
    $producto = $_POST["producto"];
    $dni = $_POST["dni"];

    // Insertar el pedido en la tabla
    $sqlInsertarPedido = "INSERT INTO pedidos (fecha_pedido, kg, producto, dni) VALUES ('$fechaPedido', $kg, '$producto', '$dni')";
    $conexion->query($sqlInsertarPedido);

    echo "Pedido registrado correctamente.";
}

// Cerrar la conexión
$conexion->close();