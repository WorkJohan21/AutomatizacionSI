<?php 
include("../config/conexion.php");
include("../clases/orden.php");

if (isset ($_REQUEST['nomActividad'])&& isset($_REQUEST['lugarActividad']))
{
  $fechaActividad =$_REQUEST['fechaActividad'];
  $horaActividad =$_REQUEST['horaActividad'];
  $fechaRetiro =$_REQUEST['fechaRetiro'];
  $fechaDevolucion =$_REQUEST['fechaDevolucion'];
  $observacion =$_REQUEST['observacion'];
  $lugarActividad =$_REQUEST['lugarActividad'];
  $unidad =$_REQUEST['unidadOrg'];
  $nomActividad =$_REQUEST['nomActividad'];
  $solicitante=$_REQUEST['nomSolicitante'];//Esta variable tiene triple funcion, abarca el espacio de la persona que retira y devuelve
  $unidadLabor=$_REQUEST['unidadLabor'];
  $telefono=$_REQUEST['telefono'];
  $celular=$_REQUEST['celular'];
  $email=$_REQUEST['correo'];
  $equipo=$_REQUEST['equipo'];
  $cant=$_REQUEST['cantidad'];
  $personaEntrega=$_REQUEST['personaEntrega'];
  $personaRec=$_REQUEST['personaRec'];
  $estado="Pendiente";

  
  echo ($fechaActividad."<br>".$horaActividad."<br>".$fechaRetiro."<br>".$fechaDevolucion."<br>".$observacion."<br>".$lugarActividad."<br>".$unidad."<br>".$nomActividad."<br>");

  foreach ($_REQUEST['equipo'] as $seleccionados)
  {
    echo "<br>".$seleccionados."<br>";
  }

  echo "Cantidad de objetos";
  foreach ($cant as $s)
  {
    echo "<br>".$s."<br>";
  }

  $datos = new Orden ($fechaActividad, $horaActividad, $fechaRetiro, $fechaDevolucion, $observacion, $lugarActividad, $unidad, $nomActividad, $estado);
  $insercionOrden = $conn->prepare("INSERT INTO orden (fechaActividad, horaActividad, fechaRetiro, fechaDevolucion, observacion, idLugar, idFacultad, nomActividad2, estado) VALUES (:fechaActividad, :horaActividad, :fechaRetiro, :fechaDevolucion, :observacion, :idLugar, :idFacultad, :nomActividad2, :estado)");

  try{
    $insercionOrden->execute((array)$datos); // la insercion se efectuo con exito

    $result=$conn->query("SELECT * FROM orden WHERE nomActividad2='$nomActividad'");
    $datosOrden=$result->fetch(PDO::FETCH_OBJ);
    $idOrden=$datosOrden->idOrden;

    //Insercion para la tabla orden_equipo
    $j=0;
    $insercion2=$conn->prepare("INSERT INTO orden_equipo (idOrden, idEquipo, cantSolicitada) VALUES (:idOrden, :idEquipo, :cantSolicitada)");

    foreach ($equipo as $seleccionados)
    {
      //Los BindParam
      $insercion2->bindParam(':idOrden',$idOrden,PDO::PARAM_INT);
      $insercion2->bindParam(':idEquipo',$seleccionados,PDO::PARAM_INT);
      $insercion2->bindParam(':cantSolicitada',$cant[$j],PDO::PARAM_INT);

      $j=$j+1;
      $insercion2->execute();
    }

    $insercion3=$conn->prepare("INSERT INTO orden_usuario (idOrden, idUsuario, tipoUsuario) VALUES (:idOrden, :idUsuario, :tipoUsuario)");

    $datosOU = new Orden_Usuario($idOrden,$personaEntrega,1);
    $insercion3->execute((array)$datosOU);

    $datosOU = new Orden_Usuario($idOrden,$personaRec,1);
    $insercion3->execute((array)$datosOU);

    $datosOU = new Orden_Usuario($idOrden,$solicitante,2);
    $insercion3->execute((array)$datosOU);
    
  }catch (PDOException $e){
    if ($e->errorInfo[1]==1062){ //error de duplicacion de datos
    $msg="Correo electronico ya esta registrado en el sistema";
    }else{
      echo ("Otro error ");
      echo $e;
    }
  }
  //$msg="Error de Conexion a la BD";
  header ('Location: ../paginas/formEquipo.php');
 
}
else
{
  echo "NO ESTA DEFINIDO";
  echo '<meta http-equiv="refresh" content="5; url=../paginas/formEquipo.php">';
}

?>