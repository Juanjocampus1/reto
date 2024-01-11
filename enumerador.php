<?php

enum Colores {
    case rojo;
    case verde;
    case azul;
    case amarillo;
    case violeta;
}

function obtenerNombreColor(Colores $color): string {
    return match ($color) {
        Colores::rojo => 'Rojo',
        Colores::verde => 'Verde',
        Colores::azul => 'Azul',
        Colores::amarillo => 'Amarillo',
        Colores::violeta => 'Violeta',
    };
}

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el color seleccionado del formulario
    $colorSeleccionado = $_POST['color'];

    // Convertir el valor del formulario a un miembro del enumerador
    $colorEnum = match ($colorSeleccionado) {
        'rojo' => Colores::rojo,
        'verde' => Colores::verde,
        'azul' => Colores::azul,
        'amarillo' => Colores::amarillo,
        'violeta' => Colores::violeta,
        default => Colores::azul, // Valor predeterminado
    };

    // Obtener el nombre del color
    $nombreColor = obtenerNombreColor($colorEnum);

    // Obtener el color correspondiente
    $colorTexto = match ($colorEnum) {
        Colores::rojo => 'red',
        Colores::verde => 'green',
        Colores::azul => 'blue',
        Colores::amarillo => 'yellow',
        Colores::violeta => 'violet',
    };

    // Mostrar el nombre del color con el color correspondiente
    echo "<h2 class='mt-3' style='font-family: Arial, serif; color: $colorTexto;'>Color seleccionado: $nombreColor</h2>";
}

?>

