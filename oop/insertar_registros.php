<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 
        require("datos_conexion.php");

        $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);
        if (mysqli_connect_errno()) {
            echo "Fallo al conectar con la base de datos";

            exit();
        }

        mysqli_select_db($conexion, $db_nombre) or die("No se encuentra base de datos");

        mysqli_set_charset($conexion, "utf8");

        $consulta = "INSERT INTO `artículos`(`CODIGO ARTICULO`, `SECCIÓN`, `NOMBRE ARTÍCULO`) VALUES ('AR39','DEPORTES','RAQUETA') ";

        $resultados = mysqli_query($conexion, $consulta);

        if (mysqli_query($conexion, $consulta)) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
          }
          
        mysqli_close($conexion);
    
    ?>

</body>
</html>