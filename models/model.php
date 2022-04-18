<?php
    
class Database{

    public static function connect(){
        try{

            $host= "localhost"; $dbname= "monMotADire"; $root= "root"; $password= "";

            $orm = new PDO("mysql:host=$host;dbname=$dbname", "$root", "$password");
            $orm->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $orm;
        }catch(PDOException $error){

            die("erreur : ".$error->getMessage());
        }
    }
}

class Request extends Database{

    protected $orm;
    public function __construct(){

        $this->orm= Database::connect();
    }
}

