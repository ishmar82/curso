<?php
require_once ("register-controller.php");


$colores = [
  "wh" => "Blanco",
  "bl" => "Negro",
  "gr" => "Verde",
  "re" => "Rojo",
  "pu" => "Violeta"
];

$correcto = "Enhorabuena!";

if ($_POST) {

  $nombreInPost = trim($_POST['name']);
  $userInPost = trim($_POST['user']);
  $emailInPost = trim($_POST['email']);

  $error = errorEnRegistracion();


  if (!$error) {
    /*saveUser();*/
    header('location:felicitaciones.php');
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

      <form class="mt-5" method="post">
        <div class="mt-3">
          <label for="name" >Nombre:</label>
          <input type="text" class="form-control" name="name" id="name" value="<?= isset($nombreInPost) ? $nombreInPost : ''; ?>">
          <?php if (isset($error["name"])): ?>
              <p class="alert text-danger"> <?= $error["name"]; ?></p>
          <?php endif; ?>
        </div>
        <div class="mt-3">
          <label for="user" >Usuario:</label>
          <input type="text" class="form-control" name="user" id="user" value="<?= isset($userInPost) ? $userInPost : ''; ?>">
          <?php if (isset($error["user"])):?>
              <p class="alert text-danger"> <?= $error["user"]; ?></p>
          <?php endif;?>
        </div>
        <div class="mt-3">
          <label for="email" >Email:</label>
          <input type="text" class="form-control" name="email" id="email" value="<?= isset($emailInPost) ? $emailInPost : ''; ?>">
          <?php if (isset($error["email"])): ?>
            <p class="alert text-danger"><?= $error["email"] ?></p>
          <?php endif; ?>
        </div>
        <div class="mt-3">
          <label for="password" >Password:</label>
          <input type="password" class="form-control" name="password" id="password" value="">
          <?php if (isset($error["password"])): ?>
              <p class="alert text-danger"><?= $error["password"] ?></p>
          <?php endif; ?>
        </div>
        <div class="mt-3">
          <label for="verificarPass" >Verificar Pass:</label>
          <input type="password" class="form-control" name="verificarPass" id="verificarPass" value="">
          <?php if (isset($error["verificarPass"])): ?>
              <p class="alert text-danger"><?= $error["verificarPass"] ?></p>
          <?php endif; ?>
        </div>
        <div class="mt-3">
          <label for="color" >Selecciona un color</label>
          <select class="form-control" name="color">
              <option value="">Elegí un color</option>
                <?php foreach ($colores as $codigo => $unColor): ?>
                  <option value="<?= $codigo ?>"><?= $unColor ?></option>
                <?php endforeach; ?>

          </select>
        </div>
        <?php if (isset($error["color"])): ?>
          <p class="alert text-danger"><?= $error["color"] ?></p>
        <?php endif; ?>

        <div class="mt-3">
          <label for="nombre" >Selecciona un archivo:</label>
          <div class="custom-file">
            <input type="file" name="avatar" class="custom-file-input">
            <label class="custom-file-label">Choose file...</label>
          </div>
        </div>
      <?php if (isset($error["avatar"])): ?>
          <p class="alert text-danger"><?= $error["avatar"] ?></p>
        <?php endif; ?>


        <input type="submit" class="mt-5 btn btn-primary" name="" value="Enviar">

      </form>


    </div>

  </body>
</html>
