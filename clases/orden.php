<?php 
  class Orden{
    public $actividad;
    public $lugar;
    public $unidad;
    public $fecha;
    public $hora;
    //public $observacion;
    //En la tabla de bd no aparece el campo observacion asi q lo puse en comentarios
    public $fechaRetiro;
    public $fechaDevolucion;

    function __construct($a,$l,$u,$f,$h,/*$ob,*/$re,$de){
      $this->actividad = $a;
      $this->lugar = $l;
      $this->unidad= $u;
      $this->fecha= $f;
      $this->hora= $h;
      //$this->observacion= $ob;
      $this->fechaRetiro= $re;
      $this->fechaDevolucion= $de;
    }
  }
?>