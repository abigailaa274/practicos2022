<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formiulario (T. P. 6)</title>
</head>
<body>
<section>
    <form action="formulario1.php">
        <fieldset>
            <legend>Informacion personal:</legend>
            <input class="input" type="text" name="nombre" placeholder="Ingrese su nombre/s">

            <input class="input" type="text" name="apellido" placeholder="Ingrese su apellido/s">

            <input class="input" type="email" name="correo" placeholder="Ingrese su correo electronico"><br>

            <p>Ingrese su fecha de nacimiento:</p>

            <select name="dia">
                <?php
                    for($b=1; $b<=31; $b++){
                        echo"<option>$b</option>";
                    }
                ?>
            </select>
            <select name="mes">
                <option>Enero</option>
                <option>Febrero</option>
                <option>Marzo</option>
                <option>Abril</option>
                <option>Mayo</option>
                <option>Junio</option>
                <option>Julio</option>
                <option>Agosto</option>
                <option>Septiembre</option>
                <option>Octubre</option>
                <option>Noviembre</option>
                <option>Diciembre</option>
            </select>
            <select name="año">
                <?php
                    for($a=1900; $a<=2022; $a++){
                        echo"<option>$a</option>";
                    }
                ?> 
            </select>
            <p>
                Ingrese su sexo:
                <input type="radio" name="sexo">Hombre
                <input type="radio" name="sexo">Mujer
            </p>
        </fieldset>
        
        <fieldset>
            <legend>Intereses y comentarios:</legend>

            <p>A continuacion marque todos los temas de su interes:
                <label><br><input type="checkbox" name="deportes">Deportes</label>
                <br><input type="checkbox" name="pintura">Pintura
                <br><input type="checkbox" name="computacion">Computacion
                <br><input type="checkbox" name="fotografia">Fotografia
                <br><input type="checkbox" name="idiomas">Idiomas
            </p>

            <textarea name="comentario" placeholder="¿Te gustaria dejar un cometario?"></textarea>
        </fieldset>

        <button type="reset">Vaciar formulario</button>
        <button type="submit">Crear cuenta</button>
        <p>¿Ya tenes una cuenta? <a href="login.html">Click aqui para iniciar sesion</a></p>

    </form>
</section>    


</body>
</html>