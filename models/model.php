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

    /**
     * retourne les enregistrements d'une table
     * @param string $table nom du table
     * @return array
     */
    public function enrgs(string $table): array{

        switch($table){
            case "posts":
                try{
                    $request= $this->orm->prepare("SELECT * FROM posts");
                    $request->execute();
                    return $request->fetchAll();
                }
                catch(Exception $error){
                    die($error->getMessage());
                }
            default:
                die("table not found");      
        }
    }
}

