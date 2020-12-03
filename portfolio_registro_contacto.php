<?php
include("conexion_db.php");

if(isset($_POST['enviar'])){

	if(strlen($_POST['nombre']) >= 1 &&
	   
	    strlen($_POST['correo']) >= 1 &&
   
	 
	   
	   strlen($_POST['telefono']) >= 1 && 
	  
	  
	   
	   strlen($_POST['asunto']) >= 1 &&
		 
	   strlen($_POST['mensaje']) >= 1) {
	
		
		$nombre = trim($_POST['nombre']);
		$correo = trim($_POST['correo']);
		
		$telefono = trim($_POST['telefono']);
		
		$asunto = trim($_POST['asunto']);
		$mensaje = trim($_POST['mensaje']);
		
		$consulta = "INSERT INTO airad_contacto(nombre, correo, telefono, asunto, mensaje) VALUES ('$nombre','$correo','$telefono','$asunto','$mensaje')";
		$resultado = mysqli_query($conex,$consulta);
		if($resultado) {
			
			?>
<h3 class="ok">MENSAJE ENVIADO CORRECTAMENTE</h3>
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


