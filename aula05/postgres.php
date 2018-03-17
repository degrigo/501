<?php 

echo "<pre>";

$conexao = new PDO('pgsql:host=localhost;dbname=aula05','tadeu','123');

var_dump($conexao);