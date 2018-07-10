<?php 
include_once('includes/head.php');
session_start();
if (!isset($_SESSION['email']))
   header("location:includes/login.php");
   $Usuario=$_SESSION['email'];
include_once('includes/menu.php');
?>
<div class="row-fluid" id="contenedor">
   <div class="col-md-2" id="cols">
      <?php include_once('includes/menu-vertical.php'); ?>
   </div>
   <div class="col-md-10" id="cont">
      <h1 id="saludo">Bienvenido: <?php echo $Usuario; ?></h1>
      <br>
      
   </div>
</div>


<?php include_once('includes/footer.php'); ?>