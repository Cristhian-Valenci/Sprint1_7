<?php 
declare(strict_types=1);

namespace Cristhian\Sprint17;

class Estudiante {

    private int $nota;
    
    public function __construct(int $nota) {
        $this->nota = $nota;
    }

    public function calcularGradoDelEstudiante($nota) : string {
        if ($nota >= 60) {
            return "Primera Division";
        } elseif ($nota >= 45) {
            return "Segunda Division";
        } elseif ($nota >= 33) {
            return "Tercera Division";
        } elseif ($nota < 0 || $nota > 100) {
            return "Nota NO valida";
        } else {
            return "Estudiante reprobado";
        }
    }
}







?>