<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!--META HTTP-EQUIV="Refresh" CONTENT="1"-->
		<link rel="shortcut icon" href="logosoficiales/ICONO.ico" />
		<title>KBLEX HOPELCHÉN</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="codeLob/bootstrap.min.css">
  		<script src="codeLob/jquery.min.js"></script>
  		<script src="codeLob/bootstrap.min.js"></script>
  		<link rel="stylesheet" type="text/css" href="type/icons.css"/>
  		<!--Estilos-->
  		<style>
  			.navbar-default {
  				background-color: #3498db;
  				border-color: #00c800;
  			}
  			#btnitems{
  				background-color: #3498db;
  			}
  			body{
  				background-color: #fff;
  				font-family: sans-serif;
  			}
  			#nameitems>li>a{
  				color: #fff;
  			}
  			#nameitems>li>a:hover{
  				/* color oficial 00c800*/
  				color: #fff;
  				
  				background-color: #00c800;
  				/*border-top: 4px solid rgba(214,98,190);
  				border-bottom: 4px solid rgba(214,98,190);*/
  			}
  			.carousel-control.right {
  				background-image:linear-gradient(to right,rgba(214,98,190,0) 0,rgba(214,98,190,0) 100%);
  			}
			.carousel-control.left {
				background-image: linear-gradient(to left,rgba(214,98,190,0) 0,rgba(214,98,190,0) 100%);
			}
			footer {
				background-color: #2d2d30;
				color: #f5f5f5;
				padding: 32px;
			}
			footer a {
				color: #f5f5f5;
			}
			footer a:hover {
				color: #777;
				text-decoration: none;
			}
			.person {
				border: 5px solid transparent;
				border-color: #3498db;
			}
			.person:hover {
				border-color: rgba(214,98,190);
			}
			#desplmenu,#desplmenu>li>a{
				background-color: #3498db;
				color: #fff;
			}
			#desplmenu>li>a:hover{
				background-color: #00c800;
			}
			.panel-body{
				border-left: 1px solid #3498db;
				border-bottom: 1px solid #3498db;
				border-right: 1px solid #3498db;
				border-bottom-left-radius: 5px;
				border-bottom-right-radius: 5px;
			}
  		</style>
  		<!--Estilos fin-->
  		    <script>
      $(document).ready(function(){
        $(".navbar a, footer a[href='#myPage']").on('click',function(event){
          event.preventDefault();
          var hash = this.hash;
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){

  window.location.hash = hash;
  });
});


    $(window).scroll(function(){
      $(".slideanim").each(function(){
        var winTop = $(window).scrollTop();

        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
        if (pos <winTop + 600){
          $(this).addClass("slide");
        }
      
    });
    });
  })
</script>
	</head>
	<body>
	<!--BARRA DE NAVEGACION------------------------------------------------------------------------------------------------------------------------>
		<nav class="navbar navbar-default navbar-fixed-top" id="nav">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navitems" id="btnitems">
						<span class="icon-bar" style="background-color: #ffffff;" ></span>
						<span class="icon-bar" style="background-color: #ffffff;" ></span>
						<span class="icon-bar" style="background-color: #ffffff;" ></span>
					</button>
					<a href="#inicio"><img src="logosoficiales/LOGO.png" alt="KBLEX"/></a>
				</div>
				<div class="collapse navbar-collapse" id="navitems">
					<ul class="nav navbar-nav navbar-right" id="nameitems">
						<li><a href="#inicio"><span class="fa fa-home"></span>   INICIO</a></li>
						<li><a data-toggle="modal" data-target="#nosotros">NOSOTROS</a></li>
						<li><a href="#servicios">SERVICIOS</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">MÁS <span class="caret"></span></a>
							<ul class="dropdown-menu" id="desplmenu">
								<li><a href="#canales">CANALES</a></li>
            					<li><a href="#precios">PRECIOS</a></li>
            					<li><a href="#formasdepago">FORMAS DE PAGO</a></li>
            					<li><a href="#contactanos">CONTÁCTANOS</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!--FIN DE BARRA DE NAVEGACION-------------------------------------------------------------------------------------------------------------->
		<!--Son tres BR para obtener uan separacion de la barra de navegacion-->
		<br id="inicio"/>
		<br />
		<br />
		<!--INICIO CON CAROUSEL--------------------------------------------------------------------------------------------------------------------->
		<div class="container-fluid">
			<div id="mipresentacion" class="carousel slide" data-ride="carousel" >
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="row">
							<div class="col-sm-12 text-center">
								<img src="imagenes/banner1.jpg" width="100%" alt="KBLEX">
							</div>
						</div>
					</div>
					<div class="item" >
					<div class="row">
							<div class="col-sm-12 text-center">
								<img src="imagenes/banner 2.jpg" width="100%" alt="LOCAL"/>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#mipresentacion" role="button" data-slide="prev">
					<span class="fa fa-angle-left" style="margin-top:140%; color: #3498db;" aria-hidden="true"></span>
					<span class="sr-only">ANTERIOR</span>
				</a>
				<a class="right carousel-control" href="#mipresentacion" role="button" data-slide="next">
					<span class="fa fa-angle-right" style="margin-top:140%; color: #3498db;" aria-hidden="true"></span>
					<span class="sr-only">SIGUIENTE</span>
				</a>
			</div>
		</div>
		<!--FIN DE CAROUSEL--------------------------------------------------------------------------------------------------------------------->
		<!--NOSOTROS---------------------------------------------------------------------------------------------------------------------------->
		<!-- MODAL ----------------------------------------------------------------------------------------------------------------------------->
		<div class="modal fade" id="nosotros" role="dialog">
			<div class="modal-dialog">
    			<div class="modal-content">
      				<div class="modal-header" style="background-color: #3498db; color: #fff;"">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
        				<h4><span class="fa fa-users" style="color: #000;"></span> NOSOTROS</h4>
      				</div>
      				<div class="modal-body">
						<div class="text-justify">
								<h4>KBLEX HOPELCHÉN</h4>
								<h5><strong>NUESTRA VISIÓN:</strong></h5>
								<p>LOGRAREMOS QUE LOS USUARIOS DE SERICIOS DE TELECOMUNICACIONES EN EL MERCADO NACIONAL Y MUNDIAL EAN A KBLEX, AL PROVEEDOR CONFIABLE, AL IMPLEMENTAR, PARA SU DESEMPEÑO, TECNOLOGÍAS DE ÚLTIMA GENERACIÓN, QUE GARANTICEN LA COMUNICANIÓN</p>
								<h5><strong>MISIÓN</strong></h5>
								<p>FACILITAMOS LA CONECTIVIDAD AL MUNDO DEL CABLE E INTERNET DE LOS USUARIOS DE NUESTRAS ZONAS DE COBERTURAS ACTUALES Y FUTURAS, DESARROLLANDO UNA ALTA GAMA DE ADOPCIÓN DE TECNOLOÍAS D ÚLTIMA GENERACIÓN, CAPACITANDO A NUESTRO PERSONAL PARA BRINDAR CALIDAD EN EL SERVICIO, Y EXCELENCIA EN EL TRATO, A FIN DE FIDELIZAR A LOS USUARIOS, GENERANDO UTILIDADES PARA LA EMPRESA.</p>
						</div>
      				</div>
    			</div>
  			</div>
		</div>
		<!--FIN DE MODAL------------------------------------------------------------------------------------------------------------------------>
		<!--SERVICIOS--------------------------------------------------------------------------------------------------------------------------->
		<br id="servicios"/>
		<div class="container-fluid">
			
			 	<h2>SERVICIOS <i class="fa fa-cogs" style="color: #00c800;"></i></h2>
			 	<h4>LE OFRECEMOS LOS MEJORES SERVICIOS DE</h4>
			 
			 <div class="row container-fluid text-center">
			 	<div class="col-sm-4">
			 		<h3 class="text-justify"> <strong>CABLE</strong> </h3><br>
			 		<a href="#servcable" data-toggle="collapse">
			 			<img src="logosoficiales/KBLEXLOGO.png" width="50%" class="img-circle person" >
			 		</a>
			 		<div id="servcable" class="collapse" style="border: 4px solid rgba(214,98,190); border-radius: 5px">
			 			<p>LA MEJOR SEÑAL DE TV ANALÓGICA</p>
      					<p><strong>CON LOS MEJORES CANALES!</strong></p>
			 		</div>
			 	</div>
			 	<div class="col-sm-4">
			 		<h3 class="text-justify"> <strong>INTERNET</strong></h3><br>
			 		<a href="#servinternet" data-toggle="collapse">
			 			<img src="logosoficiales/INTERFLASH.jpg" width="49%" class="img-circle person" >
			 		</a>
			 		<div id="servinternet" class="collapse" style="border: 4px solid rgba(214,98,190); border-radius: 5px">
			 			<p>CON FIBRA ÓPTICA SER MÁS RÁPIDO</p>
      					<p><strong>CUESTA MENOS!</strong></p>
			 		</div>
			 	</div>
			 	<div class="col-sm-4">
			 		<h3 class="text-justify"> <strong>ATENCIÓN AL CLIENTE</strong></h3><br>
			 		<a href="#servcliente" data-toggle="collapse">
			 			<img src="imagenes/SERVICIO AL CLIENTE.jpg" width="50%" class="img-circle person" >
			 		</a>
			 		<div id="servcliente" class="collapse" style="border: 4px solid rgba(214,98,190); border-radius: 5px">
			 			<p>¡TE ATENDEMOS AL INSTANTE!</p>
			 			<p><button class="btn btn-info" data-toggle="modal" data-target="#tiempos" type="button">VER TIEMPOS DE RESPUESTA</button></p>
			 		</div>
			 	</div>
			 </div>
			 <!-- MODAL ----------------------------------------------------------------------------------------------------------------------------->
			<div class="modal fade" id="tiempos" role="dialog">
				<div class="modal-dialog">
    				<div class="modal-content">
      					<div class="modal-header" style="background-color: #3498db; color: #fff;">
        					<button type="button" class="close" data-dismiss="modal">&times;</button>
        					<h4><span class="fa fa-calendar-check-o" style="color: #000;"></span> TIEMPOS DE RESPUESTA</h4>
      					</div>
      					<div class="modal-body">
							<div class="text-left">
								<table class="table  table-hover">
									<thead>
										<tr>
											<th>CONCEPTO</th>
											<th>TIEMPO MÁXIMO APROXIMADO</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>INSTALACIONES</td>
											<td>10 DÍAS NATURALES</td>
										</tr>
										<tr>
											<td>CAMBIO DE DOMICILIO</td>
											<td>5 DIAS NATURALES</td>
										</tr>
										<tr>
											<td>RECONEXIONES</td>
											<td>24 HORAS</td>
										</tr>
										<tr>
											<td>SERVICIOS</td>
											<td>3 DÍAS NATURALES</td>
										</tr>
										<tr>
											<td>INSTALACION TV ADICIONAL</td>
											<td>3 DÍAS NATURALES</td>
										</tr>
										<tr>
											<td>INSTALACION EQUIPO ADICIONAL</td>
											<td>3 DÍAS NATURALES</td>
										</tr>
									</tbody>
								</table>
							</div>
      					</div>
    				</div>
  				</div>
			</div>
		<!--FIN DE MODAL------------------------------------------------------------------------------------------------------------------------>
		</div>
		<!--FIN DE SERVICIOS-------------------------------------------------------------------------------------------------------------------->
		<!--CANALES----------------------------------------------------------------------------------------------------------------------------->
		<br id="canales"/>
		<div class="container-fluid">
			
				<h2>CANALES <i class="fa fa-television" style="color:#00c800;"></i></h2>
			
			<div class="row">
				<div class="col-sm-12">
					<a data-toggle="modal" data-target="#imgcanales"><img src="imagenes/CANALES.png" alt="CANALES" width="97%"></a>
				</div>
			</div>
				<!-- Modal -->
			<div class="modal fade" id="imgcanales" role="dialog">
  				<div class="modal-content">
    				<div class="modal-open">
      					<div class="modal-header" style="background-color: #3498db; color: #fff;">
        					<button type="button" class="close" data-dismiss="modal">&times;</button>
        					<h4><span class="fa fa-television" style="color: #000;"></span> CANALES</h4>
      					</div>
      					<div class="modal-body">
      						<div style="overflow: auto; width: 100%; height: 100%;">
      	 						<img src="imagenes/CANALES.png" width="195%">
      						</div
      					</div>
      					<div class="modal-footer"> 
              				<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
          						<span class="fa fa-remove"></span> CERRAR
        					</button>
      					</div>
    				</div>
 				</div>
			</div>
	<!--fin de modales-->
		</div>
		<!--FIN DE CANALES---------------------------------------------------------------------------------------------------------------------->
		<!--PRECIOS----------------------------------------------------------------------------------------------------------------------------->
		<br id="precios"/>
		<div class="container-fluid">
			
				<h2 class="text-center">PRECIOS <i class="fa fa-money" style="color: #00c800;"></i></h2>
				<h4 class="text-center">LOS CONTRATOS MAS ECONÓMICOS A PRECIOS ACCESIBLES</h4>
				<h6 class="text-center">LOS PRECIOS SOLO APLICAN POR PAGOS PUNTUALES DEL 1 AL 10 DE CADA MES</h6>
				<h6 class="text-center">DEL 11 A FIN DE MES APLICA RECARGO</h6>
			
			<div class="row text-center">
				<div class="col-sm-4">
					<div class="panel">
						<div class="panel-heading" style="background-color: #ff6a01; color: #fff;">
							<h2><i class="fa fa-tv"></i></h2>
							<h4><strong>TV POR CABLE</strong></h4>
							<p>CONTRATA SOLO TV POR CABLE</p>
						</div>
						<div class="panel-body text-left" >
							<h4>CONTRATO: $200 MXN</h4>
							<p>INCLUYE 47 CANALES CON UNA RENTA MENSUAL DE $160 MXN</p>
							<p>PAGOS PUNTUALES DEL 1 AL 10 DE CADA MES TIENEN <strong>DESCUENTO DE $20 MXN</strong></p>
							<p>DEL 11 AL FIN DE MES PAGO NORMAL Y PUEDEN INCLUIR <strong>RECARGO*</strong></p>
							<button class="btn btn-success" data-toggle="modal" data-target="#contratar" type="button">CONTRATAR</button>
							
							
							<br />
							<br />
							<br />
							<br />
							<br />
							<br />
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel">
						<div class="panel-heading" style="background-color: #ff6a01; color: #fff;">
							<h2><i class="fa fa-wifi"></i></h2>
							<h4><strong>INTERNET COMERCIAL</strong></h4>
							<p>CONTRATA INTERNET PARA TU NEGOCIO</p>
						</div>
						<div class="panel-body text-left" >
							<h4>CONTRATO: $800 MXN</h4>
							<table class="table table-hover">
								<thead>
									<tr>
										<th>VELOCIDAD</th>
										<th>PRECIO</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									 
									<tr>
										<td>3Mbps</td>
										<td>$450</td>
										<td><button class="btn btn-success" data-toggle="modal" data-target="#contratar" type="button">CONTRATAR</button></td>
									</tr>
									<tr>
										<td>5Mbps</td>
										<td>$490</td>
										<td><button class="btn btn-success" data-toggle="modal" data-target="#contratar" type="button">CONTRATAR</button></td>
									</tr>
									<tr>
										<td>10Mbps</td>
										<td>$620</td>
										<td><button class="btn btn-success" data-toggle="modal" data-target="#contratar" type="button">CONTRATAR</button></td>
									</tr>
									<tr>
										<td>15Mbps</td>
										<td>$750</td>
										<td><button class="btn btn-success" data-toggle="modal" data-target="#contratar" type="button">CONTRATAR</button></td>
									</tr>
									<tr>
										<td>20Mbps</td>
										<td>$900</td>
										<td><button class="btn btn-success" data-toggle="modal" data-target="#contratar" type="button">CONTRATAR</button></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel">
						<div class="panel-heading" style="background-color: #ff6a01; color: #fff;">
							<h2><i class="fa fa-tv" ></i><i class="fa fa-wifi" ></i></h2>
							<h4><strong>CABLE E INTERNET RESIDENCIAL</strong></h4>
							<p>OBTÉN UN PAQUETE DE CABLE E INTERNET</p>
						</div>
						<div class="panel-body text-left" >
							<h4>CONTRATO: $1000 MXN</h4>
							<table class="table table-hover">
								<thead>
									<tr>
										<th>VELOCIDAD</th>
										<th>PRECIO + RENTA</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>2Mbps</td>
										<td>$390</td>
										<td><button class="btn btn-success" data-toggle="modal" data-target="#contratar" type="button">CONTRATAR</button></td>
									</tr>
									<tr>
										<td>3Mbps</td>
										<td>$490</td>
										<td><button class="btn btn-success" data-toggle="modal" data-target="#contratar" type="button">CONTRATAR</button></td>
									</tr>
									<tr>
										<td>5Mbps</td>
										<td>$520</td>
										<td><button class="btn btn-success" data-toggle="modal" data-target="#contratar" type="button">CONTRATAR</button></td>
									</tr>
									<tr>
										<td>10Mbps</td>
										<td>$590</td>
										<td><button class="btn btn-success" data-toggle="modal" data-target="#contratar" type="button">CONTRATAR</button></td>
									</tr>
									<tr>
										<td>20Mbps</td>
										<td>$900</td>
										<td><button class="btn btn-success" data-toggle="modal" data-target="#contratar" type="button">CONTRATAR</button></td>
									</tr>
								</tbody>
							</table>
							<br />
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--FIN DE PRECIOS---------------------------------------------------------------------------------------------------------------------->
		<!-- Modal -->
<div class="modal fade" id="contratar" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #3498db; color: #fff;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="fa fa-shopping-cart"></span> CONTRATAR UN PAQUETE KBLEX</h4>
      </div>
      <div class="modal-body">
        <form role="form">
          <div class="form-group">
          <label for="psw">NOSOTROS NOS COMUNICAREMOS CON USTED</label>
          <br>
            <label for="psw"><span class="fa fa-phone-square"></span> NÚMERO DE TELÉFONO</label>
            <input type="number" class="form-control" id="psw" placeholder="NÚMERO DE TELÉFONO">
          </div>
          <div class="form-group">
            <label for="usrname"><span class="fa fa-user"></span> NOMBRE</label>
            <input type="text" class="form-control" id="usrname" placeholder="ESCRIBA SU NOMBRE">
          </div>
          <button type="submit" class="btn btn-block">Contratar
            <span class="fa fa-check"></span>
          </button>
        </form>
      </div>
      <div class="modal-footer"> 
              <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
          <span class="fa fa-remove"></span> Cancelar
        </button>
        
      </div>
    </div>
  </div>
</div>

		<!--fin modal-->
		<!--FORMAS DE PAGO---------------------------------------------------------------------------------------------------------------------->
		<br id="formasdepago"/>
		<br />
		<div class="container-fluid">
			
				<h2 class="text-center">FORMAS DE PAGO <i class="fa fa-credit-card" style="color: #00c800;"></i></h2>
				<h4 class="text-center">EN ESTA SUCURSAL PUEDES PAGAR EN:</h4>
			
			<div class="row">
				<div class="col-sm-4">
					<h4>1.- EN EFECTIVO <i class="fa fa-money" style="color: #00c800;"></i></h4>
				</div>
				<div class="col-sm-4">
					<h4>2.- EN CUENTA BANCARIA <i class="fa fa-bank" style="color: #00c800;"></i> <a href="#pg" data-toggle="collapse"><i class="fa fa-info-circle" style="color: #0055ff;"></i></a></h4>
			
			<div id="pg" class="collapse" >
			 			<p><strong> BANCOMER </strong></p>
			<p><strong>A NOMBRE DE KBLEX SA DE CV</strong></p>
			<p><strong>CUENTA: 0163613084</strong></p>
			<p><strong>CLABE: 012180001635130841</strong></p>
			 		</div>
				</div>
				<div class="col-sm-4">
					<h4>3.- TARJETA DE DÉBITO O CRÉDITO <i class="fa fa-cc-visa" style="color: #00c800;"></i> <i class="fa fa-cc-mastercard" style="color: #00c800;"></i> <a href="#py" data-toggle="collapse"><i class="fa fa-info-circle" style="color: #0055ff;"></i></a></h4>
			<div id="py" class="collapse" >
			 			<p><strong>SOLO VISA Y/O MASTERCARD</strong></p>
			 		</div>
				</div>
			</div>
		</div>
		<!--FIN DE FORMAS DE PAGO--------------------------------------------------------------------------------------------------------------->
		<!--CONTACTANOS-------------------------------------------------------------------------------------------------------------------------->
		<!--FIN DE CONTACTANOS------------------------------------------------------------------------------------------------------------------->
		<br id="contactanos"/>
		<br />
		<div class="container-fluid">
			
				<h2 class="text-center">CONTÁCTANOS <i class="fa fa-address-book" style="color: #00c800;"></i></h2>
			<br />
			<div class="row">
				<div class="col-sm-4 text-left">
					<h4><i class="fa fa-phone" style="color: #3498db;"></i> TELÉFONO: 996-105-4914</h4>
					<h4><i class="fa fa-wrench" style="color: #3498db;"></i> SERVICIO TÉCNICO: 996-100-7871</h4>
					<h4><i class="fa fa-whatsapp" style="color: #00c800;"></i> WHATSAPP: 996-822-0499</h4>
					<h4><a href="https://www.facebook.com/Kblex-Hopelchen-127021371254715"><i class="fa fa-facebook-official"></i> Kblex Hopelchén</a></h4>
					<h4><i class="fa fa-envelope" style="color: #3498db;"></i> CORREO: hopelchen.kblex@gmail.com</h4>
					<h4><i class="fa fa-map-signs" style="color: #3498db;"></i> ENCUENTRANOS EN:</h4>
					<h4>C 28 N90 ENTRE 17 Y 19 COL. TAMARINDO, HOPELCHÉN, CAMPECHE C.P 2600</h4>
				</div>
				<div class="col-sm-4">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3755.1583044150516!2d-89.8510072405452!3d19.748423023812766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f57f007f38005c3%3A0xfcbe8154be9d6f56!2sCalle%2028%2C%20Hopelch%C3%A9n%2C%20Camp.!5e0!3m2!1ses!2smx!4v1568510486531!5m2!1ses!2smx" width="100%" height="300px" frameborder="0" style="border:0;" ></iframe>
				</div>
				<div class="col-sm-4  text-center">
				<div class="panel ">
				<div class="panel-heading" style="background-color: #3498db; color: #fff;">
					<h3>HORARIO DE SERVICIO</h3>
				</div>
				<div class="panel-body">
					<h3><strong>Lunes a viernes</strong></h3>
					<h4 id="lunvier">8:00am a 6:00pm</h4>
					<h3><strong >Sábados</strong></h3>
					<h4 id="sab">9:00am a 2:00pm</h4>
				</div>
			</div>
			</div>
			</div>
		</div>c
		<!--PIE DE PAGINA----------------------------------------------------------------------------------------------------------------------->
		<footer class="text-center">
			<a class="up-arrow" href="#inicio" data-toggle="tooltip" title="INICIO">
				<span class="fa fa-arrow-up"></span>
			</a>
			<p><a href="http://www.itshopelchen.edu.mx" style="color: #fff;">Desarrollado por estudiantes de septimo semestre del ITS Hopelchen</a></p>
		</footer>
		<!--FIN DE PIE DE PAGINA---------------------------------------------------------------------------------------------------------------->
	</body>
</html>