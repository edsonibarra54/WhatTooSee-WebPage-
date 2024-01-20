<?php

require_once "conexion.php";

class CAD{
    public $con;

    public function correoExistente($correo) {
        $con = new conexion();

        $query = $con->conectar()->prepare("SELECT COUNT(*) FROM user WHERE email = '$correo'");
        $query->execute();
        $count = $query->fetchColumn();
        
        return $count > 0;
    }
    
    static public  function agregaUsuario($nombre, $correo, $contrasena){
        $con = new conexion();

        $query = $con->conectar()->prepare("INSERT INTO user (username, pass, email) VALUES ('$nombre','$contrasena','$correo' ) ");

        if ($query->execute()){
            return true;
        } 
        else{
            return false;
        }
    }

    static public function verificaUsuario($email, $pass){
        $con = new conexion();

        $query = $con->conectar()->prepare("SELECT * FROM user WHERE  email = '$email' AND pass = '$pass' ");

        if ($query->execute()){
            $row = $query->fetch(PDO::FETCH_NUM);

            if ($row){
                return $row;
            }
            else{
                return false;
            }
        }
        else{
            echo "Hubo un error al agregar al usuario";
            print_r($con->conectar()->errorInfo());
        }
    }

    static public  function addProduction($type, $name, $rating, $genre, $director, $writer, $cast, $date, $runtime, $poster, $bestMovie, $bestSerie, $premiereMovie, $newSerie){
        $con = new conexion();

        $query = $con->conectar()->prepare("INSERT INTO production 
        (nameProd, rating, genre, director, writer, cast, releaseDate, runtime, bestMovie, bestSerie, premierMovie, newSerie, typeProd, poster) 
        VALUES ($name, $rating, $genre, $director, $writer, $cast, $date, $runtime, $poster, $bestMovie, $bestSerie, $premiereMovie, $newSerie, $type, $poster)");

        if ($query->execute()){
            return true;
        } 
        else{
            return false;
        }
    }

    static public function addBanner($banner){
        $con = new conexion();

        $query = $con->conectar()->prepare("INSERT INTO banner (poster) VALUES ('$banner')");

        if ($query->execute()){
            return true;
        } 
        else{
            return false;
        }
    }

    static public function deleteBanner($bannerId){
        $con = new conexion();

        $query = $con->conectar()->prepare("DELETE FROM banner WHERE bannerId = $bannerId");
        
        if ($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }
}

?>