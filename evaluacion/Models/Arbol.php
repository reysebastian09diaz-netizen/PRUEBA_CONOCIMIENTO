<?php
require_once __DIR__ . '/Planta.php';

class Arbol extends Planta {
private string $variedad;
private string $tipoTronco;
private float $radioTronco;
private string $color;public string $tipoHojas;

public function __construct(
string $nombre, float $alturaTallo, bool $tieneHojas, string $climaIdeal,
string $variedad, string $tipoTronco, float $radioTronco, string $color, string $tipoHojas
) {
parent::__construct($nombre, $alturaTallo, $tieneHojas, $climaIdeal);
$this->variedad = $variedad;
$this->tipoTronco = $tipoTronco;
$this->radioTronco = $radioTronco;
$this->color = $color;
$this->tipoHojas = $tipoHojas;
}

public function mensajeArbol(): void {
echo "Hola, soy un árbol.<br>";
}
}
