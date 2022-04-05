<?php

//session_start();
require_once "./repository/FilmesRepositoryPDO.php";
require_once "./model/Filme.php";

class FilmesController{
    public function index(){
        $filmesRepository = new FilmesRepositoryPDO();
        return $filmesRepository->listarTodos();

    }

    public function save($request){

        $filmesRepository = new FilmesRepositoryPDO();
        $filme = (object) $request;

        $upload = $this->savePoster($_FILES);

        if(gettype($upload)=="string"){
            $filme->poster = $upload;
        }

        if ($filmesRepository->salvar($filme)) 
            $_SESSION["msg"] = "Filme cadastrado com sucesso";
        else
            $_SESSION["msg"] = "Erro ao cadastrar filme";

        header("location:/");

    }

    private function savePoster($file){
        $posterDir = "./img/posters/";
        $posterPath = $posterDir. basename($file["poster_file"]["name"]);
        $posterTmp = $file["poster_file"]["tmp_name"];
        if (move_uploaded_file($posterTmp, $posterPath)){
            return $posterPath;
        }else{
            return false;
        };
    }

    public function favorite(int $id){
        $filmesRepository = new FilmesRepositoryPDO();
        $result = ['success' => $filmesRepository->favoritar($id)];
        header('Content-type: application/json');
        echo json_encode($result);
    }
}

?>