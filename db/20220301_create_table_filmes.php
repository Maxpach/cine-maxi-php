<?php 

$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

/*
if ($bd->exec($sql)) 
    echo "\ntabela filmes apagada\n"; 
*/

$sql = "CREATE TABLE filmes (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        titulo VARCHAR(200) NOT NULL,
        poster VARCHAR(200),
        sinopse TEXT,
        nota DECIMAL(3,1) 
    )
";
/*
if ($bd->exec($sql)) 
    echo "\nSucesso tabela criada\n";
else
    echo "\nErro ao criar tabela\n";
*/

?>