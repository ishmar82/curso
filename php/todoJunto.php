<?php echo $funcionesEjecutadas = 0 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <?php include("superficie.php");?>
  <?php include("funciones.php"); ?>



  <h1>Todo Junto</h1>

  <p>Crear un archivo todoJunto.php que incluya el archivo funciones.php y superficie.php en donde se definirá una función que reciba los radios de 3 círculos y retorna la mayor superficie entre ambos. Para este ejercicio se deberá reutilizar las funciones ya definidas.
  </p>

  <?php


  function superficieMayor($radio1, $radio2, $radio3){
    $radio = [$radio1, $radio2, $radio3];

    for ($i=0; $i <= count($radio); $i++) {
      $superficie[] = pis($radio[$i]);
    }
    return mayor($superficie[0],$superficie[1],$superficie[2]);
  }

  var_dump(superficieMayor(1,2,3));




     ?>





</html>
