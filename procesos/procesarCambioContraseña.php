<?php
	session_start();
    include("../config/conexion.php");
    include("../clases/usuario.php");

   	if (isset ($_REQUEST['email']) && isset($_REQUEST['hash']))
    {
    	$email=$_REQUEST['email'];
        $hash=$_REQUEST['hash'];
    	$pass=md5($_REQUEST['newpass']);
        $segpass=md5($_REQUEST['passagain']);

        if($pass != $segpass)
        {
        	$msg="<div style='color:red'>Las contraseñas no coinciden</div>";
            echo '<meta http-equiv="refresh" content="0; url=../paginas/recuperar.php?msg='.$msg.'">'; 
        }
        else
        {
        	$sqlupdate = $conn->exec("UPDATE usuario SET password='$pass', hash='' WHERE email='$email' AND hash='$hash'");

        	if($sqlupdate)
        	{
        		echo'<script type="text/javascript">alert("Su contraseña ha sido cambiada");window.location.href="../index.php";</script>';
        	}
        	else
        	{
        		echo'<script type="text/javascript">alert("Ha ocurrido un error");window.location.href="../index.php";</script>';
        	}
        }
    } 
?>