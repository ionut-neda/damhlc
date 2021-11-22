<?php
//se verifica si se han enviado datos desde el formulario
//con método POST
if($_POST['username'])
    echo $_POST['username'];
    //obtiene la variable enviada por GET o POST
if($_POST['email'])
    echo $_REQUEST['email'];
if($_POST['homer_x'] && $_POST['homer_y']){
    //se muestran las coordenadas del clic en el GIF
    echo "x=".$_POST['homer_x'].",y=".$_POST['homer_y'];
}
?>