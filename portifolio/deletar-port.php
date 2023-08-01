<?php 
include "../includes/conexao.php";
$id_imagem = $_GET["id"];
$sql = "delete from portifolio where id_imagem = $id_imagem";
mysqli_query($conexao,$sql);
mysqli_close($conexao);
header("location:selecionar-port.php");
?>