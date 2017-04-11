<?php
	if($_POST["usuario_txt"]=="javier" && 
		$_POST["password_txt"]=="12345"){
		session_start();
		$_SESSION["autentificado"] = true;
		$_SESSION["usuario"] = $_POST["usuario_txt"];
		
		header("Location: inicio.php");
	}else{
		header("Location: index.php?error=si");
	}

	
?>