<?php

require_once ("register-controller-b.php");

$colores = [
  "wh" => "Blanco",
  "bl" => "Negro",
  "gr" => "Verde",
  "re" => "Rojo",
  "pu" => "Violeta"
];

if ($_POST) {

$nombreEnPost = trim($_POST['name']);
$userEnPost = trim($_POST['user']);
$emailEnPost = trim($_POST['email']);

$error = errorEnRegistracion();

if ( !$error ) {
  var_dump($_POST);

  saveUser ();

  header('location: felicitaciones.php');
  exit;
}


}

$title = "Register";
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $title?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>

  <body class="d-flex justify-content-center">
    <div class="col-8 m-4 ">
      <h2>Register</h2>

      <form class="mt-5" method="post" enctype="multipart/form-data">
        <div class="mt-3">
          <label for="name" >Nombre:</label>
          <input type="text" class="form-control" name="name" id="name" value="<?= isset($nombreEnPost) ? $nombreEnPost : ''; ?>">
          <?php if (isset($error["name"])): ?>
              <p style="color:red;"><?= $error["name"] ?></p>
          <?php endif; ?>
        </div>
        <div class="mt-3">
          <label for="user" >Usuario:</label>
          <input type="text" class="form-control" name="user" id="user" value="<?= isset($userEnPost) ? $userEnPost : ''; ?>">
          <?php if (isset($error["user"])): ?>
              <p style="color:red;"><?= $error["user"] ?></p>
          <?php endif; ?>
        </div>
        <div class="mt-3">
          <label for="email" >Email:</label>
          <input type="text" class="form-control" name="email" id="email" value="<?= isset($emailEnPost) ? $emailEnPost : ''; ?>">
          <?php if (isset($error["email"])): ?>
              <p style="color:red;"><?= $error["email"] ?></p>
          <?php endif; ?>
        </div>
        <div class="mt-3">
          <label for="password" >Password:</label>
          <input type="password" class="form-control" name="password" id="password" value="">
          <?php if (isset($error["password"])): ?>
              <p style="color:red;"><?= $error["password"] ?></p>
          <?php endif; ?>
        </div>
        <div class="mt-3">
          <label for="verificarPass" >Verificar Pass:</label>
          <input type="password" class="form-control" name="verificarPass" id="verificarPass" value="">
          <?php if (isset($error["verificarPass"])): ?>
              <p style="color:red;"><?= $error["verificarPass"] ?></p>
          <?php endif; ?>
        </div>
        <div class="mt-3">
          <label for="color" >Selecciona un color</label>

          <select class="form-control" name="color">
              <option value="">Elegí un color</option>
                  <?php foreach ($colores as $codigo => $unColor): ?>
                      <option value="<?= $codigo ?>"><?= $unColor?></option>
                  <?php endforeach; ?>
          </select>
          <?php if (isset($error["color"])): ?>
              <p style="color:red;"><?= $error["color"] ?></p>
          <?php endif; ?>
        </div>
        <div class="mt-3">
          <label for="nombre" >Selecciona un archivo:</label>
          <div class="custom-file">
            <input type="file" name="avatar" class="custom-file-input">
            <label class="custom-file-label">Choose file...</label>
          </div>
          <?php if (isset($error["avatar"])): ?>
              <p style="color:red;"><?= $error["avatar"] ?></p>
          <?php endif; ?>
        </div>

        <input type="submit" class="mt-5 btn btn-primary" name="" value="Enviar">

      </form>


    </div>

  </body>
</html>
