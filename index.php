<!--Pantalla Formulario-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
    <link rel="icon" type="image/x-icon" href="imagenes/logo.png">
	<meta name ="viewport" content ="width=device-width, initial-scale=1, shrink-to-fill=no">
    <meta name ="description" content ="">
    <meta name ="author" content ="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name ="generator" content ="Jekll v4.1.1">
	<link rel ="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
    <link href ="CSS/bootstrap.min.css" rel ="stylesheet">

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
	</style>
</head>
<body class="cuerpo">
	<div id="page-container">
   	<div id="content-wrap">
	<header class="tope">
		<img src="imagenes/logo.png" class="logo">
	    <h3 class="titulosHeader">Universidad Tecnológica de Panamá<br>Departamento de Protocolo, Ceremonial y Eventos<br><i>"Camino a la excelencia a través del mejoramiento continuo"</i></h3>
	</header>
	<br><br>
	<div class="centrar">

        <img src="imagenes/undraw_events_re_98ue.svg" width="500" height="500">

		<form method="POST" action="procesos/procesarLogin.php">
            <h3 class="titulosHeaderBlack2">Acceder al Sistema</h3>

            <div class="mt-4">
                <img src="imagenes/email.svg" width="30" height="30">
                <label for="inputEmail" class="textoCuerpoBlack espaciadoaltura labelpos"></label>
                <input type="email" id="inputEmail" class="txtbox input-field" placeholder="Correo"  name="email" size=25 required>

                <br><br>
            </div>
            
            <div>
                <img src="imagenes/lock.svg" width="30" height="30">
                <label for="inputPassword" class="textoCuerpoBlack espaciadoaltura labelpos"></label>
                <input type="password" id="inputPassword" class="txtbox input-field" placeholder="Contraseña" name="password" size="25" required>

                <div class="checkbox mb-3">
                    <br><label>
                        <input type="checkbox" value="remember-me">Recordar Usuario
                    </label>
                </div>

                <button class="redondo" type="submit"><label class="textoCuerpo">Iniciar Sesion</label></button>

            </div>
           
            <div class="mt-4">
                <div class="d-flex justify-content-center links">
                    <label class="textoCuerpoBlack">Aun no tiene cuenta?</label><a href="paginas/registro.php" class="ml-2"><label class="textoCuerpoBlack"></label>Registrese aqui</label></a>
                </div>
                
                <div class="d-flex justify-content-center links">
                    <a href="paginas/recuperar.php" class="ml-2">Olvido su contrasena</a>
                    
                </div>
            </div>

        </form>
	</div>
	
	</div>
	<footer id="footer">
		<img src="imagenes/logo-footer.png" class="logo">
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