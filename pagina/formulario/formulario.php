<?php
	if ($_POST) {
		$nombre = $_POST["txtnombre"];
		$apellidos = $_POST["txtapellidos"];
		$edad = $_POST["txtedad"];
		$correo = $_POST["txtcorreo"];
		$telefono = $_POST["txttelefono"];
		echo "tu nombre es $nombre $apellidos";
		echo "Tu txtcorreo es $txtcorreo";
		echo "Tu txttelefono es $txttelefono";
	}
?>
	
