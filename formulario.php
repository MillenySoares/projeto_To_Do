<?php
    $title = "Projeto - Aula 11";
    include "includes/cabecalho.php";
?>
<h1>TO DO</h1>
<form action="salvar.php" method="POST">
    <label for="nome">Nome: </label><br>
    <input type="text" id="nome" name="nome"/><br> <br>
    <label for="data">Data: </label><br>
    <input type="date" id="data" name="data"/><br><br>
    <label for="descricao">Descrição: </label><br>
    <textarea id="descricao" name="descricao" rows="4" cols="30"></textarea>
    <br> <br>
    <input type="submit" value="Salvar"> <br><br>
</form>
<?php
    echo "<a href=listaDaTarefa.php>Ver suas Tarefas</a>";
    session_start();
    if(isset($_SESSION['tarefaCriada'])){
        echo "<p>Tarefa ". $_SESSION['tarefaCriada'] . " criada com sucesso </p>";
        unset($_SESSION['tarefaCriada']);
    }
    session_destroy();
    include "includes/rodape.php";
?>