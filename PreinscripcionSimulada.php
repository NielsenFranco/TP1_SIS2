<?php
class PreinscripcionSimulada
{
    private $inscripciones = [];

    public function yaInscripto($idestudiante, $idmesa) {
        foreach ($this->inscripciones as $i) {
            if ($i['idestudiante'] === $idestudiante && $i['idmesa'] === $idmesa) {
                return true;
            }
        }
        return false;
    }

    public function inscribir($idestudiante, $idmesa, $idmateria) {
        if ($this->yaInscripto($idestudiante, $idmesa)) {
            return false; // Ya está preinscrito
        }

        $this->inscripciones[] = [
            'idestudiante' => $idestudiante,
            'idmesa' => $idmesa,
            'idmateria' => $idmateria,
            'estado' => 'Pendiente',
            'fechainscripcion' => date('Y-m-d H:i:s')
        ];

        return true;
    }

    public function getInscripciones() {
        return $this->inscripciones;
    }
}
?>