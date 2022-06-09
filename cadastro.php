<?php
include "conexao.php"; 

$nome=$_POST['nome'];
$email=$_POST['email'];
$dataNascimento=$_POST['dataNascimento'];
$senha=$_POST['senha'];
$peso=$_POST['peso'];
$nacionalidade=$_POST['nacionalidade'];

$sql="INSERT INTO pessoas(nome,email,dataNascimento,senha,peso,nacionalidade) 
    Values ('$nome','$email','$dataNascimento','$senha','$peso','$nacionalidade')";

if (mysqli_query($conexao,$sql)){
    echo 'cadastrado';
}
else{
    echo'erro'.mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>