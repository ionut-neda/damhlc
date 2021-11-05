<?php    
    //inicialización de un iterable
    //a partir de un array asociativo
    $iterable=array("uno" => 1,
    "dos" => 2,
    "tres" => 3,
    "cuatro" => 4);
    
    //recorrer el iterable y mostrar su contenido
    foreach($iterable as $valor){
        echo "$valor<br>";
    }

    //muestro un elemento del iterable
    //a partir de su clave
    echo $iterable["dos"];

?>