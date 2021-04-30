<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    //Tiene que leer y ejecutar todo el codigo antes del html(body)
    //todo en un mismo documento y lo ejecutamos todo como funcion:

    function ejecuta_consulta($labusqueda)
    {

        //$busqueda = $_GET["buscar"];

        require("datos_conexion.php");

        $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);
        if (mysqli_connect_errno()) {
            echo "Fallo al conectar con la base de datos";

            exit();
        }

        mysqli_select_db($conexion, $db_nombre) or die("No se encuentra base de datos");

        mysqli_set_charset($conexion, "utf8");

        $consulta = "SELECT * FROM ARTÍCULOS WHERE `NOMBRE ARTÍCULO` LIKE '%$labusqueda%'";

        $resultados = mysqli_query($conexion, $consulta);


        while ($fila = mysqli_fetch_assoc($resultados)) {
            echo "<table><tr><td>";
            echo $fila['CODIGO ARTICULO'] . "</td><td>";
            echo $fila['SECCIÓN'] . "</td><td>";
            echo $fila['NOMBRE ARTÍCULO'] . "</td><td>";
            echo $fila['FECHA'] . "</td><td>";
            echo $fila['PAÍS DE ORIGEN'] . "</td><td>";
            echo $fila['PRECIO'] . "</td><td></tr></table>";
            echo "<br> ";
        }

        mysqli_close($conexion);
    }
    ?>

</head>

<body>
    <?php
    //
        $mibusqueda = $_GET["buscar"];
//almacenamos la pagina del servidor que tiene que llamar al formulario en este caso ella misma, SELF
        $mipag=$_SERVER["PHP_SELF"];
//lo pirmero que hara es entrar al else ya que no habrá ninguna busqueda, cuando se entra la info se almacena 
//y se repoduce en una segunda carga de pantalla
        if($mibusqueda!=NULL){
            ejecuta_consulta($mibusqueda);
        }else{
            echo("<form action= '" . $mipag . "'method='get'>
            <label>Buscar:<input type='text' name='buscar'></label>
            <input type='submit' name='enviando' value='Dale!'>
            <form>");
        }
    ?>
    

</body>

</html>