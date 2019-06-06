<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1><?= "Soy incluir.php"?></h1>

    <h2>Incluir en el archivo, saludo.php. ¿Qué sucede?</h2>

    <h2>Reemplazar include por require. ¿Qué sucede?</h2>
    <?php require("saludo.php") ;?>
    <h2>Generar en la misma carpeta un archivo saludo.php que solamente haga echo “Hola mundo”. ¿Qué sucede ahora con el punto a y el punto b?</h2>
    <h2>En el archivo incluir.php reemplazar el require por include, e incluir 3 veces el mismo archivo. ¿Qué sucede?</h2>


    <h2>En el archivo incluir.php reemplazar todos los include por include_once. ¿Qué sucede?</h2>
    <?php include_once("saludo.php") ;?>
    <?php include_once("saludo.php") ;?>
    <?php include_once("saludo.php") ;?>
  </body>
</html>
