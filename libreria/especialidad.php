<?php
class Especialidad{
    private $nombre;
    private $descripcion;
    private $libros;
    public function __construct($nombre, $descripcion){
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;          
        $this->libros=array(0);
    }
    public function add_libro($libro){
        array_push($this->libros,$libro);       
    }
    public function remove_libros(){
        $this->libros = NULL;
    }
    public function get_nombre(){
        return $this->nombre;
    }
}
?>