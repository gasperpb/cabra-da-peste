<?php


$server ="127.0.0.1";
$usuario = "root";
$senha ="";
$banco="login";
$conexao = new PDO("mysql:host=$server;dbname=banco", $usuario, $senha);
