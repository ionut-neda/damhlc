<?php
//Asociatividad
$a = 3 * 3 % 5; // (3 * 3) % 5 = 4
// la asociatividad del operador ternario difiere de C/C++
$a = (true?0:true)?1:2; // (true ? 0 : true) ? 1 : 2 = 2
echo "a=$a<br>";

$a = 1;
$b = 2;
$a = $b += 3; // $a = ($b += 3) -> $a = 5, $b = 5
echo "a=$a<br>";

//Orden de evaluación no definido
$a = 1;
$a = $a + $a++; // podría mostrar 2 o 3
echo "a=$a<br>";

$i = 1;
$array[$i] = $i++; // podría establecer el índice a 1 o 2
echo "i=$i<br>";

//Misma precedencia
$x = 4;
// esta línea podría resultar en una salida inesperada:
echo "x=$x menos uno igual a " . $x-1 . ", o eso espero<br>";
// ya que se evalúa como esta línea:

// la precedencia deseada se puede forzar con paréntesis:
echo "x=$x menos uno igual a " . ($x-1) . ", o eso espero<br>";

//identidad
$a=10;
echo +$a;

//negación
$a = false;
echo -($a)?"true":"false";

//operador de ejecución
$var = `ls -al`; // Comando linux para mostrar un listado de archivos completo del directorio actual
echo "<pre>$var</pre>";

//operadores de comparación con significado especial para arrays
$x=array("uno"=>1,"dos"=>2,"tres"=>3,"cuatro"=>4);
$y=array("uno"=>1,"dos"=>2,"tres"=>3,"cuatro"=>4);
echo "Igualdad estricta, iguales<br>";
echo $x===$y?"iguales":"distintos";
echo "<br>";

$y=array("uno"=>1,"tres"=>3,"dos"=>2,"cuatro"=>4);
echo "Igualdad estricta, distintos<br>";
echo $x===$y?"iguales":"distintos";
echo "<br>";

echo "Igualdad NO estricta, iguales<br>";
echo $x==$y?"iguales":"distintos";
echo "<br>";

//unión de arrays con el operador +
$a = array("x" => "perro", "y" => "gato");
echo "\$a<br>";
var_dump($a);
$b = array("x" => "pato", "y" => "liebre", "z" => "conejo");
echo "<br>\$b<br>";
var_dump($b);
// Unión de $a y $b
$c = $a + $b;
echo "<br>Unión de \$a y \$b:<br>";
var_dump($c);
echo "<br>";
//operador para referencias
$a = 3;
$b = &$a; // $b es una referencia para $a

print "a=$a<br>"; // muestra 3
print "b=$b<br>"; // muestra 3
print "Se asigna 4 a la variable a<br>";
$a = 4; // cambia $a

print "a=$a<br>"; // muestra 4
print "b=$b<br>"; // muestra 4 también, dado que $b es una referencia para $a modificada

?>