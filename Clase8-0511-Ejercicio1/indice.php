<?php

// NOTE: Ejercicio 2
echo "EJERCICIO 1";
echo "<pre>";
$persona = [
      "nombre" => "Jon",
      "apellido" => "Snow",
      "edad" => 27,
      "hobbies" => [
        "netflix",
        "futbol",
        "programar"
      ]
    ];
var_dump($persona);

$persona["edad"] = 25;
var_dump($persona);

$persona["Direccon"] = "Winterfell";
var_dump($persona);

// NOTE: Ejercicio 1
echo "EJERCICIO 1 <br>";

$valor1=35;
$valor2=-35;

if($valor1 > $valor2){
  echo "El numero mayor es $valor1";
} else {
  echo "El numero mayor es $valor2";
}
echo "<br>";

// NOTE: Ejercicio 2
echo "Ejercicio 2";
// NOTE: Utilizando la función propia de PHP rand(x,y), donde “x” es el número mínimo e “y”
// el número máximo, generar un número aleatorio entre 1 y 5, asignarlo a una variable e
//imprimir la variable si y sólo si el número generado es 3 o 5.

$nroAleatorio = rand(1,5);
echo "<br>";
if($nroAleatorio == 3 || $nroAleatorio == 5){
  echo $nroAleatorio;
} else {
  echo "El numero generado no es ni 3 ni 5!";
}

echo "<br>";

// NOTE: Ejercicio 3
/*
 Utilizando la variable del ejercicio anterior, imprimir “El número NO es 3” en el caso que
 sea verdad esa premisa. En el caso que sí lo sea que simplemente se imprima el número 3.
*/
echo "Ejercicio 3 <br>";

if ($nroAleatorio != 3) {
  echo "El numero no es 3";
} else {
  echo $nroAleatorio;
}
echo "<br>";

// NOTE: Ejercicio 4
/*
Generar un número entre 1 y 100, controlar si es mayor que 50. En el caso que sea verdadero,
devolver “El número es mayor a 50”, en el caso que sea falso: “El número es menor a 50”.
    ¿Qué pasa si el número es 50?
*/
echo "Ejercicio 4 <br>";

$nroAleatorio = rand(1,100);
if($nroAleatorio > 50){
  echo "El numero " . $nroAleatorio . " es mayor a 50!";
} else {
  echo "El numero " . $nroAleatorio . " es menor a 50!";
}
echo "<br>";
// NOTE: Ejercicio 5
/*
 Generar dos variables, una $nombreDeUsuario y $ContraseniaDeUsuario, ambos strings.
 Validar que el usuario corresponda a "admin" y la contraseña a "1234". De ser asi, que imprima
 "Bienvenido!", sino, que imprima que hay un error en el login.
*/
echo "Ejercicio 5 <br>";
$nombreDeUsuario = "admin";
$ContraseniaDeUsuario = "1234";

if ($nombreDeUsuario == "admin" && $ContraseniaDeUsuario == "1234") {
    echo "Bienvenido!";
} else {
  echo "Hay un error en el login";
}

echo "<br>";
// NOTE: Ejercicio 5
/*
 a.    Modificar al ejercicio anterior, y agregar los "else" necesarios para poder identificar
  si el error esta en el usuario, la contraseña, o si alguno de los campos está vacío aún.
*/
echo "Ejercicio 5 <br>";

if ($nombreDeUsuario == "admin" && $ContraseniaDeUsuario == "1234") {
    echo "Bienvenido!";
} else if($nombreDeUsuario != "admin") {
  echo "El nombre de usuario no coincide con el esperado!";
} else if($ContraseniaDeUsuario != "1234"){
  echo "La contraseña no coincide con la esperada!";
} else if($nombreDeUsuario == ""){
  echo "El nombre de usuario esta vacío!";
} else {
  echo "La contraseña está vacía!";
}

echo "<br>";
// NOTE: Ejercicio 6
/*
6.    Tendremos 3 variables: edad (un número), casado (un booleano) y sexo (string que puede ser
“Masculino”, “Femenino” u “Otro”). Si la persona es mayor a 18 años y no está casado se imprimirá
el mensaje “Bienvenido”.

a.    Modificaremos al ejercicio anterior para que también imprima bienvenido si el sexo es “Otro”
sin importar el resto de las condiciones.
*/
echo "Ejercicio 6 <br>";
$edad= 28;
$casado = true;
$sexo = "otro";

if($edad > 18 && $casado == false){
 echo "Bienvenido!";
} else if($sexo=="otro"){
echo "Bienvenido!";
}

echo "<br>";
// NOTE: Ejercicio 7
/*
7.   Definir una variable que se llame cantidadDeAlumnos que contenga un número. Luego, escribir el
siguiente código: (sin copiar y pegar!!)

if ($cantidadDeAlumnos) {
echo “true”;
} else {
echo “false”;
}
*/
echo "Ejercicio 7 <br>";
$cantidadDeAlumnos=1;
if ($cantidadDeAlumnos) {
  echo "true";
} else {
  echo "false";
}

echo "<br>";
// NOTE: Ejercicio 8
/*
Definir una variable $numero con un número. Imprimir “El número es par” si lo es o
“El número es impar” si no lo es. Se pide resolver este ejercicio con un if ternario (operadores  ?  :)
*/
echo "Ejercicio 8 <br>";

$numero = 5;

// condición ? valor_si_es_verdadero : valor_si_es_falso
echo $numero % 2 == 0 ? "el valor es par" :  "el valor es impar";

echo "<br>";
// NOTE: Ejercicio 9
/*
9. Crear una variable $nota con un valor del 0 al 10. Utilizando un switch generar la siguiente lógica:

    Si la nota es menor a 4 imprimir “desaprobado”
    Si la nota es 4 o 5 imprimir “zafamos”
    Si la nota este entre 6 y 8 imprimir “Bien!!!”
    Si la nota es un 9 imprimir “MUY bien!!”
    Si la nota es un 10 imprimir “Excelente!!!!!”
*/
echo "Ejercicio 9 <br>";

$nota = rand(-4,15);
echo "La nota es " . $nota;
switch ($nota) {
  case 1:
    echo "Desaprobado!";
    break;
  case 2:
      echo "Desaprobado!";
      break;
  case 3:
      echo "Desaprobado!";
      break;
  case 4:
      echo "Zafamos!";
      break;
  case 5:
      echo "Zafamos";
      break;
  case 6:
      echo "Bien!!";
      break;
  case 7:
      echo "Bien!!";
      break;
  case 8:
      echo "Bien!!";
      break;
  case 9:
      echo "MUY Bien!!";
      break;
  case 10:
      echo "Excelente!!";
      break;
  default:
    echo "El numero no es válido!";
    break;
}


 ?>
