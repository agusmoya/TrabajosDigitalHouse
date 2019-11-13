<?php
$nombre = "Agustin";
$nroSorteo = rand(0,1);
$arraySitios = ["Google", "Facebook", "Twitter"];
$precios = [
        0 => [
                "id" => 1,
                "titulo" => "Lorem Ipsum",
                "descripcion" => "Lorem Ipsum",
                "precio" => 300,
                "imagen" => "img-pdto-1.jpg",
                "enOferta" => true
        ],
        1 => [
                "id" => 2,
                "titulo" => "Lorem Ipsum",
                "descripcion" => "Lorem Ipsum",
                "precio" => 300,
                "imagen" => "img-pdto-1.jpg",
                "enOferta" => false
        ],
        2 => [
                "id" => 3,
                "titulo" => "Lorem Ipsum",
                "descripcion" => "Lorem Ipsum",
                "precio" => 300,
                "imagen" => "img-pdto-1.jpg",
                "enOferta" => true
        ],
        3 => [
                "id" => 4,
                "titulo" => "Lorem Ipsum",
                "descripcion" => "Lorem Ipsum",
                "precio" => 300,
                "imagen" => "img-pdto-1.jpg",
                "enOferta" => false
        ],
        4 => [
                "id" => 5,
                "titulo" => "Lorem Ipsum",
                "descripcion" => "Lorem Ipsum",
                "precio" => 300,
                "imagen" => "img-pdto-1.jpg",
                "enOferta" => true
        ],
        5 => [
                "id" => 6,
                "titulo" => "Lorem Ipsum",
                "descripcion" => "Lorem Ipsum",
                "precio" => 300,
                "imagen" => "img-pdto-1.jpg",
                "enOferta" => false
        ],
        6 => [
                "id" => 7,
                "titulo" => "Lorem Ipsum",
                "descripcion" => "Lorem Ipsum",
                "precio" => 300,
                "imagen" => "img-pdto-1.jpg",
                "enOferta" => true
        ],
        7 => [
                "id" => 8,
                "titulo" => "Lorem Ipsum",
                "descripcion" => "Lorem Ipsum",
                "precio" => 300,
                "imagen" => "img-pdto-1.jpg",
                "enOferta" => false
        ],
        8 => [
                "id" => 9,
                "titulo" => "Lorem Ipsum",
                "descripcion" => "Lorem Ipsum",
                "precio" => 300,
                "imagen" => "img-pdto-1.jpg",
                "enOferta" => true
        ],
        9 => [
                "id" => 10,
                "titulo" => "Lorem Ipsum",
                "descripcion" => "Lorem Ipsum",
                "precio" => 300,
                "imagen" => "img-pdto-1.jpg",
                "enOferta" => false
        ],
];


/* =========== DUDAS ===========
¿POR QUÉ NO ANDA LA ESTRUCTURA DE ABAJO?
<?php foreach ($arraySitios as $idSitio => $sitio) : ?>
  <li> <a href="<?php $idSitio ?>"> <?php echo $sitio ?> </a> </li>
<?php endforeach; ?>

===========Pruebas=============
<?php if ($sitio == "Google") : ?>
  <li> <a href="https://google.com"> <?php echo $sitio ?></a> </li>
<?php elseif($sitio == "Facebook") : ?>
  <li> <a href="https://facebook.com"> <?php echo $sitio ?></a> </li>
<?php elseif($sitio == "Twitter") : ?>
  <li> <a href="https://twitter.com"> <?php echo $sitio ?></a> </li>
<?php endif; ?>

<?php if ($sitio == "Google") : ?>
  <li> <a href="https://google.com"> <?php echo $sitio ?></a> </li>
  <?php endif; ?>
<?php if($sitio == "Facebook") : ?>
  <li> <a href="https://facebook.com"> <?php echo $sitio ?></a> </li>
  <?php endif; ?>
<?php if($sitio == "Twitter") : ?>
  <li> <a href="https://twitter.com"> <?php echo $sitio ?></a> </li>
<?php endif; ?>

<li>
  <a href="https://google.com">Google</a>
</li>
<li>
  <a href="https://facebook.com">Facebook</a>
</li>
<li>
  <a href="https://twitter.com">Twitter</a>
</li>
*/
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>La Internet</h1>
    <marquee>Bienvenidos al mundo de la internet</marquee>
    <h2>Bienvenido <?=$nombre?> </h2>
    <h3>¿Es usted un ganador?</h3>

      <?php if ($nroSorteo == 1) : echo "SI";
        else : echo "NO";
      endif; ?>

    <h3>Algunos sitios interesantes:</h3>
    <ul>
      <?php foreach ($arraySitios as $sitio) : ?>

        <?php if ($sitio == "Google") : ?>
          <li> <a href="https://google.com"> <?php echo $sitio ?></a> </li>
        <?php elseif($sitio == "Facebook") : ?>
          <li> <a href="https://facebook.com"> <?php echo $sitio ?></a> </li>
        <?php elseif($sitio == "Twitter") : ?>
          <li> <a href="https://twitter.com"> <?php echo $sitio ?></a> </li>
        <?php endif; ?>

      <?php endforeach; ?>
    </ul>
  </body>

</html>
