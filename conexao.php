<?php
$host = "localhost";
$user = "root";
$password= "";
$database = "cadastro";
$conexao = mysqli_connect($host, $user, $password, $database);
if (!$conexao){
    print "Falaha na conexão com o Banco";
}
?>



