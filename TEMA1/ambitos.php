<?php

$a = 1; /* ámbito global */

function test_G()
{
    //se modifica la variable de ámbito global desde la función
    //super ámbito global
    $GLOBALS['a'] = 10;
    echo "Dentro de la función "; /* referencia a una variable del ámbito local */
    var_dump($GLOBALS['a']);
    
}
//se muestra el valor de la variable de ámbito global
//modificada en la función
echo "Fuera de la función $a <br>";

test_G();

function test_globals()
{
    //se modifica la variable de ámbito global desde la función
    //no se puede asignar valor en el mismo momento de indicar global
    //acceso global dentro del propio script PHP
    global $a;
    $a=20;
    echo "Dentro de la función "; /* referencia a una variable del ámbito local */
    var_dump($a);
    
}
//se muestra el valor de la variable de ámbito global
//modificada en la función
echo "Fuera de la función $a <br>";

test_globals();
?>