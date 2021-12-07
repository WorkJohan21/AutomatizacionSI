<?php 
    include("../config/conexion.php");

    if(isset($_REQUEST['aceptar']))
    {
        $idOrden=$_REQUEST['aceptar'];
        
        $obtenerCantidad=$conn->query("SELECT * FROM orden_equipo WHERE idOrden='$idOrden'");

        while ($orden_equipo=$obtenerCantidad->fetch(PDO::FETCH_OBJ))
        {
            $cant=$orden_equipo->cantSolicitada;

            $queryCantDispo=$conn->query("SELECT * FROM equipo WHERE idEquipo='$orden_equipo->idEquipo'");
            $datosEquipo=$queryCantDispo->fetch(PDO::FETCH_OBJ);
            $cantActual=$datosEquipo->cantDispo;

            $cantNueva=$cantActual-$cant;
            
            $cantUpdate=$conn->exec("UPDATE equipo SET cantDispo='$cantNueva' WHERE idEquipo='$orden_equipo->idEquipo'");

            $estadoUpdate=$conn->exec("UPDATE orden_equipo SET estadoEquipo='Aprobado' WHERE idOrden='$idOrden' AND idEquipo='$orden_equipo->idEquipo'");
        }

        $sql=$conn->query("UPDATE orden SET estado='Aprobado' WHERE idOrden='$idOrden'");
        echo'<script type="text/javascript">alert("Este evento ha sido aprobado");window.location.href="../paginas/aprobarEquipo.php";</script>';
        //header('Location: ../paginas/aprobarEquipo.php');
    }
    elseif(isset($_REQUEST['rechazar']))
    {
        $idOrden=$_REQUEST['rechazar'];
        $sql=$conn->query("UPDATE orden SET estado='Rechazado' WHERE idOrden='$idOrden'");
        echo'<script type="text/javascript">alert("Este evento ha sido rechazado");window.location.href="../paginas/aprobarEquipo.php";</script>';
        //header('Location: ../paginas/aprobarEquipo.php');
    }
    elseif(isset($_REQUEST['modificar']))
    {
        $idOrden=$_REQUEST['modificar'];
        $sql=$conn->query("UPDATE orden SET estado='Modificar' WHERE idOrden='$idOrden'");
        header('Location: ../paginas/aprobarEquipo.php');
    }
?>