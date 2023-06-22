<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
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

<h2>Ficha cliente</h2>
E_mail:<?php echo $email ?> <br>
Nome: <?php echo $nome ?><br>
Contato:<?php echo $contato ?> <br>
Mensagem: <?php echo $mensagem ?><br>
<?php
mysqli_close($conexao);
include "../includes/rodape.php";

?>