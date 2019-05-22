<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $numeros = [1, 5, 3];

    function unoAlDiez(){
      $resultado = [];
      for ($i = 1; $i < 11; $i++){
        $resultado[$i] = $i;
      }
      return $resultado;
    }


 ?>
 <br><br>

<h2>1</h2>
<p>Generar un archivo llamado funciones.php:<br>
- Definir una función mayor() que reciba 3 números y devuelva el mayor.<br>
- Definir una función tabla() que reciba un parámetro base, un parámetro límite, y devuelve un array con la secuencia de números desde el numero base hasta el numero limite.<br>
- Modificar mayor() para que si recibe sólo 2 parámetros, compare a esos dos números con el número 100.<br>
- Modificar tabla para que si recibe un sólo parámetro utilice el número 100.</p>

 <?php


function mayor($num1, $num2, $num3){
  if ($num1 > $num2 && $num1 > $num3) {
    $numMayor = $num1;
  } elseif ($num2 > $num1 && $num2 > $num3) {
    $numMayor = $num2;
  } else {
    $numMayor = $num3;
  }
  return $numMayor;
}

  echo mayor(1, 3, 5);
  ?>


<br><br>

<?php

function tabla($numMin, $numMax){
  for ($i=0; $i <= $numMax; $i++) {
    $resultado[] = $i;
  }
return $resultado;
}

  $numeros[] = tabla(0, 50) ;



 ?>



  </body>
</html>
