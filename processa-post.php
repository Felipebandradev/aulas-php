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
        //$nome = $_POST["nome"];
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
        $mensagem = filter_input(INPUT_POST, "menssagem", FILTER_SANITIZE_SPECIAL_CHARS);
        $interesses = filter_var_array(
            $_POST["interesses"] ?? [],
            FILTER_SANITIZE_SPECIAL_CHARS
        );

        
        ?>
        
    <h2>Dados:</h2>

    <ul>
        <li>Nome: <?=$nome?></li>
        <li>E-mail: <?=$email?></li>
        <li> Idade : <?=$idade?></li>

        <?php if( !empty($interesses)){ ?>
        <li> interesses : <?=implode(", ", $interesses)?></li>
        
        
        
        <li> interesses : 
            <ul>
                <?php foreach($interesses as $interesse){ ?>    
                <li> <?=$interesse?></li>
                <?php } ?>
            </ul>
        </li>
        
        
        <?php } ?>

        <?php
        /* Se a menssagem não estiver vazia mostre a menssagem */ 
         if( !empty($mensagem)){?>
        <li>Mensagem: <?=$mensagem?></li>
        <?php }; ?>
    </ul>
    <?php } ?>
    </main>


</body>
</html>