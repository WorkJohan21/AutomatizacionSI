<!--Pantalla Formulario-->
<?php
    include("../procesos/verificar.php");
    include("../procesos/consultaUser.php");
	$sql=$conn->query("SELECT * FROM facultad");
	$sql2=$conn->query("SELECT * FROM lugar");
	$sql3=$conn->query("SELECT * FROM telefono WHERE idUsuario='$id_usuario'");
    $datoTel=$sql3->fetch(PDO::FETCH_OBJ);
	$sql4=$conn->query("SELECT * FROM departamento");
	$depa=$sql4->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario de Solicitud de Eventos</title>
	<link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
	
	<meta name ="viewport" content ="width=device-width, initial-scale=1, shrink-to-fill=no">
    <meta name ="description" content ="">
    <meta name ="author" content ="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name ="generator" content ="Jekll v4.1.1">
	<link rel ="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
    <link href ="../CSS/bootstrap.min.css" rel ="stylesheet">

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
	</style>

	  <!-- Javascript -->
          <script>
          function myFunction() {
          document.documentElement.scrollTop = 0;	
          document.getElementById("divPrimero").hidden = true;
          document.getElementById("divSegundo").hidden = false;
          document.getElementById("divTercero").hidden = true;
        }

          function myFunction2() {
          document.documentElement.scrollTop = 0;	
          document.getElementById("divPrimero").hidden = true;
          document.getElementById("divSegundo").hidden = true;
          document.getElementById("divTercero").hidden = false;
          document.getElementById("divCuarto").hidden = true;
        }

        function myFunction3() {
        	document.documentElement.scrollTop = 0;
          document.getElementById("divPrimero").hidden = true;
          document.getElementById("divSegundo").hidden = true;
          document.getElementById("divTercero").hidden = true;
          document.getElementById("divCuarto").hidden = false;
        }
          function myFunction1() {
          document.documentElement.scrollTop = 0;  
          document.getElementById("divPrimero").hidden = false;
          document.getElementById("divSegundo").hidden = true;
          document.getElementById("divTercero").hidden = true;
        }

		function borrar1(){
			document.getElementById("nombreActividad").value = "";
			document.getElementById("fecha").value = "";
			document.getElementById("horaInicio").value = "";
			document.getElementById("horaFinal").value = "";
			$('input:actividad1').removeAttr('checked');
		}
        </script>

</head>
<body class="cuerpo">
		<div id="page-container">
   		<div id="content-wrap">
   			
	<header class="tope">
		<img src="../imagenes/logo.png" class="logo">
	    <h3 class="titulosHeader">Universidad Tecnológica de Panamá<br>Departamento de Protocolo, Ceremonial y Eventos<br><i>"Camino a la excelencia a través del mejoramiento continuo"</i></h3>
	</header>

		<div class="centrar">
			<form class="" action="menuPrincipal.php" method="post" accept-charset="utf-8">
						<h3 class="centrar">FORMULARIO DE SOLICITUD DE EVENTOS</h3>					    
						<br><br>

				<!--INICIO DEL DIVPRIMERO-->	

					<div id="divPrimero">		
							<div class="cajamarron"><!--name nombreActividad-->
										<label class="textoCuerpoWhite">Nombre completo de la actividad:</label>
										<input class="txtbox" type="text" id="nombreActividad" name="nombreActividad" size="40" maxlength="40" autofocus 
										placeholder="Ingrese el nombre de la actividad" title="Escriba el nombre de la actividad"/>
										<br><br><!--name facultad-->
										<label class="textoCuerpoWhite"> Facultad o unidad que organiza:</label>  <select name="facultad" id="facultad">
										<?php while ($facultades=$sql->fetch(PDO::FETCH_OBJ)) { ?>
												<option value="<?php $facultades->idFacultad ?>"><?php echo $facultades->nombreFacultad ?></option>
											<?php } ?>	
										</select>
										<br><br>
										<!--name fecha-->
										<label class="textoCuerpoWhite">Fecha del evento:</label>
										<input class="txtbox" type="date" name="fecha" id="fecha" size="20" maxlength="20" autofocus
										placeholder="" title="Facultad de la universidad"/>
										<br><br>
										<label class="textoCuerpoWhite">Periodo cubierto:</label><!--name horaInicio-->
										<input type="time" id="horaInicioEvento" class="txtbox" placeholder="" name="horaInicio" id="horaInicio">
										<label class="textoCuerpoWhite">a</label>
										<input type="time" id="horaFinEvento" class="txtbox" placeholder="" name="horaFinal" id="horaFinal"><!--name horaFinal-->
										<br><br>
										<label class="textoCuerpoWhite">Lugar donde se realizará:</label>  <select name="lugar" id="lugar"><!--name lugar-->
										<?php while ($lugares=$sql2->fetch(PDO::FETCH_OBJ)) { ?>
												<option value="<?php $lugares->idLugar ?>"><?php echo $lugares->nombreLugar ?></option>
											<?php } ?>	
										</select>
										<br><br>
										<label class="textoCuerpoWhite">Tipo de actividad:</label><!--name actividad1-->
										<br>
										<input class="checkbox" type= "radio" name="actividad1" id="actividad1" value="Conferencias">
										<label for="actividad1" class="textoCuerpoWhite">Conferencias</label>
										<br>
										<input class="checkbox" type= "radio" name="actividad1" id="actividad1" value="Ferias">
										<label for="actividad2" class="textoCuerpoWhite">Ferias</label>
										<br>
										<input class="checkbox" type= "radio" name="actividad1" id="actividad1" value="Seminarios">
										<label for="actividad3" class="textoCuerpoWhite">Seminarios</label>
										<br>
										<input class="checkbox" type= "radio" name="actividad1" id="actividad1" value="Actos Culturales">
										<label for="actividad4" class="textoCuerpoWhite">Actos Culturales</label>
										<br>
										<input class="checkbox" type= "radio" name="actividad1" id="actividad1" value="Inauguraciones">
										<label for="actividad5" class="textoCuerpoWhite">Inauguraciones</label>
										<br>
										<input class="checkbox" type= "radio" name="actividad1" id="actividad1" value="Congresos">
										<label for="actividad6" class="textoCuerpoWhite">Congresos</label>
										<br>
										<input class="checkbox" type= "radio" name="actividad1" id="actividad1" value="Otros">
										<label for="actividad7"class="textoCuerpoWhite"> Otros. Especificique </label> <input type="txtbox" type="text" name="otraactividad" size="20" maxlength="20" autofocus placeholder="" title="Escriba otro tipo de actividad que vaya a realizar">
										<br>
										<br>
						</div>

						<div class="cajamarron">
										<label class="textoCuerpoWhite"><h4>SERVICIOS DE PROTOCOLO, CEREMONIAL Y ORGANIZACIÓN DE EVENTOS</h4></label>
										<br>
										<br>
										<label class="textoCuerpoWhite"><h5>ATENCIÓN PROTOCOLAR EN:</h5></label>
										<br>
										<label class="textoCuerpoWhite">Precedencia:</label><!--name precedencia[], es una parte de todo el protocolo-->
										<br>
										<input class="checkbox" type= "checkbox" name="precedencia[]" value="1">
										<label class="textoCuerpoWhite" for="precedencia">Mesa Principal</label>
										<br>
										<input class="checkbox" type= "checkbox" name="precedencia[]" value="2">
										<label class="textoCuerpoWhite" for="precedencia2">Estandartes</label>
										<br>
										<input class="checkbox" type= "checkbox" name="precedencia[]" value="3">
										<label class="textoCuerpoWhite" for="precedencia3">Atención de invitados especiales</label>
										<br>
										<input class="checkbox" type= "checkbox" name="precedencia[]" value="4">
										<label class="textoCuerpoWhite" for="precedencia4">Logos</label>
										<br>
										<input class="checkbox" type= "checkbox" name="precedencia[]" value="5">
										<label class="textoCuerpoWhite" for="precedencia5">Invitados</label>
										<br>
										<input class="checkbox" type= "checkbox" name="precedencia[]" value="6">
										<label class="textoCuerpoWhite" for="precedencia6">Lista de invitados internos y externos</label>
										<br>
										<input class="checkbox" type= "checkbox" name="precedencia[]" value="7">
										<label class="textoCuerpoWhite" for="precedencia7">Banderas</label>
										<br>
										<input class="checkbox" type= "checkbox" name="precedencia[]" value="8">
										<label class="textoCuerpoWhite" for="precedencia8">Maestro de Ceremonias</label>
										<br>
										<input class="checkbox" type= "checkbox" name="precedencia[]" value="9">
										<label class="textoCuerpoWhite" for="precedencia9">Seminario de Protocolo y Etiqueta</label>
										<br>
										<br>
										<label class="textoCuerpoWhite"><h5>ASESORÍAS EN:</h5></label>
										<br>
										<label class="textoCuerpoWhite"><h6>Planeación y organización del evento:</h6></label>
										<br><!--name planeacion[], es una parte de todo el protocolo-->
										<input class="checkbox" type= "checkbox" name="planeacion[]" value="10">
										<label class="textoCuerpoWhite" for="planeacion1">Logística General</label>
										<br>
										<input class="checkbox" type= "checkbox" name="planeacion[]" value="11">
										<label class="textoCuerpoWhite" for="planeacion2">Catering</label>
										<br>
										<input class="checkbox" type= "checkbox" name="planeacion[]" value="12">
										<label class="textoCuerpoWhite" for="planeacion3">Escenografía</label>
										<br><br><br>
						</div>
			
								<a href="menuPrincipal.php"><button class="redondo espacioBoton6" type="button"><label class="textoCuerpo">REGRESAR</label></button></a>
								<button class="redondo espacioBoton5" type="button" onclick="borrar1()"><label class="textoCuerpo">BORRAR</label></button>
								<button class="redondo espacioBoton5" type="button" id="okButton" onclick="myFunction()"><label class="textoCuerpo">ENVIAR</label></button>		

								<br><br><br>
							
					</div><!--FIN DEL DIVPRIMERO-->


				<!--INICIO DEL DIVSEGUNDO-->
				<div id="divSegundo" hidden>		
					<div class="cajamarron">
								<h5 class="textoCuerpoWhite">Protocolo:</h5>
								<h6 class="textoCuerpoWhite">Precedencia</h6><!--name protocoloPrecedencia[], es una parte de todo el protocolo-->
								<input class="checkbox" type= "checkbox" name="protocoloPrecedencia[]" value="13">
								<label class="textoCuerpoWhite" for="protocolo-precedencia1">Mesa Principal</label>
								<br>
								<input class="checkbox" type= "checkbox" name="protocoloPrecedencia[]" value="14">
								<label class="textoCuerpoWhite" for="protocolo-precedencia2">Logos</label>
								<br>
								<input class="checkbox" type= "checkbox" name="protocoloPrecedencia[]" value="15">
								<label class="textoCuerpoWhite" for="protocolo-precedencia3">Banderas</label>
								<br>
								<input class="checkbox" type= "checkbox" name="protocoloPrecedencia[]" value="16">
								<label class="textoCuerpoWhite" for="protocolo-precedencia4">Etiqueta</label>
								<br>
								<input class="checkbox" type= "checkbox" name="protocoloPrecedencia[]" value="17">
								<label class="textoCuerpoWhite" for="protocolo-precedencia5">Estandartes</label>
								<br>
								<input class="checkbox" type= "checkbox" name="protocoloPrecedencia[]" value="18">
								<label class="textoCuerpoWhite" for="protocolo-precedencia6">Banners</label>
								<br>
								<input class="checkbox" type= "checkbox" name="protocoloPrecedencia[]" value="19">
								<label class="textoCuerpoWhite" for="protocolo-precedencia7">Invitados</label>
								<br>
								<br>
								<h6 class="textoCuerpoWhite">Contenido de</h6><!--name protocoloContenido[], es una parte de todo el protocolo-->
								<input class="checkbox" type= "checkbox" name="protocoloContenido[]" value="20">
								<label class="textoCuerpoWhite" for="protocolo-precedencia1">Tarjetas</label>
								<br>
								<input class="checkbox" type= "checkbox" name="protocoloContenido[]" value="21">
								<label class="textoCuerpoWhite" for="protocolo-precedencia2">Certificados</label>
								<br>
								<input class="checkbox" type= "checkbox" name="protocoloContenido[]" value="22">
								<label class="textoCuerpoWhite" for="protocolo-precedencia3">Programas</label>
								<br>
								<input class="checkbox" type= "checkbox" name="protocoloContenido[]" value="23">
								<label class="textoCuerpoWhite" for="protocolo-precedencia4">Atención de invitados especiales</label>
								<br>
								<br>
					</div>

					<div class="cajamarron"><!--SECCION DE PRENSA-->
						<h5 class="textoCuerpoWhite">SERVICIOS DE  PRENSA Y AUDIOVISUAL</h5><!--name prensa[], es una parte de prensa-->
								<input class="checkbox" type= "checkbox" name="prensa[]" value="1">
								<label class="textoCuerpoWhite" for="servicio-prensa-audiovisual1">Cobertura Periodística</label>
								<br>
								<input class="checkbox" type= "checkbox" name="prensa[]" value="2">
								<label class="textoCuerpoWhite" for="servicio-prensa-audiovisual2">Fotografía</label>
								<br>
								<input class="checkbox" type= "checkbox" name="prensa[]" value="3">
								<label class="textoCuerpoWhite" for="servicio-prensa-audiovisual3">Filmación</label>
								<br>
								<input class="checkbox" type= "checkbox" name="prensa[]" value="4">
								<label class="textoCuerpoWhite" for="servicio-prensa-audiovisual4">Divulgación en Web de la UTP</label>
								<br>
								<input class="checkbox" type= "checkbox" name="prensa[]" value="5">
								<label class="textoCuerpoWhite" for="servicio-prensa-audiovisua5">Equipo de sonido</label>
								<br>
								<input class="checkbox" type= "checkbox" name="prensa[]" value="6">
								<label class="textoCuerpoWhite" for="servicio-prensa-audiovisual6">Entrevista en los medios de comunicación social</label>
								<br>
								<input class="checkbox" type= "checkbox" name="prensa[]" value="7">
								<label class="textoCuerpoWhite" for="servicio-prensa-audiovisual7">Publicar en Redes Sociales (Facebook , Twitter)</label>
								<br>
								<input class="checkbox" type= "checkbox" name="prensa[]" value="8">
								<label class="textoCuerpoWhite" for="servicio-prensa-audiovisual8">Apoyo en Videoconferencias (Filmadora y equipo de audio)</label>
								<br>
								<input class="checkbox" type= "checkbox" name="prensa[]" value="9">
								<label  class="textoCuerpoWhite" for="servicio-prensa-audiovisual9">Transmisión por Streaming</label>
						<br>
						<br>

						<h5 class="textoCuerpoWhite">INFORMACIÓN PARA NOTA DE PRENSA:</h5>
						<textarea name="" rows="8" cols="120" size="20" maxlength="1000" requerided placeholder="" title="Escriba el nombre de la actividad"></textarea>
						<br>
						<br>
						<br>
					</div>

					<button class="redondo espacioBoton6" type="button" onclick="myFunction1()"><label class="textoCuerpo">Regresar</label></button></a>
					<button class="redondo espacioBoton5" type="reset"><label class="textoCuerpo">BORRAR</label></button>
					<button class="redondo espacioBoton5" type="button" id="okButton" onclick="myFunction2()"><label class="textoCuerpo">ENVIAR</label></button>		
					
					<br><br><br>
					
				</div><!--FIN DEL DIVSEGUNDO-->


				<!--INICIO DEL DIVTERCERO-->
				<div id="divTercero" hidden>		
					<div class="cajamarron">
						<h5 class="textoCuerpoWhite">SERVICIOS DE LA SECCIÓN DE DISEÑO GRÁFICO</h5>
						<table cellspacing="20" cellpadding="10" class="textoCuerpoWhite">
						<tr>
							<th>N°</th>
							<th>Servicios Requeridos</th>
							<th>Marcar si requiere el servicio</th>
							<th>Tamaño del Material</th>
							<th>Orientación</th>
							<th>N°</th>
							<th>Servicios Requeridos</th>
							<th>Marcar si requiere el servicio</th>
							<th>Tamaño del Material</th>
							<th>Orientación</th>
						</tr>
						<tr>
							<td>1.</td>
							<td>Afiche Full Color</td>
							<td><input type="checkbox" name="Afiche Full Color" value="Afiche Full Color"></td>
							<td>
								<select name="tamaño-afichefullcolor">
									<option value="1280 x 720">1280 x 720</option>
									<option value="1920 x 1080">1920 x 1080</option>
								</select>
							</td>
							<td>
								<br>
								<select name="Orientación-afichefullcolor">
									<option value="Horizontal">Horizontal</option>
									<option value="Vertical">Vertical</option>
								</select>
								<br>
								<br>
							</td>

							<td>11.</td>
							<td>Papelería</td>
							<td><input type="checkbox" name="Papelería" value="Papelería"></td>
							<td>
								<select name="tamaño-papelería">
									<option value="1280 x 720">1280 x 720</option>
									<option value="1920 x 1080">1920 x 1080</option>
								</select>
							</td>
							<td>
								<br>
								<select name="Orientación-afichefullcolor">
									<option value="Horizontal">Horizontal</option>
									<option value="Vertical">Vertical</option>
								</select>
								<br>
								<br>
						</tr>
						<tr>
							<td>2.</td>
							<td>Afiche vía web</td>
							<td><input type="checkbox" name="Afiche vía web" value="Afiche vía web"></td>
							<td>
								<select name="tamaño-afiche-vía-web">
									<option value="1280 x 720">1280 x 720</option>
									<option value="1920 x 1080">1920 x 1080</option>
								</select>
								<br>
							</td>
							<td>
								<br>
								<select name="Orientación-afiche-vía-web">
									<option value="Horizontal">Horizontal</option>
									<option value="Vertical">Vertical</option>
								</select>
								<br>
								<br>
							</td>
							<td>12.</td>
							<td>Diagramación (libros/revistas)</td>
							<td><input type="checkbox" name="Diagramación" value="Diagramación (libros/revistas)"></td>
							<td>
								<select name="tamaño-afiche-vía-web">
									<option value="1280 x 720">1280 x 720</option>
									<option value="1920 x 1080">1920 x 1080</option>
								</select>
							</td>
							<td>
								<br>
								<select name="Orientación-afiche-vía-web">
									<option value="Horizontal">Horizontal</option>
									<option value="Vertical">Vertical</option>
								</select>
								<br>
								<br>
							</td>
						</tr>
						<tr>
							<td>3.</td>
							<td>Brochure</td>
							<td><input type="checkbox" name="Brochure" value="Brochure"></td>
							<td>
								<select name="tamaño-brochure">
									<option value="1280 x 720">1280 x 720</option>
									<option value="1920 x 1080">1920 x 1080</option>
								</select>
							</td>
							<td>
								<br>
								<select name="Orientación-brochure">
									<option value="Horizontal">Horizontal</option>
									<option value="Vertical">Vertical</option>
								</select>
								<br>
								<br>
							</td>
							<td>13.</td>
							<td>Portadas de Carpetas</td>
							<td><input type="checkbox" name="Portada-carpetas" value="Portada-carpetas"></td>
							<td>
								<select name="tamaño-portada-carpetas">
									<option value="1280 x 720">1280 x 720</option>
									<option value="1920 x 1080">1920 x 1080</option>
								</select>
							</td>
							<td>
								<br>
								<select name="Orientación-portada-carpetas">
									<option value="Horizontal">Horizontal</option>
									<option value="Vertical">Vertical</option>
								</select>
								<br>
								<br>
							</td>
						</tr>
						<tr>
							<td>4.</td>
							<td>Volantes</td>
							<td><input type="checkbox" name="Volantes" value="Volantes"></td>
							<td>
								<select name="tamaño-volantes">
									<option value="1280 x 720">1280 x 720</option>
									<option value="1920 x 1080">1920 x 1080</option>
								</select>					    	
							</td>
							<td>
								<br>
								<select name="Orientación-volantes">
									<option value="Horizontal">Horizontal</option>
									<option value="Vertical">Vertical</option>
								</select>
								<br>
								<br>
							</td>
							<td>14.</td>
							<td>Escenografías</td>
							<td><input type="checkbox" name="Escenografías" value="Escenografías"></td>
							<td>
								<select name="tamaño-Escenografías">
									<option value="1280 x 720">1280 x 720</option>
									<option value="1920 x 1080">1920 x 1080</option>
								</select>
							</td>
							<td>
								<br>
								<select name="Orientación-Escenografías">
									<option value="Horizontal">Horizontal</option>
									<option value="Vertical">Vertical</option>
								</select>
								<br>
								<br>
							</td>
						</tr>
						<tr>
							<td>5.</td>
							<td>Página de Prensa</td>
							<td><input type="checkbox" name="Página de Prensa" value="Página-de-Prensa"></td>
							<td>
								<select name="tamaño-Página-de-Prensa">
									<option value="1280 x 720">1280 x 720</option>
									<option value="1920 x 1080">1920 x 1080</option>
								</select>
							</td>
							<td>
								<br>
									<select name="Orientación-Página-de-Prensa">
									<option value="Horizontal">Horizontal</option>
									<option value="Vertical">Vertical</option>
								</select>
								<br>
								<br>
							</td>
							<td>15.</td>
							<td>Stand</td>
							<td><input type="checkbox" name="Stand" value="Stand"></td>
							<td>
								<select name="tamaño-Página-de-Stand">
									<option value="1280 x 720">1280 x 720</option>
									<option value="1920 x 1080">1920 x 1080</option>
								</select>
							</td>
							<td>
								<br>
								<select name="Orientación-Página-de-Stand">
									<option value="Horizontal">Horizontal</option>
									<option value="Vertical">Vertical</option>
								</select>
								<br>
								<br>
							</td>
						</tr>
						<tr>
							<td>6.</td>
							<td>Separadores</td>
							<td><input type="checkbox" name="Separadores" value="Separadores"></td>
							<td>
								<select name="tamaño-Página-de-Separadores">
									<option value="1280 x 720">1280 x 720</option>
									<option value="1920 x 1080">1920 x 1080</option>
								</select>
							</td>
							<td>
								<br>
								<select name="Orientación-Página-de-Separadores">
									<option value="Horizontal">Horizontal</option>
									<option value="Vertical">Vertical</option>
								</select>
								<br>
								<br>
							</td>
							<td>16.</td>
							<td>Banners</td>
							<td><input type="checkbox" name="Banners" value="Banners"></td>
							<td>
								<select name="tamaño-Página-de-Banners">
									<option value="1280 x 720">1280 x 720</option>
									<option value="1920 x 1080">1920 x 1080</option>
								</select>
							</td>
							<td>
								<br>
								<select name="Orientación-Página-de-Banners">
									<option value="Horizontal">Horizontal</option>
									<option value="Vertical">Vertical</option>
								</select>
								<br>
								<br>
							</td>
						</tr>
						<tr>
							<td>7.</td>
							<td>Logos</td>
							<td><input type="checkbox" name="Logos" value="Logos"></td>
							<td>
								<select name="tamaño-Página-de-Logos">
									<option value="1280 x 720">1280 x 720</option>
									<option value="1920 x 1080">1920 x 1080</option>
								</select>
							</td>
							<td>
								<br>
								<select name="Orientación-Página-de-Logos">
									<option value="Horizontal">Horizontal</option>
									<option value="Vertical">Vertical</option>
								</select>
								<br>
								<br>
							</td>
							<td>17.</td>
							<td>Letreros</td>
							<td><input type="checkbox" name="Letreros" value="Letreros"></td>
							<td>
								<select name="tamaño-Página-de-Letreros">
									<option value="1280 x 720">1280 x 720</option>
									<option value="1920 x 1080">1920 x 1080</option>
								</select>
							</td>
							<td>
								<br>
								<select name="Orientación-Página-de-Letreros">
									<option value="Horizontal">Horizontal</option>
									<option value="Vertical">Vertical</option>
								</select>
								<br>
								<br>
							</td>
						</tr>
						<tr>
							<td>8.</td>
							<td>Tarjetas</td>
							<td><input type="checkbox" name="Tarjetas" value="Tarjetas"></td>
							<td>
								<select name="tamaño-Página-de-Tarjetas">
									<option value="1280 x 720">1280 x 720</option>
									<option value="1920 x 1080">1920 x 1080</option>
								</select>
							</td>
							<td>
								<br>
								<select name="Orientación-Página-de-Tarjetas">
									<option value="Horizontal">Horizontal</option>
									<option value="Vertical">Vertical</option>
								</select>
								<br>
							</td>
							<td>18.</td>
							<td>Material P.O.P.</td>
							<td><input type="checkbox" name="Material P.O.P." value="Material-P.O.P."></td>
							<td>
								<select name="tamaño-Página-de-Material-P.O.P.">
									<option value="1280 x 720">1280 x 720</option>
									<option value="1920 x 1080">1920 x 1080</option>
								</select>
							</td>
							<td>
								<br>
								<select name="Orientación-Página-de-Material-P.O.P.">
									<option value="Horizontal">Horizontal</option>
									<option value="Vertical">Vertical</option>
								</select>
								<br>
								<br>
							</td>
						</tr>
						<tr>
							<td>9.</td>
							<td>Certificados</td>
							<td><input type="checkbox" name="Certificados" value="Certificados"></td>
							<td>
								<select name="tamaño-Página-de-Certificados">
									<option value="1280 x 720">1280 x 720</option>
									<option value="1920 x 1080">1920 x 1080</option>
								</select>
							</td>
							<td>
								<br>
								<select name="Orientación-Página-de-Certificados">
									<option value="Horizontal">Horizontal</option>
									<option value="Vertical">Vertical</option>
								</select>
								<br>
								<br>
							</td>
							<td>19.</td>
							<td>Diseños de CD</td>
								<td><input type="checkbox" name="Diseños de CD" value="Diseños-de-CD"></td>
							<td>
								<select name="Diseños-de-CD">
									<option value="1280 x 720">1280 x 720</option>
									<option value="1920 x 1080">1920 x 1080</option>
								</select>
							</td>
							<td>
								<br>
								<select name="Orientación-Diseños-de-CD">
									<option value="Horizontal">Horizontal</option>
									<option value="Vertical">Vertical</option>
								</select>
								<br>
								<br>
							</td>
						</tr>
						<tr>
							<td>10.</td>
							<td>Boletines</td>
								<td><input type="checkbox" name="Boletines" value="Boletines"></td>
							<td>
								<select name="tamaño-de-Boletines">
									<option value="1280 x 720">1280 x 720</option>
									<option value="1920 x 1080">1920 x 1080</option>
								</select>
							</td>
							<td>
								<br>
								<select name="Orientación-de-Boletines">
									<option value="Horizontal">Horizontal</option>
									<option value="Vertical">Vertical</option>
								</select>
								<br>
								<br>
							</td>
							<td>20.</td>
							<td>Otros:</td>
								<td><input type="checkbox" name="Otros" value="Otros"></td>
							<td>
								<select name="tamaño-Página-de-Otros">
									<option value="1280 x 720">1280 x 720</option>
									<option value="1920 x 1080">1920 x 1080</option>
								</select>
							</td>
							<td>
								<br>
								<select name="Orientación-Página-de-Otros">
									<option value="Horizontal">Horizontal</option>
									<option value="Vertical">Vertical</option>
								</select>
								<br>
								<br>
							</td>
						</tr>
						</table>

						<br><br><br>

					</div>
					
					<div class="cajamarron">	
						<h3 class="textoCuerpoWhite">Notas Importantes: </h3>
						
						<p class="textoCuerpoWhite">1.	Los trabajos no programados deben solicitarse a la sección de Diseño Gráfico 15 días antes de la fecha requerida.</p>

						<p class="textoCuerpoWhite">2. Las actividades programadas con rango institucional que requieren papelería de promoción 
						(brochure, afiches, banner y escenografía) tendrán prioridad, <br> pero para garantizar la calidad de los trabajos la solicitud debe presentarse con un <br>
						mes de anticipación a la fecha del evento.</p>

						<p class="textoCuerpoWhite">3.	Los formatos de la información que debe adjuntarse a las solicitudes:</p>

						<p class="textoCuerpoWhite">•	Tipografía: Levantada en Word o StarOffice letra Arial tamaño 12 pts.</p>

						<p class="textoCuerpoWhite">•	Imágenes:  con resolución mínima de 100 - 300 dpi, en formato JPG, PSD, PDF, EPS, PNG y TIFF.</p>

						<p class="textoCuerpoWhite">•	Logotipo de las empresas o instituciones: Deben ser compatibles con Corel Draw, Photoshop e ilustrador.</p>

						<p class="textoCuerpoWhite">•	Formato: Tamaño del arte (dimensiones) y posición (horizontal o vertical)</p>

						<p class="textoCuerpoWhite">4.	Las correcciones deben estar firmadas por el jefe de la Unidad que solicita el trabajo.</p>

						<br><br><br>

					</div>

					<button class="redondo espacioBoton6" type="button" onclick="myFunction()"><label class="textoCuerpo">Regresar</label></button></a>
					<button class="redondo espacioBoton5" type="reset"><label class="textoCuerpo">BORRAR</label></button>
					<button class="redondo espacioBoton5" type="button" id="okButton" onclick="myFunction3()"><label class="textoCuerpo">ENVIAR</label></button>

			<br><br><br>
				

				</div><!--FIN DEL DIVTERCERO-->

				<!--INICIO DEL DIVCUARTO-->
				<div id="divCuarto" hidden>
					<div class="cajamarron textoCuerpoWhite">

						<h5>SERVICIOS DE LA SECCIÓN DE IMPRENTA REQUERIDOS</h5>	

						<h5>Programa</h5>
						N° de copias: <input type="number" min="0" max="100" value="0" name="numero-de-programas">
						N° de originales: <input type="number" min="0" max="100" value="0" name="numero-de-programas-originales">
						Tamaño del material:
						<select name="Tamaño-Material-Programa">
							<option value="1280 x 720">1280 x 720</option>
							<option value="1920 x 1080">1920 x 1080</option>
						</select>
						<br>
						<br>
						Tipo de material: 
						<select name="Material-del-Programa">
							<option value="Papel poster Gloss">Papel poster Gloss</option>
							<option value="Papel Photo Glass">Papel Photo Glass</option>
							<option value="Papel Sintético">Papel Sintético</option>
						</select>
						<br>
						<br>
						Color:
						<p></p>
						<input type="checkbox" name="Full" value="Full">
						<label for="fullColor">Full</label> 
						<p></p>
						<input type="checkbox" name="Uno" value="Uno">
						<label for="uno">Uno</label> 
						<p></p>
						Otro: 
						<input class="txtbox" type="text" name="Otro-color" name="color-brochure" size="40" maxlength="20" placeholder="Ingrese el color de su preferencia" size="40" max="20">

						<p></p>

						<h5>Folleto</h5>
						N° de copias: <input type="number" min="0" max="100" value="0" name="numero-de-programas">
						N° de originales: <input type="number" min="0" max="100" value="0" name="numero-de-programas-originales">
						Tamaño del material:
						<select name="Tamaño-Material-Folleto">
							<option value="1280 x 720">1280 x 720</option>
							<option value="1920 x 1080">1920 x 1080</option>
						</select>
						<br>
						<br>
						Tipo de material: 
						<select name="Material-del-Folleto">
							<option value="Papel poster Gloss">Papel poster Gloss</option>
							<option value="Papel Photo Glass">Papel Photo Glass</option>
							<option value="Papel Sintético">Papel Sintético</option>
						</select>
						<br>
						<br>
						Color:
						<p></p>
						<input type="checkbox" name="Full" value="Full">
						<label for="fullColor">Full</label> 
						<p></p>
						<input type="checkbox" name="Uno" value="Uno">
						<label for="uno">Uno</label> 
						<p></p>
						Otro: 
						<input class="txtbox" type="text" name="Otro-color" name="color-brochure" size="40" maxlength="20" placeholder="Ingrese el color de su preferencia" size="40" max="20">

						<p></p>

						<h5>Certificado</h5>
						N° de copias: <input type="number" min="0" max="100" value="0" name="numero-de-programas">
						N° de originales: <input type="number" min="0" max="100" value="0" name="numero-de-programas-originales">
						Tamaño del material:
						<select name="Tamaño-Material-Certificado">
							<option value="1280 x 720">1280 x 720</option>
							<option value="1920 x 1080">1920 x 1080</option>
						</select>
						<br>
						<br>
						Tipo de material: 
						<select name="Material-del-Certificado">
							<option value="Papel poster Gloss">Papel poster Gloss</option>
							<option value="Papel Photo Glass">Papel Photo Glass</option>
							<option value="Papel Sintético">Papel Sintético</option>
						</select>
						<br>
						<br>
						Color:
						<p></p>
						<input type="checkbox" name="Full" value="Full">
						<label for="fullColor">Full</label> 
						<p></p>
						<input type="checkbox" name="Uno" value="Uno">
						<label for="uno">Uno</label> 
						<p></p>
						Otro: 
						<input class="txtbox" type="text" name="Otro-color" name="color-brochure" size="40" maxlength="20" placeholder="Ingrese el color de su preferencia" size="40" max="20">

						<p></p>

						<h5>Brochure</h5>
						N° de copias: <input type="number" min="0" max="100" value="0" name="numero-de-programas">
						N° de originales: <input type="number" min="0" max="100" value="0" name="numero-de-programas-originales">
						Tamaño del material:
						<select name="Tamaño-Material-Brochure">
							<option value="1280 x 720">1280 x 720</option>
							<option value="1920 x 1080">1920 x 1080</option>
						</select>
						<br>
						<br>
						Tipo de material: 
						<select name="Material-del-Brochure">
							<option value="Papel poster Gloss">Papel poster Gloss</option>
							<option value="Papel Photo Glass">Papel Photo Glass</option>
							<option value="Papel Sintético">Papel Sintético</option>
						</select>
						<br>
						<br>
						Color:
						<p></p>
						<input type="checkbox" name="Full" value="Full">
						<label for="fullColor">Full</label> 
						<p></p>
						<input type="checkbox" name="Uno" value="Uno">
						<label for="uno">Uno</label> 
						<p></p>
						Otro: 
						<input class="txtbox" type="text" name="Otro-color" name="color-brochure" size="40" maxlength="20" placeholder="Ingrese el color de su preferencia" size="40" max="20">

						<p></p>

						Nota: 
						<br>
						1.	Las solicitudes son incluidas en la programación y se atienden de acuerdo a las prioridades.
						<br>
						2.	La imprenta sólo suministra papel bond y cartulina sencilla.  El material especial debe suministrarlo el solicitante.
						<br>
						3.	Si la actividad es de autogestión se debe cubrir el costo de los materiales para la impresión de papelería de promoción y folletos.
						<br>
						<h6>*Se requiere un mes para la elaboración</h6>
						<br><br><br>					
					</div>

					<div class="cajamarron textoCuerpoWhite">

						<h5>CONTACTO DIRECTO PARA COORDINACIÓN</h5>
						Solicitado por: 
						<input type="text" id="personaDevlv" class="txtbox" name="personaDevlv" value="<?php echo $datoUser->nombre." ".$datoUser->apellido; ?>"readonly> 
						<br>
						<br>
						<label class="textoCuerpoWhite">Sección o departamento</label>
							<select name="departamento">	
								<?php while ($depa=$sql4->fetch(PDO::FETCH_OBJ)) { 																				
									if($facultades['idFacultad'] == $Depa['idFacultad']){?>
									<option value="<?php $depa->idDepa;?>" select>
										<?php echo $depa->nombreDepa?>
									</option>									
								<?php }} ?>	
							</select>	<!--No funciona el select para que solo traiga los departamentos de la facultad seleccionada-->
						<br>
						<br>
						Teléfonos:
						<input type="text" id="telefono" class="txtbox" name="telefono" value="<?php echo $datoTel->telefono; ?>" readonly>    
						<br>
						<br>
						Correo Electrónico: 
						<input type="text" id="correo" class="txtbox" name="correo" size="40" value="<?php echo $datoUser->email; ?>"readonly>
						<br>
						<br>
					</div>
					<button class="redondo espacioBoton6" type="button" onclick="myFunction2()"><label class="textoCuerpo">Regresar</label></button></a>
					<button class="redondo espacioBoton5" type="reset"><label class="textoCuerpo">BORRAR</label></button>					
					<button class="redondo espacioBoton5" type="submit"><label class="textoCuerpo">Enviar</label></button>
			<br><br><br>
				
					</div><!--FIN DEL DIVCUARTO-->		
		</div>
			</form>

	</div>
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

</body>

</html>