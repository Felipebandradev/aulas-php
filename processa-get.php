<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa Get</title>
</head>
<body>
    <main>
        <h1>Exemplo de usando Get</h1>
        <hr>
        <p>Receber e processar dados via <b>GET</b></p>

        <?php 
        // Capturandos dados transmitidos
        $nome = $_GET["nome"];
        $email = $_GET["email"];
        $mensagem = $_GET["menssagem"];
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