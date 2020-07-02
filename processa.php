<?php

include_once("conexao.php");
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sql = "insert into usuarios (nome, sobrenome, email, telefone) values ('$nome','$sobrenome','$email','$telefone')";
$salvar = mysqli_query($conexao, $sql);

mysqli_close($conexao);

?>