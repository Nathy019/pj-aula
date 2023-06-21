<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

?>

<h1>Módolo de contatos</h1>
<p>
    <a href="novo.php"> Adicionar um novo contato</a>
</p>
<h2>Listagem contato</h2>
<table border="1">
    <tr>
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
        <tr>
            <td><?php echo $um_cliente['id']; ?></td>
            <td><?php echo $um_cliente['email']; ?></td>
            <td><?php echo $um_cliente['nome']; ?></td>
            <td><?php echo $um_cliente['contato']; ?></td>
            <td><?php echo $um_cliente['mensagem']; ?></td>
            <!-- add foto img src="php echo +variavel [nome do campo]"
        img src="php $um_portifolio[foto1];php "whidth = "100" "
        -->
            <td>
                <a href="#">Visualizar</a>
                <a href="#">editar</a>
                <a href="deletar.php?id=<?php echo $um_cliente['id'] ?>">excluir</a>
            </td>
        </tr>
    <?php
    endwhile;
    ?>
</table>


<?php

mysqli_close($conexao);
include "../includes/rodape.php";
?>