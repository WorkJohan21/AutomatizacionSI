<?php 
    include("../config/conexion.php");

    if (isset ($_REQUEST['nombreActividad']))
    {
        $nombreActividad = $_REQUEST['nombreActividad'];
        $facultad=$_REQUEST['facultad'];
        $fecha=$_REQUEST['fecha'];
        $horaInicio=$_REQUEST['horaInicio'];
        $horaFinal=$_REQUEST['horaFinal'];
        $lugar=$_REQUEST['lugar'];
        $actividad=$_REQUEST['actividad1'];
        $precedencia=$_REQUEST['precedencia'];
        $planeacion=$_REQUEST['planeacion'];
        $protocoloPrecedencia=$_REQUEST['protocoloPrecedencia'];
        $protocoloContenido=$_REQUEST['protocoloContenido'];
        $prensa=$_REQUEST['prensa'];
        $departamento=$_REQUEST['departamento'];
    }
?>