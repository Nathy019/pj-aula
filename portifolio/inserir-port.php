<?php
include "../includes/conexao.php";
$nome_foto = $_POST["nome_foto"];
$foto = $_POST["foto"];
$descricao = $_POST["descricao"];
$sql = "insert into portifolio(nome_foto,foto,descricao) values('$nome_foto','$foto','$descricao')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar-port.php");
?>