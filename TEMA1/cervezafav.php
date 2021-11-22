<?php
    //comprobar si se ha enviado desde el formulario la cerveza favorita
    if($_POST['cerveza'])
        //es un array con un elemento que contiene la cerveza elegida
        $cerveza = $_POST['cerveza'];
 
    //comprobar si la cookie cervezafav esta creada
    if(isset($_COOKIE['cervezafav'])){
        //compruebo si el valor de la misma coincide con el valor
        //enviado desde el formulario                
        if($_COOKIE['cervezafav']!=$cerveza)
            //se modifica la cookie
            setcookie('cervezafav',$cerveza,time()+3600);
    }else{
        //se crea la cookie
        setcookie('cervezafav',$cerveza,time()+3600);
    }
?>