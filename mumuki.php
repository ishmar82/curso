<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mumuki</title>
</head>
<body>
	<h1>Mumuki</h1>
	<h2>Ejercicio 1</h2>
	<?php 

	function bucles() {
    $resultado = [];
    
    for ($i = 0; $i < 11; $i++)
    {
     $resultado[$i] = $i;
    }
    
    return $resultado;
}

	 ?>

	 <h2>Ejercicio 2</h2>

	 <?php 
	 function bucles() {
    $resultado = [];
    
    for ($i = 5; $i < 11; $i++) {
      $resultado [$i] = $i;
    }
    
    return $resultado;
}
 ?>
	
	<h2>Ejercicio 3</h2>

	<?php 
	function bucles() {
    $resultado = [];
    
    for ( $i = 2; $i < 21; $i = $i + 2){
      $resultado [$i] = $i;
    }
    
    return $resultado;
}
 ?>

 	<h2>Ejercicio 4</h2>
 	<?php 
 	function bucles($unArray) {
    $resultado = 0;
    
    for ( $i = 0; $i < count($unArray); $i++){
      $resultado = array_sum($unArray);
    }
    
    return $resultado;
}
 ?>

	<h2>Ejercicio 5</h2>
	<?php 

	function bucles($unArray) {
    $resultado = [];
    
    for ($i = 0; $i < count($unArray); $i++){
      if ($unArray[$i] % 2 == 0){
        
        $resultado[] = $unArray[$i];
      }
     }  
  
    return $resultado;
}

	?>

	<h2>Ejercicio 6</h2>
	<?php 
	function bucles($numero) {
  $resultado = [];
  
  while ($numero < 101){
    $resultado [] = $numero;
    $numero++;
  }
  
  return $resultado;
}
	 ?>

	 <h2>Ejercicio 7</h2>

	 <?php 
	 function racha($dados) {
	  $cantidadDe5 = 0;
	  
	  $i = 0;
	  while ($dados[$i] == 5){
	    $cantidadDe5++;
	    $i++;
	  }

	  return $cantidadDe5;
	}
 ?>

	<h2>Ejercicio 8</h2>
	<?php 
	function bucles($numeros) {
	  $resultado = 0;
	  
	  // Acá va tu código
	  foreach ($numeros as $valor) {
	    $resultado = array_sum($numeros);
	  }
	  
	  return $resultado;
	}
	 ?>

	 <h2>Ejercicio 9</h2>


	 <?php 
	 $cantantes = [
		  "Luis" => "Miguel",
		  "Charly" => "García",
		  "Joaquín" => "Sabina"
		];

	 function bucles($cantantes) {
	  $resultado = [];
	  
	  // Tu solución va acá
	  foreach ($cantantes as $clave => $valor){
	    $resultado[$valor] = $clave;
	  }
	  return $resultado;
	}
 ?>

 	<h2>Ejercicio 10</h2>

 	<?php 

 	function bucles($cantantes) {
	  $nombres = [];
	  
	  // Tu código va acá!
	  foreach ($cantantes as $posicion => $valor){
	    foreach ($valor as $nombre => $subvalor ){
	      }
	      $nombres[] = $valor["nombre"];
	    
	  }

	  return $nombres;
	}

 	 ?>


 	 <h2>Ejercicio 11</h2>

 	 <?php 
 	  ?>



</body>
</html>