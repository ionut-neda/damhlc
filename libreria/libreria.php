<?php
    include_once 'autor.php';
    include_once 'libro.php';
    include_once 'ejemplar.php';
    include_once 'especialidad.php';    
    include_once 'escriben.php';

    //se crea una instancia de la clase Autor
    $autor = new Autor('apellidos','nombre','nacionalidad');    

    //se crea una instancia de la clase Especialidad
    $especialidad = new Especialidad('PHP','Programación en PHP');

    //se crea una instancia de la clase Libro
    $libro = new Libro($especialidad,'Programa en PHP en 21 días','esp');

    //se crea una instancia de la clase Escriben
    $escriben = new Escriben($libro,$autor);

    //se crea un array para la librería con los libros escritos
    $libreria = array();
    array_push($libreria,$escriben);
    //muestra el array de la librería
    var_dump($libreria);
    echo '<br>';
    //muestra el título del libro
    echo $libreria[0]->get_libro()->get_titulo().'<br>';
    //muestra el nombre del autor
    echo $libreria[0]->get_autor()->get_nombre().'<br>';
    //muestra el nombre de la especialidad del libro
    echo $libreria[0]->get_libro()->get_especialidad()->get_nombre().'<br>';
?>