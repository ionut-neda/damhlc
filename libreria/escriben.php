<?php
include_once 'autor.php';
include_once 'libro.php';
class Escriben{
    private $libro;
    private $autor;
    public function __construct($libro,$autor){
        $this->libro=$libro;
        $this->autor=$autor;
    }
    public function get_libro(){
        return $this->libro;
    }
    public function get_autor(){
        return $this->autor;
    }
}
?>