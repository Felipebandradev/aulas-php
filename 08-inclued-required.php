<?php
/* Fazendo a inclusão de um arquivo de recursos */

include "recursos.php";

/* 
include OU require
A diferença entre eles é na forma como lidam no
caso de acontecer algum erro na inclusão.

Erros de carregamento com include, dão alertas (warnings)
mas NÃO PARAM completamente a aplicação.

Erros de carregamento com require, dão erro fatal (fatal
error), e PARAM completamente a aplicação. 

*/

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulação e inclusão e Recurso </title>
</head>
<body>
    <main>
        <h1>Modularização e inclusão de Recursos </h1>
        <hr>

        <h2><?=ESCOLA?></h2>
        <p>Estamos fazendo o curso de <?=$curso?></p>
        <!-- Monte uma lista não alternada mostrando todas as tecnologias -->

        <ul>
        <?php foreach($tecnologias as $tecnologia){ ?>
            <li><?=$tecnologia?></li>
        <?php } ?>
        </ul>
        
        <p>O aluno Moura tem 19 anos e é <?=verifica_idade(19)?> de idade.</p>
        <hr>

        <article>
            <h2>Título Qualquer</h2>

            <?php include "textos.php";  ?>


            <h2>Galera que vai começar faculdade</h2>

            <?php include "lista.html"; ?>
        </article>

    </main>
</body>
</html>