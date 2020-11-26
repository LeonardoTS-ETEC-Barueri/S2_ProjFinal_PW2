<?php

$dbServidor = '127.0.0.1';
$dbUsuario = 'root';
$dbSenha = '';
$dbBanco = 'db_projfinalpw2';

$conn = mysqli_connect($dbServidor, $dbUsuario, $dbSenha, $dbBanco);

$sql = "SET NAMES 'utf8'";
mysqli_query($conn, $sql);
$sql = "SET character_set_connection=utf8";
mysqli_query($conn, $sql);
$sql = "SET character_set_client=utf8";
mysqli_query($conn, $sql);
$sql = "SET character_set_results=utf8";
mysqli_query($conn, $sql);

if (mysqli_connect_error($conn)){
    echo ("Erro na conexão:" . mysqli_connect_error());
    exit();
}

?>