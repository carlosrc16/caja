<?php
$sql = new MySQLi('localhost','root', '', 'pruebas');

if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}