<?php
$sql = new MySQLi('localhost','root', '', 'pruebas');
$SERVER = 'http://'.$_SERVER['SERVER_NAME'].'/distro/';
$caja = "/caja";

if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}