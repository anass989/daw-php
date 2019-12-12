<?php

// Crear MiCabecera.php , que será una clase para pintar cabeceras en las
// páginas HTML . Esta clase será usada en nuestra página para pintarnos
// todos los headers. Tendrá un constructor y un __toString() en la clase
// Después crearemos un programa, por ejemplo el del Ahorcado que utilice esta
// clase 
    class Header {
        //__CLASS__ es una constante mágica que guarda el nombre de la clase
        public $title;
        public $subtitle;

        public function __construct($title, $subtitle) {
            $this->title = $title;
            $this->subtitle = $subtitle;
        }

        public function __toString() {
            return "<header><h2>" . $this->title . "<h2><h3>" . $this->subtitle . "</h3></header>";
        }
    }
?>