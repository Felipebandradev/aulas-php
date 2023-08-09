<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário e PHP juntos</title>
</head>
<body>
    <main>
        <h1>Formulário e processamento juntos</h1>
        <hr>
        <?php
        if ( isset($_POST["enviar"])){ 
               $nome = $_POST["nome"];
               $email = $_POST["email"];
        ?>
                <h2>Dados Processados</h2>
                <p>Nome: <?=$nome?></p>
                <p>E-mail: <?=$email?></p>
        <?php 
        } else {
        ?>
        <form action="" method="post">
            <p>
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" id="nome" required >
            </p>            
            <p>
                    <label for="email">E-mail: </label>
                    <input  type="email" name="email" id="email" required >
            </p> 

            <!-- Importante o name no botão de enviar -->
             <button type="submit" name="enviar" id="enviar">Enviar</button>
        </form>
        <?php } ?>
    </main>
</body>
</html>