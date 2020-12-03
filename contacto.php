	<?php
include_once("header.php")
?>
<body>
    <!-- MENU -->
  <!-- MENU -->
  <nav class="navbar">
    <div class="brand-title"> <a href="index.html">AIDRAD </a> </div>
    <a href="#" class="toggle-button">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </a>
    <div class="navbar-links">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="nosotros.php">Sobre MI</a></li>
        <li><a href="portafolio.php">porfolio</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
    </div>
  </nav>
    <!-- BANNER -->
    <div class="banner">
        <h1>Contacto</h1>
    </div>

    <!--SERVICES SECTION-->
    <div class="contact-section">
        <div class="inner-width">
          <h1>Contactate con nosotros</h1>
			<form method="post" name="contacto">
          <input type="text" name="nombre" class="nombre" placeholder="Nombre">
          <input type="email" name="correo" class="email" placeholder="Correo Electronico">
          <input type="text" name="telefono" class="telefono" placeholder="Telefono">
          <input type="text" name="asunto" class="asunto" placeholder="Asunto">
          <textarea rows="1" name="mensaje"  class="mensaje" placeholder="Mensaje"></textarea>
          <br>
          <br>
          <input type="submit" name="enviar" class="c-button" value="Enviar">
				</form>
        </div>
      </div>
		

	
	<script>
	function validar_contacto(){

    if ( document.contacto.nombre.value == ""){
        alert('Ingrese un nombre  valido.');
        return false
        }

        if ( document.contacto.correo.value == ""){
            alert('Ingrese un apellido valido.');
            return false
            }
        
        if ( document.contacto.telefono.value == ""){
            alert('Ingrese un correo electronico valido.');
            return false
            }
	
    if ( document.contacto.asunto.value == ""){
            alert('debes colocar un asunto.');
            return false
            }
    
              
	
	if(document.contacto.mensaje.value.length <10){
alert('Comenta mas de 10 caracteres')
return false;
}
                    
                    
        
    

}
	
	</script>
	
		<?php
include_once("portfolio_registro_contacto.php")
?>
	
		<?php
include_once("footer.php")
?>
	
	