<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Ciudad</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$id=$_GET["id"];
include_once("ciudadCollector.php");
include_once("ciudad.php");
$DemoCollectorObj= new ciudadCollector();
$ObjDemo=$DemoCollectorObj->showCiudad($id);
?>

<h2>Ciudad</h2>


<form id="contact-form" action="" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">
<div class="float-input">
ID:	 <input name="id" id="id" type="text" value="<?php echo $ObjDemo->getId(); ?>" readonly />
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
NOMBRE:	<input name="nombre" id="nombre" type="text" value="<?php echo $ObjDemo->getNombre(); ?>"  readonly/>
<span><i class="fa fa-lock"></i></span>
</div>

<a href="ciudadAdmin.php">Cancelar</a>
                                                          
</div>
</form>

</aside>
</body>
</html>
