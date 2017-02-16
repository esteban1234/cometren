<!DOCTYPE html>
<?php include 'vistas/encabezado.php' ?>
<body>

<article class="cabeza">
	<article class="contenheader">
		<div class="logo">
			<img src="img/cometren.png" class="img-responsive" width="247" height="70" alt="cometren">
		</div>
		<div class="textoheader">
			OBRA CIVIL, CONSTRUCCIONES <br> ASESORIAS, VENTAS DE MATERIAL
		</div>
	</article>
</article>

<div class="menu_bar">
	<a href="#" class="bt-menu"><span class="icon-list2"></span>Menú</a>
</div>
 		<div class="menu">
			<nav>
				<ul>
					<li class="select"><a href="index.php"><span><i class="fa fa-home" aria-hidden="true"></i></span>Inicio</a></li>
					<li><a href="vistas/nosotros.php"><span><i class="fa fa-suitcase" aria-hidden="true"></i></span>Quienes somos</a></li>
					<li><a href="vistas/servicios.php"><span><i class="fa fa-users" aria-hidden="true"></i></span>Servicios</a></li>
					<li><a href="vistas/contacto.php"><span><i class="fa fa-phone" aria-hidden="true"></i></span>Contacto</a></li>
				</ul>
			</nav>
		</div>





<!-- <div class="contededortodo"> -->
	<div class="container">
        
        <div class="col-md-12">
            <div id="carousel_1" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    
                    <!--Barra de indicadores-->
                    <li data-target="#carousel_1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel_1" data-slide-to="1" ></li>
                    <li data-target="#carousel_1" data-slide-to="2"></li>
                    <li data-target="#carousel_1" data-slide-to="3"></li>
                    
                </ol>
                
                <!--capa para contener los slide-->
                <div class="carousel-inner" role="listbox"> 
                    <!--la clase "carousel-inner" le indica 
                    al navegador que el div contiene un slide, y con el atributo (role="listbox") 
                    le decimos que este slide seguira una secuencia tipo lista--> 
                    
                    <div class="item active"> <!--El primer item debera contener la clase "active para 
                                                que podamos visualizarlo"-->
                        
                        <img src="img/construccionc.jpg" class=" img-responsive"> <!--añadimos la clase "img-responsive" para asegurar 
                                                                                        la correcta visualizacion en cualquier dispositivo-->
                        <div class="carousel-caption hidden-xs"> <!--Esta capa nos sirve para agregar texto, 
                                                                    se mostrara por encima de las imagenes con 
                                                                    "hidden-xs" lo ocultamos en pantallas pequeñas-->
                            <h4 class="tit_slide">Los mejores en construcción</h4>
                            <!-- <p>Casas y edificios</p> -->
                        </div>
                        
                    </div>
                    
                    <div class="item">
                        
                        <img src="img/construccion2c.jpg" class=" img-responsive">
                        
                        <div class="carousel-caption hidden-xs">
                            <h4 class="tit_slide">Construcción de casas y edificios</h4>
                            <!-- <p>Texto de prueba numero 2</p> -->
                        </div>
                        
                    </div>
                    
                    <div class="item">
                        
                        <img src="img/construccion3c.jpg" class=" img-responsive">
                        
                        <div class="carousel-caption hidden-xs">
                            <h4 class="tit_slide">El mejor equipo para construir</h4>
                            <!-- <p>Texto de prueba numero 3</p> -->
                        </div>
                        
                    </div>

                    <div class="item">
                        
                        <img src="img/material2c.jpg" class=" img-responsive">
                        
                        <div class="carousel-caption hidden-xs">
                            <h4 class="tit_slide">Materiales para la construcción</h4>
                            <!-- <p>Texto de prueba numero 3</p> -->
                        </div>
                        
                    </div>
                    
                    <!--Elementos de control (Prev & Next)-->
                    <a class="left carousel-control " href="#carousel_1" role="button" data-slide="prev">
                    	 <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    					 <span class="sr-only">Previous</span>
                    </a>
                    
                    <a class="right carousel-control " href="#carousel_1" role="button" data-slide="next">
                    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    					<span class="sr-only">Next</span>
                    </a>
                    
                </div>
                
            </div>
        </div>	
        
    </div>
<!-- </div> -->

<div class="primeraseccion">
<article class="banner">
	<p>CALIDAD EN LA CONSTRUCCION Y PERFECCION EN LOS ACABADOS <br>
COMETREN: ARQUITECTURA PARA TU PROYECTO</p>
</article>
	<div class="container margen">
		<div class="row">
	       <div class="row">
			<article class="col-md-6">
	    			<figure class="col-lg-12">
					<a href=""><img class="img img-responsive article-img" src="img/construccion1.jpg"></a>
					<figcaption class="article-caption"><h1 class="article-title"><a href="">LAS CONSTRUCCIONES QUE TÚ QUIERAS</a></h1>
					</figcaption>
					</figure>
					<div class="article-intro col-lg-12" style="padding-top: 10px;">
					<strong class="letras">
					<i class="fa fa-check" aria-hidden="true"></i> &nbsp;Una construcción 100% a tu gusto. <br>
						<i class="fa fa-check" aria-hidden="true"></i> &nbsp;Con los espacios y la distribución que tú deseas. <br>
						<i class="fa fa-check" aria-hidden="true"></i> &nbsp;Arquitectectos al servicio de nuestros clientes.</strong>
					</div>
					
			</article>
	                
	        <article class="col-md-6">
	        		<figure class="col-lg-12">
					<a href=""><img class="img img-responsive article-img" src="img/acabados.jpg"></a>
					<figcaption class="article-caption"><h1 class="article-title"><a href="">LOS ACABADOS QUE TÚ QUIERAS</a></h1>
					</figcaption>
					</figure>
	
					<div class="article-intro col-lg-12" style="padding-top: 10px;">
					<strong class="letras">
					<i class="fa fa-check" aria-hidden="true"></i> &nbsp;Acabados que se ajustan a todos los presupuestos. <br>
						<i class="fa fa-check" aria-hidden="true"></i> &nbsp;Paquetes a medida, personalizando cada detalle a tu gusto.
						</strong>
					</div>
					
			</article>
	    </div>
	                
	                <hr>
	                
	     <div class="row">
	        <article class="col-md-6">
	        		<figure class="col-lg-12">
					<a href=""><img class="img img-responsive article-img" src="img/casa.jpg"></a>
					<figcaption class="article-caption"><h1 class="article-title"><a href="">LA CASA QUE TÚ QUIERAS</a></h1>
					</figcaption>
					</figure>
					<div class="article-intro col-lg-12" style="padding-top: 10px;">
					<strong class="letras">
					<i class="fa fa-check" aria-hidden="true"></i> &nbsp;Tú Defines. <br>
						<i class="fa fa-check" aria-hidden="true"></i> &nbsp;Tú Escoges. <br>
						<i class="fa fa-check" aria-hidden="true"></i> &nbsp;Tú Decides cómo será Tu Casa Ideal.</strong>
					</div>
					
			</article>
	                
	        <article class="col-md-6">
	        		<figure class="col-lg-12">
					<a href=""><img class="img img-responsive article-img" src="img/materiales2.jpg"></a>
					<figcaption class="article-caption"><h1 class="article-title"><a href="">LOS MATERIALES QUE TU QUIERAS</a></h1>
					</figcaption>
					</figure>
	
					<div class="article-intro col-lg-12" style="padding-top: 10px;">
					<strong class="letras">
					<i class="fa fa-check" aria-hidden="true"></i> &nbsp;Calidad. <br>
						<i class="fa fa-check" aria-hidden="true"></i> &nbsp;Garantia. <br>
						<i class="fa fa-check" aria-hidden="true"></i> &nbsp;Entrega a tiempo.</strong>
					</div>
					
			</article>
	      </div>
		</div>
	</div>
</div>

<footer>
	<p>Derechos de autor 2017© | COMERCIOS DEL TREN INTERNACIONAL S. de R.L de C.V.</p>
<article class="mapa">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.111826064243!2d-100.36710358550721!3d25.700721283664418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662966e9e0525c3%3A0xb5bf064757593be!2sAv+Paseo+de+los+Leones+1684%2C+Leones%2C+64610+Monterrey%2C+N.L.!5e0!3m2!1ses-419!2smx!4v1487171881824" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</article>
<div class="btn-toolbar boton" role="toolbar">
  <a href="vistas/contacto.php">
		  	<button type="button" class="btn btn-danger btn-lg">
		    	<span><i class="fa fa-plus" aria-hidden="true"></i></span> Solicita una cotización
		  	</button>
		  </a>
</div>
</footer>

<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/iconoarriba.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/menu.js"></script>
</body>
</html>