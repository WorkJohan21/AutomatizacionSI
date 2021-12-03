<?php 
    include("../config/conexion.php");
    include("../clases/solicitud.php");

    if (isset ($_REQUEST['nombreActividad']))
    {
        //Las variables generales del formulario de eventos
        $nombreEvento = $_REQUEST['nombreActividad'];
        $facultad=$_REQUEST['facultad'];
        $fecha=$_REQUEST['fecha'];
        $horaInicio=$_REQUEST['horaInicio'];
        $horaFinal=$_REQUEST['horaFinal'];
        $observacion=$_REQUEST['observacion'];
        $lugar=$_REQUEST['lugar'];
        $actividad=$_REQUEST['actividad1'];
        $personaDevlv=$_REQUEST['personaDevlv'];

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

        /*echo "Datos Principales: ".$nombreEvento." ".$facultad." ".$fecha." ".$horaInicio." ".$horaFinal." ".$lugar." ".$actividad."<br>";

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
        
        $especificoDiseno;
        echo "Cantidad de diseno";
        foreach ($nombreDiseno as $nd)
        {
            $especificoDiseno=$nd-1;
            echo "<br>".$nd." tamano ".$tamanoDiseno[$especificoDiseno]." orientacion".$orientacionDiseno[$especificoDiseno]."<br>";
        }

        $especificoImprenta;
        echo "Cantidad de diseno";
        foreach ($imprenta as $im)
        {
            $especificoImprenta=$im-1;
            echo "<br>".$im." n de copias ".$copias[$especificoImprenta]." n de originales ".$originales[$especificoImprenta]." tamano ".$tamanoImprenta[$especificoImprenta]." tipo".$materialImprenta[$especificoImprenta]." color".$colorImprenta[$especificoImprenta]."<br>";
        }*/

        $datos = new Solicitud($nombreEvento,$fecha,$horaInicio,$horaFinal,$observacion,$lugar,$facultad,$actividad,$personaDevlv);
        $insercionSolicitud=$conn->prepare("INSERT INTO solicitud (nombreEvento,fechaEvento,horaInicio,horaFinal,observacion,idLugar,idFacultad,idActividad,idUsuario) VALUES (:nombreEvento,:fechaEvento,:horaInicio,:horaFinal,:observacion,:idLugar,:idFacultad,:idActividad,:idUsuario)");
       
        try
        {
            //Insercion en la tabla solicitud
            $insercionSolicitud->execute((array)$datos);

            //Obtencion del idSolicitud del registro que se acaba de introducir
            $result=$conn->query("SELECT * FROM solicitud WHERE nombreEvento='$nombreEvento'");
            $datosSolicitud=$result->fetch(PDO::FETCH_OBJ);
            $idSolicitud=$datosSolicitud->idSolicitud;


            //Procedemos a la insercion de los servicios de protocolo
            $insercionProtocolo=$conn->prepare("INSERT INTO solicitud_protocolo (idSolicitud, idProtocolo) VALUES (:idSolicitud, :idProtocolo)");

            //Primero con los protocolos de precedencia
            foreach ($precedencia as $p)
            {
                $datosProPrecedencia = new solicitud_protocolo($idSolicitud,$p);
                $insercionProtocolo->execute((array)$datosProPrecedencia);
            }

            //Ahora los protocolos de planeacion
            foreach ($planeacion as $pla)
            {
                $datosProPlaneacion = new solicitud_protocolo($idSolicitud,$pla);
                $insercionProtocolo->execute((array)$datosProPlaneacion);
            }

             //Ahora los protocolos de precedencia 2
            foreach ($protocoloPrecedencia as $pPre)
            {
                $datosProPrecedencia2 = new solicitud_protocolo($idSolicitud,$pPre);
                $insercionProtocolo->execute((array)$datosProPrecedencia2);
            }

            //Ahora los protocolos de contenido
            foreach ($protocoloContenido as $c)
            {
                $datosProContenido = new solicitud_protocolo($idSolicitud,$c);
                $insercionProtocolo->execute((array)$datosProContenido);
            }

            //Esos serian todos los de protocolo

            //Se sigue con los servicios de prensa
            //Procedemos con el query de insercion
            $insercionPrensa=$conn->prepare("INSERT INTO solicitud_prensa (idSolicitud,idPrensa) VALUES (:idSolicitud,:idPrensa)");

            foreach ($prensa as $pren)
            {
                $datosPrensa = new solicitud_prensa($idSolicitud,$pren);
                $insercionPrensa->execute((array)$datosPrensa);
            }


            //Ahora siguen los protocolos de diseno
            $especificoDiseno;
            $insercionDiseno=$conn->prepare("INSERT INTO solicitud_diseno (idSolicitud, idDiseno, tamano, orientacion) VALUES (:idSolicitud, :idDiseno, :tamano, :orientacion)");
            foreach ($nombreDiseno as $nd)
            {
                $especificoDiseno=$nd-1;
                $datosDiseno = new solicitud_diseno($idSolicitud,$nd,$tamanoDiseno[$especificoDiseno],$orientacionDiseno[$especificoDiseno]);
                $insercionDiseno->execute((array)$datosDiseno);
            }


            //Ahora siguen los protocolos de imprenta
            $especificoImprenta;
            $insercionImprenta=$conn->prepare("INSERT INTO solicitud_imprenta (idSolicitud,idImprenta,nCopias,nOriginales,tipoMaterial,tamanoMaterial,colo) VALUES (:idSolicitud,:idImprenta,:nCopias,:nOriginales,:tipoMaterial,:tamanoMaterial,:colo)");
            foreach ($imprenta as $im)
            {
                $especificoImprenta=$im-1;
                $datosImprenta = new solicitud_imprenta($idSolicitud,$im,$copias[$especificoImprenta],$originales[$especificoImprenta],$materialImprenta[$especificoImprenta],$tamanoImprenta[$especificoImprenta],$colorImprenta[$especificoImprenta]);
                $insercionImprenta->execute((array)$datosImprenta);
            }

        }
        catch (PDOException $e){
            if ($e->errorInfo[1]==1062){ //error de duplicacion de datos
            $msg="Correo electronico ya esta registrado en el sistema";
            }else{
              echo ("Otro error ");
              echo $e;
            }
          }
        header ('Location: ../paginas/formEvento.php');
    }
    else
    {
        echo "NO ESTA DEFINIDO";
        echo '<meta http-equiv="refresh" content="5; url=../paginas/formEvento.php">';
    }

?>