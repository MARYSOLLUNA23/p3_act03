<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Altas | Confirmación</title>
        <link rel="stylesheet" href="./style/estilosAct03.css">
    </head>
    <body>
        <?php
        echo '<div class="tablaAltas"><div>CONECTANDO....</div>';
        $conexion = new mysqli('localhost:3306','root','','bd-maestros');
        $conexion->set_charset("utf8");
        $conexion->query("INSERT INTO alta
        (idmaestro,nombre,appaterno,apmaterno,materia,telefono,email) VALUES
        ('$_REQUEST[idmaestro]', '$_REQUEST[nombre]', '$_REQUEST[appaterno]',
        '$_REQUEST[apmaterno]', '$_REQUEST[materia]','$_REQUEST[telefono]',
        '$_REQUEST[email]')");
        $conexion->close();
        echo '<div>El trabajador fue dado de alta</div>';
        ?>
        <br>
        <div>
        <a href="registroMaestros.php" class="btnAltas">Regresar al menú principal</a>
        </div>
        <br>
    </body>
</html>