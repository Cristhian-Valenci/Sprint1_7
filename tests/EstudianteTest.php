<?php

namespace Cristhian\Sprint17;

use PHPUnit\Framework\TestCase;

class EstudianteTest extends TestCase {

    public function test_CalcularGradoDelEstudiante() {

        $Estudiante = new Estudiante();

        $this->assertGreaterThanOrEqual("Primera Division", $Estudiante->calcularGradoDelEstudiante(60));
        $this->assertGreaterThanOrEqual("Segunda Division", $Estudiante->calcularGradoDelEstudiante(45));
        $this->assertGreaterThanOrEqual("Tercera Division", $Estudiante->calcularGradoDelEstudiante(33));
        $this->assertLessThanOrEqual("Estudiante reprobado", $Estudiante->calcularGradoDelEstudiante(32));
        
    }
}
?>