<?php

require "./repository/FilmesRepositoryPDO.php";
require "./index.php";
class Conexao{
    public static function criar():PDO{
        return new PDO("sqlite:db/filmes.db");
    }
}

