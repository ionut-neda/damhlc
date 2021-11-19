<?php
if (isset($_COOKIE['conteo'])) {
    $conteo = $_COOKIE['conteo'] + 1;
} else {
    $conteo = 1;
}
if(setcookie('conteo', $conteo, time()+3600))
    setcookie("Carrito[$conteo]", $item, time()+3600);
?>