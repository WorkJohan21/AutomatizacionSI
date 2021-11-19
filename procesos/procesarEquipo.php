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
 
  
  echo ($fechaActividad."<br>".$horaActividad."<br>".$fechaRetiro."<br>".$fechaDevolucion."<br>".$observacion."<br>".$lugarActividad."<br>".$unidad."<br>".$nomActividad."<br>");

  foreach ($_REQUEST['equipo'] as $seleccionados)
  {
    echo "<br>".$seleccionados."<br>";
  }

  $datos = new Orden ($fechaActividad, $horaActividad, $fechaRetiro, $fechaDevolucion, $observacion, $lugarActividad, $unidad, $nomActividad);
  $insercionOrden = $conn->prepare("INSERT INTO orden (fechaActividad, horaActividad, fechaRetiro, fechaDevolucion, observacion, idLugar, idFacultad, nomActividad2) VALUES (:fechaActividad, :horaActividad, :fechaRetiro, :fechaDevolucion, :observacion, :idLugar, :idFacultad, :nomActividad2)");

  try{
    $insercionOrden->execute((array)$datos); // la insercion se efectuo con exito
    

  }catch (PDOException $e){
    if ($e->errorInfo[1]==1062){ //error de duplicacion de datos
    $msg="Correo electronico ya esta registrado en el sistema";
    }else{
      echo ("Otro error ");
      echo $e;
      $msg="Error al guardar los datos";
    }
  }
  echo '<meta http-equiv="refresh" content="3; url=../paginas/registro.php?msg='.$msg.'">';
 
}
else
{
  echo "NO ESTA DEFINIDO";
  echo '<meta http-equiv="refresh" content="5; url=../paginas/formEquipo.php">';
}

?>