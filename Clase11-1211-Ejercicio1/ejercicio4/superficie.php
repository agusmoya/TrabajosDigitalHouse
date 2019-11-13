<?php
/* NOTE: Definir una función triangulo() que retorne su superficie.

a. Definir una función triangulo() que retorne su superficie.
b. Definir una función rectangulo() que retorne su superficie.
c. Definir una función cuadrado() que retorne su superficie.
d. Utilizando la función pi(), definir una función circulo() que retorne su superficie.
*/
// NOTE: a.
echo "Ejercicio 2.a<br>";
$base = rand(1,50);
$altura = rand(1,50);

echo "$base . $altura <br>";

function triangulo($base, $altura){
  $superficie = ($base * $altura)/2;
  return $superficie;
}
//echo triangulo($base, $altura);
echo "<br>";
// NOTE: b.
echo "Ejercicio 2.b<br>";
function rectangulo($base, $altura){
  $superficie = ($base * $altura);
  return $superficie;
}
echo rectangulo($base, $altura);

echo "<br>";
// NOTE: c.
echo "Ejercicio 2.c<br>";
function cuadrado($base, $altura){
  $superficie = ($base * $altura);
  return $superficie;
}
echo cuadrado($base, $altura);

echo "<br>";
// NOTE: d.
echo "Ejercicio 2.d<br>";
$radio = rand(1, 100);
echo "Radio: $radio <br>";
function circulo($radio){
  $superficie = pi() * ($radio * $radio);
  return $superficie;
}
echo "La superficie es: <br>";
echo circulo($radio);
echo "<br>";

?>
