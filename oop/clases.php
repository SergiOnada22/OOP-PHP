
<?php

//creacion de la clase coche

class Coche{
    //Aqui se encapsula la variable ruedas, para poder acceder a dichas variable
    //metodos getter y setter para poder acceder a dicha variable
    //metodo setter nos permite modificar, variables, meotodos,...
    //getter nos permite ver las propiedades de las variables
    //private $ruedas; solo se podra acceder desde la misma clase
    //var es como public, por default
    protected $ruedas;
    var $color;
    protected $motor;


    //metodo constructor, estado incial del objeto
    function Coche(){
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;
    }

    //aqui el getter que nos permite acceder a la variable ruedas, nos devuelve el estado
    //básicamente para darle accesos a las variables encapsuladas
    //de esta forma solo se puede modificar desde dentro de la clase 
    function get_ruedas(){

        return $this->ruedas;
    }

    function get_motor(){
        return $this->motor;
    }

    //metodo setter nos permite modificar el estado de las variables(establece_color())
    //la hemos usado sin saberlo anteriormente
    
    

    function arrancar()
    {

        echo "Estoy arrancando<br>";
    }

    function frenar()
    {

        echo "estoy frenando<br>";
    }

    function girar()
    {

        echo "estoy girando<br>";
    }

    function set_color($color_coche, $nombre_coche)
    {
    //como ya hemos asignado el color en el constructor tenemos que refenciar el parametro
    //que pasamos por la funcion para guardar el valor en color:
        $this->color = $color_coche;

        echo "El color de " . $nombre_coche . " es: " . $this->color . "<br>";
    }
}

/********* CLASE CAMION ************************************************************/
//Herencia de clase coche, absorvemos todas las propiedades y todas la funciones o metodos
//en este caso clase padre o bien superclase->coche
//clase hijo o bien subclase-> camion
//se pueden sobreescribir metodos y añadir diferentes funciones y metodos
class Camion extends Coche
{
    //metodo constructor, estado incial del objeto
    function Camion()
    {
        $this->ruedas = 8;
        $this->color = "gris";
        $this->motor = 2600;
    }

    function establece_color($color_camion, $nombre_camion)
    {
        $this->color = $color_camion;

        echo "El color de " . $nombre_camion . " es: " . $this->color . "<br>";
    }
    
    function arrancar(){
        //llama al metodo de la clase padre
        //con los dos puntos repetidos referenciamos a los metodos de la clase padre
        //este lo que hace es ejecutar el metodo por completo de la clase padre
        parent::arrancar();
        echo "Camion arrancado";
    }
}

/***************************************************EXPLICACIÓN
//instancia de clase coche
//cada vez que creamos un nuevo objeto, coge las caracteristicas que le hemos indicado
//en el constructor de la clase, p.e. ferrari tienes 4 ruedas y es un 1600
    $ferrari = new Coche();
    $renault = new Coche();


    //llamada a metodo para que nuestro objeto de tipo coche haga dicha tarea
    //porque puede hacerla, ha sido programada en la clase
    $renault->girar();


    //acceder a una propiedad del objeto declarada en la clase, en el constructor(estado inicial)
    echo $renault ->ruedas . "<br>";

    //llamamos al metodo y le pasamos el parámetro que nos pide, y asi se cambia una propiedad
    $renault->establece_color("Rojo","Seat");


    
    MODULARIZACION:

    -Descomponer el programa en partes independientes que conjutamente cuando se unen funcionan
    en su totalidad. Si alguna de estas partes independientes dejan de funcionar no dejaran que 
    los demas componentes no funcionen.

    -Tambien sirve para encontrar más facilmente posibles errores.

    -Habrá módulos que sean del todo independientes y habrá otros que dependeran o que se 
    podran modificar desde otros modulos.

    MODIFICADORES DE ACCESO:

    public: acceso desde cualquier otra parte

    private: accesdible desde propia clase, aqui se denomina la encapsulacion, solo desde aqui se pueden
    acceder a las caracteristicas del objeto.

    protected: accesible desde la propia clase y clases heredadas.




 *******************************************************************/

