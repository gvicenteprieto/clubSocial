<?php
    class db {
        private $host="localhost";
        private $dbname="gestionClub";
        private $user="root";
        private $password="";
        //conexión
        //PDO_MYSQL es un controlador que implementa la interfaz de Objetos de Datos de PHP (PDO) para permitir el acceso de PHP a bases de datos de MySQL
        public function conexion() {
            try {
                $PDO = new PDO("mysql:host=". $this->host.";dbname=" . $this->dbname, $this->user,  $this->password);
                return $PDO;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }
    //  se crea nuevo objeto para usar la función creada
    //  $obj = new db();
    //  VISUALIZAMOS LA CONEXION PARA VERIFICAR
    //  print_r($obj->conexion());
?>