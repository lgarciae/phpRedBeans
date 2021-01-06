<?php
  require 'rb.php';

  R::setup('mysql:host=localhost;dbname=entregas','root', '');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email =  htmlspecialchars($_POST["email"]);
    $contra=  htmlspecialchars($_POST["psw"]);
  }

  $u = R::dispense( 'users' );
  $u->correo    = $email;
  $u->contrasena= $contra;
  $id = R::store( $u );

 ?>

<div class="alert alert-success alert-dismissible">
    <a href="signup.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Usuario creado con éxito !!</strong> Regresar al area de Registro.
</div>
