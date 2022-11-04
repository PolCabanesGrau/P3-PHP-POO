<?php

    class Empleado
    {
        public $nombre;
        public $sueldo;

        public function __construct($nombre, $sueldo)
        {
            $this->nombre = $nombre;
            $this->sueldo = $sueldo;
        }


        public function pagarImpuestos(){
            if ($this->sueldo < 2000) {
                echo "El empleado $this->nombre no ha de pagar impuestos.";
            } else {
                echo "El empleado $this->nombre ha de pagar impuestos.";
            }
        }
    }

    $empleado = new Empleado("Pol", 1500);
    $empleado->pagarImpuestos();
?>