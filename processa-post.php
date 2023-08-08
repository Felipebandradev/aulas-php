<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa POST</title>
</head>
<body>
    <main>
        <h1>Exemplo de usando post</h1>
        <hr>
        <p>Receber e processar dados via <b>Post</b></p>

        <?php
        // verificar se os campos nome e eamil estão vazios 
        if( empty($_POST["nome"]) || empty($_POST["email"]) ){ ?>
            <p  style=" color: red">Você deve preencher nome e e-mail!!!</p>
            <p><a href="10-fomulario-exemplo-post.html">Voltar</a></p>
        <?php    
        } else {

        // Capturandos dados transmitidos
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $idade = $_POST["idade"];
        $mensagem = $_POST["menssagem"];
        $interesses = $_POST["interesses"];

        
        ?>
        
    <h2>Dados:</h2>

    <ul>
        <li>Nome: <?=$nome?></li>
        <li>E-mail: <?=$email?></li>
        <li> Idade : <?=$idade?></li>

        <?php if( !empty($_POST["interesses"])){ ?>
        <li> interesses : <?=implode(", ", $interesses)?></li>
        <?php } ?>

        <?php
        /* Se a menssagem não estiver vazia mostre a menssagem */ 
         if( !empty($mensagem)){?>
        <li>Mensagem: <?=$mensagem?></li>
        <?php }; ?>
    </ul>
    <?php }?>
    </main>


</body>
</html>