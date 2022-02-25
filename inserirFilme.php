<?php

$titulo = $_POST["titulo"]; 
$sinopse = $_POST["sinopse"];
$nota =  $_POST["nota"];
$poster = $_POST["poster"];

$bd = new SQLite3("filmes.db");

$sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) 
        VALUES (:titulo, :poster, :sinopse, :nota)";
$stmt = $db->prepare($sql);
$stmt->bindValue(':titulo', $titulo, SQLITE3_TEXT);
$stmt->bindValue(':sinopse', $sinopse, SQLITE3_TEXT);
$stmt->bindValue(':nota', $nota, SQLITE3_FLOAT);
$stmt->bindValue(':poster', $poster, SQLITE3_TEXT);


if ($stmt->execute()) 
    echo "\nFilme inserido com sucesso\n";
else
    echo "\nErro ao inserir filmes. ". $bd->lastErrorMsg();

?>