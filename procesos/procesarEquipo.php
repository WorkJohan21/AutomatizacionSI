<?php 
include("../config/conexion.php");
include("../clases/orden.php");

if (isset ($_REQUEST['nomActividad'])&& isset($_REQUEST['lugarActividad']))
{
  $actividad =$_REQUEST['nomActividad'];
  $lugar =$_REQUEST['lugarActividad'];
  $fecha =$_REQUEST['fechaActividad'];
  $unidad =$_REQUEST['unidadOrg'];
  $hora =$_REQUEST['horaActividad'];
  $solicitante=$_REQUEST['nomSolicitante'];//Esta variable tiene triple funcion, abarca el espacio de la persona que retira y devuelve
  $unidadLabor=$_REQUEST['unidadLabor'];
  $telefono=$_REQUEST['telefono'];
  $celular=$_REQUEST['celular'];
  $email=$_REQUEST['correo'];
  $equipo=$_REQUEST['equipo'];
  //$observacion =$_REQUEST['nombre'];
  $fechaRetiro =$_REQUEST['fechaRetiro'];
  $fechaDevolucion =$_REQUEST['fechaDevolucion'];
  

  //echo ($nombre."<br>".$apellido."<br>".$email."<br>".$pass."<br>".$foto."<br>".$nivel);

  //insercion de objetos directamente a la base de datos, asumiento que las propiedades coincidan
  $datos = new Orden ($actividad,$lugar,$unidad,$fecha,$hora,/*$observacion,*/$fechaRetiro,$fechaDevolucion);

  $insercion = $conn->prepare("INSERT INTO `orden` (nomActividad2,fechaActividad,horaActividad,fechaRetiro,fechaDevolucion,idLugar, idFacultad) value (:actividad,:fecha,:hora,:fechaRetiro,:fechaDevolucion,:lugar,:unidad/*:observacion,*/)");

  //falta hacer la insercion a la tabla equipo
  
  //Control de excepciones

  try{
    $insercion->execute((array)$datos); // la insercion se efectuo con exito
    $msg="Su registro de equipo se ha guardado exitosamente!";
  }catch (PDOException $e){
    if ($e->errorInfo[1]==1062){ //error de duplicacion de datos
    $msg="Un dato ingresado ya esta registrado en el sistema";
    }else{
      echo ("Otro error");
      echo $e;
      $msg="Error al guardar los datos";
    }
  }
  echo ("Cargando");
  echo '<meta http-equiv="refresh" content="5; url=../paginas/formEquipo.php?msg='.$msg.'">';
}
else
{
  echo "NO ESTA DEFINIDO";
  echo '<meta http-equiv="refresh" content="5; url=../paginas/formEquipo.php">';
}

?>