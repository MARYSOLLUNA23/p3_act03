<!--Alumna: Mar Y Sol Luna Quijada
4BM PROGRAMACIÓN-->
<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,initial-scale=1.0">
 <title>Bajas | Confirmación</title>
 <link rel="stylesheet" href="../css/sitio.css">
 </head>
 <body>
 <?php
 echo '<div class="divTot"><div
 class="divConect">CONECTANDO....</div>';
 $conexion = new mysqli('localhost:3306','root','','bd-maestros');
 $conexion->set_charset("utf8");
 $conexion->query("delete from alta where
 idmaestro='$_REQUEST[idmaestro]'");
 $conexion->close();
 echo '<div class="divConfirm">El trabajador fue dado de baja</div>';
 echo '<img src="../img/Img22.png" class="imgMnsj"></div>';
 ?>
 <br>
 <div>
 <a href="registroMaestros.php">REGRESAR A REGISTROS</a>
 </div>
 <br>
 </body>
</html>