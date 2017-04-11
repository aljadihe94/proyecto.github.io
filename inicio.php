<!doctype html>
	<html lang="es">
<head>
	<meta charset="utf-8">
	<meta decription="Proyecto de Restaurante"/>
    <link rel="stylesheet" type="text/css" media="all" href="css/estilos.css"/>
	<title>Documento sin título</title>
</head>
	<body>
	<header>
		<h1>RESTAURANTE</h1>
			<figure>
				<figcaption>Titulo de nuestro logo</figcaption>
			</figure>
	</header>
	<nav>
		<ul>
			<li><a href="pagina1.php">Pagina1</a></li>
			<li><a href="pagina2.php">Pagina2</a></li>
			<li><a href="pagina3.php">Pagina3</a></li>
			<li><a href="pagina4.php">Pagina4</a></li>
		</ul>
	</nav>
	<section id="contenedor">
	<form action="control.php" method="post" name="login_frm" enctype="application/x-www-form-urlencoded" id="form">
	<?php
	if($_GET["error"]=="si"){
		echo "<span>Verifica tus datos</span>";
	}else{
		echo "Introduce tus datos";
	}
	?>
		<section id="principal">
			<h2>Bienvenidos</h2>
			<article id="login">
			<div>
				<label for="ingreso"> Ingreso:</label>
				<input type="text" name="usuario_txt" required />
			</div>
			<div>
				<label for="contrasena"> Contraseña: </label>
				<input type="password" name="password_txt"  required />
			</div>
			<div>
				<input type="submit"  name="enviar_btn" value="Entrar" />

				<input type="submit"  name="olvide_btn" value="Restaurar" />

				<input type="submit"  name="registrarse_btn" value="Registrarse" />
			</div>
			</article>
		</section>
    </section>
	</form>
	</section>
    <footer>
    Creado por
    </footer>
	</body>
</html>

