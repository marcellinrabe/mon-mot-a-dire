<?php

/*-- afin que php va vouloir afficher message d' erreur --*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*--------------------------------------------------------*/

require("controllers/controller.php");


if(empty($_GET["action"])){

    die("action requise");
}

switch($_GET["action"]){
    case "home":
        home();
    
}
    
