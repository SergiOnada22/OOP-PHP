<?php

class Compra_vehiculo
{

	private $precio_base;

	//se comparte con toda la clase(se puede declarar en cualquier sitio de la clase)
	//este campo pertenece a la clase, de forma global
	//static $ayuda=4500;

	//usaremos el private para poder encapsular la clase y que no se pueda manipular 
	//de forma manual
	private static $ayuda = 0;


	function Compra_vehiculo($gama)
	{

		if ($gama == "urbano") {

			$this->precio_base = 10000;
		} else if ($gama == "compacto") {


			$this->precio_base = 20000;
		} else if ($gama == "berlina") {

			$this->precio_base = 30000;
		}
	} // fin constructor

	//creación metodo estatico, pertenecera a la clase y no a ningun objeto/instancia
	static function descuento_gobierno()
	{
		if (date("m-d-y") > "04-01-21") {
			//para referenciar a la variable estatca privada
			self::$ayuda = 4500;
		}
	}




	function climatizador()
	{


		$this->precio_base += 2000;
	} // fin climatizador


	function navegador_gps()
	{

		$this->precio_base += 2500;
	} //fin navegador gps



	function tapiceria_cuero($color)
	{

		if ($color == "blanco") {

			$this->precio_base += 3000;
		} else if ($color == "beige") {

			$this->precio_base += 3500;
		} else {

			$this->precio_base += 5000;
		}
	} // fin tapicería



	function precio_final()
	{

		//al ser estatico, no portenece a ningun objeto, para hacer referencia:
		//utilizaremos el self::$ayuda
		$valor_final = $this->precio_base - self::$ayuda;

		return $valor_final;
	} // fin precio final



}// fin clase
