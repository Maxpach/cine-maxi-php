<?php

$rota = $_SERVER["REQUEST_URI"];
$metodo = $_SERVER["REQUEST_METHOD"];

require_once "./controller/FilmesController.php";

switch($rota){
    case "/":
        require_once "./view/galeria.php";
        break;
    case "/novo":
        require_once "./view/cadastrar.php";
        
        if($metodo == "GET") require_once "controller/FilmesController.php";
        if($metodo == "POST") {
            $controller = new FilmesController();
            $controller->save($_REQUEST);
        }
        break;
    default:
        require "./view/404.php";
        break;
} 