<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilos.css">
    <title></title>
  </head>
  <body>

    <?php
    $persona = [
      "nombre" => "Jon",
      "apellido" => "Snow",
      "edad" => 27,
      "hobbies" => ["Netflix", "Fútbol", "Programar"]
    ];

    $persona["edad"] = 25;
    $persona["direccion"] = "Winterfell";
    $persona["hobbies"][] = "No saber nada";


    echo $persona["nombre"] . " " . $persona["apellido"] . " es un personaje de GOT cuyos hobbies son " . $persona["hobbies"][0] . ", " . $persona["hobbies"][1] . " y " . $persona["hobbies"][2] . " .";
    ?>

    <p><?php echo  $persona["nombre"] . " " . $persona["apellido"]; ?> es un personaje de GOT cuyos hobbies son <?php echo $persona["hobbies"][0] . ", " . $persona["hobbies"][1] . ", " . $persona["hobbies"][3] . " y " . $persona["hobbies"][2] . " ."; ?>
</p>

    <p><?=$persona["nombre"] . " " .  $persona["apellido"] ?> es un personaje de GOT cuyos hobbies son <strong><?=$persona["hobbies"][0] . ", " . $persona["hobbies"][1] . " y " . $persona["hobbies"][2] . "."?></strong>
    </p>

    <p>Tiene  <?=$persona["edad"]?></p>

    <?php

    echo $persona["nombre"] . " vive en " . $persona["direccion"];

    foreach ($persona as $key => $value) {
        echo $persona["hobbies"][$value];
    }

    ?>

        <h2>Condicionales</h2>

        <p>1. Definir dos variable con números y compararlos con un if para decidir cuál número
    es mayor e imprimir “El número mayor es N” donde N sea el valor de la variable que
    resultó ser mayor, y un else para cubrir el caso inverso.</p>

      <?php
      $numero1 = 30;
      $numero2 = 21;

      if ($numero1 > $numero2) {
        echo "El número mayor es " . $numero1;
      } else {
        echo "El número mayor es " . $numero2;
      }
      ?>
      <br>
      <br>
      <br>
      <?php
      echo $numero1 > $numero2 ? "El número mayor es ". $numero1 : "El número mayor es " . $numero2;
      ?>

      <p>2. Utilizando la función propia de PHP rand(x,y), donde “x” es el número mínimo e “y” el
número máximo, generar un número aleatorio entre 1 y 5, asignarlo a una variable e
imprimir la variable si y sólo si el número generado es 3 o 5.</p>


      <?php
        $resultado = rand(1, 5);
        echo "<br><br>" . $resultado . "<br><br>";
        echo $resultado == 1 || $resultado == 5 ? "El resultado es " . $resultado : "Volver a refrescar";
      ?>

      <p>Utilizando la variable del ejercicio anterior, imprimir “El número NO es 3” en el caso
que sea verdad esa premisa. En el caso que sí lo sea que simplemente se imprima el
número 3.</p>

      <?php
        $rdo3 = rand(1, 5);
        echo "<br><br>" . $rdo3 . "<br><br>";
        echo $rdo3 == 3 ? "El resultado es " . $resultado : "El número NO es 3";
      ?>

      <p> Generar un número entre 1 y 100, controlar si es mayor que 50. En el caso que sea
verdadero, devolver “El número es mayor a 50”, en el caso que sea falso: “El número
es menor a 50”.
1. ¿Qué pasa si el número es 50?</p>

      <?php

      $mayor50 = rand(1, 100);
      echo "<br><br>" . $mayor50 . "<br><br>";

      echo $mayor50 >= 50 ? "El número es mayor a 50" : "El número es menor a 50";
       ?>

       <p>Generar dos variables, una $nombreDeUsuario y $ContraseniaDeUsuario, ambos
strings. Validar que el usuario corresponda a "admin" y la contraseña a "1234". De ser
asi, que imprima "Bienvenido!", sino, que imprima que hay un error en el login.</p>

      <?php

      $nombreDeUsuario = "andre";
      $contraseniaDeUsuario = "1234";

      echo $nombreDeUsuario == "admin" && $contraseniaDeUsuario == "1234" ? "Bievenidx " . $nombreDeUsuario : "Sorry, pero no te podés loguear!";

       ?>


       <?php if($nombreDeUsuario == "admin" && $contraseniaDeUsuario == "1234") : ?>
       <h1>Bienvenidx <?=$nombreDeUsuario?></h1>
       <?php else: ?>
       <h3 style="color:red">Hay un error en tu login</h3>
       <?php endif; ?>


       <p>6. Tendremos 3 variables: edad (un número), casado (un booleano) y sexo (string que
puede ser “Masculino”, “Femenino” u “Otro”). Si la persona es mayor a 18 años y no
está casado se imprimirá el mensaje “Bienvenido”.
a. Modificaremos al ejercicio anterior para que también imprima bienvenido si el
sexo es “Otro” sin importar el resto de las condiciones.</p>

        <?php
          $joana = [
            "edad" => 12,
            "casada" => false,
            "sexo" => "otro"
          ];



          if ($joana["edad"] >= 18 && $joana["casada"] == false) {
            echo "<h2>¡Bienvenido!</h2>";
          } elseif ($joana["sexo"] == "otro") {
            echo "<h2>Bievenideeee</h2>";
          } else {
            echo "No podés ingresar";
          }
        ?>

        <?php

            $edad = 14;
            $casada = false;
            $sexo = "otro";




          if ($edad >= 18 && $casada == false) {
            echo "<h2>Bienvenido</h2>";
          } elseif ($sexo == "otro") {
            echo "<h2>Bienvenide</h2>";
          } else {
            echo "No podés ingresar";
          }
        ?>


  </body>
</html>
