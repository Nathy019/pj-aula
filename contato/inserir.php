<?php
include "../includes/conexao.php";

$email = $_POST["email"];
$nome = $_POST["nome"];
$contato = $_POST["contato"];
$mensagem = $_POST["mensagem"];
$sql = "insert into cliente(email,nome,contato,mensagem) values('$email', '$nome','$contato', '$mensagem')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>