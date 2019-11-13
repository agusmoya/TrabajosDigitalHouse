<?php

$numero1 = rand(0,50);
$numero2 = rand(0,50);
$numero3 = rand(0,50);

echo "El nro 1 es: $numero1 <br>";
echo "El nro 2 es: $numero2 <br>";
echo "El nro 3 es: $numero3 <br>";

echo "El numero mayor es: <br>";
echo mayorA($numero1, $numero2, $numero3);

// NOTE: Eejrcicio 1.a

function mayorA($nro1, $nro2, $nro3){
  if ($nro1 >= $nro2 && $nro1 >= $nro3) {
    return $nro1;
  } elseif ($nro2 >= $nro1 && $nro2 >= $nro3) {
    return $nro2;
  } else {
    return $nro3;
  }
}

echo "<br>";

// NOTE: Eejrcicio 1.b
echo "EJERCICIO 1.b <br>";
function tablaA($base, $limite){
  $array = [];
  for ($i=$base; $i <= $limite; $i++) {
    $array[] = $i;
  }
  return $array;
}

$base = rand(1,25);
$limite = rand(26,50);

echo "$base "." $limite <br>";

$arraySecuencia = tablaA($base, $limite);

for ($i=0; $i < count($arraySecuencia); $i++) {
  echo $arraySecuencia[$i] . " - ";
}

echo "<br>";
// NOTE: Eejrcicio 1.c
$numero1 = rand(0,500);
$numero2 = rand(0,500);

echo "El nro 1 es: $numero1 <br>";
echo "El nro 2 es: $numero2 <br>";

echo "EJERCICIO 1.c <br>";
function mayor($nro1, $nro2, $nro3=100){
  if ($nro1 >= $nro2 && $nro1 >= $nro3) {
    return $nro1;
  } elseif ($nro2 >= $nro1 && $nro2 >= $nro3) {
    return $nro2;
  } else {
    return $nro3;
  }
}
echo "El numero mayor es: <br>";
echo mayor($numero1, $numero2);

echo "<br>";
// NOTE: Eejrcicio 1.d
echo "EJERCICIO 1.d <br>";
function tabla($base, $limite=100){
  $array = [];
  for ($i=$base; $i <= $limite; $i++) {
    $array[] = $i;
  }
  return $array;
}

$base = rand(1,25);
$limite = rand(26,50);

echo "$base "." $limite <br>";

$arraySecuencia = tabla($base);

for ($i=0; $i < count($arraySecuencia); $i++) {
  echo $arraySecuencia[$i] . " - ";
}
echo "<br>";

echo "<br>";
// NOTE: Eejrcicio 1.d
echo "EJERCICIO 1.d <br>";

 ?>
