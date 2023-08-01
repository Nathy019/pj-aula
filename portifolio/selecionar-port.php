<?php
include "../includes/menu.php";
include "../includes/conexao.php";
?>

<h1 class="text-center">Módolo das Fotos</h1>
<p class="text-center">
    <a href="novo-port.php"> Adicionar uma nova foto</a>
</p>
<h2 class="text-center">Listagem de foto</h2>
<table class="table">
    <tr class="table-dark">
        <td>Nome da foto</td>
        <td>Foto</td>
        <td>Descriçao</td>
    </tr>
    <?php
    $sql = "select * from portifolio";
    $todas_as_fotos = mysqli_query($conexao, $sql);
    while ($uma_foto = mysqli_fetch_assoc($todas_as_fotos)) :
    ?>
        <tr class="table-light">
            <td><?php echo $uma_foto['id_imagem']; ?></td>
            <td><?php echo $uma_foto['nome_foto']; ?></td>
            <td><img src="<?php echo $uma_foto['foto']; ?>" width="250rempx"></td>
            <td><?php echo $uma_foto['descricao']; ?></td>
            <!-- add foto img src="php echo +variavel [nome do campo]"
        img src="php $um_portifolio[foto1];php "whidth = "100" "
        -->
            <td>
                <a href="visualizar-port.php?id=<?php echo $uma_foto['id_imagem'] ?>"><img src="../imagem/icon_visualizar.png" width="25px"></a>
                <a href="editar-port.php?id=<?php echo $uma_foto['id_imagem']?>"><img src="../imagem/icon_edit.png" width="25px"></a>
                <a href="deletar-port.php?id=<?php echo $uma_foto['id_imagem']?>"><img src="../imagem/delet.png" width="25px"></a>
            </td>
        </tr>
    <?php
    endwhile;
    ?>
</table>


<?php
mysqli_close($conexao);
?>