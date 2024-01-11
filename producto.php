<?php
class Producto {
    private $nombre;
    private $tipo;
    private $fechaActual;

    public function __construct($nombre, $tipo) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->fechaActual = date('Y-m-d');
    }

    public function calcularFechaCaducidad() {
        $diasCaducidad = 0;

        switch ($this->tipo) {
            case 'A' and 'a':
                $diasCaducidad = 30;
                break;
            case 'B' and 'b':
                $diasCaducidad = 45;
                break;
            case 'C' and 'c':
                $diasCaducidad = 62;
                break;
            default:
                echo 'Tipo de producto no válido';
                return null;
        }

        $fechaCaducidad = date('Y-m-d', strtotime($this->fechaActual . ' + ' . $diasCaducidad . ' days'));

        return $fechaCaducidad;
    }

    public function getNombre() {
        return $this->nombre;
    }
}
