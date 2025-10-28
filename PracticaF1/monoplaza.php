<?php
class Monoplaza {
    protected $nombrePiloto;
    protected $nacionalidad;
    protected $numero;
    protected $escuderia;
    protected $puntos;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos = 0) {
        $this->nombrePiloto = $nombrePiloto;
        $this->nacionalidad = $nacionalidad;
        $this->numero = $numero;
        $this->escuderia = $escuderia;
        $this->puntos = $puntos;
    }

    public function getPuntos() {
        return $this->puntos;
    }

    public function posicionValida($posicion, $maxPilotos) {
        return $posicion >= 1 && $posicion <= $maxPilotos;
    }

    public function otorgarPuntos($posicion, $vueltaRapida = false) {
    }

    public function subirCategoria($datos) {
    }

    public function __toString() {
        return "{$this->nombrePiloto} ({$this->nacionalidad}) - {$this->escuderia} [#{$this->numero}] - Puntos: {$this->puntos}";
    }
}
?>