<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="llenarcilindrosresuelto.php">
        <p>Calculo de tiempo de llenado del cilindro</p>
        <p>Ingrese la altura del cilindro en metros</p>
        <input class="input" type="number" name="altura" placeholder="">
        <p>Ingrese el diametro del cilindro en metros</p>
        <input class="input" type="number" name="diametro" placeholder="">
        <p>Ingrese el el caudal de litros por minuto</p>
        <input class="input" type="number" name="litpormin" placeholder="">
        <button type="submit">Calcular</button>

    </form>
</body>
</html>