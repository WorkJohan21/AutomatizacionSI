<?php
	function SolicitarCambioContrasena($email, $hash)
	{
		// Host
		$host="http://dicomesutp.42web.io"; //Poner dirección absoluta del host, si no, se creará una carpeta aparte

		$mensaje="Querido Usuario";
		// Correo destino
		$para = $email;
		// De que trata el correo
		$asunto = 'Cambio de Contraseña';

		$mensaje ='
		<html>
		<head>
			<title>SOLICITUD DE CAMBIO DE CONTRASEÑA</title>
		</head>
		<body>
			<table width="80%" border="0" align="center" cellpading="5" cellspacing="5">
				<tr>
					<td><div align="center"><img src="https://i.ibb.co/9Ty8fzh/logo-utp-1-72.png" alt="logo-utp-1-72" border="0" width="100" height ="100"></div></td>
				</tr>
				<tr>
					<td bgcolor="e6e6e7"><p align="center"><strong>- '.$mensaje.' -</strong><br>
						Le agredecemos por haberse inscribido con nosotros<br>
						Para que pueda recuperar el acceso a su cuenta, tendr&aacute; que acceder al siguiente enlace.
						Una vez all&iacute; podr&aacute; ingresar su nueva contrase&ntilde;a:</p>
						<p align="center"><a href="'.$host.'/paginas/cambiarContrase&ntilde;a.php?e='.$email.'&a='.$hash.'">Cambiar Contrase&ntilde;a</a>
						</p><br>
					</td>
				</tr>
				<tr>
					<td bgcolor="51034f"><div align="center" style="color:#FFFFFF";>Universidad Tecnol&oacute;gica de Panam&aacute; - 2021<br>
				        Direcci&oacute;n: Avenida Universidad Tecnol&oacute;gica de Panam&aacute;, V&iacute;a Puente Centenario,Campus Metropolitano V&iacute;ctor Levi Sasso.<br>
				        Tel&eacute;fono. (507) 560-3000<br>
				        Correo electr&oacute;nico: buzondesugerencias@utp.ac.pa<br>
				        311 Centro de Atenci&oacute;n Ciudadana<br>
				        <a href="https://aig.gob.pa/acercade/disclaimer/">Pol&iacute;ticas de Privacidad</a></div>
		      		</td>
				</tr>
			</table>
		</body>
		</html>
		';
		
		// OPCIONALES
		$cabecera = 'MIME-Version: 1.0' . "\r\n";
		$cabecera .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$cabecera .= 'From: eventosfiscutp1@gmail.com'."\r\n";
		//$cabecera .= 'From: SOLICITUD DE CAMBIO DE CONTRASEÑA <eventosfiscutp1@gmail.com/>'."\r\n";

		// Envío
		mail($para, $asunto, $mensaje, $cabecera);
	}
?>