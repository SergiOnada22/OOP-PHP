<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="pagina_busqueda.php" method="get">
        <!--Aqui es muy importante el name="buscar", a partir de este podemos acceder a lo que introduciomos por teclado-->
        <label>Buscar: <input type="text" name="buscar"></label>
        <input type="submit" name="enviando" value="Dale!"></input>
    </form>
</body>

</html>