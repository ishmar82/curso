<?php 

include_once ("usuario.php");

include_once ("Celular.php");

include_once ("Habilidad.php");

include_once ("db.php");

/*include_once ("controller.php");*/

$user1 = new Usuario("Andrea", "ishmar.diseño@gmail.com", "Ab1234");
$user2 = new Usuario("Joana", "joanamaldo@gmail.com", "ab1234");

$celular1 = new Celular('1565391901', 'Xiaomi', '6', 'Movistar');
$celular2 = new Celular('150202121', 'Apple', '7', 'Tuenti');

$habilidad1 = new Habilidad('Netflix', 4);

$habilidad2 = new Habilidad('Correr', 2);

$habilidad3 = new Habilidad('Morder', 4);



$user1->setCelular($celular1);
$user2->setCelular($celular2);

$user1->setHabilidad($habilidad1);
$user1->setHabilidad($habilidad2);
$user1->setHabilidad($habilidad3);


/*
$user2->setHabilidad('Correr');

$user2->setHabilidad('Morder');

$user2->setHabilidad('Sonreir');

*/

echo "<strong>" . $user1->getNombre() . "</strong> : " . $user1->getCelular()->getTel() . "<br>";
echo "<strong>" . $user2->getNombre() . "</strong> : " . $user2->getCelular()->getTel(). "<br>";

echo $user1->getNombre() . "<br>";
echo $user1->getMail() . "<br>";
echo $user2->getMail() . "<br>";



echo $user1->mostrarTelefono() . "<br>";

echo $user2->mostrarTelefono() . "<br>";

echo $user2->llamar($user1, 10, $user2) . "<br>";




foreach ($user1->getHabilidades() as $habilidad) {
	echo "- " . $habilidad->getNombre() . ": " . $habilidad->getExpertise() . "<br>";
	
}
/*
echo "<br><br>";

foreach ($user2->getHabilidades() as $habilidad) {
	echo "- " . $habilidad . "<br>";
}
*/
echo "<pre>";
var_dump(Db::getAllUsers());
echo "</pre>";



/*
echo $habilidad1->setExpertise(5) . "<br>";*/









