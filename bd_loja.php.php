<?php
// informações do SGBD para conectar no banco
$server = "localhost";
$user ="root";
$password = "root";


//função para realizar a conexão no banco
$conexao = new mysqli($server, $user, $password);

$banco = "create database bd_loja";
$conexao-> query($banco);
?>


