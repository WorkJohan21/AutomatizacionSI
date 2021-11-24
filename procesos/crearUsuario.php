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
  $celular = $_REQUEST['celular'];
  $telefono = $_REQUEST['telefono'];
  $hash = "";

  echo ($nombre."<br>".$apellido."<br>".$email."<br>".$pass."<br>".$tipo."<br>".$celular."<br>".$telefono. "<br>" .$hash);

  //insercion de objetos directamente a la base de datos, asumiento que las propiedades coincidan

  $datos = new Usuario ($nombre,$apellido,$email,$pass,$tipo,$hash);

  $insercion = $conn->prepare("INSERT INTO usuario(nombre,apellido,email,password,tipoUsuario,hash) value (:nombre,:apellido,:email,:password,:tipoUsuario,:hash)");
      //Control de excepciones  

  try{
    $insercion->execute((array)$datos); // la insercion se efectuo con exito
    
    $result=$conn->query("SELECT * FROM usuario WHERE email='$email'");
    $datoUser=$result->fetch(PDO::FETCH_OBJ);
    $id_u=$datoUser->id;
    
    $insercion2 = $conn->prepare("INSERT INTO celular(celular,idUsuario) value (:celular, :idUsuario)");
    $insercion3 = $conn->prepare("INSERT INTO telefono(telefono,idUsuario) value (:telefono, :idUsuario)");

    $insercion2->bindParam(':celular',$celular,PDO::PARAM_STR,20);
    $insercion2->bindParam(':idUsuario',$id_u,PDO::PARAM_INT);

    $insercion3->bindParam(':telefono',$telefono,PDO::PARAM_STR,20);
    $insercion3->bindParam(':idUsuario',$id_u,PDO::PARAM_INT);

    $insercion2->execute();
    $insercion3->execute();
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
  echo '<meta http-equiv="refresh" content="3; url=../index.php">';
}

?>