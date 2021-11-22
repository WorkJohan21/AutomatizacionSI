<?php
    session_start();
    include("../config/conexion.php");
    include("../clases/usuario.php");
    include("../procesos/enviarEmail.php");

    if ((isset ($_REQUEST['email'])) && ($_REQUEST['email']!=""))
    {
        $email=$_REQUEST['email'];
        $hash=md5(rand(10,1000));

        $sqlupdate = $conn->exec("UPDATE usuario SET hash='$hash' WHERE email='$email'");
        
        if ($sqlupdate)
        {
            $msg="<div style='color:blue'>Se le ha enviado un mensaje a su correo electrónico.</div>";
            SolicitarCambioContrasena($email,$hash);
            echo '<meta http-equiv="refresh" content="0; url=../paginas/recuperar.php?msg='.$msg.'">'; 
        }
        else
        {   
            $msg="<div style='color:red'>El correo ingresado no existe en el sistema.</div>";
            echo '<meta http-equiv="refresh" content="0; url=../paginas/recuperar.php?msg='.$msg.'">'; 
        }

    }
?>