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

    <?php
    /*for ($i=1; $i < 11 ; $i++) {
      echo "2 x " . $i . " = ". $i * 2 ."<br>";
    }*/

    $resultado = [];
    for ($i = 1; $i < 11; $i++) {
      echo "2 x ". $i . " = " . $i * 2 . "<br>";
    }

    ?>

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
  $i = 0;
  while ($i < count($equipoDeTrabajo)) {
    echo $equipoDeTrabajo[$i].", ";
    $i++;
  }
  echo "<br>";

  $i = 0;
  do {
    echo $equipoDeTrabajo[$i] . ", ";
    $i++;
  } while ($i < count($equipoDeTrabajo));

echo "<br>";

$equipoDeTrabajo[2] = "Martín";

  foreach ($equipoDeTrabajo as $integrante) {
    echo $integrante . ", ";
  }

  $equipoDeTrabajo[2] = "Martín";

  ?>
</strong>

  <h2>6</h2>
  <p>Definir un array con 10 números aleatorios entre 0 y 10. Recorrer este array para imprimir
todos los números. La ejecución debe terminarse si alguno de los números encontrados es
un 5 (Se debe imprimir “Se encontró un 5!”)</p>

<?php

  $numeros = [];

  for ($i=0; $i < 10; $i++) {
	$numeros[$i] = $i;
  }
  shuffle($numeros);

  $a = 0;
  while ($numeros[$a] != 5) {
    echo $numeros[$a] . ", ";
    $a++;
    if ($numeros[$a] == 5) {
      echo "Se encontró un 5!";
    }
  }

  echo  "<br><br><br><br><br><br>";

  $numeros = [];

  for ($i=0; $i < 10; $i++) {
    $numeros[] = rand(0, 10);

    if ($numeros[$i] != 5) {
    echo $numeros[$i]. ", ";
  } elseif ($numeros[$i] == 5) {
    echo "Se encontró un " . $numeros[$i] . "!";
  }
 }

 echo  "<br><br><br><br><br><br>";

 $numeros = [];

 for ($i=0; $i < 10; $i++) {
   $numeros[] = rand(0, 10);
   if ($numeros[$i] != 5) {
    echo $numeros[$i]. ", ";
 } elseif ($numeros[$i] == 5) {
    echo "Se encontró un " . $numeros[$i] . "!";
    break;
   }
}

echo  "<br><br><br><br><br><br>";


 ?>



 <h2>7</h2>
 <p>Definir un array con 10 números aleatorios entre 0 y 100. Recorrer este array contando
cuantos números son pares</p>

<?php

  $numerosAl100 = [];

/*  $a = 1;
  while ($a <= 10) {
    $numerosAl100[$a] = $a;
    $a++;
  }*/
  for ($a=0; $a < 10; $a++) {
	$numerosAl100[] = rand(0, 100);
}

  echo "<br>";

  for ($i=0; $i < count($numerosAl100); $i++) {
    if ($numerosAl100[$i] % 2 == 0) {
     $numerosPares[] = $numerosPares[$i] + $numerosAl100[$i];
    }
  }
  echo count($numerosPares);

 ?>

<h2>8</h2>
<p>8. Definir una variable $mascota que sea un array asociativo<br>
a. En el índice animal debe decir qué animal es.<br>
b. En el índice edad debe decir la edad.<br>
c. En el índice altura debe decir la altura.<br>
d. En el índice nombre debe decir el nombre<br>
e. Recorrer los valores del array con un foreach imprimiendo (como ejemplo):<br>
animal: perro<br>
edad: 5<br>
altura: 0,60<br>
nombre: Sonic</p>

<br>
<?php
  $mascota = [
  "animal" => "perro",
  "edad" => 10,
  "altura" => 20,
  "nombre" => "Walter"
];

echo "<hr>";

  foreach ($mascota as $caracteristica => $valor) {
    echo $caracteristica . " : " . $valor . "<br>";
  }
 ?>

 <h2>9</h2>
 <p>9. Partiendo de un archivo con la siguiente variable definida:
 Crear un script que muestre el nombre de la capital y el país desde la variable $ceu.</p>

 <?php

 $ceu = [
   "Italia"=>"Roma",
   "Luxembourg"=>"Luxembourg",
   "Bélgica"=>"Bruselas",
   "Dinamarca"=>"Copenhagen",
   "Finlandia"=>"Helsinki",
   "Francia" => "Paris",
   "Slovakia"=>"Bratislava",
   "Eslovenia"=>"Ljubljana",
   "Alemania" => "Berlin",
   "Grecia" => "Athenas",
   "Irlanda"=>"Dublin",
   "Holanda"=>"Amsterdam",
   "Portugal"=>"Lisbon",
   "España"=>"Madrid",
   "Suecia"=>"Stockholm",
   "Reino Unido"=>"London",
   "Chipre"=>"Nicosia",
   "Lithuania"=>"Vilnius",
   "Republica Checa"=>"Prague",
   "Estonia"=>"Tallin",
   "Hungría"=>"Budapest",
   "Latvia"=>"Riga",
   "Malta"=>"Valletta",
   "Austria" => "Vienna",
   "Polonia"=>"Warsaw"
 ];

 foreach ($ceu as $pais => $capital) {
   echo "País: " . $pais . "<br>" . "Capital: " . $capital . "<br> <br>";
 }

?>
<hr>

<h2>10</h2>
<p>Partiendo de un archivo con la siguiente variable definida:<br>
Crear un script que muestre el nombre de cada país y sus ciudades desde la variable $ceu
con el siguiente formato:</p>

Las ciudades de Argentina son:
<ul>
  <li> Buenos Aires</li>
  <li> Córdoba</li>
  <li> Santa Fé</li>
</ul>

Las ciudades de Brasil son:
<ul>
  <li> Brasilia</li>
  <li> Rio de Janeiro</li>
  <li> Sao Pablo</li>
</ul>

<?php

    $ceu = [
    "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
    "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
    "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
    "Francia" => ["Paris", "Nantes", "Lyon"],
    "Italia" => ["Roma", "Milan", "Venecia"],
    "Alemania" => ["Munich", "Berlin", "Frankfurt"]
    ];

    foreach ($ceu as $pais => $arrayCiudades) {
     foreach ($arrayCiudades as $ciudad) {
       if ($pais == "Argentina") {
         echo "Las ciudades de Argentina son: " . $ciudad;
       }
     }
    }

    echo "<br><hr><br>";

    foreach ($ceu as $pais => $arrayCiudades) {

      if ($pais == "Argentina") {
        echo "Las ciudades de $pais son: <br><ul>";
        for ($i=0; $i < count($arrayCiudades) ; $i++) {
          echo "<li>" . $arrayCiudades[$i] . "</li>";
        }
      }
      elseif ($pais == "Brasil") {
        echo "Las ciudades de $pais son: <br><ul>";
        for ($i=0; $i < count($arrayCiudades) ; $i++) {
          echo "<li>" . $arrayCiudades[$i] . "</li>";
        }
      }
      echo "</ul>";
    }
    echo "<br><hr><br>";

    foreach ($ceu as $pais => $arrayCiudades) {
      echo "Las ciudades de $pais son: <br><ul>";
        for ($i=0; $i < count($arrayCiudades) ; $i++) {
          echo "<li>" . $arrayCiudades[$i] . "</li>";
        }
      echo "</ul>";
    }

     ?> <hr>

     <h2>11</h2>
     <p>A partir del ejercicio anterior:<br>
    ● Agregarle a cada país un dato extra además de sus ciudades llamado
    esAmericano. Este valor debe ser true o false.<br>
    ● Hacer que la impresión anterior no muestre países que no sean Americanos.<br>
    IMPORTANTE: Para que esto funcione de manera prolija deberán crear un array asociativo
    por cada país en donde cada país tendrá los datos de sus ciudades y esAmericano.</p>

<?php
    $ceup = [ "Argentina" => [
                    "ciudades" => ["Buenos Aires", "Córdoba", "Santa Fé"],
                    "esAmericano" => true
                    ],
              "Brasil" => ["ciudades" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"], "esAmericano" => true],
              "Colombia" => ["ciudades" => ["Cartagena", "Bogota", "Barranquilla"], "esAmericano" => true],
              "Francia" => ["ciudades" => ["Paris", "Nantes", "Lyon"], "esAmericano" => false],
              "Italia" => ["ciudades" => ["Roma", "Milan", "Venecia"], "esAmericano" => false],
              "Alemania" => ["ciudades" => ["Munich", "Berlin", "Frankfurt"], "esAmericano" => false],
            ];


echo "<hr>";

  foreach ($ceup as $pais => $array) {

       if ($array["esAmericano"] == true ) {
        echo "Las ciudades de $pais son: <br><ul>";
        for ($i=0; $i < count($array["ciudades"]); $i++) {
          echo "<li>" . $array["ciudades"][$i] . "</li>";
        }
      }echo "</ul>";

}


echo "<hr>";

 foreach ($ceup as $pais => $array) {

      if ($array["esAmericano"] != true ) {
       echo "Las ciudades de $pais son: <br><ul>";
       for ($i=0; $i < count($array["ciudades"]); $i++) {
         echo "<li>" . $array["ciudades"][$i] . "</li>";
       }
     }echo "</ul>";

}


 ?>
<br><br>
</body>
</html>
