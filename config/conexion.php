<?php 

    class Conectar {

        protected $dbh;

        protected function conexion() {
            try {
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=correos_masivos","root","");
                return $conectar;
            } catch(Exception $e) {
                print "¡Error DB!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function set_names() {
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        public static function ruta() {
            return "http://localhost/EnvioMasivoCorreoAdmin/";
        }
    }

?>