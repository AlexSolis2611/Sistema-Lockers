<?php
include "conn.php";
if(isset($_POST['update'])){
				$id			= intval($_POST['id']);
				$nombres	= mysqli_real_escape_string($conn,(strip_tags($_POST['nombres'], ENT_QUOTES)));
				$fecha_asignacion=date("Y-m-d H:i:s");			                           
				$puesto 		= mysqli_real_escape_string($conn,(strip_tags($_POST['empuesto'], ENT_QUOTES)));
				$sexo 		= mysqli_real_escape_string($conn,(strip_tags($_POST['sexo'], ENT_QUOTES)));
				$no_locker 		= mysqli_real_escape_string($conn,(strip_tags($_POST['no_locker'], ENT_QUOTES)));				
				$area_locker  = mysqli_real_escape_string($conn,(strip_tags($_POST['area_locker'], ENT_QUOTES)));
               
				
				$update = mysqli_query($conn, "UPDATE empleados SET nombres='$nombres', fecha_asignacion='$fecha_asignacion', puesto='$puesto', sexo='$sexo', no_locker='$no_locker', area_locker='$area_locker' WHERE id='$id'") or die(mysqli_error());
				if($update){
					echo "<script>alert('Los datos han sido actualizados!'); window.location = 'index.php'</script>";
				}else{
					echo "<script>alert('Error, no se pudo actualizar los datos'); window.location = 'index.php'</script>";
				}
			}
  ?>