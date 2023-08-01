<?php
include "../includes/menu_painel.php";
include "../includes/conexao.php";

$id_imagem  = $_GET["id"];
$nome_foto = "";
$sql = "select * from portifolio where id_imagem = $id_imagem";
$todas_as_fotos = mysqli_query($conexao, $sql);
while ($uma_foto = mysqli_fetch_assoc($todas_as_fotos)) :
    $nome_foto = $uma_foto["nome_foto"];
    $foto = $uma_foto["foto"];
    $descricao_foto = $uma_foto["descricao"];
endwhile;
?>
<h1 class="text-center">Editar portifolio <?php echo $id_imagem; ?></h1>

<form method="post" action="atualizar.php?id=<?php echo $id_imagem; ?>">
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