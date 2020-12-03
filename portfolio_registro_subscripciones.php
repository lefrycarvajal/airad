<?php
include("conexion_db.php");

if(isset($_POST['enviar'])){


	   
 	if(strlen($_POST['correo']) >= 1) {
		 

		
		
		$correo = trim($_POST['correo']);
	
		
		$consulta = "INSERT INTO airad_registro(correo) VALUES ('$correo')";
		$resultado = mysqli_query($conex,$consulta);
		if($resultado) {
			
			?>
<h3 class="ok">AHORA RECIBIRAS TODAS LAS NOTIFICACIONES</h3>
<?php
		} else {
			?>
	<h3 class="bad">HA OCURRIDO UN ERROR</h3>
			
			<?php
			}
		} else {
		
              ?>
<h3 class="bad">PORFAVOR COMPLETE LOS CAMPOS</h3>
			<?php
			
		}
		
}
	



?>

