<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <title>APRENDER || ESTUDIANTES</title>
    <link rel="stylesheet" href="./style/estilosAct03.css">
    <header>
        <br>
        <img src="img/logo.gif" alt="Logo de la escuela" width="700em" height="300em" class="imgcenter">
        <br><br>
        <nav id="menu">
            <a href="index.php">INICIO</a>
            <a href="aprender.php">ESTUDIANTES/ORIENTACIÓN</a>
            <a href="registroMaestros.php">REGISTRO DE MAESTROS</a>
        </nav>
    </header>
</head>
<body>
    <div>
        <form action="aprender.php" method=POST>
            <table class="tablaReg" class="becas">
                <tr class="thReg">
                    <th colspan=2>TABLAS DE MULTIPLICAR</th>
                </tr>
                <tr>
                <td class="thTex" colspan=2>
                    <h3>El estudiante tiene de apoyo este sitio web para sus estudios, el podra interactuar con él,
                        además le servira para aprender las tablas de multiplicar. Se puede obtener la tabla de multi
                        plicar de cualquier número, para ello solo hay que ingresar la cantidad deseada</h3>
                </td>
                </tr>
                <tr class="tdReg">
                    <td><input type="text" name="Mult" placeholder="Ingrese la cantidad: "></td>
                    <td> <input type="submit" name="a" value="CALCULAR" class="Boton" ></td>
                </tr>
                <tr class="tdReg">
                    <td colspan=2 >
                        <h4>RESPUESTA:<br>
                        <?php
                            if ($_POST){
                                $Mult=$_POST['Mult'];
                                for( $Contador=1; $Contador<=10; $Contador++)
                                {
                                    echo  "$Mult". " x " . $Contador . " = " . $Mult * $Contador;
                                    echo "<br>";
                                };
                            };
                        ?>
                        </h4>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <footer id="footer">
                <div class="footer_section">
                    <h2>SIGUENOS EN REDES
                    <article><i class="lni lni-facebook-original"></i> Siguenos en Facebook</article>
                    <article><i class="lni lni-instagram-original"></i> Siguenos en Instagram </article>
                    <article><i class="lni lni-whatsapp"></i> Escribenos al 6445789542</article>
                    </h2>
                </div>
                <div class="footer_section">
                    <h2>Autora del sitio:<br>
                    Mar Y Sol Luna Quijada  5BMPR
                    <p>&copy; 2022 CBTIS #37-MARLUNA</p>
                    </h2>
                </div>
            </footer>
</body>
</html>