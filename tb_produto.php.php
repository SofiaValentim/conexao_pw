<?php
//  informações do SGBD para conectar no banco
$server = "localhost";
$user ="root";
$password = "root";
$database = "bd_loja";

//função para realizar a conexão no banco 
$conexao = new mysqli($server, $user, $password,$database );

$tabela = "create table tb_produto (
    id_produto int auto_increment primary key,
    nm_produto varchar(45),
    vl_preco decimal (10,2),
    dt_validade date,
    qt_estoque varchar(45));";

$conexao->query($tabela);

?>


