<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Moneda</title>
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
include_once("moneda.php");
$DemoCollectorObj= new MonedaCollector();
$ObjDemo=$DemoCollectorObj->showMoneda($id);
?>

<h2>Ciudad</h2>


<form id="contact-form" action="mostrar.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">
<div class="float-input">

<div class="float-input">
NOMBRE:	<input name="nombre" id="nombre" type="text" value=""  />
<span><i class="fa fa-lock"></i></span>
</div>

<span><i class="fa fa-lock"></i></span>
</div>
<input type="submit" id="submit_save" class="main-button" value="mostrar"/>
<a href="ciudadAdmin.php">Cancelar</a>
                                                          
</div>
</form>

</aside>
</body>
</html>
