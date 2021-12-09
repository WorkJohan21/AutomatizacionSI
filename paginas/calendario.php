

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Calendario</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="../CSS/calendar_css/fullcalendar.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../CSS/calendar_css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../CSS/calendar_css/home.css">
  <link rel="stylesheet" type="text/css" href="../CSS/estiloMenu.css">
  <link rel="stylesheet" type="text/css" href="../CSS/columnaCalendario.css">

</head>
<body>

<?php
include("../config/conexion.php");

  $SqlEventos   = $conn->query("
  SELECT idSolicitud as id, nombreEvento as evento, fechaEvento as fecha_inicio, fechaEvento as fecha_fin,  '#ef5705' as color_evento FROM solicitud WHERE estado ='Aprobado'
  UNION
  SELECT idOrden as id, nomActividad2 as evento, fechaActividad as fecha_inicio, fechaActividad as fecha_fin,  '#007b91' as color_evento FROM orden WHERE estado ='Aprobado'
  ");
 

?>
<!--DIV Externo Calendario -->
<div class="extCalendar">
  

    <!--DIV Calendario -->
    <div class="intCalendar" id="calendar"></div>
</div>

<?php  
  //include('modalNuevoEvento.php');
  //include('modalUpdateEvento.php');
?>


<script src ="../JS/js_calendar/jquery-3.0.0.min.js"> </script>
<script src="../JS/js_calendar/popper.min.js"></script>
<script src="../JS/js_calendar/bootstrap.min.js"></script>

<script type="text/javascript" src="../JS/js_calendar/moment.min.js"></script>	
<script type="text/javascript" src="../JS/js_calendar/fullcalendar.min.js"></script>
<script src='../JS/locales/es.js'></script>

<script type="text/javascript">


$(document).ready(function() {
  $("#calendar").fullCalendar({
    header: {
      left: "prev,next today",
      center: "title",
      //barra derecha right: "month,agendaWeek,agendaDay"
      right: ""
    },

    locale: 'es',

    defaultView: "month",
    navLinks: false, //desabilita a href para los dias
    editable: true,
    eventLimit: true, 
    selectable: true,
    selectHelper: false,


//Nuevo Evento
  select: function(start, end){
      $("#exampleModal").modal();
      $("input[name=fecha_inicio]").val(start.format('DD-MM-YYYY'));
       
      var valorFechaFin = end.format("DD-MM-YYYY");
      var F_final = moment(valorFechaFin, "DD-MM-YYYY").subtract(1, 'days').format('DD-MM-YYYY'); //Le resto 1 dia
      $('input[name=fecha_fin').val(F_final);  

    },
      
    events: [
      <?php
       while($resulEventos=$SqlEventos->fetch(PDO::FETCH_OBJ)){ ?>
          {
          _id: '<?php echo $resulEventos->id; ?>',
          title: '<?php echo $resulEventos->evento; ?>',
          start: '<?php echo $resulEventos->fecha_inicio; ?>',
          end:   '<?php echo $resulEventos->fecha_fin; ?>',
          color:  '<?php echo $resulEventos->color_evento; ?>'
          },
        <?php } ?>
    ],


//Eliminar Evento
eventRender: function(event, element) {
  },



//Moviendo Evento Drag - Drop
eventDrop: function (event, delta) {
},

//Modificar Evento del Calendario 
eventClick:function(event){ 
  },


  });


//Oculta mensajes de Notificacion
  setTimeout(function () {
    $(".alert").slideUp(300);
  }, 3000); 


});

</script>




</body>
</html>