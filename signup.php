<?php

 ?>
 <head>

   <link rel="stylesheet" type="text/css" href="estilos/mystyle.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 </head>

 <form action="addUser.php" target="_blank" style="border:1px solid #ccc" method="post">
   <div class="container">
     <h1>Registro usando php y phpRedBeans</h1>
     <p>Favor de llenar los espacios para crear una cuenta.</p>
     <hr>

     <label for="email"><b>Correo electrónico</b></label>
     <input type="email" placeholder="@" name="email" required>

     <label for="psw"><b>Password</b></label>
     <input type="password" placeholder="Password" name="psw" required>

     <label for="psw-repeat"><b>Repetir Password</b></label>
     <input type="password" placeholder="Repetir Password" name="psw-repeat" required>

     <label>
       <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Recuerdame
     </label>

     <p>Para crear una cuenta debes estar de acuerdo con nuestros <a href="#" style="color:dodgerblue">Terminos y Privacidad</a>.</p>

     <div class="clearfix">
       <button type="button" class="cancelbtn">Cancelar</button>
       <button type="submit" class="signupbtn">Registrar</button>
     </div>
   </div>
 </form>
