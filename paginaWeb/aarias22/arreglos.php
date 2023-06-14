<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
</head>
<body>
    <br><br><br><br><br>
    <?php
        $dias[0]="Lunes";       /*alt + 91*/
        $dias[1]="Martes";
        $dias[2]="Miercoles";
        $dias[3]="Jueves";
        $dias[4]="Viernes";
        $dias[5]="Sabado";
        $dias[6]="Domingo";

        echo count($dias)."<br>";
        /*echo $dias[0];
        echo $dias[1];
        echo $dias[2];
        echo $dias[3];
        echo $dias[4];
        echo $dias[5];
        echo $dias[6];*/
        for($a=0; $a<count($dias); $a++){
            echo $dias[$a]."<br>";
        }
        echo"<br>";
        $persona['nombre']='Pablo';                        /*alt 39 comillas simples*/
        $persona['dni']='33429';
        $persona['direccion']='221B of Baker Street';
        $persona['familia']='madre, padre, hermano';

        echo count($persona)."<br>";
        echo $persona['nombre']."<br>";
        echo $persona['dni']."<br>"."<br>"."<br>";

        foreach($persona as $dato){
            echo $dato."<br>";
        }
    ?>
</body>
</html>