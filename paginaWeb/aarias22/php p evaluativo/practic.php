<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practico evaluativo 1 de PHP</title>
    <link rel="stylesheet" href="practicstyle.css">
</head>
<body>
    <?php
    echo'Hola Mundo <br>';
    $numprimero=rand(1,30);
    $numsegundo=rand(1,30);
    $numresul=$numprimero+$numsegundo;
    echo "$numresul <br>";

    for ($a=1; $a<11; $a++){
        echo"Numero $a <br>";
    }

    $numh=rand(1,100);
    if ($numh<50){
        echo"<h1 class='chico'>$numh</h1>";
    }else{
        echo"<h1 class='grande'>$numh</h1>";
    }

    $dias[0]="Lunes";
    $dias[1]="Martes";
    $dias[2]="Miercoles";
    $dias[3]="Jueves";
    $dias[4]="Viernes";
    $dias[5]="Sabado";
    $dias[6]="Domingo";
    for($a=0; $a<count($dias); $a++){
        echo "$dias[$a] <br>";
    }

    $persona['nombre']="Abigail";
    $persona['edad']=17;
    $persona['direccion']="Cerca del Molino Fenix";
    $persona['telefono']="0303456";
    $persona['nacionalidad']="Argentina";
    
    foreach($persona as $p){
        echo"$p <br>";        
    }
    ?>

</body>
</html>