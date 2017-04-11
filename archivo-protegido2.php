<?php 	include("sesion.php"); ?>
Bienvenido:
<?php echo $_SESSION["usuario"];?>
<br></br>
estas en otra pagina segura
<br></br>
<a href="inicio.php"> ir a la primera pagina segura </a>
<br></br>
<a href="salir.php"> Salir</a>