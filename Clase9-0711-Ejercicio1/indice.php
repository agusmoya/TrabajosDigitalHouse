<?php

// NOTE: Ejercicio 1:
// Mostrar la tabla de multiplicar del 2 utilizando un for.
echo "Ejercicio 1: <br>";
for ($i=0; $i <= 20; $i+=2) {
  echo "$i - ";
}
echo "<br>";
// NOTE: Ejercicio 2
//Un bucle while que cuente desde 100 hasta 85 (fíjate que en este caso es decreciente).
echo "Ejercicio 2: <br>";
$a=100;
while ($a >= 85) {
  echo "$a - ";
  $a--;
}
echo "<br>";
// NOTE: Ejercicio 3
/*
Un bucle while que a partir de una variable $contador que toma valores de 1 a 5,
muestre por pantalla el doble del valor de $contador, es decir, que muestre 2, 4, 6, 8, 10.
*/
echo "Ejercicio 3: <br>";
$contador=0;
while ($contador < 10) {
  $contador += 2;
  echo "$contador - ";
}
echo "<br>";
// NOTE: Ejercicio 4
/*
    Utilizando un while haremos un programa que tire una moneda (seleccionará un número al
    azar que puede ser 0 o 1) hasta que saque 5 veces cara (el número 1). Al terminar, debe
    imprimir cuántos tiros de monedas llevó obtener 5 veces cara
*/
echo "Ejercicio 4: <br>";
$contador=0;
$cara=0;
while($cara!=5){
  $nroAleatorio=rand(0,1);
  $contador++;
  if ($nroAleatorio==1) {
    $cara++;
  }
  echo "Valor de la moneda: $nroAleatorio <br>";
}
echo "Se arrojó $contador veces la moneda para obtener 5 veces cara!";
echo "<br>";

// NOTE: Ejercicio 5
/*
Definir un array con 5 strings que sean nombres. Recorrer este array para imprimir cada
uno de los nombres en pantalla.

Resolver este problema con un for.
Resolver este problema con while.
Resolver este problema con un do/while.
Resolver este problema con un foreach.
*/
echo "Ejercicio 5: <br>";
$arrayNombres = [
  "carlos", "luis", "agustín", "franco", "roberto"
];

for ($i=0; $i < count($arrayNombres) ; $i++) {
  echo "$arrayNombres[$i] - ";
}
echo "<br>";
$i=0;
while ($i < count($arrayNombres)) {
  echo "$arrayNombres[$i] - ";
  $i++;
}
echo "<br>";

$i=0;
do {
  echo "$arrayNombres[$i] - ";
  $i++;
} while ($i < count($arrayNombres));
echo "<br>";

$i=0;
do {
  echo "$arrayNombres[$i] - ";
  $i++;
} while ($i < count($arrayNombres));
echo "<br>";

foreach ($arrayNombres as $variable) {
  echo "$variable - ";
}

echo "<br>";
// NOTE: Ejercicio 6
/*
        Definir un array con 10 números aleatorios entre 0 y 10. Recorrer este array
        para imprimir todos los números. La ejecución debe terminarse si alguno de los
        números encontrados es un 5 (Se debe imprimir “Se encontró un 5!”)
*/
echo "Ejercicio 6: <br>";
$contador=0;
do{
  $arrayAleatorio [] = rand(0,10);
  $contador++;
} while($contador<10);

foreach ($arrayAleatorio as $key) {
  echo "$key - ";
  if($key == 5){
    echo "Se encontó un 5!";
    break;
  }
}

echo "<br>";
// NOTE: Ejercicio 7
/*
  Definir un array con 10 números aleatorios entre 0 y 100. Recorrer este
  array contando cuantos números son pares.
*/
echo "Ejercicio 7: <br>";
$contador=0;
$nrosPares=0;
do{
  $arrayAleatorio [] = rand(0,100);
  echo "$arrayAleatorio[$contador] - ";
  if($arrayAleatorio[$contador] %2 == 0){
    $nrosPares++;
  }
  $contador++;
} while($contador<10);
echo "<br> Hay $nrosPares numeros pares!";
echo "<br>";
// NOTE: Ejercicio 8
/*
Definir una variable $mascota que sea un array asociativo

En el índice animal debe decir qué animal es.
En el índice edad debe decir la edad.
En el índice altura debe decir la altura.
En el índice nombre debe decir el nombre

Recorrer los valores del array con un foreach imprimiendo (como ejemplo):

animal: perro

edad: 5

altura: 0,60

nombre: Sonic
*/
echo "Ejercicio 8: <br>";
$mascota=[
  "animal" => "gato",
  "edad" => 7,
  "altura" => 0.4,
  "nombre" => "Garfield"
];
foreach ($mascota as $key => $value) {
  echo "$key: $value <br>";
}

echo "<br>";
// NOTE: Ejercicio 9
/*
9. Partiendo de un archivo con la siguiente variable definida:
$ceu = array(
"Italia"=>"Roma", "Luxembourg"=>"Luxembourg",
"Bélgica"=> "Bruselas", "Dinamarca"=>"Copenhagen",
"Finlandia"=>"Helsinki", "Francia" => "Paris",
"Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana",
"Alemania" => "Berlin", "Grecia" => "Athenas",
"Irlanda"=>"Dublin", "Holanda"=>"Amsterdam",
"Portugal"=>"Lisbon", "España"=>"Madrid",
"Suecia"=>"Stockholm", "Reino Unido"=>"London",
"Chipre"=>"Nicosia", "Lithuania"=>"Vilnius",
"Republica Checa"=>"Prague", "Estonia"=>"Tallin",
"Hungría"=>"Budapest", "Latvia"=>"Riga",
"Malta"=>"Valletta", "Austria" => "Vienna",
"Polonia"=>"Warsaw") ;

Crear un script que muestre el nombre de la capital y el país desde la variable $ceu.
*/
echo "Ejercicio 9: <br>";

$ceu = array(
"Italia"=>"Roma", "Luxembourg"=>"Luxembourg",
"Bélgica"=> "Bruselas", "Dinamarca"=>"Copenhagen",
"Finlandia"=>"Helsinki", "Francia" => "Paris",
"Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana",
"Alemania" => "Berlin", "Grecia" => "Athenas",
"Irlanda"=>"Dublin", "Holanda"=>"Amsterdam",
"Portugal"=>"Lisbon", "España"=>"Madrid",
"Suecia"=>"Stockholm", "Reino Unido"=>"London",
"Chipre"=>"Nicosia", "Lithuania"=>"Vilnius",
"Republica Checa"=>"Prague", "Estonia"=>"Tallin",
"Hungría"=>"Budapest", "Latvia"=>"Riga",
"Malta"=>"Valletta", "Austria" => "Vienna",
"Polonia"=>"Warsaw");

foreach ($ceu as $key => $value) {
  echo "$key: $value <br>";
}


 ?>
