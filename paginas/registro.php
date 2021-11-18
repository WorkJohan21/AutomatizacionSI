<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro</title>
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
		<form method="POST" action="../procesos/crearUsuario.php">
            <h3 class="titulosHeaderBlack">Registrar un Nuevo Usuario</h3>
            <br>
            <div class="centrar marginAbajo">
                <label for="inputNombre" class="textoCuerpoBlack spanEspaciado">Nombre</label>
                <input type="text" id="inputNombre" class="txtbox" placeholder="Juan" name="nombre" size="25" required>
            </div>
            <br>
            <div class="centrar marginAbajo">
                <br><label for="inputApellido" class="textoCuerpoBlack spanEspaciado">Apellido</label>
                <input type="text" id="inputApellido" class="txtbox" placeholder="Peréz" name="apellido" size="25" required>
            </div>
            <br>
            <div class="centrar marginAbajo">
                <br><label for="inputCelular" class="textoCuerpoBlack spanEspaciado">Celular</label>
                <input type="text" id="inputCelular" class="txtbox" placeholder="6214-7245" name="celular" size="25" pattern="[0-9]{4}-[0-9]{4}" required>
            </div>
            <br>
            <div class="centrar marginAbajo">
                <br><label for="inputTelefono" class="textoCuerpoBlack spanEspaciado">Telefono</label>
                <input type="text" id="inputTelefono" class="txtbox" placeholder="269-1384" name="telefono" size="25" pattern="[0-9]{3}-[0-9]{4}" required>
            </div>
            <br>
            <div class="centrar marginAbajo">
                <br><label for="inputEmail" class="textoCuerpoBlack">Correo Electronico</label>
                <input type="email" id="inputEmail" class="txtbox" placeholder="Ejem: correo@hotmail.com" name="email" size=25 required>
            </div>
            <br>
            <div class="centrar marginAbajo"></div>
                <label for="inputPassword" class="textoCuerpoBlack spanEspaciado">Contrasena</label>
                <input type="password" id="inputPassword" class="txtbox" placeholder="****" name="password" size="25" required>
            </div>

            <br><br>
                <div class="centrar">
                <button class="redondo" type="submit"><label class="textoCuerpo">Crear Usuario</label></button>
            </div>
            <div class="mt-4">
                <div class="d-flex justify-content-center links">
                    <label class="textoCuerpoBlack">Ya tienes una cuenta?</label><a href="../index.php" class="ml-2"><label class="textoCuerpoBlack"></label>Iniciar Sesion</label></a>
                </div>
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