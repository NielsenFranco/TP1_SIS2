<?php
use PHPUnit\Framework\TestCase;

// Cargar archivo desde la raíz del proyecto
require_once __DIR__ . '/../PreinscripcionSimulada.php';

class PreinscripcionSimuladaTest extends TestCase
{
    public function testInscripcionExitosa() {
        $pre = new PreinscripcionSimulada();
        $resultado = $pre->inscribir(1, 10, 100);
        $this->assertTrue($resultado);
    }

    public function testInscripcionDuplicada() {
        $pre = new PreinscripcionSimulada();
        $pre->inscribir(1, 10, 100);
        $resultado = $pre->inscribir(1, 10, 100);
        $this->assertFalse($resultado);
    }

    public function testInscripcionDistintaMesa() {
        $pre = new PreinscripcionSimulada();
        $pre->inscribir(1, 10, 100);
        $resultado = $pre->inscribir(1, 11, 100);
        $this->assertTrue($resultado);
    }

    public function testInscripcionDistintoEstudiante() {
        $pre = new PreinscripcionSimulada();
        $pre->inscribir(1, 10, 100);
        $resultado = $pre->inscribir(2, 10, 100);
        $this->assertTrue($resultado);
    }
}
?>
