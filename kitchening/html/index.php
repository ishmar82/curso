<?php

$productos = [
    0 => [
      "id" => 1,
      "titulo" => "Copas Doradas",
      "descripcion" => "La copa dorada es una novela del escritor estadounidense Henry James publicada en 1904; narra la historia de un millonario norteamericano y su hija, cuyos respectivos cónyuges han sido amantes antes de contraer matrimonio con ellos, y que vuelven a serlo después.1​",
      "precio" => 300,
      "imagen" => "img-pdto-1.jpg",
      "enOferta" => true
          ],
		1 => [
			"id" => 2,
			"titulo" => "Set de condimentos",
			"descripcion" => "Especia (del latín specĭes),1​ también llamada condimento (del latín condimentum,2​ de condire, sazonar) es el nombre dado a ciertos aromas de origen vegetal, que se usan para preservar o dar sabor a los alimentos. ",
			"precio" => 500,
		  "imagen" => "img-pdto-2.jpg",
			"enOferta" => false
			    ],

		2 => [
			      "id" => 3,
			      "titulo" => "Cena Romántica",
			      "descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex",
			      "precio" => 1000,
			      "imagen" => "img-pdto-3.jpg",
			      "enOferta" => true
			          ],
		3 => [
						"id" => 4,
						"titulo" => "Copas de cristal",
						"descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex",
						"precio" => 200,
					  "imagen" => "img-pdto-1.jpg",
						"enOferta" => false
						    ],
];


 ?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<title>Responsive Web Design</title>
	</head>
	<body>

	<div class="container">

		<!-- cabecera -->
		<header class="main-header">
			<img src="images/logo.jpg" alt="logotipo" class="logo">

			<a href="#" class="toggle-nav">
				<span class="fa fa-bars"></span>
			</a>

			<nav class="main-nav">
				<ul>
					<li><a href="#">home</a></li>
					<li><a href="#">quienes</a></li>
					<li><a href="#">servicios</a></li>
					<li><a href="#">portfolio</a></li>
					<li><a href="#">sucursales</a></li>
					<li><a href="#">contacto</a></li>
				</ul>
			</nav>
		</header>

		<!-- banner -->
		<section class="banner">
			<img src="images/img-banner.jpg" alt="banner">
		</section>

		<!-- productos -->
		<section class="vip-products">
			<article class="product">
				<div class="photo-container">
					<img class="photo" src="images/<?=$productos[0]["imagen"]?>" alt="pdto 02">
					<img class="special" src="images/img-gratis.png" alt="plato nuevo">

					<a class="zoom" href="#">Ampliar foto</a>
				</div>
				<h2><?=$productos[0]["titulo"]?></h2>
				<p><?=$productos[0]["descripcion"]?></p>
				<a class="more" href="#">ver más</a>
			</article>
			<article class="product">
				<div class="photo-container">
					<img class="photo" src="images/<?=$productos[1]["imagen"]?>" alt="pdto 02">
					<img class="special" src="images/img-gratis.png" alt="plato nuevo">
					<a class="zoom" href="#">Ampliar foto</a>
				</div>
				<h2><?=$productos[1]["titulo"]?></h2>
				<p><?=$productos[1]["descripcion"]?></p>
				<a class="more" href="#">ver más</a>
			</article>
			<article class="product">
				<div class="photo-container">
					<img class="photo" src="images/<?=$productos[2]["imagen"]?>" alt="pdto 02">
					<img class="special" src="images/img-gratis.png" alt="plato nuevo">

					<a class="zoom" href="#">Ampliar foto</a>
				</div>
				<h2><?=$productos[2]["titulo"]?></h2>
				<p><?=$productos[2]["descripcion"]?></p>
				<a class="more" href="#">ver más</a>
			</article>
			<article class="product">
				<div class="photo-container">
					<img class="photo" src="images/<?=$productos[3]["imagen"]?>" alt="pdto 02">
					<img class="special" src="images/img-gratis.png" alt="plato nuevo">

					<a class="zoom" href="#">Ampliar foto</a>
				</div>
				<h2><?=$productos[3]["titulo"]?></h2>
				<p><?=$productos[3]["descripcion"]?></p>
				<a class="more" href="#">ver más</a>
			</article>
			<article class="product">
				<div class="photo-container">
					<img class="photo" src="images/img-pdto-2.jpg" alt="pdto 02">
					<img class="special" src="images/img-nuevo.png" alt="plato nuevo">
					<a class="zoom" href="#">Ampliar foto</a>
				</div>
				<h2>Lorem ipsum amet</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
				<a class="more" href="#">ver más</a>
			</article>
			<article class="product">
				<div class="photo-container">
					<img class="photo" src="images/img-pdto-3.jpg" alt="pdto 03">
					<img class="special" src="images/img-descuento.png" alt="descuento efectivo">
					<a class="zoom" href="#">Ampliar foto</a>
				</div>
				<h2>Lorem ipsum amet</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
				<a class="more" href="#">ver más</a>
			</article>
		</section>

		<footer class="main-footer">
			<ul>
				<li><a href="#">home</a></li>
				<li><a href="#">quienes</a></li>
				<li><a href="#">servicios</a></li>
				<li><a href="#">portfolio</a></li>
				<li><a href="#">sucursales</a></li>
				<li><a href="#">contacto</a></li>
			</ul>
		</footer>
	</div>

	</body>
</html>
