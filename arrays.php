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
    <p>Definir dos variable con números y compararlos con un if para decidir cuál número
es mayor e imprimir “El número mayor es N” donde N sea el valor de la variable que
resultó ser mayor, y un else para cubrir el caso inverso</p>

    <strong>
      <h5>Rdo.</h5>
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




  </body>
</html>
