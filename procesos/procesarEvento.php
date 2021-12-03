<?php 
    include("../config/conexion.php");

    if (isset ($_REQUEST['nombreActividad']))
    {
        //Las variables generales del formulario de eventos
        $nombreActividad = $_REQUEST['nombreActividad'];
        $facultad=$_REQUEST['facultad'];
        $fecha=$_REQUEST['fecha'];
        $horaInicio=$_REQUEST['horaInicio'];
        $horaFinal=$_REQUEST['horaFinal'];
        $lugar=$_REQUEST['lugar'];
        $actividad=$_REQUEST['actividad1'];

        //Las variables del servicio de protocolo
        $precedencia=$_REQUEST['precedencia'];
        $planeacion=$_REQUEST['planeacion'];
        $protocoloPrecedencia=$_REQUEST['protocoloPrecedencia'];
        $protocoloContenido=$_REQUEST['protocoloContenido'];
        //Las variables del servicio de prensa
        $prensa=$_REQUEST['prensa'];

        //Las variables del servicio de diseno
        $nombreDiseno=$_REQUEST['diseno'];
        $departamento=$_REQUEST['departamento'];
        $tamanoDiseno=$_REQUEST['tamanoDiseno'];
        $orientacionDiseno=$_REQUEST['orientacionDiseno'];

        //Las variables del servicio de imprenta
        $imprenta=$_REQUEST['imprenta'];
        $copias=$_REQUEST['copias'];
        $originales=$_REQUEST['originales'];
        $tamanoImprenta=$_REQUEST['tamanoImprenta'];
        $materialImprenta=$_REQUEST['materialImprenta'];
        $colorImprenta=$_REQUEST['colorImprenta'];

        echo "Datos Principales: ".$nombreActividad." ".$facultad." ".$fecha." ".$horaInicio." ".$horaFinal." ".$lugar." ".$actividad."<br>";

        echo "Cantidad de protocolo de precedencia";
        foreach ($precedencia as $p)
        {
            echo "<br>".$p."<br>";
        }

        echo "Cantidad de planeacion y asesorias";
        foreach ($planeacion as $pla)
        {
            echo "<br>".$pla."<br>";
        }

        echo "Cantidad de protocolo de precedencia2";
        foreach ($protocoloPrecedencia as $pPre)
        {
            echo "<br>".$pPre."<br>";
        }

        echo "Cantidad de protocolo de contenido";
        foreach ($protocoloContenido as $c)
        {
            echo "<br>".$c."<br>";
        }

        echo "Cantidad de Prensa";
        foreach ($prensa as $pren)
        {
            echo "<br>".$pren."<br>";
        }
        
        $especifico;
        echo "Cantidad de diseno";
        foreach ($nombreDiseno as $nd)
        {
            $especifico=$nd-1;
            echo "<br>".$nd." tamano ".$tamanoDiseno[$especifico]." orientacion".$orientacionDiseno[$especifico]."<br>";
        }

        $especificoImprenta;
        echo "Cantidad de diseno";
        foreach ($imprenta as $im)
        {
            $especificoImprenta=$im-1;
            echo "<br>".$im." n de copias ".$copias[$especificoImprenta]." n de originales ".$originales[$especificoImprenta]." tamano ".$tamanoImprenta[$especificoImprenta]." tipo".$materialImprenta[$especificoImprenta]." color".$colorImprenta[$especificoImprenta]."<br>";
        }

        
    }
?>