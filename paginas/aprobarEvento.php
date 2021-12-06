<!--Pantalla Formulario-->
<?php
    include("../procesos/verificar.php");
    include("../procesos/consultaUser.php");

    $sql=$conn->query("SELECT * FROM solicitud");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Solicitudes de Eventos</title>
	<link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
    <link rel="icon" type="image/x-icon" href="../imagenes/logo.png">
	<meta name ="viewport" content ="width=device-width, initial-scale=1, shrink-to-fill=no">
    <meta name ="description" content ="">
    <meta name ="author" content ="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name ="generator" content ="Jekll v4.1.1">
	<link rel ="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
    <link href ="../CSS/bootstrap.min.css" rel ="stylesheet">
    <link href="../CSS/list-groups.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="../CSS/estiloModal.css">-->
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
                <h3 class="titulosHeaderBlack">LISTA DE SOLICITUDES DE EVENTOS</h3>
            </div>
            <!--PRIMER DIV --><br><br>
                <div class=centrar>
                    <table align="center" cellspacing="20" cellpadding="10">
                        <thead>
                            <tr>
                                <th class="textoCuerpoBlack">Evento</th>
                                <th class="textoCuerpoBlack">Aceptar</th>
                                <th class="textoCuerpoBlack">Rechazar</th>
                                <th class="textoCuerpoBlack">Modificar</th>
                                <th class="textoCuerpoBlack">Ver Detalle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($solicitud=$sql->fetch(PDO::FETCH_OBJ)) {  ?>
                            <tr>
                                <td> <?php echo $solicitud->nombreEvento; ?> </td>
                                <td>
                                    <form action="../procesos/administrarEvento.php" method="POST">
                                        <input type="hidden" class="textoCuerpoBlack" name="aceptar" value="<?php echo $solicitud->idSolicitud; ?>">
                                        <button class="butonLogout" type="submit">Aceptar</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="../procesos/administrarEvento.php" method="POST">
                                        <input type="hidden" class="textoCuerpoBlack" name="rechazar" value="<?php echo $solicitud->idSolicitud; ?>">
                                        <button class="butonLogout" type="submit">Rechazar</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="../procesos/administrarEvento.php" method="POST">
                                        <input type="hidden" class="textoCuerpoBlack" name="modificar" value="<?php echo $solicitud->idSolicitud; ?>">
                                        <button class="butonLogout" type="submit">Modificar</button>
                                    </form>
                                </td>
                                <td>
                                    <button class="butonLogout" type="submit">Ver Detalles</button>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div>
                    <a href="menuPrincipal.php"><button class="redondo espacioBoton5" type="submit"><label class="textoCuerpo">REGRESAR</label></button></a>
                <div>
                <br><br>
	    </div>
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