<?php
include_once 'especialidad.php';
class Libro{
    private Especialidad $especialidad;
    private $titulo;
    private $idioma;

    public function __construct(Especialidad &$especialidad,$titulo,$idioma){
        $this->especialidad = $especialidad;
        $this->titulo = $titulo;
        $this->idioma = $idioma;

        if(isset($especialidad))
            $this->especialidad->add_libro($this);
    }
    public function get_especialidad(){
        return $this->especialidad;
    }
    public function get_titulo(){
        return $this->titulo;
    }
}
?>