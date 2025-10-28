<?php
    class F1 extends Monoplaza {
    private $patrocinador;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $patrocinador, $puntos = 0) {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->patrocinador = $patrocinador;
    }

    public function otorgarPuntos($posicion, $vueltaRapida = false) {
        $tabla = [25, 18, 15, 12, 10, 8, 6, 4, 2, 1];
        if (!$this->posicionValida($posicion, 22)) return;

        if ($posicion <= 10) $this->puntos += $tabla[$posicion - 1];

        if ($vueltaRapida && $posicion <= 10) $this->puntos += 1;
    }

    public function subirCategoria($datos) {
        throw new Exception("Ya estás en la categoría máxima: F1.");
    }
}

?>