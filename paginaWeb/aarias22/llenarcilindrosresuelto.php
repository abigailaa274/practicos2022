<?php
    $pi=3.14159265359;
    $radio=$_POST['diametro']/2;
    $volumen=$pi*$_POST['altura']*($radio*$radio);
    $tiempom=$volumen/$_POST['litpormin'];



    $a=$_POST['altura'];
    $d=$_POST['diametro'];








    echo"La altura ingresada es $a <br>";
    echo"El diametro ingresado es $d <br>";
    echo"El volumen del cilindro es:  $volumen";
    echo"Los minutos requeridos son:  $tiempom";

?>