<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Primer Formulario</title>
    </head>
    <body>
        <form name="datos" action="formProcesos.php" method="POST">
            <label>Nombre: <input type="text" name="name" id="name" placeholder="nombre" /></label><br />
            <label>Email: <input type="email" name="email" id="email" placeholder="mail" /></label><br />
            <label>ciudad: <input type="text" name="direction" id="direction" maxlength="50" placeholder="dirección" /></label><br />
            <label>prefijo de su país: <input type="text" name="prefijo" id="prefijo" maxlength="3" value="+" /></label><br />
            <label>teléfono: <input type="number" name="telefono" id="telefono" maxlength="9" placeholder="teléfono" /></label><br />
            <input type="submit" value="enviar datos" name="button" />

        </form>
        <?php
        echo "<h2>escriba en el formulario su nombre para ser devuelto</h2>"

        ?>
    </body>
</html>
