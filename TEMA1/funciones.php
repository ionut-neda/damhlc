<?php
//El modo estricto en acción
declare(strict_types=1);

//Funciones condicionales
$hacer_algo = true;
/* No podemos llamar a foo() desde aquí
   ya que no existe aún,
  pero podemos llamar a bar() */
bar();
if ($hacer_algo) {
  function foo()
  {
    echo "No existo hasta que la ejecución del programa llegue hasta mí.\n";
  }
}
/* Ahora podemos llamar de forma segura a foo()
   ya que $hacer_algo se evaluó como verdadero */
if ($hacer_algo) foo();

function bar()
{
  echo "Existo desde el momento inmediato que comenzó el programa.\n";
}

//funciones de funciones, con función condicional
function foo1()
{    
    if($GLOBALS["hacer_algo"]){        
        function bar1()
        {
            echo "No existo hasta que se llame a foo1().\n";
        }
    }
}

/* No podemos llamar aún a bar()
   ya que no existe. */

foo1();

/* Ahora podemos llamar a bar(),
   el procesamiento de foo()
   la ha hecho accesible. */

if($GLOBALS["hacer_algo"]) bar1();

//recursividad
function factorial($num){
    if($num==1)
        return $num;
    else
        return $num * factorial($num-1);
}

//Pasar arrays a funciones
$numeros=array(1,2); //array posicional
tomar_array($numeros);
function tomar_array($entrada)
{
    echo "$entrada[0] + $entrada[1] = ".$entrada[0]+$entrada[1]."<br>";
}

//pasar parámetros por referencia
function añadir_algo(&$cadena)
{
    $cadena .= 'y algo más.';
}
$cad = 'Esto es una cadena, ';
añadir_algo($cad);
echo $cad;    // imprime 'Esto es una cadena, y algo más.'


//Uso de parámetros con valores predeterminados en funciones
function hacer_cafe($tipo = "capuchino")
{
    return "Hacer una taza de $tipo.\n";
}
$tipo_cafe;
echo hacer_cafe($tipo_cafe);//Hacer una taza de
echo hacer_cafe(); //Hacer una taza de capuchino
echo hacer_cafe(null);//Hacer una taza de
echo hacer_cafe("espresso");//Hacer una taza de espresso.

// Usar tipos no escalares como valores predeterminados
function hacer_cafe_noescalar($tipos = array("capuchino"), $fabricante_cafe = NULL)
{
    $aparato = is_null($fabricante_cafe) ? "las manos" : $fabricante_cafe;
    return "Hacer una taza de ".join(", ", $tipos)." con $aparato.\n";
}
echo hacer_cafe_noescalar();//Hacer una taza de capuchino con las manos
echo hacer_cafe_noescalar(array("capuchino", "lavazza"), "una tetera");//Hacer una taza de capuchino, lavazza con una tetera.

//Uso correcto de argumentos predeterminados en una función
function hacer_yogur($sabor, $tipo = "acidófilo",$marca = "Danone")
{
    return "Hacer un tazón de yogur $tipo de $sabor marca $marca.\n";
}

echo hacer_yogur("frambuesa"); //Hacer un tazón de yogur acidófilo de frambuesa marca Danone.

//devolver un array como respuesta de una función
function números_pequeños()
{
    return array (0, 1, 2);
}
list ($cero, $uno, $dos) = números_pequeños(); //$cero=0, $uno=1, $dos=2

//Devolver una referencia desde una función
function &devolver_referencia()
{
    return $algunaref;
}

$nuevaref =& devolver_referencia();

//Tipos de devolución
function sum($a, $b): float {
    return $a + $b;
}

// Observe que será devuelto un float.
var_dump(sum(1, 2));

function sum_estricta($a, $b): int {
    return $a + $b;
}

var_dump(sum_estricta(1, 2));//llamada correcta porque los parámetros son de tipo entero
var_dump(sum_estricta(1, 2.5));//llamada errónea porque el segundo parámetro no es entero
?>