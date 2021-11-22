<?php 
    include("../config/conexion.php");

    if(isset($_REQUEST['aceptar']))
    {
        $idOrden=$_REQUEST['aceptar'];
        $sql=$conn->query("UPDATE orden SET estado='Aprobado' WHERE idOrden='$idOrden'");
        header('Location: ../paginas/aprobarEvento.php');
    }
    elseif(isset($_REQUEST['rechazar']))
    {
        $idOrden=$_REQUEST['rechazar'];
        $sql=$conn->query("UPDATE orden SET estado='Rechazado' WHERE idOrden='$idOrden'");
        header('Location: ../paginas/aprobarEvento.php');
    }
    elseif(isset($_REQUEST['modificar']))
    {
        $idOrden=$_REQUEST['modificar'];
        $sql=$conn->query("UPDATE orden SET estado='Modificar' WHERE idOrden='$idOrden'");
        header('Location: ../paginas/aprobarEvento.php');
    }
?>