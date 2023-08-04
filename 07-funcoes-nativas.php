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

        <h3>str_replace()</h3>

        <?php
        /* Função que permite substituíção 
        de strings/caracteres.  */

        $frase_feia = "<p>Fulano é um bobão e xarope</p>";
        $frase_bonitinha = str_replace(["bobão","xarope"],"****", $frase_feia);
        ?>

        <pre><?=$frase_feia?></pre>
        <pre><?=$frase_bonitinha?></pre>

        <h3>Exeplode()</h3>
        <?php
        /* Função que transforma uma string em um array */
        $linguagens = "Html - Css - JS - Php";
        $array_linguagens = explode(" - ", $linguagens);
        ?>

        <pre><?=var_dump($array_linguagens)?></pre>
        <pre><?=var_dump($linguagens)?></pre>


        <h2>Numéricas</h2>

        <h2>Arrays</h2>

        <h2>Filtros</h2>

        <h2>Segurança</h2>
    </main>
</body>
</html>