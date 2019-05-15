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

    echo $persona["nombre"] . " " . $persona["apellido"] . " es un personaje de GOT cuyos hobbies son " . $persona["hobbies"][0] . ", " . $persona["hobbies"][1] . " y " . $persona["hobbies"][2] . " .";

    ?>

    <p>
      <?php echo  $persona["nombre"] . " " . $persona["apellido"]; ?> es un personaje de GOT cuyos hobbies son <?php echo $persona["hobbies"][0] . ", " . $persona["hobbies"][1] . " y " . $persona["hobbies"][2] . " ."; ?>
    </p>

    <p>
      <?=$persona["nombre"] . " " .  $persona["apellido"] ?> es un personaje de GOT cuyos hobbies son <strong><?=$persona["hobbies"][0] . ", " . $persona["hobbies"][1] . " y " . $persona["hobbies"][2] . "."?></strong>
    </p>

    <p>
    Tiene  <?=$persona["edad"]?>
    </p>

    <?php



    echo $persona["nombre"] . " vive en " . $persona["direccion"];
     ?>

  </body>
</html>
