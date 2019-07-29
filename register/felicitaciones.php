<?php 

 require_once 'controller.php';
/*
 if (!isset($_SESSION['userLogged'])) {
	header ('location: login.php');
	exit;
}*/


 $user = $_SESSION['userLogged'];

 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body style="background: <?= $user['color'];?>">
	<h2 class="text-white">Bienvenido <?= $user['user']?></h2>

	<img src="<?= $user['avatarFinal']?>" style="width: 100px;" alt="">
</body>
</html>