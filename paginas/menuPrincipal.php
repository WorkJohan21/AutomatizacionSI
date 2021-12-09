<?php
    include("../procesos/verificar.php");
    include("../procesos/consultaUser.php");
    include("../clases/usuario.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu  Principal</title>
	<link rel="stylesheet" type="text/css" href="../CSS/estiloMenu.css">
    <link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
    <link rel="stylesheet" type="text/css" href="../CSS/columnaCalendario.css">
    <link rel="icon" type="image/x-icon" href="../imagenes/logo.png">
	<meta name ="viewport" content ="width=device-width, initial-scale=1, shrink-to-fill=no">
    <meta name ="description" content ="">
    <meta name ="author" content ="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name ="generator" content ="Jekll v4.1.1">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
        <div class="salir"><a href="../procesos/salir.php"><button class="butonLogout">SALIR</button></a></div>
    </header>
    <br>
    <div class="centrar">
        <h3 class="titulosHeaderBlack">Formulario de Servicios Internos</h3>
    </div>
    <h4 class="titulosHeaderBlack"><?php echo "Bienvenid@: ".$datoUser->nombre." ".$datoUser->apellido."!"; ?></h4>
    <br>

<div class="parteizquierda">
        <?php if ($datoUser->tipoUsuario==2) { ?>  

            <div class="cajaopc"> <!--cajaopc2 es el estilo que le quería aplicar pero no funciona, viene de estiloMenu.css-->
                <a href="formEvento.php"><button class="opciones"><img src="../imagenes/formulario.png" width="30px" height="30px"><h5 class="textocuerpoBlack">Formulario de Solicitud de Eventos</h5></button></a>
            </div>

            <br>
            <br>

            <div class="cajaopc">
                <a href="formEquipo.php"><button class="opciones"><img src="../imagenes/formulario.png" width="30px" height="30px"><h5 class="textocuerpoBlack">Formulario de Solicitud de Equipo</h5></button></a>
            </div>

            <br>
            <br>
            
            <div class="cajaopc">
                <a href="estado.php"><button class="opciones"><img src="../imagenes/clock-fill.svg" width="30px" height="30px"><h5 class="textocuerpoBlack">Estado de Solicitud</h5></button></a>
            </div>
        <?php }?>

        <?php if ($datoUser->tipoUsuario==1) { ?>                    


            <div class="cajaopc">
                <a href="Inventario.php"><button class="opciones"><img src="../imagenes/caja2.png" width="30px" height="30px"><h5 class="textocuerpoBlack">Inventario</h5></button></a>
            </div>

            <br>
            <br>

            <div class="cajaopc">
                <a href="aprobarEvento.php"><button class="opciones"><img src="../imagenes/formulario.png" width="30px" height="30px"><h5 class="textocuerpoBlack">Lista de Solicitudes de Eventos</h5></button></a>
            </div>
            <br><br>

            <div class="cajaopc">
                <a href="aprobarEquipo.php"><button class="opciones"><img src="../imagenes/formulario.png" width="30px" height="30px"><h5 class="textocuerpoBlack">Lista de Solicitudes de Equipos</h5></button></a>
            </div>
            <br><br>

            <div class="cajaopc">
                <a href="retiroEquipos.php"><button class="opciones"><img src="../imagenes/formulario.png" width="30px" height="30px"><h5 class="textocuerpoBlack">Devolución de Equipos</h5></button></a>
            </div>

        <?php } ?>
</div>

<!--Calendario-->

<div class="partederecha" >
<iframe src="calendario.php" frameBorder="0" height="550" width="600"  title="Iframe Example"></iframe>
<br>
            <!--DIV DE DESCRIPCION -->
            <div class="descripcion">   
            <h5 class="lblLetra">Descripción de Eventos Aprobados:</h5>
            <br>
            <label class="labelNaranja">Color Naranja: </label> <label class="lblLetra">Solicitud de Eventos</label> 
            <br>
            <label class="labelCeleste" >Color Celeste: </label> <label class="lblLetra">Solititud de Equipos </label>
            </div>
</div>



        </div>
<br><br><br>

<script src="../JS/scripts.js"></script>
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