<?php
    //definición de la clase perro
    class perro{
        function ladra(&$veces){
            for($i=0;$i<$veces;$i++)
                echo "Guau!<br>";
            $veces=1;
        }
    }
    //creamos un objeto de tipo perro
    $perro = new perro(); 
    $veces = 5;
    echo "La variable antes de pasarla por referencia $veces<br>";   
    
    $perro->ladra($veces);
    //muestro el valor de la variable que se ha pasado por referencia
    echo "La variable después pasarla por referencia $veces<br>";
    //convertir un array a objeto
    $obj = (object) array('modelo' => 'Q5'
,'marca' => 'Audi');
    var_dump(isset($obj->{'modelo'})); //muestra 'bool(true)'
    var_dump(key($obj)); // muestra 'string(1)'

    //se convierte un tipo de datos escalar a objeto
    $obj = (object) 'ciao';
    echo $obj->scalar;  // muestra 'ciao'

?>