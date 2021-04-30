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

    //como pasar datos mediante formulario a la BBDD
    //Para poder hacerlo habrá que crear un formulario

    $cod = $_GET["c_art"];
    $sec = $_GET["seccion"];
    $nom = $_GET["n_art"];
    $pre = $_GET["precio"];
    $fec = $_GET["fecha"];
    $por = $_GET["p_orig"];


    require("datos_conexion.php");

    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);
    if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la base de datos";

        exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra base de datos");

    mysqli_set_charset($conexion, "utf8");

    //para eliminar registros

    $consulta = "DELETE FROM `artículos` WHERE `CODIGO ARTICULO`='$cod'";
       //aqui se ejecuta la consulta
    $resultados = mysqli_query($conexion, $consulta);
    //chekamos si se ejecuta correctamente la consulta
    if($resultados == false){
        echo "la cagaste chingón";
    }else{
        echo "gg bro <br><br>";

        echo "<table border=1px><tr><td>$cod</td></tr>";
        echo "<tr><td>$sec</td></tr>";
        echo "<tr><td>$nom</td></tr>";
        echo "<tr><td>$fec</td></tr>";
        echo "<tr><td>$por</td></tr>";
        echo "<tr><td>$pre</td></tr></table>";


        
    }
/*
    if (mysqli_query($conexion, $consulta)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
    }*/

    mysqli_close($conexion);

    ?>
</body>

</html>