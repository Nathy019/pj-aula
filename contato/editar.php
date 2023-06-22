<?php 
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

$id = $_GET["id"];
$email = "";
$sql = "select * from cliente where id = $id";
$todos_os_clientes = mysqli_query($conexao, $sql);
while($um_cliente = mysqli_fetch_assoc($todos_os_clientes)):
    $email = $um_cliente["email"];
    $nome = $um_cliente["nome"];
    $contato = $um_cliente["contato"];
    $mensagem = $um_cliente["mensagem"];
endwhile;
?>
<h1>Editar cliente <?php echo $id; ?></h1>
<form method="post" action="atualizar.php?id=<?php echo $id; ?>">
    Email: <input name="email" value="<?php echo $email;?>"><br>
    Nome: <input name="nome" value="<?php echo $nome;?>"><br>
    Contato: <input name="contato" value="<?php echo $contato;?>"><br>
    Mensagem: <input name="mensagem" value="<?php echo $mensagem;?>"><br>
    <button type="submit">Atualizar</button>
</form>
<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>