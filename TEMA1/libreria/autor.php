<?php
class Autor{
    private $apellidos;
    private $nombre;
    private $nacionalidad;
    public function __construct($apellidos,$nombre,$nacionalidad){
        $this->$nombre = $nombre;
        $this->$nacionalidad = $nacionalidad;
        $this->$apellidos = $apellidos;       
    }
    public function get_apellidos(){
        return $this->apellidos;
    }
    public function get_nombre(){
        return $this->nombre;
    }
    public function get_nacionalidad(){
        return $this->nacionalidad;
    }
}
?>