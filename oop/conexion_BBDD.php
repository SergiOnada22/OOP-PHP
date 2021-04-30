<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 50%;
            border: 3px dotted green;
            margin: auto;
        }
    
    </style>
</head>

<body>

    <?php
    /*Primer paso de todos, declarar: nombre del host, nombre base de datos, usuario y contraseña
    $db_host = "localhost";
    $db_nombre = "pruebas";
    $db_usuario = "root";
    $db_contra = "";
    */
    /*Llamar a la conexion que hemos separado en un archivo distinto*/
    require("datos_conexion.php");

    /*Conectar con la base de datos, para ello es necesario usar la instruccion mysqli_connect y rellenarla con lo campos asignados anteriormente, cadena de conexion,
    Como se puede ver esta conexion la almacenamos en una variable para asi despues poder mencionarla en otros pasos */
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);
    /**Funcion por defecto en caso de que no se pueda connectar con la base de datos */
    if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la base de datos";

        exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra base de datos");

    /**Aqui hacemos que nos coja todos los simbolos latinos de la conexion */
    mysqli_set_charset($conexion, "utf8");
    /*Primera query, consulta a la base de datos */
    
    //$consulta = "SELECT * FROM ARTÍCULOS";

    /**Filtrar todos los articulos españoles, en este caso el campo tiene espacios en blanco y por lo tanto usamos acentos para poder hacer la consulta*/

    $consulta= "SELECT * FROM ARTÍCULOS WHERE `PAÍS DE ORIGEN` ='ESPAÑA'";

    /**Ejecucion de la consulta */
    $resultados = mysqli_query($conexion, $consulta);

    /**Para poder leer todas las lineas de la tabla usamos el fecth */
    /**Imprimimos la primera fila de la base de datos */

    /**Recorrer el registro de la base de datos */
    /**Se supone que la expresiones true, estop dara tantas vueltas como registros tenga la tabla, cuando sea false dejará de iterar
     * hay que intentar trabajar con arrays no indexados, el codigo below esta bien pero no es intuitivo siguienete comment
     
    while ($fila=mysqli_fetch_row($resultados)) {
        echo "<table><tr><td>";
        echo $fila[0] . "</td><td>";
        echo $fila[1] . "</td><td>";
        echo $fila[2] . "</td><td>";
        echo $fila[3] . "</td><td>";
        echo $fila[4] . "</td><td>";
        echo $fila[5] . "</td><td></tr></table>";
        echo "<br> ";
    }*/

    /**Para elllo lo usamos otra funcion para recorrer el array, así podemos editar los indices como si fuese un array asociativo*/
    while ($fila=mysqli_fetch_assoc($resultados)) {
        echo "<table><tr><td>";
        echo $fila['CODIGO ARTICULO'] . "</td><td>";
        echo $fila['NOMBRE ARTÍCULO'] . "</td><td>";
        echo $fila['FECHA'] . "</td><td></tr></table>";
        echo "<br> ";
    }
    /**Se cierra la conexion, esto es para cuando trabajamos con mas de una base de datos,
     * por lo que entonces si, podemos trbajar con mas de una base de datos a la vez
     * para poder optimizar los recursos necesitamos ir cerrandolas
     */
    mysqli_close($conexion);
    ?>

</body>

</html>