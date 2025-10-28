<?php
    class F4 extends Monoplaza {
    private $paisCategoria;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $paisCategoria, $puntos = 0) {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->paisCategoria = $paisCategoria;
    }

    public function otorgarPuntos($posicion, $vueltaRapida = false) {
        $tabla = [25, 18, 15, 12, 10, 8, 6, 4, 2, 1];
        if (!$this->posicionValida($posicion, 30)) return;

        if ($posicion <= 10) $this->puntos += $tabla[$posicion - 1];
    }

    public function subirCategoria($datos) {
        return new F3($this->nombrePiloto, $this->nacionalidad, $this->numero, $this->escuderia, $datos['academia'], $this->puntos);
    }
}
?>