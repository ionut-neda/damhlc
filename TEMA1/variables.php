<?php
//variables por referencia
$foo = 'Bob';                // Asigna el valor 'Bob' a $foo
$bar = &$foo;                // Referenciar $foo vía $bar.
$bar = "Mi nombre es $bar<br>";  // Modifica $bar...
echo $bar;
echo $foo; 
//comprobación de variable no definida
echo($booleano_indefinido ? "true\n" : "false\n");
//concatenación de valor string a una variable no definida
$booleano_indefinido ? $cadena_indefinida:
    $cadena_indefinida.='abc';
var_dump($cadena_indefinida);
?>