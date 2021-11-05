<?php
echo "Ejemplos sobre el uso de static\n";
echo "-------------------------------\n";
function contar()
{
    static $a = 0;
    echo "$a<br>";
    $a++;
}

function contar_recursivo()
{
    static $count = 0;

    $count++;
    echo "$count<br>";
    if ($count < 10) {
        contar_recursivo();
    }
    $count--;
    echo "$count<br>";
}
//contar(); //mostrará el valor 0 de $a

//contar(); //mostrará el valor 1 de $a

contar_recursivo();

?>