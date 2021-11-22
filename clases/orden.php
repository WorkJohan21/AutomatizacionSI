<?php 
  class Orden{
    public $fechaActividad;
    public $horaActividad;
    public $fechaRetiro;
    public $fechaDevolucion;
    public $observacion;
    public $idLugar;
    public $idFacultad;
    public $nomActividad2;
    public $estado;
    //En la tabla de bd no aparece el campo observacion asi q lo puse en comentarios
    

    function __construct($fa,$ha,$fr,$fd,$o,$la,$u,$na,$e){
      $this->fechaActividad=$fa;
      $this->horaActividad=$ha;
      $this->fechaRetiro=$fr;
      $this->fechaDevolucion=$fd;
      $this->observacion=$o;
      $this->idLugar=$la;
      $this->idFacultad=$u;
      $this->nomActividad2=$na;
      $this->estado=$e;
    }
  }

  class Orden_Usuario{
    public $idOrden;
    public $idUsuario;
    public $tipoUsuario;


    function __construct($idO, $idU, $tU){
      $this->idOrden=$idO;
      $this->idUsuario=$idU;
      $this->tipoUsuario=$tU;
    }

  }
?>