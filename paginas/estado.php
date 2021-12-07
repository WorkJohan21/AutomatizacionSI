<!--Pantalla de Estado-->
<?php
	include("../procesos/verificar.php");
	include("../procesos/consultaUser.php");

	$sql=$conn->query("SELECT orden.nomActividad2, orden.estado, usuario.nombre, usuario.apellido,usuario.tipoUsuario FROM orden 
	INNER JOIN orden_usuario ON orden.idOrden=orden_usuario.idOrden
	INNER JOIN usuario ON usuario.id=orden_usuario.idUsuario
	WHERE usuario.id='$datoUser->id'");

	$sql2=$conn->query("SELECT solicitud.nombreEvento, solicitud.estado FROM solicitud 
	INNER JOIN usuario ON usuario.id=solicitud.idUsuario
	WHERE usuario.id='$datoUser->id'");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Estado de Solicitud</title>
	<link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
	<link rel="icon" type="image/x-icon" href="../imagenes/logo.png">
	<meta name ="viewport" content ="width=device-width, initial-scale=1, shrink-to-fill=no">
    <meta name ="description" content ="">
    <meta name ="author" content ="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name ="generator" content ="Jekll v4.1.1">
	<link rel ="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
    <link href ="../CSS/bootstrap.min.css" rel ="stylesheet">

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
		table {
		  border-collapse: collapse;
		  width: 80%;
		}
		th{
			background-color: #B7A57A;
		}
		th, td {
		  text-align: left;
		  border-bottom: 1px solid #DDD;
		  border: 1px purple;
  		  border-radius: 20px;
		}

		tr:hover {background-color: #D3C0D3;}
	</style>
</head>
<body class="cuerpo">
	<div id="page-container">
   		<div id="content-wrap">
	
			<header class="tope">
				<img src="../imagenes/logo.png" class="logo">
				<h3 class="titulosHeader">Universidad Tecnológica de Panamá<br>Departamento de Protocolo, Ceremonial y Eventos<br><i>"Camino a la excelencia a través del mejoramiento continuo"</i></h3>
			</header>
			<br><br>

			<div class="centrar">
				<table align="center" cellspacing="20" cellpadding="10">
					<thead>
						<tr>
							<th class="titulosHeaderBlack" style="text-align: center;">Solicitud de Evento</th>
							<th class="titulosHeaderBlack" style="text-align: center;">Estado</th>
						</tr>
					</thead>
					
					<tbody>
						<?php while ($estado2=$sql2->fetch(PDO::FETCH_OBJ)) {  ?>
							<td class="textoCuerpoBlack"> <?php echo $estado2->nombreEvento; ?> </td>
							<td class="textoCuerpoBlack"> <?php echo $estado2->estado; ?> </td>
						</tr>	
						<?php } ?>			
					</tbody>

				</table>
			</div>

			<br>
			<br>

			<div class="centrar">
				<table align="center" cellspacing="20" cellpadding="10">
					<thead>
						<tr>
							<th class="titulosHeaderBlack" style="text-align: center;">Solicitud de Equipo</th>
							<th class="titulosHeaderBlack" style="text-align: center;">Estado</th>
						</tr>
					</thead>
					
					<tbody>
							<?php while ($estado=$sql->fetch(PDO::FETCH_OBJ)) {  ?>
                            	<tr>							
									<td class="textoCuerpoBlack"> <?php echo $estado->nomActividad2; ?> </td>
									<td class="textoCuerpoBlack"> <?php echo $estado->estado; ?> </td>					
							<?php } ?>	
					</tbody>

				</table>
			</div>

			<div>
            	<a href="menuPrincipal.php"><button class="redondo espacioBoton5" type="submit"><label class="textoCuerpo">REGRESAR</label></button></a>
            <div>
            <br><br>

			<footer id="footer">
					<img src="../imagenes/logo-footer.png" class="logo">
					Universidad Tecnológica de Panamá - 2021
					<br>
					Dirección: Avenida Universidad Tecnológica de Panamá, Vía Puente Centenario,Campus Metropolitano Víctor Levi Sasso.
					<br>
					Teléfono. (507) 560-3000
					<br>
					Correo electrónico: buzondesugerencias@utp.ac.pa
					<br>
					311 Centro de Atención Ciudadana
					<br>
					<a class="politicas" href="https://aig.gob.pa/acercade/disclaimer/">Políticas de Privacidad</a>
				</footer>
		</div>
	</div>
</body>
</html>