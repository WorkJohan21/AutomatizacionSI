<?php
    include("../config/conexion.php");

    $id_usuario=$_SESSION['id'];
    $result=$conn->query("SELECT * FROM usuario WHERE id='$id_usuario'");
    $datoUser=$result->fetch(PDO::FETCH_OBJ);

?>