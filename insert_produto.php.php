<?php
//  informações do SGBD para conectar no banco
$server = "localhost";
$user ="root";
$password = "root";
$database = "bd_loja";

//função para realizar a conexão no banco 
$conexao = new mysqli($server, $user, $password,$database);

if ($conexao->connect_erro) {
    die ('falhou a conexão'. $conexao->connect_error);
    }
    else {
    echo 'conexâo realizada com sucesso!';
    
    }

$insert = "INSERT INTO tb_produto values (NULL,'passagem','1000.00','2024/08/25','20'),(NULL,'alimentação','500.00','2024/07/25','20'),(NULL,'seguro-viagem','1500.00','2024/09/25','20')";

?>





