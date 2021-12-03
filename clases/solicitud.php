<?php
    Class Solicitud
    {
        public $nombreEvento;
        public $fechaEvento;
        public $horaInicio;
        public $horaFinal;
        public $observacion;
        public $idLugar;
        public $idFacultad;
        public $idActividad;
        public $idUsuario;

        function __construct($ne, $fe, $hi, $hf, $ob, $idL, $idF, $idA, $idU)
        {
            $this->nombreEvento=$ne;
            $this->fechaEvento=$fe;
            $this->horaInicio=$hi;
            $this->horaFinal=$hf;
            $this->observacion=$ob;
            $this->idLugar=$idL;
            $this->idFacultad=$idF;
            $this->idActividad=$idA;
            $this->idUsuario=$idU;
        }

    }


    Class solicitud_protocolo
    {
        public $idSolicitud;
        public $idProtocolo;

        function __construct($idS,$idP)
        {
            $this->idSolicitud=$idS;
            $this->idProtocolo=$idP;
        }
    }


    Class solicitud_prensa
    {
        public $idSolicitud;
        public $idPrensa;

        function __construct($idS,$idPre)
        {
            $this->idSolicitud=$idS;
            $this->idPrensa=$idPre;
        }
    }

    Class solicitud_diseno
    {
        public $idSolicitud;
        public $idDiseno;
        public $tamano;
        public $orientacion;

        function __construct($idS, $idD, $t, $ori)
        {
            $this->idSolicitud=$idS;
            $this->idDiseno=$idD;
            $this->tamano=$t;
            $this->orientacion=$ori;
        }
    }

    Class solicitud_imprenta
    {
        public $idSolicitud;
        public $idImprenta;
        public $nCopias;
        public $nOriginales;
        public $tipoMaterial;
        public $tamanoMaterial;
        public $colo;

        function __construct($idS,$idI,$nCo,$nOr,$tipoM,$tamanoM,$c)
        {
            $this->idSolicitud=$idS;
            $this->idImprenta=$idI;
            $this->nCopias=$nCo;
            $this->nOriginales=$nOr;
            $this->tipoMaterial=$tipoM;
            $this->tamanoMaterial=$tamanoM;
            $this->colo=$c;
        }

    }

?>