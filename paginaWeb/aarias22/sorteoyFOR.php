<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $numero=rand(1, 100);
        if ($numero<10) {
         echo "El numero ganador tiene una cifra";
        }

        else {
            if($numero<100){
                echo "El numero ganador tiene dos cifras";
            }
            else{
                echo"El numero ganador tiene tres cifras";
            }
        }
        echo"<br>";
        echo $numero;
        echo"<br><br><br>";

        for($a=1; $a<=100; $a++){
            echo"$a <br>";
        }
        echo"<br><br><br>";

        for($b=1; $b<=100; $b++){
            if ($b%2==0){
                echo"$b <br>";
            }
            
        }

        for($c=1; $c<=100; $c++){
            if ($c%2>0){
                echo"$c <br>";
            }
            
        }
        echo"<br><br><br>";

    ?>
</body>
</html>