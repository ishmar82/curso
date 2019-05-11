<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clase 6</title>
  </head>
  <body>

    <h2>Arrays</h2>

    <?php
    $persona = [
      "nombre" => "Jon",
      "apellido" => "Snow",
      "edad" => 27,
      "hobbies" => ["Netflix", "Futbol", "Programar"],
    ];

    $persona["edad"] = 25;
    $persona["direccion"] = "Winterfell";
    $persona["hobbies"][1] = "Ser un gil";

    var_dump($persona);

    ?>

    <h2>Condicionales</h2>

    <h3>Ejercicio 1</h3>
    <p>Definir dos variable con números y compararlos con un if para decidir cuál número
es mayor e imprimir “El número mayor es N” donde N sea el valor de la variable que
resultó ser mayor, y un else para cubrir el caso inverso</p>

    <strong>
    <hr>

    <?php
      $numero1 = 26;
      $numero2 = 37;

      // condicion ? escenario true : escenario false;

      if($numero1 > $numero2){
        echo "El numero mayor no es $numero1" ;
      } else {
        echo "El numero mayor es $numero2";
      }

      echo "<br><br>";

      if($numero1 > $numero2){
      echo "El numero mayor no es " . $numero1;
      } else {
      echo "El numero mayor es " .$numero2;
      }

      echo "<br><br>";

      // condicion ? escenario true : escenario false;
      echo $numero1 > $numero2 ? "El numero mayor no es " .$numero1 : "El numero mayor es " .$numero2;
    ?>
    </strong>
    <hr>
    <h3>Ejercicio 2</h3>
    <p>Utilizando la función propia de PHP rand(x,y) , donde “x” es el número mínimo e “y” el
número máximo, generar un número aleatorio entre 1 y 5, asignarlo a una variable e
imprimir la variable si y sólo si el número generado es 3 o 5.</p>

  <?php

    $min = 1;
    $max = 5;

    if ($min == 3 || $max == 3 ) {
      echo "ponele";
    } else {
      echo "la garcha";
    }

   ?>

   <br>
   <strong>
   <hr>
   <?php


  $miNumero = rand(1, 5);

  echo $miNumero;

  echo "<br><br>";

    if ($miNumero == 3 || $miNumero == 5)  {
      echo "El numero es " .$miNumero;
    } else {
      echo null;
    }
  ?>
  </strong>
  <hr>

  <h3>Ejercicio 3</h3>
  <p>Utilizando la variable del ejercicio anterior, imprimir “El número NO es 3” en el caso
  que sea verdad esa premisa. En el caso que sí lo sea que simplemente se imprima el
  número 3.</p>
  <strong>
  <hr>
  <?php
  if ($miNumero == 3)  {
    echo $miNumero;
  } else {
    echo "El número NO es 3";
  }
   ?>
 </strong>
 <hr>

 <h3>Ejercicio 4</h3>
 <p>Generar un número entre 1 y 100, controlar si es mayor que 50. En el caso que sea
verdadero, devolver “El número es mayor a 50”, en el caso que sea falso: “El número
es menor a 50”.</p>
  <strong>
    <?php
      $mi50 = rand(1, 100);

      echo "<br><br>";

      if ($mi50 > 50){
        echo "El número " . $mi50 . " es mayor a 50";
      } else {
        echo "El número " . $mi50 . " es menor a 50";
      }
      echo "<br><br><hr>";

      echo $mi50 > 50 ? "El numero " . $mi50 . " es mayor a 50" : "El numero " . $mi50 . " es menor a 50";

      echo "<br><br><hr>";
      if ($mi50 > 50){
        echo "El número " . $mi50 . " es mayor a 50";
      } else if ($mi50 = 50) {
        echo "El número " . $mi50 . " es igual a 50";
      } else {
        echo "El número " . $mi50 . " es menor a 50";
      }
     ?>
  </strong>
  <hr>
  <h3>Ejercicio 5</h3>
  <p>Generar dos variables, una $nombreDeUsuario y $ContraseniaDeUsuario, ambos
strings. Validar que el usuario corresponda a "admin" y la contraseña a "1234". De ser
asi, que imprima "Bienvenido!", sino, que imprima que hay un error en el login.</p>

  <h3>Ejercicio 5B</h3>
  <p>Modificar al ejercicio anterior, y agregar los "else" necesarios para poder
  identificar si el error esta en el usuario, la contraseña, o si alguno de los campos
  está vacío aún.</p>
  <strong>
  <?php
    $nombreDeUsuario = "admin";
    $ContraseniaDeUsuario = "1234";

  /*  if($nombreDeUsuario == "admin" || $ContraseniaDeUsuario == "1234"){
      echo "Bienvenido!";
    } else {
      echo "Error en el login";
    }*/
    echo "<br><br><hr>";

    if($nombreDeUsuario == "admin" && $ContraseniaDeUsuario == "1234"){
      echo "Bienvenido!";
    } else if ($nombreDeUsuario == null || $ContraseniaDeUsuario == null ) {
      echo "Debe ingresar un usuario o contraseña válida";
    } else if ($nombreDeUsuario != "admin" && $ContraseniaDeUsuario == "1234") {
      echo "La contraseña es correcta pero el nombre de usuario es incorrecto";
    } else if ($nombreDeUsuario == "admin" && $ContraseniaDeUsuario != "1234") {
      echo "El usuario es correcta pero la contraseña es incorrecta";
    } else if ($nombreDeUsuario != "admin" && $ContraseniaDeUsuario != "1234" ) {
      echo "Usuario y contraseña incorrecta";
    }

    echo "<br><br><hr>";

  ?>
  </strong>

  <h3>Ejercicio 6</h3>
  <p>Tendremos 3 variables: edad (un número), casado (un booleano) y sexo (string que
puede ser “Masculino”, “Femenino” u “Otro”). Si la persona es mayor a 18 años y no
está casado se imprimirá el mensaje “Bienvenido”.</p>
  <h3>Ejercicio 6B</h3>
  <p>Modificaremos al ejercicio anterior para que también imprima bienvenido si el
sexo es “Otro” sin importar el resto de las condiciones.</p>
  <hr>
  <strong>
    <?php
      $edad = 37;
      $casado = true;
      $sexo = femenino;

      if ($edad > 18 && $casado == false || $sexo == otro) {
        echo "Bienvenido";
      } else {
        echo "No sos bienvenido";
      }
    ?>

    </strong>

    <h3>Ejercicio 7</h3>
    <p>Definir una variable que se llame cantidadDeAlumnos que contenga un número.
Luego, escribir el siguiente código:
a. ¿Qué termina imprimiendo?
b. Probar con los valores -100, -1, 0, 1 y 100 para cantidadDeAlumnos
-------------------------------------------------------------</p>
    <hr>
    <strong>
      <?php

        $cantidadDeAlumnos = 43;

        if ($cantidadDeAlumnos) {
          echo "True";
        } else {
          echo "False";
        }
      ?>
    </strong>
    <hr>
    <h3>Ejercicio 8</h3>
    <p>Definir una variable $numero con un número. Imprimir “El número es par” si lo es o “El
número es impar” si no lo es. Se pide resolver este ejercicio con un if ternario
(operadores ? : )</p>
   <hr>
   <strong>

     <?php
      $numero = 200;

      // condicion ? escenario true : escenario false;
      echo $numero % 2 == 0 ? "El número " . $numero . " es par" : "El número " . $numero . " no es par";
     ?>

   </strong>

   <hr>
   <h3>Ejercicio 9</h3>
   <p>Crear una variable $nota con un valor del 0 al 10. Utilizando un switch generar la
siguiente lógica:<br>
- Si la nota es menor a 4 imprimir “desaprobado”<br>
- Si la nota es 4 o 5 imprimir “zafamos”<br>
- Si la nota este entre 6 y 8 imprimir “Bien!!!”<br>
- Si la nota es un 9 imprimir “MUY bien!!”<br>
- Si la nota es un 10 imprimir “Excelente!!!!!”</p>
   <hr>
   <strong>

     <?php

      $nota = -5;

      switch ($nota) {
        case ($nota == 10):
          echo "Excelente";
          break;
        case ($nota == 9):
          echo "Muy Bien";
          break;
        case ($nota <= 8 && $nota >= 6):
          echo "Bien";
          break;
        case ($nota <= 5 && $nota >= 4):
          echo "Zafamos";
          break;
        default:
          echo "Desaprobado";
          break;
      }

      echo "<br><br><hr>";

      switch ($nota) {
        case ($nota == 10):
          echo "Excelente";
          break;
        case ($nota == 9):
          echo "Muy Bien";
          break;
        case ($nota <= 8 && $nota >= 6):
          echo "Bien";
          break;
        case ($nota <= 5 && $nota >= 4):
          echo "Zafamos";
          break;
        case ($nota < 4 && $nota >= 1):
          echo "Desaprobado";
          break;
        default:
          echo "El número no es válido";
          break;
      }

      echo "<br><br><hr>
            <h3>Ejercicio 10</h3>
            <p>Agregar al switch anterior un mensaje en caso de que la nota no sea un número del 1 al
10 diciendo “El número no es válido”. Punto extra: ¿Probaste con números negativos?</p><hr>";

      switch ($nota) {
        case ($nota <= 0 || $nota > 10):
          echo "No es un número válido";
          break;
        case ($nota == 10):
          echo "Excelente";
          break;
        case ($nota == 9):
          echo "Muy Bien";
          break;
        case ($nota <= 8 && $nota >= 6):
          echo "Bien";
          break;
        case ($nota <= 5 && $nota >= 4):
          echo "Zafamos";
          break;
        default:
          echo "Desaprobado";
          break;
      }

      echo "<br><br><br><br><br><br><hr>";

      $colorRemera = "Verde";

      switch ($colorRemera) {
        case "Rojo":
          echo "La remera es Roja";
          break;
        case "Azul":
          echo "La remera es Axul";
          break;
        case "Amarillo":
          echo "La remera es amarilla";
          break;
        default:
          echo "La remera es multicolor";
          break;
      }

     ?>


   </strong>
   <br><br><br>
  </body>
</html>
