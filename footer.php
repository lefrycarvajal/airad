 
  <!--NEWSLETTER-->

  <div class="newsletter">
    <h2 class="nl-title">¡Suscribete a nuestro Newsletter!</h2>
    <form action="" method="post" name="subscripciones">
      <input type="text" name="correo" placeholder="Correo Electronico">
      <input type="submit" name="enviar" value="Go">
    </form>
  </div>

	<?php
include_once("portfolio_registro_subscripciones.php")
?>

  <!--FOOTER-->

  <div class="footer-main">

    <div class="footer-social">
      <ul>
        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
      </ul>
    </div>

    <div class="menu-footer">
      <ul>

         <li><a href="index.php">Inicio</a></li>
        <li><a href="nosotros.php">Sobre MI</a></li>
        <li><a href="portafolio.php">porfolio</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li><a href="contacto.php">Contacto</a></li>

      </ul>
    </div>

  </div>
  <div class="b-footer">
    <p>Todos los derechos reservados <a href="#">airad</a></p>
  </div>



</body>

	
	<script>
	function validar_subscripciones(){

  

        if ( document.subscripciones.correo.value == ""){
            alert('Ingrese un apellido valido.');
            return false
            }
        
                 
                    
        
    

}
	
	</script>
	

</html>