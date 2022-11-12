<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Administración | Altas</title>
    <link rel="stylesheet" href="./style/estilosAct03.css">
    </head>
 <body>
    <form action="alta2.php" method="POST">
    <table class="tablaAltas">
    <tr>
    <td class="tdAltas">Ingrese el id del maestro:</td>
    <td><input type="text" name="idmaestro" class="input"></td>
    </tr>
    <tr>
    <td class="tdAltas">Ingrese el nombre completo:</td>
    <td><input type="text" name="nombre" class="input"></td>
    </tr>
    <tr>
    <td class="tdAltas">Ingrese el apellido paterno :</td>
    <td><input type="text" name="appaterno" class="input"></td>
    </tr>
    <tr>
    <td class="tdAltas">Ingrese la apellido materno:</td>
    <td><input type="text" name="apmaterno" class="input"></td>
    </tr>
    <tr>
    <td class="tdAltas">Materia:</td>
    <td class="tdInput"><input type="text" name="materia" class="input"></td>
    </tr>
    <tr>
    <td class="tdAltas">Ingrese el teléfono:</td>
    <td><input type="text" name="telefono" class="input"></td>
    </tr>
    <tr>
    <td class="tdAltas">Email del maestro:</td>
    <td><input type="text" name="email" class="input"></td>
    </tr>
    <td colspan="2"><input type="submit" value="DAR DE ALTA" class="btnAltas"></td>
    </tr>
    </table>
    </form>
 </body>
</html>