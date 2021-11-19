<!--Pantalla Formulario-->
<?php
    include("../procesos/verificar.php");
    include("../procesos/consultaUser.php");

    $arrayCantDispo= [10,10,20,30,30,30,5,4,6,2,1,15];

    $sql=$conn->query("SELECT * FROM telefono WHERE idUsuario='$id_usuario'");
    $datoTel=$sql->fetch(PDO::FETCH_OBJ);

    $sql2=$conn->query("SELECT * FROM celular WHERE idUsuario='$id_usuario'");
    $datoCel=$sql2->fetch(PDO::FETCH_OBJ);

    $sql3=$conn->query("SELECT * FROM equipo");
    $i=0;
    while($datoEquipo=$sql3->fetch(PDO::FETCH_OBJ))
    {
      $arrayCantDispo[$i]=$datoEquipo->cantDispo;
      $i=$i+1;
    }
    //echo $arrayCantDispo[11];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario de Equipo</title>
	<link rel="stylesheet" type="text/css" href="../CSS/estilo.css">

	<meta name ="viewport" content ="width=device-width, initial-scale=1, shrink-to-fill=no">
    <meta name ="description" content ="">
    <meta name ="author" content ="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name ="generator" content ="Jekll v4.1.1">
	<link rel ="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
    <link href ="../CSS/bootstrap.min.css" rel ="stylesheet">
    <link href="../CSS/list-groups.css" rel="stylesheet">

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
	</style>

  <!-- Javascript -->
          <script>
          function myFunction() {
          document.documentElement.scrollTop = 0;  
          document.getElementById("divPrimero").hidden = true;
          document.getElementById("divSegundo").hidden = false;
          document.getElementById("divTercero").hidden = true;
        }

          function myFunction2() {
          document.documentElement.scrollTop = 0;  
          document.getElementById("divPrimero").hidden = true;
          document.getElementById("divSegundo").hidden = true;
          document.getElementById("divTercero").hidden = false;
        }

          function myFunction3() {
          document.documentElement.scrollTop = 0;  
          document.getElementById("divPrimero").hidden = false;
          document.getElementById("divSegundo").hidden = true;
          document.getElementById("divTercero").hidden = true;
        }
        </script>

</head>
<body class="cuerpo">
    <div id="page-container">
      <div id="content-wrap">

	<header class="tope">
		<img src="../imagenes/logo.png" class="logo">
	    <h3 class="titulosHeader">Universidad Tecnológica de Panamá<br>Departamento de Protocolo, Ceremonial y Eventos<br><i>"Camino a la excelencia a través del mejoramiento continuo"</i></h3>
	</header>
	<br><br>
	<div class="centrar">
		<form method="POST" action="../procesos/procesarEquipo.php">
      <p class="text-danger"> <?php if (isset ($_GET['msg'])) echo $_GET['msg'];?> </p>
            <h3 class="titulosHeaderBlack">FORMULARIO DE SOLICITUD Y PRÉSTAMO DE EQUIPO</h3>

<!--PRIMER DIV DE INFORMACION ACTIVIDAD-->
<div id="divPrimero">
    <div class="cajamarron">
          <label class="textoCuerpoWhite">INFORMACIÓN DE LA ACTIVIDAD EN LA CUAL SE UTILIZARÁ EL EQUIPO</label>
          <br><br>
                <label class="textoCuerpoWhite labelEspacio">Nombre de la Actividad</label><!--name nomActividad-->
                <input type="text" id="nomActividad" class="txtbox" placeholder="Ingrese el nombre de la actividad" name="nomActividad" size="30">
                <br><br>
                <label class="textoCuerpoWhite labelEspacio">Lugar donde se desarrollará</label>
                <select name="lugarActividad" id="lugarActividad" class="txtbox"><!--name lugarActividad-->
                  <option value="1">Auditorio</option>
                  <option value="2">Lobby Edificio 3</option>
                  <option value="3">Lobby Edificio 1</option>
                  <option value="4">Piso FCT</option> 
                  <option value="5">Piso FIC</option> 
                  <option value="6">Piso FIE</option> 
                  <option value="7">Piso FII</option> 
                  <option value="8">Piso FIM</option> 
                  <option value="9">Piso FISC</option> 
                  <!--Los valores son lso mismos de la base de datos-->
                </select>
                
                <br><br>
                <label class="textoCuerpoWhite labelEspacio">Fecha de la Actividad</label><!--name fechaActividad-->
                <input type="date" id="fechaActividad" class="txtbox" placeholder="" name="fechaActividad">       
                <br><br>
                <label class="textoCuerpoWhite labelEspacio">Unidad que lo Organiza</label>
                
                <select name="unidadOrg" id="unidadOrg" class="txtbox"><!--name unidadOrg-->
                  <option value="1">Facultad de Ciencias y Tecnología</option>
                  <option value="2">Facultad de Ingeniería Civil</option>
                  <option value="3">Facultad de Ingeniería Eléctrica</option>
                  <option value="4">Facultad de Ingeniería Industrial</option>
                  <option value="5">Facultad de Ingeniería Mecánica</option>
                  <option value="6">Facultad de Sistemas</option> 
                 <!--Los valores son lso mismos de la base de datos-->                  
                </select>

                <br><br>
                <label class="textoCuerpoWhite labelEspacio">Hora de la Actividad</label>
                <input type="time" id="horaActividad" class="txtbox" placeholder="" name="horaActividad"><!--name horaActividad-->
                <br><br>
    </div><!--FIN DEL DIVPRIMERO-->

    <!--SEGUNDO DIV DE INFORMACION DE PERSONA-->
    <div class="cajamarron">
          <label class="textoCuerpoWhite ">INFORMACIÓN DE LA PERSONA QUE SOLICITA EL EQUIPO</label>
          <br><br>
                <label class="textoCuerpoWhite labelEspacio">Nombre del Solicitante</label><!--name nomSolicitante-->
                <input type="text" id="nomSolicitante" class="txtbox" name="nomSolicitante" value="<?php echo $datoUser->nombre." ".$datoUser->apellido; ?>"readonly>
                <br><br>
                <label class="textoCuerpoWhite labelEspacio"> Unidad donde labora</label>
                <select name="unidadLabor" id="unidadLabor" class="txtbox"><!--name unidadLabor-->
                  <option value="1">Facultad de Ciencias y Tecnología</option>
                  <option value="2">Facultad de Ingeniería Civil</option>
                  <option value="3">Facultad de Ingeniería Eléctrica</option>
                  <option value="4">Facultad de Ingeniería Industrial</option>
                  <option value="5">Facultad de Ingeniería Mecánica</option>
                  <option value="6">Facultad de Sistemas</option> 
                 <!--Los valores son lso mismos de la base de datos-->                  
                </select>     
                <br><br>
                <label class="textoCuerpoWhite labelEspacio">Teléfono</label><!--name telefono-->
                <input type="text" id="telefono" class="txtbox" name="telefono" value="<?php echo $datoTel->telefono; ?>" readonly>       
                <br><br>
                <label class="textoCuerpoWhite labelEspacio">Correo Electrónico</label><!--name correo-->
                <input type="text" id="correo" class="txtbox" name="correo" size="35" value="<?php echo $datoUser->email; ?>"readonly>
                <br><br>
                <label class="textoCuerpoWhite labelEspacio">Celular</label><!--name celular-->
                <input type="text" id="celular" class="txtbox" name="celular" value="<?php echo $datoCel->celular; ?>" readonly>
                <br><br>
    </div> 
                <a href="menuPrincipal.php"><button class="redondo espacioBoton6" type="button"><label class="textoCuerpo">REGRESAR</label></button></a>
                <button class="redondo espacioBoton5" type="reset"><label class="textoCuerpo">BORRAR</label></button>
                <button class="redondo espacioBoton5" type="button" id="okButton" onclick="myFunction()"><label class="textoCuerpo">ENVIAR</label></button>

                

  </div><!--FIN DEL DIVSEGUNDO EQUIPO SELECCIONADO ACTIVO-->

<!--TERCER DIV DE INFORMACION DE EQUIPO-->
<div id="divSegundo" hidden>
<div class="cajamarron">
			<label class="textoCuerpoWhite ">INFORMACIÓN DEL EQUIPO</label>
			<br><br>
<div class="d-flex gap-5 justify-content-center">
  <div class="boxderecha">
            <div class="mininav">
              <label class="textoCuerpoWhite navEquipo">EQUIPO</label>
              <label class="textoCuerpoWhite navSelect">SELECCIONADO</label>
              <label class="textoCuerpoWhite ">ACTIVO</label>
            </div>
            <br><br>
    <label class="list-group-item d-flex gap-2"><!--name equipo[]-->
      <span class="spanEspacio">Pantalla de 86"</span>
        <input class="boxderecha" type="checkbox" name="equipo[]" value="1">
            <input type="number" id="pantalla_cant" class="boxderecha" placeholder="" name="pantalla_cant" min="0" max="<?php echo $arrayCantDispo[0]; ?>">
    </label>


    <label class="list-group-item d-flex gap-2">
      <span class="spanEspacio">Banderas de Diversos Países</span>
        <input class="boxderecha" type="checkbox" name="equipo[]" value="2">     
            <input type="number" id="" class="boxderecha" placeholder="" name="bandera_cant" min="0" max="<?php echo $arrayCantDispo[1]; ?>">
    </label>


    <label class="list-group-item d-flex gap-2">
      <span class="spanEspacio">Estandarte UTP</span>  
        <input class="boxderecha" type="checkbox" value="3" name="equipo[]">  
            <input type="number" id="" class="boxderecha" placeholder="" name="estandarte_cant" min="0" max="<?php echo $arrayCantDispo[2]; ?>">
    </label>

    <label class="list-group-item d-flex gap-2">
      <span class="spanEspacio">Astas y Bases</span>  
        <input class="boxderecha" type="checkbox" value="4" name="equipo[]">  
            <input type="number" id="" class="boxderecha" placeholder="" name="astas_cant" min="0" max="<?php echo $arrayCantDispo[3]; ?>">
    </label>

    <label class="list-group-item d-flex gap-2">
      <span class="spanEspacio"> Soporte para Banner (Araña)</span>
        <input class="boxderecha" type="checkbox" value="5" name="equipo[]">    
            <input type="number" id="" class="boxderecha" placeholder="" name="soporte_cant" min="0" max="<?php echo $arrayCantDispo[4]; ?>">
    </label>

    <label class="list-group-item d-flex gap-2">
      <span class="spanEspacio">Flores Artificiales para Centro de Mesa </span>
        <input class="boxderecha" type="checkbox" value="6" name="equipo[]">     
            <input type="number" id="" class="boxderecha" placeholder="" name="flores_cant" min="0" max="<?php echo $arrayCantDispo[5]; ?>">
    </label>

    <label class="list-group-item d-flex gap-2">
      <span class="spanEspacio">Habladores (1)</span>  
        <input class="boxderecha" type="checkbox" value="7" name="equipo[]">  
            <input type="number" id="" class="boxderecha" placeholder="" name="habladores_cant" min="0" max="<?php echo $arrayCantDispo[6]; ?>">
    </label>

    <label class="list-group-item d-flex gap-2">
      <span class="spanEspacio">Bombas Manuales para Inflar Globos</span>
        <input class="boxderecha" type="checkbox" value="8" name="equipo[]">    
            <input type="number" id="" class="boxderecha" placeholder="" name="bombas_cant" min="0" max="<?php echo $arrayCantDispo[7]; ?>">
    </label>

    <label class="list-group-item d-flex gap-2">
      <span class="spanEspacio">Rotafolio con Tablero Blanco</span>
        <input class="boxderecha" type="checkbox" value="9" name="equipo[]">    
            <input type="number" id="" class="boxderecha" placeholder="" name="rotafolio_cant" min="0" max="<?php echo $arrayCantDispo[8]; ?>">
    </label>

    <label class="list-group-item d-flex gap-2">
      <span class="spanEspacio">Karaoke</span>  
        <input class="boxderecha" type="checkbox" value="10" name="equipo[]">  
            <input type="number" id="" class="boxderecha" placeholder="" name="karaoke_cant" min="0" max="<?php echo $arrayCantDispo[9]; ?>">
    </label>

    <label class="list-group-item d-flex gap-2">
      <span class="spanEspacio">Radiograbadora con Lector USB y CD</span>
        <input class="boxderecha" type="checkbox" value="11" name="equipo[]">    
            <input type="number" id="" class="boxderecha" placeholder="" name="radio_cant" min="0" max="<?php echo $arrayCantDispo[10]; ?>">
    </label>

    <label class="list-group-item d-flex gap-2">
      <span class="spanEspacio">Engrapadoras semi Industrial e Industrial</span>
        <input class="boxderecha" type="checkbox" value="12" name="equipo[]">    
            <input type="number" id="" class="boxderecha" placeholder="" name="engrapadora_cant" min="0" max="<?php echo $arrayCantDispo[11]; ?>">
    </label>
</div>
</div>
            <br><br>
</div> 
          <button class="redondo espacioBoton6" type="button" onclick="myFunction3()"><label class="textoCuerpo">REGRESAR</label></button>
          <button class="redondo espacioBoton5" type="reset"><label class="textoCuerpo">BORRAR</label></button>
          <button class="redondo espacioBoton5" type="button" id="okButton" onclick="myFunction2()"><label class="textoCuerpo">ENVIAR</label></button>
          
</div><!--FIN DEL DIVSEGUNDO-->

<!--CUARTO DIV DE DÍA DE RETIRO-->
<div id="divTercero" hidden>
<div class="cajamarron">
            <label class="textoCuerpoWhite ">INFORMACIÓN DEL DÍA DE RETIRO</label>
            <br><br>
            <label class="textoCuerpoWhite labelEspacio">Retiro del Equipo (Fecha)</label>
            <input type="date" id="fechaRetiro" class="txtbox" placeholder="" name="fechaRetiro"><!--name fechaRetiro-->
            <br><br>
            <label class="textoCuerpoWhite labelEspacio">Quién Retira</label><!--name personaRetira-->
            <input type="text" id="personaRetira" class="txtbox" name="personaRetira" value="<?php echo $datoUser->nombre." ".$datoUser->apellido; ?>"readonly>     
            <br><br>
            <label class="textoCuerpoWhite labelEspacio">Quién Entrega (DIPROCE)</label><!--name personaEntrga-->
            <input type="text" id="personaEntrg" class="txtbox" placeholder="" name="personaEntrga">       
            <br><br>
            <label class="textoCuerpoWhite labelEspacio">Observación de la Solicitud</label>
            <textarea id="observacion" name="observacion" rows="5" cols="40" placeholder="Observaciones"></textarea><!--name observacion-->
            <br><br>
</div> 

<!--QUINTO DIV DE DÍA DE DEVOLUCIÓN-->
<div class="cajamarron">
            <label class="textoCuerpoWhite ">INFORMACIÓN DEL DÍA DE DEVOLUCIÓN</label>
            <br><br>
            <label class="textoCuerpoWhite labelEspacio">Devolución (Fecha)</label>
            <input type="date" id="fechaDevlucion" class="txtbox" placeholder="" name="fechaDevolucion"><!--name fechaDevolucion-->     
            <br><br>
            <label class="textoCuerpoWhite labelEspacio">Quién Devuelve</label><!--name personaDevlv-->
            <input type="text" id="personaDevlv" class="txtbox" name="personaDevlv" value="<?php echo $datoUser->nombre." ".$datoUser->apellido; ?>"readonly>       
            <br><br>
            <label class="textoCuerpoWhite labelEspacio">Quién Recibe (DIPROCE)</label>
            <input type="text" id="personaRecv" class="txtbox" placeholder="" name="personaRec" required><!--name personaRec-->
            <br><br>
</div> 
            <button class="redondo espacioBoton6" type="button" onclick="myFunction()"><label class="textoCuerpo">REGRESAR</label></button>
			      <button class="redondo espacioBoton5" type="reset"><label class="textoCuerpo">BORRAR</label></button>
            <button class="redondo espacioBoton5" type="submit"><label class="textoCuerpo">ENVIAR</label></button>
           
            <br><br>
		</div>


  </div><!--FIN DEL DIVTERCERO-->
	</form>
<br><br>
  

  </div>
  <footer id="footer">
      <img src="../imagenes/logo-footer.png" class="logo">
      Universidad Tecnológica de Panamá - 2021
      <br>
          Dirección: Avenida Universidad Tecnológica de Panamá, Vía Puente Centenario,Campus Metropolitano Víctor Levi Sasso.
          <br>
          Teléfono. (507) 560-3000
          <br>
          Correo electrónico: buzondesugerencias@utp.ac.pa
          <br>
          311 Centro de Atención Ciudadana
          <br>
          <a class="politicas" href="https://aig.gob.pa/acercade/disclaimer/">Políticas de Privacidad</a>
    </footer>
    </div>

</body>
</html>