<?php

$secciones = ["Home", "Nosotros", "Preguntas", "Productos"];

$productos = ["Family", "Walkman", "Discman"];

$nombre = "Agustin";

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <header>
        <nav>
          <ul>
              <?php foreach ($secciones as $seccion) : ?>
                <li>
                  <?=$seccion?>
                </li>
              <?php endforeach; ?>
          </ul>
        </nav>
      </header>
  </body>
</html>
