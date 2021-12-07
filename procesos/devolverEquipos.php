<?php 
    include("../config/conexion.php");

    if(isset($_REQUEST['devolver']))
    {
        $idOrden=$_REQUEST['devolver'];
        
        try
        {
            $obtenerCantidad=$conn->query("SELECT * FROM orden_equipo WHERE idOrden='$idOrden'");

            while ($orden_equipo=$obtenerCantidad->fetch(PDO::FETCH_OBJ))
            {
                $cant=$orden_equipo->cantSolicitada;

                $queryCantDispo=$conn->query("SELECT * FROM equipo WHERE idEquipo='$orden_equipo->idEquipo'");
                $datosEquipo=$queryCantDispo->fetch(PDO::FETCH_OBJ);
                $cantActual=$datosEquipo->cantDispo;

                $cantNueva=$cantActual+$cant;
                
                $cantUpdate=$conn->exec("UPDATE equipo SET cantDispo='$cantNueva' WHERE idEquipo='$orden_equipo->idEquipo'");

                $estadoUpdate=$conn->exec("UPDATE orden_equipo SET estadoEquipo='Aprobado | Equipo Devuelto' WHERE idOrden='$idOrden' AND idEquipo='$orden_equipo->idEquipo'");
            }

            $sql=$conn->query("UPDATE orden SET estado='Aprobado' WHERE idOrden='$idOrden'");
            echo'<script type="text/javascript">alert("Se han devuelto los equipos");window.location.href="../paginas/retiroEquipos.php";</script>';
            //header('Location: ../paginas/aprobarEquipo.php');
        }
        catch (Exception $e)
        {
            echo'<script type="text/javascript">alert("No se han devuelto los equipos, intentelo de nuevo");window.location.href="../paginas/retiroEquipos.php";</script>';
        }
    }
    else
    {
        echo'<script type="text/javascript">alert("No ha seleccionado ninguna orden para devolver los equipos");window.location.href="../paginas/retiroEquipos.php";</script>';
    }
?>