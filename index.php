<?php

$rota = $_SERVER["REQUEST_URI"];
$metodo = $_SERVER["REQUEST_METHOD"];

require_once "./controller/FilmesController.php";

if ($rota === "/"){
    require_once "./view/galeria.php";
    exit();
}

if ($rota === "/novo"){
    if($metodo == "GET") require_once "view/cadastrar.php";
    if($metodo == "POST") {
        $controller = new FilmesController();
        $controller->save($_REQUEST);
    };
        exit();

}
        
if (substr($rota, 0, strlen("/favoritar")) === "/favoritar"){
    $controller = new FilmesController();
    $controller->favorite(basename($rota));
    exit();

}

if (substr($rota, 0, strlen("/filmes")) === "/filmes"){
    if($metodo == "GET") require_once "view/galeria.php";
    if($metodo == "DELETE"){
        $controller = new FilmesController();
        $controller->delete(basename($rota));
    } 
    exit();

}

 require "./view/404.php";

 