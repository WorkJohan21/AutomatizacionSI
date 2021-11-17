<?php 
    include ("../config/conexion.php");
    $facu=$_POST['depa'];

	$sql=$conn->query("SELECT * FROM departamento WHERE idFacultad='$facu'");
    
	$cadena="<label for='listaDe' class='titulos spanEspaciado'>Departamento</label> 
            <select id='listaDe' name='listaDe' class='txtbox'>";

    while ($depa=$sql->fetch(PDO::FETCH_OBJ)){
		$cadena=$cadena.'<option value='.$depa->idDepa.'>'.$depa->nombreDepa.'</option>';
	}

	echo  $cadena."</select><br>";
?>