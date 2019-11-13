<?php
include("funciones.php");
include("superficie.php");

$radio1 = rand(1,50);
$radio2 = rand(1,50);
$radio3 = rand(1,50);

echo "Radio 1: $radio1 - Radio 2: $radio2 - Radio 3: $radio3 <br>";

function circuloMayor($radio1, $radio2, $radio3){
  $radioMayor = mayor($radio1, $radio2, $radio3);
  return circulo($radioMayor);
}
 echo "La superficie mayor es: <br>";
 echo circuloMayor($radio1, $radio2, $radio3);

 ?>
