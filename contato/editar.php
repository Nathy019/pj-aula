<?php
include "../includes/menu.php";
include "../includes/conexao.php";

$id = $_GET["id"];
$email = "";
$sql = "select * from cliente where id = $id";
$todos_os_clientes = mysqli_query($conexao, $sql);
while ($um_cliente = mysqli_fetch_assoc($todos_os_clientes)) :
    $email = $um_cliente["email"];
    $nome = $um_cliente["nome"];
    $contato = $um_cliente["contato"];
    $mensagem = $um_cliente["mensagem"];
endwhile;
?>
<h1 class="text-center">Editar cliente <?php echo $id; ?></h1>

<form method="post" action="atualizar.php?id=<?php echo $id; ?>">
    <div class="container">
        <div class="form-floating mb-2 ">
            E_mail: <input name="email" class="form-control"  value="<?php echo $email; ?>">
        </div>
        <div class="form-floating mb-3">
            Nome: <input name="nome" class="form-control" id="floatingInputDisabled" value="<?php echo $nome; ?>">
        </div>
        <div class="form-floating mb-3">
            Contato: <input name="contato" class="form-control" id="floatingInputDisabled" value="<?php echo $contato; ?>">
        </div>
        <div class="form-floating mb-3">
            Mensagem: <input name="mensagem" class="form-control" id="floatingInputDisabled"  value="<?php echo $mensagem; ?>">
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class=" btn btn-outline-light" type="submit">Atualizar</button>
        </div>
    </div>
</form>
<?php
mysqli_close($conexao);
?>