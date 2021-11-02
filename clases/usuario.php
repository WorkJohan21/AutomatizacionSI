<?php
    class Usuario
    {
        public $nombre;
        public $apellido;
        public $email;
        public $password;
        public $tipoUsuario;

        function __construct($n,$a,$e,$p,$t)
        {
            $this->nombre = $n;
            $this->apellido = $a;
            $this->email = $e;
            $this->password = $p;
            $this->tipoUsuario = $t;
        }
    }
?>