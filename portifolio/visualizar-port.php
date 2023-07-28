<?php
include "../includes/menu.php";
include "../includes/conexao.php";

$id = $_GET["id"];

$nome_foto = "";
$foto = "";
$descricao = "";
$sql = "select * from portfolio where id = $id";
$todas_as_fotos = mysqli_query($conexao, $sql);
while ($uma_foto = mysqli_fetch_assoc($todas_as_fotos)):
$nome_foto = $uma_foto["nome"];
$foto =  $uma_foto["foto"];
$descricao =  $um_cliente["descricao"];
endwhile
?>
<div class="container">
    <h2 class="text-center">Ficha do portfolio</h2>
    <table class="table">
        <thead class="table-dark">
            <th>Nome da Foto:</th>
            <th>Foto:</th>
            <th>Desscrição:</th>
        </thead>
        <tbody class="border-dark bg-secondary-subtle">
            <td><?php echo $nome_foto ?></td>
            <td><?php echo $foto ?> <br></td>
            <td><?php echo $descricao?><br></td>
        </tbody>
<?php
mysqli_close($conexao);
?>