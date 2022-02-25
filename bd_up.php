<?php 

$bd = new SQLite3("filmes.db");


$sql = "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql)) 
    echo "\ntabela filmes apagada\n"; 


$sql = "CREATE TABLE filmes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR(200) NOT NULL,
        poster VARCHAR(200),
        sinopse TEXT,
        nota DECIMAL (2,1) 
    )
";


    $sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (
    
        'Vingadores',
        'https://www.themoviedb.org/t/p/w300/qJQknP1F9R4pS5qiOuvpIUuWam4.jpg',
        'Homem de Ferro, Capitão América, Hulk, Thor, Viúva Negra e Gavião Arqueiro formam o time dos sonhos de Fury, mas eles precisam aprender a colocar os egos de lado e agir como um grupo em prol da humanidade.',
        8.7
        )";


if ($bd->exec($sql)) 
echo "\nFilme inserido com sucesso\n";
else
echo "\nErro ao inserir filmes\n";


    $sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (
        
        'Batman vs Superman',
        'https://www.themoviedb.org/t/p/w300/qJQknP1F9R4pS5qiOuvpIUuWam4.jpg',
        'Temendo que as ações de um super-herói divino não tenham sido controladas, o formidável e vigoroso vigilante de Gotham City enfrenta o salvador mais reverenciado e moderno de Metrópolis, enquanto o mundo luta com o tipo de herói que realmente precisa.',
        8.9
        )";

if ($bd->exec($sql)) 
    echo "\nFilme inserido com sucesso\n";
else
    echo "\nErro ao inserir filmes\n";


    
?>