<?php
require('config.php');
include_once('includes/head.php');
?>
<section class="row-fluid login-form">
   <section>
      <form action="includes/login.php" method="post" role="login">
         <!--<img class="" id="iconogr" src="img/logo.png" alt="" width="60px" height="50px" />-->
         <p class="texto1">Caja</p>
         <br>
         <br>
         <div class="form-group">
            <input type="text" name="email" id="email" required class="form-control" placeholder="Nombre del usuario" autocomplete="off"/>
            <span class="fas fa-user"></span>
         </div>

         <div class="form-group">
            <input type="password" name="password" id="password" required class="form-control" placeholder="Contraseña" />
            <span class="fas fa-unlock-alt"></span>
         </div>

         <button type="cubmit" name="go" class="btn btn-primary btn-block" id="btnLogin">Ingresar&nbsp;&nbsp;<span class="fas fa-sign-in-alt"></span></button>
         <!--<a href="#">Sistema diseñado</a> por <a href="#">CarlosRdz</a> -->
         simon simon simon simono
      </form>
   </section>
</section>
<!--<?php //echo $caja; ?>/css/estilos.css; ?>-->
<?php include_once('includes/footer.php');?>