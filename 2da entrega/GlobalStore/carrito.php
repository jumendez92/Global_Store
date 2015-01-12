<?php
session_start();
$carrito=array();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<h1>Carrito De Compras</h1>
		<a href="./shoppingcart.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
	<section>
		
	<?php
		include 'conexion.php';

		
		
		$re=pg_query("select id_contenido,nombre_contenido,costo_contenido from CONTENIDO where nombre_contenido='Instagram'");
		while ($f=pg_fetch_row($re)) {
		?>
			<div class="producto">
			<center>
				<?php echo $f[1];?><br>
				<span><?php echo $f[2];?></span><br>
				<a href="shoppingcart.php?id=<?php array_push($carrito,$f[0]);$_SESSION['carrito']=$carrito;
				
			?>">Añadir al carrito</a>
			</center>
		</div>
	<?php
		}
		
	?>
		
	</section>
</body>
</html>