<?php
$articulos = [
"articulo1" => [
                "id" => 1,
                "titulo" => "Fideos",
                "descripcion" => "La mejor comida del mundo!",
                "precio" => 100,
                "imagen" => "comida1.jpg",
                "enOferta" => true
        ],
"articulo2" => [
                "id" => 2,
                "titulo" => "Pizza",
                "descripcion" => "La mejor comida del mundo!",
                "precio" => 200,
                "imagen" => "comida2.jpg",
                "enOferta" => false
        ],
"articulo3" => [
                "id" => 3,
                "titulo" => "Pan",
                "descripcion" => "La mejor comida del mundo!",
                "precio" => 300,
                "imagen" => "comida3.jpg",
                "enOferta" => true
        ],
"articulo4" => [
                "id" => 4,
                "titulo" => "Ravioles",
                "descripcion" => "La mejor comida del mundo!",
                "precio" => 400,
                "imagen" => "comida4.jpg",
                "enOferta" => false
        ],
"articulo5" => [
                "id" => 5,
                "titulo" => "Lasagna",
                "descripcion" => "La mejor comida del mundo!",
                "precio" => 500,
                "imagen" => "comida5.jpg",
                "enOferta" => true
        ],
"articulo6" => [
                "id" => 6,
                "titulo" => "Asado",
                "descripcion" => "La mejor comida del mundo!",
                "precio" => 600,
                "imagen" => "comida6.jpg",
                "enOferta" => false
        ],
"articulo7" => [
                "id" => 7,
                "titulo" => "Papas fritas",
                "descripcion" => "La mejor comida del mundo!",
                "precio" => 700,
                "imagen" => "comida7.jpg",
                "enOferta" => true
        ],
"articulo8" => [
                "id" => 8,
                "titulo" => "Hamburguesa",
                "descripcion" => "La mejor comida del mundo!",
                "precio" => 800,
                "imagen" => "comida8.jpg",
                "enOferta" => false
        ],
"articulo9" => [
                "id" => 9,
                "titulo" => "Canelones",
                "descripcion" => "La mejor comida del mundo!",
                "precio" => 900,
                "imagen" => "comida9.jpg",
                "enOferta" => true
        ],
"articulo10" => [
                "id" => 10,
                "titulo" => "Tacos",
                "descripcion" => "La mejor comida del mundo!",
                "precio" => 1000,
                "imagen" => "comida10.jpg",
                "enOferta" => false
        ],
];

$arrayNav = ["quienes", "servicios", "portfolio", "sucursales", "contacto"];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<title>Responsive Web Design</title>
	</head>
	<body>

	<div class="container">

		<!-- cabecera -->
		<header class="main-header">
			<img src="images/logo.jpg" alt="logotipo" class="logo">

			<a href="#" class="toggle-nav">
				<span class="fa fa-bars"></span>
			</a>

			<nav class="main-nav">
				<ul>
					<?php foreach ($arrayNav as $elemento):?>
							<li><a href="#"> <?php echo $elemento ?> </a></li>
					<?php endforeach; ?>
				</ul>
			</nav>
		</header>

		<!-- banner -->
		<section class="banner">
			<img src="images/img-banner.jpg" alt="banner">
		</section>

		<!-- productos -->
		<section class="vip-products">
			<?php foreach ($articulos as $idArticulo => $articulo): ?>

				<article class="product">
					<div class="photo-container">
						<img class="photo" src="images/<?php echo $articulo['imagen']?>" alt="pdto 01">
						<img class="special" src="images/img-nuevo.png" alt="plato nuevo">
						<a class="zoom" href="#">Ampliar foto</a>
					</div>
					<h2> <?php echo $articulo["titulo"] ?> </h2>
			<?php if ($articulo["enOferta"] == true):?>
					<span>EN OFERTA!!!</span>
			<?php endif; ?>


					<p><?php echo $articulo["descripcion"] ?></p>
					<a class="more" href="#">ver más</a>
				</article>
				<?php endforeach; ?>
			</section>

		<footer class="main-footer">
			<ul>
				<li><a href="#">home</a></li>
				<li><a href="#">quienes</a></li>
				<li><a href="#">servicios</a></li>
				<li><a href="#">portfolio</a></li>
				<li><a href="#">sucursales</a></li>
				<li><a href="#">contacto</a></li>
			</ul>
		</footer>
	</div>

	</body>
</html>
