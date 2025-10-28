<?php
    class F2 extends Monoplaza {
    private $tieneSuperlicencia;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $tieneSuperlicencia, $puntos = 0) {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->tieneSuperlicencia = $tieneSuperlicencia;
    }

    public function otorgarPuntos($posicion, $vueltaRapida = false) {
        $tabla = [10, 8, 7, 6, 5, 4, 3, 2, 1];
        if (!$this->posicionValida($posicion, 24)) return;

        if ($posicion <= 9) $this->puntos += $tabla[$posicion - 1];

        // Vuelta rápida solo si está en top 10
        if ($vueltaRapida && $posicion <= 10) $this->puntos += 1;
    }

    public function subirCategoria($datos) {
        if (!$this->tieneSuperlicencia) {
            throw new Exception("El piloto no tiene suficientes puntos de superlicencia para subir a F1.");
        }
        return new F1($this->nombrePiloto, $this->nacionalidad, $this->numero, $this->escuderia, $datos['patrocinador'], $this->puntos);
    }
}
?>