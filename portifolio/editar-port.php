<?php
include "../includes/menu.php";
include "../includes/conexao.php";

$id = $_GET["id"];
$nome_foto = "";
$sql = "select * from portfolio where id = $id";
$todos_os_clientes = mysqli_query($conexao, $sql);
while ($um_cliente = mysqli_fetch_assoc($todos_os_clientes)) :
    $nome_foto = $um_cliente["nome"];
    $foto = $um_cliente["foto"];
    $descricao_foto = $um_cliente["descricao"];
endwhile;
?>
<h1 class="text-center">Editar portifolio <?php echo $id; ?></h1>

<form method="post" action="atualizar.php?id=<?php echo $id; ?>">
    <div class="container">
        <div class="form-floating mb-2 ">
            nome foto: <input name="email" class="form-control"  value="<?php echo $nome_foto; ?>">
        </div>
        <div class="form-floating mb-3">
            foto: <input name="nome" class="form-control" id="floatingInputDisabled" value="<?php echo $foto; ?>">
        </div>
        <div class="form-floating mb-3">
            descrição da foto: <input name="contato" class="form-control" id="floatingInputDisabled" value="<?php echo $descricao_foto; ?>">
        </div>
            <button class=" btn btn-outline-light" type="submit">Atualizar</button>
        </div>
    </div>
</form>
<?php
mysqli_close($conexao);
?>