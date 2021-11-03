<?php

    session_start();

    include("../config/conexion.php");

    if (isset ($_REQUEST['email']) && isset($_REQUEST['password']))
    {
        $email=$_REQUEST['email'];
        $pass=md5($_REQUEST['password']);

        $consulta=$conn->query("SELECT id FROM usuario WHERE email='$email' and password='$pass'");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);

        $consulta->execute();
        $row=$consulta->fetch();
        
        if ($consulta->rowCount() > 0)
        {
            echo "Tiene autorizacion para acceder";
            $_SESSION['sw']=true;
            $_SESSION['id']=$row["id"];
            header("Location: ../paginas/panel.php");
            exit;
        }
        else
        {
            header("Location: ../index.php?msg=Datos incorrectos para ingresar, intente nuevamente");
            exit;
        }

    }
    else
    {
        echo "NO ESTA DEFINIDO";
    }
?>