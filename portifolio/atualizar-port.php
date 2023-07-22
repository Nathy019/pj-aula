<?php 
include "../includes/menu.php";
include "../includes/conexao.php";
$id =$_GET ["id"];

$nome_foto = $_POST["nome"];
$foto = $_POST["foto"];
$descricao_foto = $_POST["descricao"];
$sql = "update portfolio set nome = '$nome_foto','$foto','$descricao_foto' where id = $id";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>