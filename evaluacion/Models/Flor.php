<?php
require_once __DIR__ . '/Planta.php';


class Flor extends Planta {
private string $colorPetalos;
private int $cantidadPromedioPetalos;
private string $colorPistilo;
private string $variedadFlor;
private string $estacionFloresce;

public function __construct(
string $nombre, float $alturaTallo, bool $tieneHojas, string $climaIdeal,
string $colorPetalos, int $cantidadPromedioPetalos, string $colorPistilo, string $variedadFlor, string $estacionFloresce
) {
parent::__construct($nombre, $alturaTallo, $tieneHojas, $climaIdeal);
$this->colorPetalos = $colorPetalos;
$this->cantidadPromedioPetalos = $cantidadPromedioPetalos;
$this->colorPistilo = $colorPistilo;
$this->variedadFlor = $variedadFlor;
$this->estacionFloresce = $estacionFloresce;
}

public function mensajeFlor(): void {
echo "Hola, soy una flor.<br>";
}
}