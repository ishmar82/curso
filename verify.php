<?php

function encriptar($password) {
 $hash = password_hash($password, PASSWORD_DEFAULT);
 return $hash;
}
$password = "Hola";
$hashear = encriptar($password);




function verificarPass($hashear) {
return password_verify($password, $hashear);

}


var_dump(verificarPass("Hola", $hashear));



 ?>
