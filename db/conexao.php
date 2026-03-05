<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "dbsistemacadastro";

$conexao = mysqli_connect($host, $user, $password, $database);

if (!$conexao) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

?>