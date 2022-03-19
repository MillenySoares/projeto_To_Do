<?php
    $title = "Projeto - Aula 11";
    include "includes/cabecalho.php";
?>

<?php

$nomeArq = "tarefas.json";
    
$arq = fopen($nomeArq, "r") or die('Problemas ao abrir o arquivo.');
$conteudo = fread($arq, filesize($nomeArq));
$tarefas = json_decode($conteudo);
fclose($arq);

echo "<ol>";
foreach($tarefas as $i => $tarefa) echo "<li>$tarefa->nome <a href=detalhesToDo.php?id=$i>Ver detalhes</a></li>";
echo "</ol>";
?>
<?php
    include "includes/rodape.php";
?>