<?php
include "../includes/menu_painel.php";
include "../includes/conexao.php";

?>

<h1 class="text-center">Módolo de contatos</h1>
<p class="text-center">
    <a href="novo.php"> Adicionar um novo contato</a>
</p>
<h2 class="text-center">Listagem contato</h2>
<table class="table">
    <tr class="table-dark">
        <td>Código</td>
        <td>E_mail</td>
        <td>Nome</td>
        <td>Contato</td>
        <td>Mensagem</td>
        <td>Açoes</td>
    </tr>
    <?php
    $sql = "select * from cliente";
    $todos_os_clientes = mysqli_query($conexao, $sql);
    while ($um_cliente = mysqli_fetch_assoc($todos_os_clientes)) :
    ?>
        <tr class="table-light">
            <td><?php echo $um_cliente['id']; ?></td>
            <td><?php echo $um_cliente['email']; ?></td>
            <td><?php echo $um_cliente['nome']; ?></td>
            <td><?php echo $um_cliente['contato']; ?></td>
            <td><?php echo $um_cliente['mensagem']; ?></td>
            <!-- add foto img src="php echo +variavel [nome do campo]"
        img src="php $um_portifolio[foto1];php "whidth = "100" "
        -->
            <td>
                <a href="visualizar.php?id=<?php echo $um_cliente['id'] ?>"><img src="../imagem/icon_visualizar.png" width="25px"></a>
                <a href="editar.php?id=<?php echo $um_cliente['id']?>"><img src="../imagem/icon_edit.png" width="25px"></a>
                <a href="deletar.php?id=<?php echo $um_cliente['id']?>"><img src="../imagem/delet.png" width="25px"></a>
            </td>
        </tr>
    <?php
    endwhile;
    ?>
</table>


<?php
mysqli_close($conexao);
?>