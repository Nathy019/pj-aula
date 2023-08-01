<?php 
include "../includes/menu_painel.php";
include "../includes/conexao.php";
$id_imagem =$_GET ["id"];

$nome_foto = $_POST["nome"];
$foto = $_POST["foto"];
$descricao_foto = $_POST["descricao"];
$sql = "update portfolio set nome = '$nome_foto','$foto','$descricao_foto' where id_imagem = $id";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar-port.php");
?>