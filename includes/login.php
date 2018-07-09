<?php
require('config.php');
session_start();
$usuario = $_POST['email'];
$pass = $_POST['password'];

$query = 'SELECT nombre,claves FROM usuarios WHERE nombre="'.$usuario.'" AND claves="'.$pass.'"';
$con = $sql->Query($query);
$rows = $con->num_rows;

if($rows > 0) {
//$row = $result->fetch_assoc();
   $_SESSION['logged'] = 'yes';
   $_SESSION['email'] = $usuario;
   echo '<script>window.location="../panel.php"</script>';
} else {
//exit(header("Location: ../index.php"));
   echo '<script>alert("Usuario y/o Contrasena incorrectos");
   window.location="../index.php"</script>'; 
}