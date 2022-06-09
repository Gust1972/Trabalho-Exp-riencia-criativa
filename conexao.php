<?php
$hostname ="localhost";
$user = "root";
$senha = "";
$dbname="cadastro";

$conexao = new mysqli($hostname,$user,$senha,$dbname);
if ($conexao-> connect_errno){
    echo "Conexão falha \n Erro:(".$conexao->connect_errno.")". $conexao->connect_error;
}
?>