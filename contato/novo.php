<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>
<form class="container" action="inserir.php" method="post">
<h1>Novo Contato</h1>
<p>Vamos cadastrar um contato novo no sistema.</p>

    <div class="row g-3">
        <div class="col-6">
            E-mail: <input class="form-control" placeholder="E-mail" required maxlength="150">
        </div>
        <div class="row">
            <div class="col-6">
                Nome: <input class="form-control" placeholder="Nome" required maxlength="150">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                Contato: <input class="form-control" placeholder="Contato" required maxlength="150">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                Menssagem: <textarea class="form-control" placeholder="Menssagem" required maxlength="150"></textarea>
            </div>
        </div>
    </div>
</form>
<!-- <form action="inserir.php" method="post">
    E-mail: <input name="email" required maxlength="150">
    Nome: <input name="nome" require maxlength="150">
    contato: <input name="contato" require maxlength="150">
    Mensagem : <input name="mensagem" require maxlength="150">
    <br>
    <button type="submit">Salvar</button>
</form> -->
<?Php
include "../includes/rodape.php"
?>