<!DOCTYPE html>
<html>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Consultas | Confirmación</title>
        <link rel="stylesheet" href="./style/estilosAct03.css">
    </head>
 <body>
    <?php
    $conexion= new mysqli('localhost:3306','root','','bd-maestros');
    $conexion->set_charset("utf8");
    $registros=$conexion->query("select
    idmaestro,nombre,appaterno,apmaterno,materia,telefono,email from
    alta where idmaestro='$_REQUEST[idmaestro]'");
    if($reg=mysqli_fetch_array($registros)){
    ?>
    <div class=tablaReg>
    <table class="tablaAltas" border=2>
     <tr>
    <td colspan=3> CONECTANDO....</td>
    </tr>
    <tr>
    <td class="tdAltas">Id del maestro:</td>
    <td class="tdAltas"><?php echo $reg['idmaestro']?></td>
    </tr>
    <tr>
    <td class="tdAltas">Nombre: </td>
    <td class="tdAltas"><?php echo $reg['nombre']?></td>
    </tr>
    <tr>
    <td class="tdAltas">Apellido Paterno: </td>
    <td class="tdAltas"><?php echo $reg['appaterno']?></td>
    </tr>
    <tr>
    <td class="tdAltas">Apellido Materno: </td>
    <td class="tdAltas"><?php echo $reg['apmaterno']?></td>
    </tr>
    <tr>
    <td class="tdAltas">Materia: </td>
    <td class="tdAltas"><?php echo $reg['materia']?></td>
    </tr>
    <tr>
    <td class="tdAltas">Teléfono: </td>
    <td class="tdAltas"><?php echo $reg['telefono']?></td>
    </tr>
    <tr>
    <td class="tdAltas">Emails: </td>
    <td class="tdAltas"><?php echo $reg['email']?></td>
    </tr>
    <tr>
    <td colspan=3><?php
    echo '<br><div >Mostrando datos de registro....</div>';
    }
    $conexion->close();
    echo "<br><br>";
    ?></td>
    </tr>
    <tr>
    <td colspan=3>
        <div class="btnAltas" style="margin: 2% 3% 2% 33%;"><a href="registroMaestros.php">REGRESAR A REGISTROS</a></div></td>
    </tr>
    </table>
    </div>
 </body>
</html>