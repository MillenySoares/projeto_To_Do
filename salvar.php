<?php
    $title = "Projeto - Aula 10";
    include "includes/cabecalho.php";
?>

<?php
    require_once "models/todo.php";

    $novoTarefa = new tarefas($_POST['nome'], $_POST['data'], $_POST['descricao']);
    $nomeArq = "tarefas.json";
    
    if(!file_exists($nomeArq)){
        $tarefas = [];
        $arq = fopen($nomeArq, "w") or die ("Problemas com a criação de novas tarefas.");
    }else{
     $arq = fopen($nomeArq, "r+") or die ("Problemas com a criação de novas tarefas.");
     $conteudo = fread($arq, filesize($nomeArq));
     $tarefas = json_decode($conteudo);
     rewind($arq);
    }
 
    array_push($tarefas, $novaTarefa);
    fwrite($arq, json_encode($tarefas));
    fclose($arq);
 
    session_start();
    $_SESSION['tarefaCriada'] = $novaTarefa->titulo;
    header('Location: formulario.php');
    
?>

<?php
    include "includes/rodape.php";
?>