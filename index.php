<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style-index.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/style-index_down.css">
<!-- index -->    
    <link rel="stylesheet" type="text/css" href="css/responsive/r-style-index.css" media="screen and (max-width: 1920px)">
<!-- index down -->
    <link rel="stylesheet" type="text/css" href="css/responsive/r-style-index_down.css" media="screen and (max-width: 1920px)">

<!-- Nuevo El icono-->
<link rel="shortcut icon" href="logo_ico.ico"> 
	<title>over_index</title>
</head>
    
    
<body > 

<div id="mimodal"><!--id mi modal se conecta con el script para cerar el modal con la X-->
   
	<a class="cerrar" href ="javascript:void(0)" 
	onclick = "document.getElementById('mimodal').style.display='none'">
	X</a> <!-- scrip que borra el modal en la X -->	
    
    
    <button class="inisesion">Iniciar SesionX</button><!--boton de inisio de sesion nuevo-->
		 
      
	    
      
 <div class="contenido-modal"><!--  contenido modal que contiene a la vez el logo y el fomrulario-->
   
    <div ><!--  modal div para el logo y el bienvenido -->
        <img src="img/logo.png" height="43" width="238">
         <div class="bienvenido">Bienvenido </div>
        </div>
     
<div class="modal-body"><!--  contenido modal-contenido del formulario-->
    
        <div  id="unase"> ¡Únase en forma gratuita!
		</div>
    <!-- aqui elimine el estilo del input y lo mande al css-coloque la clase input-->
    <form  action="" method="POST">
	 <input class="caja" placeholder="Escribe tu Usuario" type="text" name="name">
	 <input class="caja" placeholder="Escribe tu Contraseña"  type="password" name="pass">
	 <input class="caja" placeholder="Confirma tu Contraseña"  type="password" name="rpass">
	<input class="caja" placeholder="Escribe tu Correo Electronico"  type="text" name="email">
        <!--Fecha de nacimiento -->
		
        <div id="fecha" ><a>Fecha de nacimiento:</a></div><!--nuevo -->
		
		<!--Select -->
        
		<select >
		<option value="Enero" selected="selected">Enero</option>
		<option value="Febrero" selected="selected">Febrero</option>
		<option value="marzo" selected="selected">marzo</option>
		<option value="Abril" selected="selected">Abril</option>
		<option value="Mayo" selected="selected">Mayo</option>
		<option value="Junio" selected="selected">Junio</option>
		<option value="Junio" selected="selected">Julio</option>
		<option value="Agosto" selected="selected">Agosto</option>
		<option value="Septiembre" selected="selected">Septiembre</option>
		<option value="Octubre" selected="selected">Octubre</option>
		<option value="Noviembre" selected="selected">Noviembre</option>
		<option value="Diciembre" selected="selected">Diciembre</option>
		<option value="Febrero" selected="selected">Mes</option>
		</select>

	<!-- DIa -->

		<select >
		<option value="1" selected="selected">1</option>
		<option value="2" selected="selected">2</option>
		<option value="3" selected="selected">3</option>
		<option value="4" selected="selected">4</option>
		<option value="5" selected="selected">5</option>
		<option value="5" selected="selected">6</option>
		<option value="6" selected="selected">7</option>
		<option value="7" selected="selected">8</option>
		<option value="8" selected="selected">9</option>
		<option value="9" selected="selected">10</option>
		<option value="10" selected="selected">11</option>
		<option value="11" selected="selected">12</option>
		<option value="13" selected="selected">13</option>
		<option value="14" selected="selected">14</option>
		<option value="15" selected="selected">15</option>
		<option value="16" selected="selected">16</option>
		<option value="17" selected="selected">17</option>
		<option value="18" selected="selected">18</option>
		<option value="19" selected="selected">19</option>
		<option value="20" selected="selected">20</option>
		<option value="30" selected="selected">30</option>
		<option value="31" selected="selected">31</option>
		<option value="hola" selected="selected">Dia</option>

		</select>

		<select >
		<option value="1920" selected="selected">1920</option>
		<option value="1921" selected="selected">1921</option>
		<option value="1922" selected="selected">1922</option>
		<option value="1923" selected="selected">1923</option>
		<option value="1924" selected="selected">1924</option>
		<option value="1925" selected="selected">1925</option>
		<option value="1926" selected="selected">1926</option>
		<option value="1927" selected="selected">1927</option>
		<option value="1928" selected="selected">1928</option>
		<option value="1999" selected="selected">1999</option>
		<option value="1930" selected="selected">1930</option>
        <option value="hola" selected="selected">Año</option>

		</select>
        <br>
	<!-- check box -->
		<input  type="radio" name="radio2" /> <label class="sex">Masculino</label> <!-- resolver boxchechek, no se seleciona uno y luego otro-->
		<input class="check" type="radio" name="radio2" /><labe class="sex">Femenino</labe>
		        
	<!-- texto terminos-->
		<div id="terminos"> 
		Haciendo clic en Registrarse, estás indicando que has leído y que aceptas los
		<a href="terminos.php"> 
		Términos de servicio. y las políticas de privacidad
		</a></div>
	<!-- recibiras un email-->
		<div id="recibirmail">Recibirás un mail de confirmación
		</div>
        
	<!--botton registrase-->
		
		<button type="submit" id="button">Registarte</button>
		
        </form>
   
</div> 
   	 </div>
</div>

	<!--fin Modal-->


<!-- contenido página Down -->

<!-- menu cabezera -->
    <?php
        include 'cabezera.php' ;
    ?>
	
	<H1><p class="probar"><div id="contenido">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,<br>

	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</div></H1>
	

   <!-- fin contenido página --> 
</body>
    
</html>