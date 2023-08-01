<?php
include "../includes/menu_painel.php";
include "../includes/conexao.php";

$id = $_GET["id"];

$email = "";
$nome = "";
$contato = "";
$mensagem = "";
$sql = "select * from cliente where id = $id";
$todos_os_clientes = mysqli_query($conexao, $sql);
while ($um_cliente = mysqli_fetch_assoc($todos_os_clientes)):
$email = $um_cliente["email"];
$nome =  $um_cliente["nome"];
$contato =  $um_cliente["contato"];
$mensagem = $um_cliente["mensagem"];
endwhile
?>
<div class="container">
    <h2 class="text-center">Ficha cliente</h2>
    <table class="table">
        <thead class="table-dark">
            <th>Nome:</th>
            <th>Contato:</th>
            <th>E_mail:</th>
            <th>Mensagem:</th>
        </thead>
        <tbody class="border-dark bg-secondary-subtle">
            <td><?php echo $email ?></td>
            <td><?php echo $nome ?> <br></td>
            <td><?php echo $contato?><br></td>
            <td><?php echo $mensagem ?> <br></td>          
        </tbody>
<?php
mysqli_close($conexao);
?>