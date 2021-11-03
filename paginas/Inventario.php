<?php
    include("../procesos/verificar.php");
    include("../procesos/consultaUser.php");

    $sql=$conn->query("SELECT * FROM equipo");
    //$datoEquipo=result->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inventario de Equipo</title>
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
	<div clas="centrar">
		<form class="form-signin" method="POST" action="menuPrincipal.php">
            <h3 class="titulosHeaderBlack">Inventario de Equipo</h3>
            <br>
            <table align="center">
                <thead>
                    <tr>
                        <th>Equipo</th>
                        <th>Cant. Disponible</th>
                        <th>Cant. Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($elementosEquipo=$sql->fetch(PDO::FETCH_OBJ)) { ?>
                        <tr>
                            <td><?php echo $elementosEquipo->nombreEquipo ?></td>
                            <td><?php echo $elementosEquipo->cantDispo; ?></td>
                            <td><?php echo $elementosEquipo->cantTotal; ?></td>
                        </tr>    
                </tbody>
                <?php } ?>
            </table>
            <br>
            <div class="mt-4">
                <a href="menuPrincipal.php"><button class="redondo" type="submit"><label class="textoCuerpo">Regresar</label></button></a>
            </div>
		
	</form>
    </div>
	<br><br><br>
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