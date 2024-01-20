<?php

#This file is an example about how the real conexion.php file should be, you need to change the 
#user and the pass to the correct ones for your SQL database

# Clase 
class conexion{
    # Atributos 
    private $host; //LocalHost o IP
    private $db; // Nombre de la BD -> whattoosee
    private $user; // Usuario de la BD -> root
    private $pass; // Contrasena del usuario de la BD -> ""
    private $charset; // UTF8

    # Constructor
    public function __construct() {
        $this->host = "localhost";
        $this->db = "nombre_de_la_bd";
        $this->user = "nombre_de_usuario";
        $this->pass = "contrasena";
        $this->charset = "utf8";
    }

    # Metodo conectar
    public function conectar(){
        // $this->host = "localhost";

        # Conectar a la base de datos -> PDO
        $com = "mysql:host=".$this->host.";dbname=".$this->db.";charset=".$this->charset;
        $enlace = new PDO($com, $this->user, $this->pass);
        return $enlace;
    }

}

$conexion = new conexion();
$conexion->conectar();