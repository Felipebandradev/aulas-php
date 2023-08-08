<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa POST</title>
</head>
<body>
    <main>
        <pre><?=var_dump($_POST) ?></pre>
        <h1>Exemplo de usando post</h1>
        <hr>
        <p>Receber e processar dados via <b>Post</b></p>

        <?php 
        // Capturandos dados transmitidos
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $mensagem = $_POST["menssagem"];
        ?>

    <h2>Dados:</h2>

    <ul>
        <li>Nome: <?=$nome?></li>
        <li>E-mail: <?=$email?></li>
        <li>Mensagem: <?=$mensagem?></li>
    </ul>
    </main>


</body>
</html>