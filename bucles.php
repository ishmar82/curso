<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bucles</title>
  </head>
  <body>
    <h1>Bucles</h1>

    <h2>Ej 1</h2>
    <p>Mostrar la tabla de multiplicar del 2 utilizando un ​ for​​ .</p>



    <hr>

    <h2>2</h2>
    <p>Un bucle while que cuente desde 100 hasta 85 (fíjate que en este caso es decreciente)</p>

    <?php
    $a = 100;
    while ($a > 84) {
      echo $a . ", ";
      $a--;
    }
    ?>

    <hr>

    <h2>3</h2>
    <p>Un bucle while que a partir de una variable $contador que toma valores de 1 a 5, muestre
por pantalla el doble del valor de $contador, es decir, que muestre 2, 4, 6, 8, 10.</p>

  <?php
  $contador = [1, 2, 3, 4, 5];

  $i = 0;
  while ($i <count($contador)){
    echo $contador[$i] * 2 ." ";
    $i++;
  }

  ?>

  <hr>

  <h2>4</h2>
  <p>Utilizando un ​ while​​ haremos un programa que tire una moneda (seleccionará un número
al azar que puede ser 0 o 1) hasta que saque 5 veces cara (el número 1). Al terminar,
debe imprimir cuántos tiros de monedas llevó obtener 5 veces cara</p>

  <hr>

  <h2>5</h2>
  <p>Definir un ​ array​​ con 5 strings que sean nombres. Recorrer este array para imprimir cada
uno de los nombres en pantalla.<br>
a. Resolver este problema con un ​ for​ .<br> ​
b. Resolver este problema con ​ while​​ .<br>
c. Resolver este problema con un ​ do/while​​ .<br>
d. Resolver este problema con un ​ foreach​ . ​</p>

<br><br><strong>
  <?php

  $equipoDeTrabajo = ["Migue", "Alan", "Emi", "Exe", "Facu"];
  $integrante = [];

  for ($i=0; $i < count($equipoDeTrabajo) ; $i++) {
    echo $equipoDeTrabajo[$i] .", ";
  }
  echo "<br>";
  $b = 0;
  while ($b < count($equipoDeTrabajo)) {
    echo $equipoDeTrabajo[$b].", ";
    $b++;
  }
  echo "<br>";


</strong>



  </body>
</html>
