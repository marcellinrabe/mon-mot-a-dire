<!--next purpose is to trying render templates by here, handle selective by condition-->
<?php
require_once  "vendor/autoload.php";
require_once "models/model.php";

use eftec\bladeone\BladeOne; # generateur de template

$blade= new BladeOne("views", "compiles", BladeOne::MODE_DEBUG);
$blade->setFileExtension(".html");

$request= new Request();
function home(){
    global $blade, $request;

    $posts= $request->enrgs("posts");
    echo $blade->run("home", [
        "title"=> "monMotADire | Acceuil",
        "posts"=> $posts,
    ]);
}





