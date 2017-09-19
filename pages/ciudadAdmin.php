<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Ciudad Administrador</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>  
      <!-- <link href="../css/main.css" rel='stylesheet' type='text/css'  >   -->
        <link href="../css/admin.css" rel='stylesheet' type='text/css'  >
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> 
    </head>
    <body>
        <div>
            <?php
            include_once("ciudadCollector.php");
            $DemoCollectorObj = new CiudadCollector();
            echo "<h2 class='texcen'>Bienvenido Usuario Administrador:(nate) </h2>";
            ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-xs-6">
                                    <h3 class="panel-title">Listado de Ciudades</h3>
                                </div>
                                <div class="col col-xs-6 text-right">
                                    
                                    <?php
                                    echo " <a type='button' class='btn btn-sm btn-primary btn-create' href= 'formularioProfeInsertar.php' >Crear Nuevo</a> ";
                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-list">
                                <thead>
                                    <tr>
                                        <th><em class="fa fa-cog"></em></th>
                                        <th class="hidden-xs">ID</th>
                                        <th>Nombre</th>
                                    </tr> 
                                </thead>
                                <tbody>
                                    <?php
                                    function runMyFunction() {
                                        echo 'I just ran a php function';
                                        }
                                        ?>
                                    
                                    
                                    <?php
                                        foreach ($DemoCollectorObj->showCiudades() as $c){
                                    ?>
                                    <tr>
                                        <td align="center">
                                            <?php
                                            echo "<a class='btn btn-default'  href='mostrarCiudad.php?id=".$c->getId()."'   ><em class='fa fa-pencil'></em></a>";
                                            ?>
                                            
                                            <?php
                                            echo "<a class='btn btn-danger' href='profesorEliminar.php?id=".$c->getId()."'><em class='fa fa-trash'></em></a>";  
                                            ?>
                                        </td>
                                        <td class="hidden-xs">  <?php  echo $c->getId();    ?>   </td>
                                        <td> <?php echo  $c->getNombre(); ?> </td>
                                        
                                    </tr>
                                    <?php   
                                        }
                                        /*Generar alert  */
                                        if (isset($_GET['hello'])) {
                                            runMyFunction();
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col col-xs-11">
                                </div>
				    <div class="col col-xs-1"><a href="../index.php">Volver</a>
                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
