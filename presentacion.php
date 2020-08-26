<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido a mi canal</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<form method="validacion.php" >
		<h1> ¡Bienvenido! </h1>
		<input type="text" name="name" placeholder="Nombre completo" >
        <input type="password" name="password"  placeholder="contraseña" > 
            

        <input type="submit" name="register">
     </form>
	<?php
	include("validacion.php");

	?>
</body>

</html>

