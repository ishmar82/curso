 <?php 
function mayor($num1, $num2, $num3){
  if ($num1 > $num2 && $num1 > $num3) {
    return  $num1;
  } elseif ($num2 > $num1 && $num2 > $num3) {
    return  $num2;
  } else {
    return  $num3;
  }
}

function table($numMin, $numMax){
  for ($i=$numMin; $i <= $numMax; $i++) {
    $resultado[] = $i;
  }
return $resultado;
}

function mayor2($num1, $num2, $num3 = 100){
   if ($num1 > $num2 && $num1 > $num3) {
     return $num1;
   } elseif ($num2 > $num1 && $num2 > $num3) {
     return $num2;
   } else {
     return $num3;
   }
 }



 function tabla($numMin, $numMax = 100){
   for ($i=$numMin; $i <= $numMax; $i++) {
     $resultado[] = $i;
   }
 return $resultado;
 }


?>
