<?php

class Planta {
protected string $nombre;
protected float $alturaTallo;
protected bool $tieneHojas;
protected string $climaIdeal;

public function __construct(string $nombre, float $alturaTallo, bool $tieneHojas, string $climaIdeal) {
$this->nombre = $nombre;
$this->alturaTallo = $alturaTallo;
$this->tieneHojas = $tieneHojas;
$this->climaIdeal = $climaIdeal;
}

public function getNombre(): string {
return $this->nombre;
}
}