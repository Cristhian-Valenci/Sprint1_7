<?php

namespace Cristhian\Sprint17;

use PHPUnit\Framework\TestCase;

class EstudianteTest extends TestCase {

    public function test_ComprobarPrimeraDivisionBienMayor() {
        $Estudiante = new Estudiante();

        $this->assertEquals("Primera Division", $Estudiante->calcularGradoDelEstudiante(61));
    }
     public function test_ComprobarPrimeraDivisionBienIgual() {
        $Estudiante = new Estudiante();

        $this->assertEquals("Primera Division", $Estudiante->calcularGradoDelEstudiante(60));
    }
    
    public function test_ComprobarPrimeraDivisionMal() {
        $Estudiante = new Estudiante();

        $this->assertNotEquals("Primera Division", $Estudiante->calcularGradoDelEstudiante(59));
    }
   
    public function test_ComprobarSegundaDivisionBienMayor() {
        $Estudiante = new Estudiante();

        $this->assertEquals("Segunda Division", $Estudiante->calcularGradoDelEstudiante(46));
    }
    public function test_ComprobarSegundaDivisionBienIgual() {
        $Estudiante = new Estudiante();

        $this->assertEquals("Segunda Division", $Estudiante->calcularGradoDelEstudiante(45));
    }
   
    public function test_ComprobarSegundaDivisionMal() {
        $Estudiante = new Estudiante();

        $this->assertNotEquals("Segunda Division", $Estudiante->calcularGradoDelEstudiante(44));
    }
   
    public function test_ComprobarTerceraDivisionBienMayor() {
        $Estudiante = new Estudiante();

        $this->assertEquals("Tercera Division", $Estudiante->calcularGradoDelEstudiante(34));
    }
    public function test_ComprobarTerceraDivisionBien() {
        $Estudiante = new Estudiante();

        $this->assertEquals("Tercera Division", $Estudiante->calcularGradoDelEstudiante(33));
    }
   
    public function test_ComprobarTerceraDivisionMal() {
        $Estudiante = new Estudiante();

        $this->assertNotEquals("Tercera Division", $Estudiante->calcularGradoDelEstudiante(32));
    }
   
    public function test_ComprobarEstudianteReprobadoBien() {
        $Estudiante = new Estudiante();

        $this->assertEquals("Estudiante reprobado", $Estudiante->calcularGradoDelEstudiante(32));
    }
   
    public function test_ComprobarEstudianteReprobadoMal() {
        $Estudiante = new Estudiante();

        $this->assertNotEquals("Estudiante reprobado", $Estudiante->calcularGradoDelEstudiante(33));
    }
}
?>