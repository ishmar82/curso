<?php
  $nombre = [];

  $nombre["name"] = "Andrea";
  $nombre["lastName"] = "Maldonado";


  $sorteo = rand(0, 1);

  $socialMedia = [
    "<a href='https://google.com'>Google</a>",
    "<a href='https://facebook.com'>Facebook</a>",
    "<a href='https://twitter.com'>Twitter</a>"
  ];

  $socialMedia[] = "<a href='https://google.com'>Instagram</a>";


  $productos = [
                0 => [
                      "id" => 1,
                      "titulo" => ",",
                      "descripcion" => "k",
                      "precio" => 300,
                      "imagen" => "img-pdto-1.jpg",
                      "enOferta" => true
                      ],
                ];

  
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>La Internet</h1>
    <marquee>Bienvenidos al mundo de la internet</marquee>
    <h2>Bienvenido <?=$nombre["name"] . " " . $nombre["lastName"]?></h2>
    <h3>¿Es usted un ganador?</h3>
    <?php if($sorteo == 1 ):?><strong style="color:green;">¡Sí!</strong>
    <?php else:?><strong style="color:red;">Sorry... pero no.</strong>
    <?php endif;?>
    <h3>Algunos sitios interesantes:</h3>
   

    <ul>
      <?php for ($i=0; $i < count($socialMedia) ; $i++):?>
      <?php echo "<li>" . $socialMedia[$i] . "</li>"?>
    <?php endfor;?>
    </ul>

   

  </body>
</html>
