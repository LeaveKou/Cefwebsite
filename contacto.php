<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/nav2.css">
	<link rel="stylesheet" type="text/css" href="css/stylefooter.css">
	<link rel="stylesheet" type="text/css" href="css/consulta.css">
	<link rel="stylesheet" type="text/css" href="css/fontsros.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/fontsros.css">
	<link rel="stylesheet" type="text/css" href="css/barra-icono-menu.css">
	
	<!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#ffffff">
    <!-- FAVICON -->
	
	<title>Contacto - CEF 152</title>
	<style>iframe{ width:100%; }</style>   
</head>
<body>

	<?php include("nav.php");?>
	<span class="ir-arriba icon-arrow-up"></span>
	
	<div id="contenedor">
	
	<div class="box-info">
		<div class="colores">
			<div class="fcolor1">
			</div>
			<div class="fcolor2">
				
			</div>
			<div class="fcolor3">
				
			</div>
			<div class="fcolor4">
				
			</div>
			<div class="fcolor5">
				
			</div>
			<div class="fcolor6">
				
			</div>
			<div class="fcolor7">
				
			</div>
		</div>
			<form action="#" method="get" class="form-master">
					<p>Nombre</p><input type="text" name="nombre" required="required"  class="form-text color1" placeholder="Nombre">
					<p>Email</p><input type="email" name="mail" required="required" class="form-text color2" placeholder="Email">
					<p>Telefono</p><input type="tel" name="telefono" class="form-text color3" placeholder="Telefono">
					<textarea cols="40" rows="8" name="consulta" required="required" placeholder="Escriba su consulta" class="form-textarea"></textarea>
					<input type="submit" name="enviar" class="form-submit" value="Enviar consulta">
				</form>
				<?php 
					if (isset($_GET['enviar'])) {
							$nombre=$_GET['nombre'];
							$email=$_GET['mail'];
							$tel=$_GET['telefono'];
							$consulta=$_GET['consulta'];
							$email2='cef152avellaneda@gmail.com';
							$titulo='Nueva consulta desde www.cef152.edu.ar';
							$dia=date("d/m/Y");
							$hora=date("H:i:s");
							$body="<!DOCTYPE html>
									<html yahoo>
									<head>
										<style type='text/css'>
											img{
												height: 20%;
												width: auto;
											}
											#contenedor{
												margin-left: 30px;
												margin-top: 100px;
											}
											.img-fondo{
												background-color: #2d2d2d;
												width: 100%;
												height: 100px;
											}
											.footer{
												background-color: #2d2d2d;
												color: white;
												width: 100%;
												height: 50px;
												text-align: center;
												padding-bottom: 20px;
												padding-top: 20px;
											}
										</style>
									</head>
									<body>

										<div class='img-fondo'><img src='imagenes/logoredondo.png'></div><br>
										<div id='contenedor'>
										<strong>
											Nueva consulta de: 
										</strong>$email<br><br>
										<strong>Nombre:</strong>$nombre<br><br>
										<strong>Telefono:</strong>$tel<br><br>
										<strong>Consulta:</strong>$consulta<br><br>
										</div>
										<footer class='footer'>
											<div><strong>Fecha:</strong>$dia</div>
											<div><strong>hora:</strong>$hora</div>
										</footer>
									</body>
									</html>	
							";
										$cabeceras  = "MIME-Version: 1.0 \r\n"; //cabeceras del mail
										$cabeceras .= "Content-type: text/html; charset=utf8 \r\n"; //cabeceras del mail
										$cabeceras .= "From: www.cef152.edu.ar \r\n"; //
							$resp=mail($email2, $titulo, $body, $cabeceras);
					}
				 ?>
				<hr>
				<div class="informacion">
					<ul >
						<li>CEF N°152</li>
						<li>Av. Gral. Roca 325, Avellaneda, Buenos Aires.</li>
						<li><a href="mailto:cef152avellaneda@gmail.com?subject=ConsultaWebPage" class="a-email">E-mail: cef152avellaneda@gmail.com</a></li>
					</ul>
				</div>

	</div>		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.97464057287!2d-58.362499195307!3d-34.65534336832769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a33357aff16a07%3A0xf872c39cd8cfb18f!2sAv.+Gral.+Roca+325%2C+Avellaneda%2C+Buenos+Aires!5e0!3m2!1ses-419!2sar!4v1542196171522"  height="400"  style="border:0; margin:  auto;" allowfullscreen class="iframe-map"></iframe>
	   
	</div>
	<?php 
		include("footer.php");
		if (isset($resp)) {
			if ($resp) {
				echo "<script type='text/javascript'>alert('La consulta fue enviada con exito')</script>";
			}
		}
	?>
	 
	<script src="js/jquery-latest.js"></script>
	<script src="js/nav2.js"></script>
	<script src="js/ir_arriba.js"></script>
</body>
</html>