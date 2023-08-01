<?php
include "../includes/menu_painel.php";
?>
<form class="container" action="inserir.php" method="post">
    <div class="container m-2">
        <h1 class="text-center">Novo Contato</h1>
        <p class="text-center">Vamos cadastrar um contato novo no sistema.</p>
        <div class="row g-3 ">
            <div class="col-6 mx-auto p-2">
                E-mail: <input class="form-control" name="email" placeholder="E-mail" required maxlength="150">
            </div>
            <div class="row">
                <div class="col-6 mx-auto p-2">
                    Nome: <input class="form-control" name="nome" placeholder="Nome" required maxlength="150">
                </div>
            </div>
            <div class="row">
                <div class="col-6 mx-auto p-2">
                    Contato: <input class="form-control" name="contato" placeholder="Contato" required maxlength="150">
                </div>
            </div>
            <div class="row">
                <div class="col-6 mx-auto p-2">
                    Mensagem: <textarea class="form-control" name="mensagem" placeholder="Mensagem" required maxlength="150"></textarea>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 col-2 mx-auto p-2 ">
           <a > <button href="../index-site.php"class=" btn btn-outline-light" type="submit">Enviar</button></a>
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