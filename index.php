<!--Pantalla Formulario-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="CSS/estilo.css">

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
		<form method="POST" action="procesos/procesarLogin.php">
            <h3 class="titulosHeaderBlack ">Acceder al Sistema</h3>

            <label for="inputEmail" class="textoCuerpoBlack ">Correo Electronico</label>
            <input type="email" id="inputEmail" class="txtbox" placeholder="Ejem: correo@hotmail.com" name="email">

            <br><br><label for="inputPassword" class="textoCuerpoBlack spanEspaciado">Contrasena</label>
            <input type="password" id="inputPassword" class="txtbox" placeholder="*****" name="password">

            <div class="checkbox mb-3">
                <br><label>
                    <input type="checkbox" value="remember-me">Recordar Usuario
                </label>
            </div>

            <button class="redondo" type="submit"><label class="textoCuerpo">Iniciar Sesion</label></button>

            <div class="mt-4">
                <div class="d-flex justify-content-center links">
                    <label class="textoCuerpoBlack">Aun no tiene cuenta?</label><a href="paginas/registro.php" class="ml-2"><label class="textoCuerpoBlack"></label>Registrese aqui</label></a>
                </div>
                
                <div class="d-flex justify-content-center links">
                    <a href="paginas/recuperar.html" class="ml-2">Olvido su contrasena</a>
                    
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