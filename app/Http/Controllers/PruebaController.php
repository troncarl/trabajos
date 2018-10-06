<?php

namespace prueba2\Http\Controllers;

/**
 * 
 */

use prueba2\Http\Controllers\Controller;

class PruebaController extends Controller
{
	
	public function prueba(){

		return 'Estoy dentro de PruebaController :D';
	}


	public function index2($name,$ln ='lastname'){
		return 'hola soy '.' '. $name.' '.$ln;
	}
}