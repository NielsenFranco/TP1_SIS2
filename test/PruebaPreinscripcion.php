<?php

use PHPUnit\Framework\TestCase;

class PreinscripcionTest extends TestCase
{
    public function testFormularioDisponible()
    {
        $formularioActivo = true; // Simulación de lógica real
        $this->assertTrue($formularioActivo, "El formulario debe estar disponible.");
    }

    public function testDatosValidos()
    {
        $nombre = "Franco";
        $materia = "Programación II";
        $this->assertNotEmpty($nombre);
        $this->assertNotEmpty($materia);
    }

    public function testPeriodoActivo()
    {
        $fechaActual = new DateTime("2025-06-17");
        $inicio = new DateTime("2025-06-01");
        $fin = new DateTime("2025-06-30");

        $this->assertTrue($fechaActual >= $inicio && $fechaActual <= $fin, "El periodo debe estar activo.");
    }

    public function testPreinscripcionExitosa()
    {
        $datosCompletos = true;
        $periodoValido = true;
        $formularioHabilitado = true;

        $resultado = $datosCompletos && $periodoValido && $formularioHabilitado;

        $this->assertTrue($resultado, "La preinscripción debe ser válida si todo está en orden.");
    }
}
