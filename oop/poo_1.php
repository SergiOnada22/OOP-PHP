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
//inclusion de archivo php
        include("clases.php");

//creacion de objeto(instancias), nombre del objeto = construcctor clase para dar estado inicial
        $renault = new Coche();

        $pegaso = new Camion();


        echo "El renault tiene  ".$renault->get_ruedas() . " ruedas <br>";
        echo "El pegaso tiene  ".$pegaso->get_ruedas() . " ruedas <br>";
        echo "El Renault tiene un motor de ".$renault->get_motor() . " cm3 <br>";
        echo "El pegaso tiene un motor de ".$pegaso->get_motor() . " cm3 <br>";

        $renault-> arrancar();
        $pegaso-> arrancar();
        $renault->set_color("blue","Renault");
        $pegaso->set_color("gris","Pegaso")
        

    ?>
</body>

</html>