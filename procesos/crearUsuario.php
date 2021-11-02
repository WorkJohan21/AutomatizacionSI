<?php 
include("../config/conexion.php");
include("../clases/usuario.php");

if (isset ($_REQUEST['email'])&& isset($_REQUEST['password']))
{
  $nombre =$_REQUEST['nombre'];
  $apellido =$_REQUEST['apellido'];
  $email =$_REQUEST['email'];
  $pass =md5($_REQUEST['password']);  
  $tipo = 2;

  echo ($nombre."<br>".$apellido."<br>".$email."<br>".$pass."<br>".$tipo);

  //insercion de objetos directamente a la base de datos, asumiento que las propiedades coincidan

  $datos = new Usuario ($nombre,$apellido,$email,$pass,$tipo);

  $insercion = $conn->prepare("INSERT INTO usuario(nombre,apellido,email,password,tipoUsuario) value (:nombre,:apellido,:email,:password,:tipoUsuario)");

  //Control de excepciones

  try{
    $insercion->execute((array)$datos); // la insercion se efectuo con exito
    $msg="Su registro se ha guardado exitosamente!";
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
  echo '<meta http-equiv="refresh" content="3; url=../index.html">';
}

?>