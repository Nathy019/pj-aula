<?php
include "../includes/menu.php";
?>
<form class="container" action="inserir-port.php" method="post">
    <div class="container m-2">
        <h1 class="text-center">Nova Foto </h1>
        <p class="text-center">Vamos cadastrar uma nova foto no sistema.</p>
        <div class="row g-3 ">
            <div class="col-6 mx-auto p-2">
                Nome da Foto: <input class="form-control" name="nome" placeholder="nome da foto" required maxlength="150">
            </div>
            <div class="row">
                <div class="col-6 mx-auto p-2">
                    Foto: <input class="form-control" name="foto" placeholder="Nome" required maxlength="150">
                </div>
            </div>
            <div class="row">
                <div class="col-6 mx-auto p-2">
                    Descrição: <textarea class="form-control" name="descricao" placeholder="Mensagem" required maxlength="150"></textarea>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 col-2 mx-auto p-2 ">
            <button class=" btn btn-outline-light" type="submit">Enviar</button>
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