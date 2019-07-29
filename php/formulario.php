<?php

if ($_POST){
  $nombreEnviadoPost = trim($_POST["nombre"]);
  $emailEnviadoPost = trim($_POST["email"]);

  if( empty($nombreEnviadoPost) ){
    $errorNombre = "<p style='color:red; font-size:24'>Falta agregar tu nombre</p>";
  }

  if ( empty($emailEnviadoPost)){
    $errorEmail =  "<p style='color:red; font-size:24'>Falta agregar tu email</p>";
  }

  else {
    $envio = "<p style='color:green; font-size:24'>Tus datos fueron enviados</p>";
  }

}

 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form method="post">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" value="<?= isset($nombreEnviadoPost) ? $nombreEnviadoPost : ''; ?>">
      <?=$errorNombre?>
      <br>
      <label for="email">E-mail:</label>
      <input type="text" name="email" value="<?= isset($emailEnviadoPost) ? $emailEnviadoPost : ''; ?>">
      <?=$errorEmail?>
      <?=$envio?>
      <br>
      <input type="submit">
    </form>

  </body>
</html>
