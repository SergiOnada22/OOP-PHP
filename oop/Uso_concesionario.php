<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php


//se incluye en el html el codigo de php
	include("Concesionario.php");

//Referncia a campo estatico desde fuera de la clase, en este caso se puede manipular
//ya que no es privado y es compartido entre todos
	//Compra_vehiculo::$ayuda=10000;

//no podemos llamar a un objeto ya que estamos tratando con una metodo estatico de clase, ::
//así que hay que llamar a la clase y seguido a su metodo estatico
Compra_vehiculo::descuento_gobierno();

//instanciamos/creamos el objeto, el constructor que se inicializa cuando creamos el objeto
//nos pide que le pasemos el parametro $gama, en este caso compacto
	$compra_Antonio=new Compra_vehiculo("compacto");
	
	$compra_Antonio->climatizador();
	
	$compra_Antonio->tapiceria_cuero("blanco");
	
	echo $compra_Antonio->precio_final() . "<br>";
	
	$compra_Ana=new Compra_vehiculo("compacto");
	
	$compra_Ana->climatizador();
	
	$compra_Ana->tapiceria_cuero("rojo");
	
	echo $compra_Ana->precio_final();
?>
</body>
</html>