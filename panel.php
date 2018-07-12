<?php 
require('config.php');
include_once('includes/head.php');
session_start();
if (!isset($_SESSION['email']))
   header("location:includes/login.php");
$Usuario=$_SESSION['email'];
?>
<div class="row-fluid" id="contenedor">
   <!--<div class="row-fluid" id="ct">-->
      <?php include_once('includes/menu.php');?>
      <?php include_once('includes/menu-vertical.php'); ?>
      
         <h1 id="saludo">Bienvenido: <?php echo $Usuario; ?></h1>
         <br>

         <div class="container-fluid">
            <div class="row-fluid">
               <form>
                 <div class="form-group">
                   <label for="exampleInputEmail1">Email address</label>
                   <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                 </div>
                 <div class="form-group">
                   <label for="exampleInputPassword1">Password</label>
                   <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                 </div>
                 <div class="checkbox">
                   <label>
                     <input type="checkbox"> Check me out
                   </label>
                 </div>
                 <button type="submit" class="btn btn-default">Submit</button>
               </form><br>
            </div>
         </div>
      
<?php include_once('includes/footer.php'); ?>