<?php

function errorEnRegistracion(){
  $errores = [];

  $name = trim($_POST['name']);
  $user = trim($_POST['user']);
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
  $verificarPass = trim($_POST['verificarPass']);
  $unColor = $_POST['color'];
  $avatar = $_FILES['avatar'];

  if (empty($name)) {
    $errores["name"] = "Nombre vacío";
  }

  if (empty($user)) {
    $errores["user"] = "Falta usuario";
  }

  if (empty($email)) {
    $errores["email"] = "Te olvidaste el email";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errores["email"] = "Ingresa un email formato válido";
  } elseif (revisarMail($email)) {
    $errores["email"] = "Este mail ya está siendo utilizado";
    }


  if (empty($password)) {
     $errores["password"] = "Te olvidaste de agregar un pass";
  } elseif (strlen($password) <= 5) {
     $errores["password"] = "Son pocos caracteres";
  }

  if (empty($verificarPass)) {
    $errores["verificarPass"] = "Te falta verificar";
  } elseif ($verificarPass != $password) {
    $errores["verificarPass"] = "Tus contraseñas no coinciden";
  }

  if (empty($unColor)) {
    $errores['color'] = "No elegiste color";
  }
/*
  if ($avatar['error'] != 0){
    $errores['avatar'] = "Falta subir la imagen";
  } else {
    $extension = pathinfo($avatar['name'], PATHINFO_EXTENSION);
    if($extension == 'jpg' && $extension == 'jpeg' && $extension == 'png') {
      $errores['avatar'] = "Subí un archivo válido";
    }
  }*/

  return $errores;
}
/*
function saveUser() {
  // 1. Leemos el archivo de usuarios que está en JSON
  $usersList = leerJason();

  $usersList[] = $_POST;

  // 3. Volver a guardar a todos los usuarios con éste último
  file_put_contents('data/user.json', json_encode($usersList));
}

function revisarMail($email){
  $usersList = leerJason();
  foreach ($userList as $user) {
    if ($user['email'] == $email) {
      return true;
    }
  }
  return false;
}

function leerJson(){
  return json_decode(file_get_contents('data/user.json'), true);
}
*/


 ?>
