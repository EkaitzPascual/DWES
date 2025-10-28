<?php
    class FAcademy extends Monoplaza {
        private $potenciaMax; // CV

        public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $potenciaMax, $puntos = 0) {
            parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
            $this->potenciaMax = $potenciaMax;
        }

        public function otorgarPuntos($posicion, $vueltaRapida = false) {
            $tabla = [18, 15, 12, 10, 8, 6, 4, 2, 1];
            if (!$this->posicionValida($posicion, 18)) return;

            if ($posicion <= 9) $this->puntos += $tabla[$posicion - 1];
        }

        public function subirCategoria($datos) {
            return new F4($this->nombrePiloto, $this->nacionalidad, $this->numero, $this->escuderia, $datos['paisCategoria'], $this->puntos);
        }
    }
?>