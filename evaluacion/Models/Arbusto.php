<?php
require_once __DIR__ . '/Planta.php';


class Arbusto extends Planta {
private float $anchoArbusto;
private bool $esDomestico;
private string $variedadArbusto;
private string $colorHojas;
private bool $sePoda;

public function __construct(
string $nombre, float $alturaTallo, bool $tieneHojas, string $climaIdeal,
float $anchoArbusto, bool $esDomestico, string $variedadArbusto, string $colorHojas, bool $sePoda
) {
parent::__construct($nombre, $alturaTallo, $tieneHojas, $climaIdeal);
$this->anchoArbusto = $anchoArbusto;
$this->esDomestico = $esDomestico;
$this->variedadArbusto = $variedadArbusto;
$this->colorHojas = $colorHojas;
$this->sePoda = $sePoda;
}

public function mensajeArbusto(): void {
echo "Hola, soy un arbusto.<br>";
}
}
