<?php
echo "Ejemplos sobre arrays\n";
echo "---------------------\n";
//ejemplo de array asociativo
$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array);
echo "<br>";
//ejemplo de array posicional
$array = array("foo", "bar", "hello", "world");
var_dump($array);
echo "<br>";
//ejemplo de array híbrido, posicional y asociativo
$array = array(
    "a",
    "b",
6 => "c",
    "d",
);
var_dump($array);
//se muestra el elemento en posición de clave 6
echo "<br>";
echo $array[6];

//array multidimensional
$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);
?>