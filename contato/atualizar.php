<?php 
include "../includes/menu.php";
include "../includes/conexao.php";
$id =$_GET ["id"];

$email = $_POST["email"];
$nome = $_POST["nome"];
$contato = $_POST["contato"];
$mensagem = $_POST["mensagem"];
$sql = "update cliente set nome = '$email','$nome','$contato','$mensagem' where id = $id";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>