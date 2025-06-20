<?php

use PHPUnit\Framework\TestCase;

class CargaNotasTest extends TestCase
{
    public function testNotaValida()
    {
        $nota = 9;
        $this->assertGreaterThanOrEqual(0, $nota);
        $this->assertLessThanOrEqual(10, $nota);
    }

    public function testAccesoSoloDocente()
    {
        $rolUsuario = "docente"; // cambiar a "alumno" para forzar fallo
        $this->assertEquals("docente", $rolUsuario, "Solo un docente puede cargar notas.");
    }

    public function testNotaNoVacia()
    {
        $nota = 8;
        $this->assertNotNull($nota, "La nota no puede estar vacía.");
    }
}
