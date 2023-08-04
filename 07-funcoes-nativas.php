<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Nativas</title>
</head>
<body>
    <main>
        <h1>Exemplos Funções Nativas</h1>
        <hr>
        
        <h2>String</h2>

        <h3>Trim()</h3>
        <?php
        /* Função que remove espaços 
        antes e depois de strings */

        $nome = "   O moura me deve 1 de barra de chocolate   ";
        $nome_sem_espaço = trim($nome);
        ?>

        <pre><?=var_dump($nome)?></pre>
        <pre><?=var_dump($nome_sem_espaço)?></pre>

        <h2>Numéricas</h2>

        <h2>Arrays</h2>

        <h2>Filtros</h2>

        <h2>Segurança</h2>
    </main>
</body>
</html>