<?php include "conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <?php include("head.php");?>
    </head>
    <body>
       <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Sistema de control de lockers</a>
                   
                   
                </div>
            </div>
            <!-- /navbar-inner -->
        </div><br />

            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="content">
                            <?php
			if(isset($_POST['input'])){
				$no_colaborador = mysqli_escape_string($conn,(strip_tags($_POST['no_colaborador'], ENT_QUOTES)));
				$nombres	= mysqli_real_escape_string($conn,(strip_tags($_POST['nombres'], ENT_QUOTES)));
				$fecha_asignacion=date("Y-m-d H:i:s");
				$puesto 		= mysqli_real_escape_string($conn,(strip_tags($_POST['puesto'], ENT_QUOTES)));
				$sexo 		= mysqli_real_escape_string($conn,(strip_tags($_POST['sexo'], ENT_QUOTES)));
				$no_locker 		= mysqli_real_escape_string($conn,(strip_tags($_POST['no_locker'], ENT_QUOTES)));				
				$area_locker  = mysqli_real_escape_string($conn,(strip_tags($_POST['area_locker'], ENT_QUOTES)));
				
		
				$insert = mysqli_query($conn, "INSERT INTO empleados(id, no_colaborador, nombres, fecha_asignacion, puesto, sexo, no_locker, area_locker)
					VALUES(NOT NULL, '$no_colaborador','$nombres', '$fecha_asignacion', '$puesto', '$sexo', '$no_locker', '$area_locker')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho, los datos han sido agregados correctamente.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo registrar los datos.</div>';
						}
				
			}
			?>
            
            <blockquote>
            Agregar colaborador
            </blockquote>
                         <form name="form1" id="form1" class="form-horizontal row-fluid" action="registro.php" method="POST" >
                         	<div class="control-group">
								<label class="control-label" for="no_colaborador"># Colaborador</label>
									<div class="controls">
										<input type="number" name="no_colaborador" id="no_colaborador" " class="form-control span8 tip" required>
											</div>
										</div>
							<div class="control-group">
								<label class="control-label" for="nombres">Nombre Completo</label>
									<div class="controls">
										<input type="text" name="nombres" id="nombres" placeholder="Nombre del colaborador" class="form-control span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="puesto">Puesto</label>
											<div class="controls">
												<input type="text" name="puesto" id="puesto" placeholder="Puesto del colaborador" class="form-control span8 tip" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="sexo">Sexo</label>
											<div class="controls">
												<input type="text" name="sexo" id="sexo" placeholder="Sexo" class="form-control span8 tip" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="direccion"># Locker</label>
											<div class="controls">
												<input name="no_locker" id="no_locker
												" class=" form-control span8 tip" type="number" placeholder="# Locker" required />
											</div>
										</div>
                                        
                                        <div class="control-group">
											<label class="control-label" for="area_locker">Areá del locker</label>
											<div class="controls">
												<input name="area_locker" id="area_locker
												" class=" form-control span8 tip" type="text" placeholder="Areá locker" required />
											</div>
										</div>
                                      

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="input" id="input" class="btn btn-sm btn-primary">Registrar</button>
                                               <a href="index.php" class="btn btn-sm btn-danger">Cancelar</a>
											</div>
										</div>
									</form>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        
        <!--/.wrapper--><br />
        <div class="footer span-12">
            <div class="container">
              <center> <b class="copyright">Alejandro Solis // Guillermo Lopez &copy; <?php echo date("Y")?> Sistema de locker v.1.1</b></center>
            </div>
        </div>

        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      
    </body>
