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
    
        $dia=DATE("d");
        if ($dia<10) {
            echo "Disponible para pagar";
        }else
        {
            echo "Lo sentimos, el pago se ha vencido";
        }


    ?>

</body>
</html>