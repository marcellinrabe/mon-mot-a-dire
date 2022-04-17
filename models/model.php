<?php

class Database{

    
    public static function connect(){
        try{

            $orm = new PDO("mysql:host=localhost;dbname=base", "root", "");
            return $orm;
        }catch(PDOException $e){

            die($e->getMessage());
        }
    }
}

class Request{

    protected $orm;

    public function __construct(){
        $this->orm = Database::connect();
    }

    /**
     * si le deuxieme parametre est omis, envoyé toutes les colonnes de la table
     * @return array 
     * 
     */
    public function get(string $table, array $columns): array{
        try{

            
            # si une colonne seulement est à selectionner, conversion en chaine 
                if(count($columns) == 1):
                    $columns = implode("", $columns);


            /* sinon si des colonnes sont à selection, conversion en une chaine tous les elements 
            du tableau separés par une virgule */
                elseif(count($columns) > 1):
                    $columns = implode(",", $columns);

                endif;


                $request = $this->orm->prepare("SELECT :columns FROM :tables ;");
                $request->bindParam(":columns", $columns);
                $request->bindParam(":table", $table);
                $request->execute();

                return $request->fetchAll();

        }catch(Exception $e){

            die("error request get\nSource: ".$e->getMessage());
        }
    }
}