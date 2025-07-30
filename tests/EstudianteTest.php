<?php

namespace Cristhian\Sprint17;

use PHPUnit\Framework\TestCase;

class EstudianteTest extends TestCase {

    public function test_ComprobarPrimeraDivisionBienMayor() : void {
        $Estudiante = new Estudiante();

        $this->assertEquals("Primera Division", $Estudiante->calcularGradoDelEstudiante(61));
    }
     public function test_ComprobarPrimeraDivisionBienIgual() : void {
        $Estudiante = new Estudiante();

        $this->assertEquals("Primera Division", $Estudiante->calcularGradoDelEstudiante(60));
    }
    
    public function test_ComprobarPrimeraDivisionMal() : void {
        $Estudiante = new Estudiante();

        $this->assertNotEquals("Primera Division", $Estudiante->calcularGradoDelEstudiante(59));
    }
   
    public function test_ComprobarSegundaDivisionBienMayor() : void {
        $Estudiante = new Estudiante();

        $this->assertEquals("Segunda Division", $Estudiante->calcularGradoDelEstudiante(46));
    }
    public function test_ComprobarSegundaDivisionBienIgual() : void {
        $Estudiante = new Estudiante();

        $this->assertEquals("Segunda Division", $Estudiante->calcularGradoDelEstudiante(45));
    }
   
    public function test_ComprobarSegundaDivisionMal() : void {
        $Estudiante = new Estudiante();

        $this->assertNotEquals("Segunda Division", $Estudiante->calcularGradoDelEstudiante(44));
    }
   
    public function test_ComprobarTerceraDivisionBienMayor() : void {
        $Estudiante = new Estudiante();

        $this->assertEquals("Tercera Division", $Estudiante->calcularGradoDelEstudiante(34));
    }
    public function test_ComprobarTerceraDivisionBien() : void {
        $Estudiante = new Estudiante();

        $this->assertEquals("Tercera Division", $Estudiante->calcularGradoDelEstudiante(33));
    }
   
    public function test_ComprobarTerceraDivisionMal() : void {
        $Estudiante = new Estudiante();

        $this->assertNotEquals("Tercera Division", $Estudiante->calcularGradoDelEstudiante(32));
    }
   
    public function test_ComprobarEstudianteReprobadoBien() : void {
        $Estudiante = new Estudiante();

        $this->assertEquals("Estudiante reprobado", $Estudiante->calcularGradoDelEstudiante(32));
    }
   
    public function test_ComprobarEstudianteReprobadoMal()  : void{
        $Estudiante = new Estudiante();

        $this->assertNotEquals("Estudiante reprobado", $Estudiante->calcularGradoDelEstudiante(33));
    }
    public function test_ComprobarNotaNoValidaBien() : void {
        $Estudiante = new Estudiante();

        $this->assertEquals("Nota NO valida", $Estudiante->calcularGradoDelEstudiante(-1));
    }
    public function test_ComprobarNotaNoValidaMal() : void {
        $Estudiante = new Estudiante();

        $this->assertNotEquals("Nota NO valida", $Estudiante->calcularGradoDelEstudiante(0));
    }
    public function test_ComprobarNotaNoValidaBienMayor() : void {
        $Estudiante = new Estudiante();

        $this->assertEquals("Nota NO valida", $Estudiante->calcularGradoDelEstudiante(101));
    }
}
?>