<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Eliminar moneda</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>

	
	
<?php

$id=$_GET["id"];

include_once("monedaCollector.php");
$DemoCollectorObj= new MonedaCollector();


$DemoCollectorObj->deleteMoneda($id);
?>

<div class="text-fieldsl">
         <a href='horarioAdmin.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
