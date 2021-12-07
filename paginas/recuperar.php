
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Recuperar</title>
	<link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
   <link rel="icon" type="image/x-icon" href="../imagenes/logo.png">
	<!--<link rel="stylesheet" type="text/css" href="../CSS/style.css">-->

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
		<header class="tope">
			<img src="../imagenes/logo.png" class="logo">
    		<h3 class="titulosHeader">Universidad Tecnológica de Panamá<br>Departamento de Protocolo, Ceremonial y Eventos<br><i>"Camino a la excelencia a través del mejoramiento continuo"</i></h3>
		    <!--<div class="salir"><a href="../index.php"><button class="butonLogout">SALIR</button></a></div>-->
		</header>
	<br><br>
	<div class="centrar">

      <img src="../imagenes/undraw_forgot_password_re_hxwm.svg" width="600px" height="500px">

      <form method="POST" action="../procesos/procesarEmail.php">
         <h3 class="titulosHeaderBlack">Recuperar Contraseña</h3>

         <div class="mt-4">
             <label for="email" class="textoCuerpoBlack espaciadoaltura">Correo Electronico: </label>
             <input type="email" id="email" class="txtbox" placeholder="Ejem: correo@hotmail.com" name="email" size=25>
         </div>
         <br>
         <div><?php if(isset($_GET['msg'])) echo $_GET['msg'];?></div>
         <br>
         <button class="redondo" type="submit"><label class="textoCuerpo">Enviar</label></button>

         <div class="mt-4">
             <div class="d-flex justify-content-center links">
             <label class="textoCuerpoBlack">¿Aun no tiene cuenta? </label><a style="text-decoration:none" href="registro.php" class="ml-2"><label class="textoCuerpoBlack"></label> Registrese aquí</label></a>
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