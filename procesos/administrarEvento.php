<?php 
    include("../config/conexion.php");

    if(isset($_REQUEST['aceptar']))
    {
        $idOrden=$_REQUEST['aceptar'];
        $sql=$conn->query("UPDATE solicitud SET estado='Aprobado' WHERE idSolicitud='$idSolicitud'");
        header('Location: ../paginas/aprobarEvento.php');
    }
    elseif(isset($_REQUEST['rechazar']))
    {
        $idOrden=$_REQUEST['rechazar'];
        $sql=$conn->query("UPDATE solicitud SET estado='Rechazado' WHERE idSolicitud='$idSolicitud'");
        header('Location: ../paginas/aprobarEvento.php');
    }
    elseif(isset($_REQUEST['modificar']))
    {
        $idOrden=$_REQUEST['modificar'];
        $sql=$conn->query("UPDATE solicitud SET estado='Modificar' WHERE idSolicitud='$idSolicitud'");
        header('Location: ../paginas/aprobarEvento.php');
    }
?>