<?php
    $title = "Projeto - Aula 11";
    include "includes/cabecalho.php";
?>

<?php

    $nomeArq = "tarefas.json";
    
    $arq = fopen($nomeArq, "r") or die('Problemas com a criação do arquivo.');
    $conteudo = fread($arq, filesize($nomeArq));
    $tarefas = json_decode($conteudo);
    fclose($arq);
    
    $pos = $_GET['id'];
    
    echo "<h1> Informações da Tarefa - " . $tarefas[$pos]->nome . "</h1>";
    
    echo "<ul>";
    echo "<li><b> Data de Entrega: </b>" . $tarefas[$pos]->data . "</li>";
    echo "<li><b> Descrição: </b>" . $tarefas[$pos]->descricao . "</li>";
    echo "</ul>";


?>

<?php
    include "includes/rodape.php";
?>