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
    //php nos permite declarar el array de forma separada, automáticamente asigna el índice
        /*$semana[]="Lunes";
        $semana[]="Martes";
        $semana[]="Miercoles";*/

        /*$semana = ["Lunes", "Martes", "Miercoles", "Jueves", "Vierenes", "Sabado","Domingo"];
        print_r($semana);*/

        //ARRAY ASOCIATIVO
        //con el operador flecha asociamos un nombre con su posicion, en la posicion almacenamos dato/valor
        //pasara de ser [0] a ser ["Juan"] -> echo $datos["Nombre"]= Juan;
       /* $datos= ["Nombre"=>"Juan","Apelllido"=>"Gómez", "Edad"=>"27"];

       if(is_array($datos)){

            echo "Es un array <br>";
       }else{
           echo "No es un array <br>";
       }

       //foreach permite recorrer arrays asociativos
       //donde clave equivale a nombre y valor a Juan, podemos ponerle el valor que queramos para nombrar estas variables
       foreach ($datos as $clave=>$valor){
            echo "$clave le corresponde $valor <br>"; 
       }
       //Con el count hacemos el .lenght, leemos la longitud de los valores del array
       $semana = ["Lunes", "Martes","Miercoles", "Jueves"];

       for ($i=0; $i < count($semana); $i++) { 
          echo $semana[$i] . "<br>";
       }

       //Añade elemento a array indexado, simple
       $semana[]="Viernes";
       //recorremos de nuevo el array y se habrá añadido el elemento ultimo
       for ($i=0; $i < count($semana); $i++) { 
        echo $semana[$i] . "<br>";
     }

        //añadir elemento a array asociativo, con su clave(indice) y su valor(valor en posicion)
        $datos["País"]= "España";

        foreach ($datos as $clave=>$valor){
            echo "$clave le corresponde $valor <br>"; 
       }*/
       /************************************************************************************************************************************************* */
       //ordenar array
       /*
       $semana = ["Lunes", "Martes","Miercoles", "Jueves"];

       //ordenar array por orden alfabético
       sort($semana);

       for ($i=0; $i < count($semana); $i++) { 
        echo $semana[$i] . "<br>";
     }*/

     /*************************************************************************************************************************************************** */

     //ARRAY MULTIDIMENSIONAL
     //hay que elegir nombres identificativos una vez se crea la segunda dimensioon del array
     //tanto fruta como tropical p.e. son nombres identificativos el valor de los cuales es kiwi
     $alimentos = ["Fruta"=>["tropical"=>"kiwi",
                             "citrico"=>"Mandariana",
                             "otros"=>"Manzana"], 
                   "Leche"=>["animal"=>"vaca",
                             "vegetal"=>"coco"],
                   "Carne"=>["vacuno"=>"lomo",
                             "porcino"=>"pata"]
                ];
    //acceder a los valores del array multidimensional
    //Ponemos los dos identificativos y nos carga el valor 
    echo $alimentos["Fruta"]["tropical"];

    //recorrer array multidimensional, list crea un listado
    //necistamos dos nombres uno para identificar 1a dimension y otro para la otra
    //key_alim se refiere a fruta leche y carne
    //each function ius deprecated
    /*foreach ($alimentos as $key_alim => $alim) {
        
        echo "$key_alim:<br>";
        
        while(list($key,$value)=$alim){

            echo "$clave=$valor<br>";

        }

        echo "<br>";
    }*/

    echo var_dump($alimentos);

    ?>

</body>
</html>