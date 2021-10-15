<?php require('conexion.php') ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="css/eventos2.css">
    <link rel="stylesheet" type="text/css" href="css/fontsros.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/nav2.css">
	<link rel="stylesheet" type="text/css" href="css/stylefooter.css">
	<link rel="stylesheet" type="text/css" href="css/barra-icono-menu.css">
	<link rel="stylesheet" type="text/css" href="css/actividades.css">
    
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#ffffff">
    <!-- FAVICON -->
    
	<title>Proyectos</title>
</head>
<body>

<?php include 'nav.php'; ?>
    
<span class="ir-arriba icon-arrow-up"></span>

<div class="title">
	<h1>Proyectos Integrales</h1>
	</div>
	<img alt="comunidad educativa integrada" src="imagenes/proyecint.jpg"  style="width: 100%;">
		
<div class="title" style="margin-top: 0;">
	<h1>Eventos Institucionales</h1>
	</div>

<?php

$var = array("#ef8f7f", "#f4ee70", "#73ccef", "#30ba8e", "#EB9AED", " #ed8d21", "#20bded");

$sql="SELECT * FROM eventos ORDER BY fecha DESC";

$i=0; 

$c=0;
      
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){

?>

	<div class="contenido" style="background: <?php echo $var[$i];?>">

		<div class="detalles">
	 	<div><h2><?php echo $mostrar['titulo']; ?></h2></div>
	 	<div class="desarrollo"><h2>Acerca del Evento</h2>
	 		<p><?php echo $mostrar['desarrollo'];?></p></div>
	    </div>

	    <div class="imagenes">
	  <?php
	  
	 	        $id=$mostrar['id_evento'];
				$query=mysqli_query($conexion,"SELECT * FROM imagenes_eventos WHERE id_evento=$id");
			
				while($row=mysqli_fetch_array($query)){$c=$c+1;
					?>

					<div class="imgallery"><a href="#imagen<?php echo $c;?>"><img src="imagenes/<?php echo $row['imagen']; ?>"></a></div>

					<div class="modal" id="imagen<?php echo $c;?>">

				        <a class="cerrar" href=""><img src="imagenes/cerrar.png"></a>
        
				        <div class="imagen">
				            <img class="imgevento" src="imagenes/<?php echo $row['imagen']; ?>">
				            
				            <div class="flechitas">
				            <a href="#imagen<?php echo $c-1;?>"><img src="imagenes/arrowl.png"> </a>
				            <a href="#imagen<?php echo $c+1;?>"><img src="imagenes/arrowr.png"></a></div>
				        </div>

				    </div>

					<?php
				}
	  
	   ?>
	   </div>
</div>

 <?php  $i=++$i; 

if($i==7){ $i=0;} } ?>






	<?php include 'footer.php'; ?>
	<script src="js/jquery-latest.js"></script>
	<script src="js/nav2.js"></script>
	<script src="js/ir_arriba.js"></script>
</body>
</html>