<?php

//Controlador frontal


//Carga config, modelo y controlador

require_once __DIR__ .'/../app/config.php';
require_once __DIR__ .'/../app/model.php';
require_once __DIR__ .'/../app/controller.php';

//Menu, mapeo


$map = array(
'inicio' => array('controller' =>'Controller', 'action' =>'inicio'),
'listar' => array('controller' =>'Controller', 'action' =>'listar'),
'insertar' => array('controller' =>'Controller', 'action' =>'insertar'),
'buscar' => array('controller' =>'Controller', 'action' =>'buscarPorNombre'),
'ver' => array('controller' =>'Controller', 'action' =>'ver')
);


//Parseo de la ruta

if(isset($_GET['ctl'])) {
	if(isset($map[$_GET['ctl']])) {
	   $ruta=$_GET['ctl'];
	} else {
		header('Status: 404 Not Found');
		echo'<html><body><h1>Error 404:No existe la ruta<i>'.
		$_GET['ctl'].
		'</p></body></html>';
	exit;
	}
}else {
	$ruta='inicio';
}
$controlador=$map[$ruta];


//Ejecucion del controlador asociado a la ruta

if (method_exists($controlador['controller'],$controlador['action'])) {
	call_user_func(array(new $controlador['controller'],$controlador['action']));
} else {

	header('Status: 404 Not Found');
	echo'<html><body><h1>Error 404:No existe la ruta<i>'.
		$controlador['controller'].
		'->'.
		$controlador['action'].
		'</i> No existe</h1></body></html>';

}


?>
