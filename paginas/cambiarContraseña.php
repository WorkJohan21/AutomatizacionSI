<?php
	session_start();
    include("../config/conexion.php");
    include("../clases/usuario.php");

    if (isset ($_REQUEST['e']) && isset($_REQUEST['a']))
    {
        $email=$_REQUEST['e'];
        $hash=$_REQUEST['a'];

        $consulta=$conn->query("SELECT id FROM usuario WHERE email='$email' and hash='$hash'");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);

        $consulta->execute();
        $row=$consulta->fetch();
        
        if ($consulta->rowCount() > 0)
        {
            ?>
			<!DOCTYPE html>
			<html>
			<head>
				<meta charset="utf-8">
				<title>Cambiar Contraseña</title>
				<link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
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

			      <!--<img src="../imagenes/undraw_forgot_password_re_hxwm.svg" width="600px" height="500px">-->

			      <form method="POST" action="../procesos/procesarCambioContraseña.php">
			         <h3 class="titulosHeaderBlack">Cambiar Contraseña</h3>
			         <div style="border-style: inset;">
				         <div class="centrar marginAbajo">
				             <label for="email" class="textoCuerpoBlack">Correo Electronico: </label>
				             <input type="email" id="email" class="txtbox" value="<?php echo $email; ?>" name="email" size=25 readonly>
				         </div>
				         <div class="centrar marginAbajo">
				             <label for="hash" class="textoCuerpoBlack spanEspaciado">Hash: </label>
				             <input type="text" id="hash" class="txtbox" value="<?php echo $hash; ?>" name="hash" size=25 readonly>
				         </div>
			     	 </div>
			         <br>
			         <div class="centrar marginAbajo">
	            	     <label for="newpass" class="textoCuerpoBlack spanEspaciado">Contraseña: </label>
	        	         <input type="password" id="newpass" class="txtbox" placeholder="Contraseña" name="newpass" size="25" required>
            		 </div>
            		 <div class="centrar marginAbajo">
                 	 	<label for="passagain" class="textoCuerpoBlack">Repetir Contraseña: </label>
                	 	<input type="password" id="passagain" class="txtbox" placeholder="Repite la Contraseña" name="passagain" size="25" required>
            		 </div>
			         <br>
			         <div><?php if(isset($_GET['msg'])) echo $_GET['msg'];?></div>
			         <br>
			         <button class="redondo" type="submit"><label class="textoCuerpo">Cambiar Contraseña</label></button>
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
            <?php
        }
        else
        {
            echo'<script type="text/javascript">alert("No puede acceder a este sitio");window.location.href="../index.php";</script>';
        }
    }
    else
    {
        echo "NO ESTA DEFINIDO";
    }
?>