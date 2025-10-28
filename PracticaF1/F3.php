<?php
    class F3 extends Monoplaza {
    private $academia;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $academia, $puntos = 0) {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->academia = $academia;
    }

    public function otorgarPuntos($posicion, $vueltaRapida = false) {
        $tabla = [10, 8, 7, 6, 5, 4, 3, 2, 1];
        if (!$this->posicionValida($posicion, 30)) return;

        if ($posicion <= 9) $this->puntos += $tabla[$posicion - 1];
    }

    public function subirCategoria($datos) {
        return new F2($this->nombrePiloto, $this->nacionalidad, $this->numero, $this->escuderia, $datos['tieneSuperlicencia'], $this->puntos);
    }
}
?>