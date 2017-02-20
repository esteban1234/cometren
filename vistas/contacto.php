<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
<article class="cabeza">
	<article class="contenheader">
		<div class="logo">
			<img src="../img/cometren.png" class="img-responsive" width="247" height="70" alt="cometren">
		</div>
		<div class="textoheader">
			OBRA CIVIL, CONSTRUCCIONES <br> ASESORIAS, VENTAS DE MATERIAL
		</div>
	</article>
</article>

<div class="menu_bar">
	<a href="#" class="bt-menu"><span class="icon-list2"></span>Menú</a>
	<i class="fa fa-bars menu-abrir" aria-hidden="true"></i>
</div>

<div class="menu">
			<nav>
				<ul>
					<li><a href="../index.php"><span><i class="fa fa-home" aria-hidden="true"></i></span>Inicio</a></li>
					<li><a href="nosotros.php"><span><i class="fa fa-suitcase" aria-hidden="true"></i></span>Quienes somos</a></li>
					<li><a href="servicios.php"><span><i class="fa fa-users" aria-hidden="true"></i></span>Servicios</a></li>
					<li class="select"><a href="contacto.php"><span><i class="fa fa-phone" aria-hidden="true"></i></span>Contacto</a></li>
				</ul>
			</nav>
</div>

<article class="bannerc">
	<article class="fondos">
		<h1>CONTACTO <b>COMETREN</b></h1>
		<p>Estamos para servirte a través de este formulario de contacto.</p>
	</article>
</article>

<article class="contenedorcontac">
	<article class="contendirecc">
    <div class="row hola">
        <div class="badger-left hola" data-badger="DIRECCION">Av. Paseo de los leones #1684 entre 7A Avenida e Islandia. Col. Cumbres, Monterrey, Nuevo León. México.  </div>
        <div class="badger-right badger-warning hola" data-badger="TELEFONO">PENDIENTE</div>
        <div class="badger-left badger-success hola" data-badger="HORARIO">Lunes a Viernes de 9am a 6pm</div>
        <div class="badger-right badger-inverse hola" data-badger="CORREO">info@cometren.com</div>
    </div>
	</article>

	<article class="contenform">
		<form class="form-horizontal" action="envia.php" method="post">
			<fieldset>

			<!-- Form Name -->
			<legend>Formulario de contacto</legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="nombre">Nombre (s);</label>
			  <div class="col-md-8">
			  <input id="nombre" name="nombre" type="text" placeholder="Escribe tu nombre completo" class="form-control input-md" required>

			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="telefono">Teléfono;</label>
			  <div class="col-md-8">
			  <input type="tel" id="telefono" name="telefono"  placeholder="Escribe tu teléfono" class="form-control input-md" required>

			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="correo">Correo:</label>
			  <div class="col-md-8">
			  <input id="correo" name="correo" type="email" placeholder="Escribe tu correo" class="form-control input-md" required>

			  </div>
			</div>

			<!-- Textarea -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="comentario">Comentario:</label>
			  <div class="col-md-4">
			    <textarea class="form-control" id="comentario" name="comentario" placeholder="Escribe aquí tu comentario" required></textarea>
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="btnenviar"></label>
			  <div class="col-md-4">
			    <button id="btnenviar" name="btnenviar" class="btn btn-danger">ENVIAR</button>
			  </div>
			</div>

			</fieldset>
		</form>
	</article>
</article>


<footer>
	<p>Derechos de autor 2017© | COMERCIOS DEL TREN INTERNACIONAL S. de R.L de C.V.</p>
<article class="mapa">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.111826064243!2d-100.36710358550721!3d25.700721283664418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662966e9e0525c3%3A0xb5bf064757593be!2sAv+Paseo+de+los+Leones+1684%2C+Leones%2C+64610+Monterrey%2C+N.L.!5e0!3m2!1ses-419!2smx!4v1487171881824" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</article>
</footer>



<script src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/iconoarriba.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/menu.js"></script>

</body>
</html>
