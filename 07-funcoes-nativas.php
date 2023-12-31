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
        
        <hr>

        <h2>Numéricas</h2>

        <h3>min,max,round</h3>
        <?php 
        $valores = [10, 5, 50, 1000, 275];
        $valore_qualquer = 2750.33333;
        ?>
        <p>Menor Valor : <?=min($valores)?></p>
        <p>Maior Valor : <?=max($valores)?></p>
        <p>Arredondamento : <?=round($valore_qualquer)?></p>

        <hr>

        <h2>Arrays</h2>
        <h3>implode()</h3>

        <?php
        /* Função que transforma array
        em string */

        $bandas = ["Rush","IZA","DIO","JOTARO"];
        $texto_bandas = implode(" - ", $bandas);
        ?>

        <p>Top 4 bandas do ano: <br> <?=$texto_bandas?></p>

        <pre><?=var_dump($bandas)?></pre>
        <pre><?=var_dump($texto_bandas)?></pre>

        <h3>Extract()</h3>

        <?php
        /* Função quen extrai chaves  associativas para variaveis */
        $aluno = [
            "id" => 1,
            "nome" => "Chaves",
            "idade" => 25
        ];

        extract($aluno);
        ?>
        <ul>
            <li>Id: <?=$id?></li>
            <li>Nome: <?=$nome?></li>
            <li>Idade: <?=$idade?></li>
        </ul>

        <h3>arry_sum()</h3>

        <?php
        /* Função para somar valores */
        $total = array_sum($valores);
        ?>
        <p>soma dos valores: <?=$total?></p>

        <h3>array_unique()</h3>

        <?php
        /* Função que retorna um novo
        array com dados únicos */
        $produtos = ["Tv" , "Notebook","Tv",
                    "geladeira", "Monitor", "Notebook",
                    "Teclado", "Mouse"
                    ];
        $produtos_unicos = array_unique($produtos);
        ?>
        <pre><?=var_dump($produtos)?></pre>
        <pre><?=var_dump($produtos_unicos)?></pre>

        <h2>Filtros</h2>

        <p>Recurso/constantes de análise e limpeza de dados aplicados através de funções <code>filter_var()</code> e <code>filter_input()</code></p>
        
        <h3>Validação</h3>
        
        <?php 
        $email = "barbosa@algo.com.br";
        $email2 = "moura.com.br";

        /* Se o e-mail informado for inválido, ou seja,
        se não seguir o padrão geral de endereços de e-mail,
        a função abaixo retornará "false". */
        ?>
        
        <P> Verificando se o email <?=$email?> é vaildo: <pre> <?=var_dump(filter_var($email, FILTER_VALIDATE_EMAIL))?></pre>  </P>
        <P> Verificando se o email <?=$email2?> é vaildo: <pre> <?=var_dump(filter_var($email2, FILTER_VALIDATE_EMAIL))?></pre>  </P>

        <h3>Sanitização</h3>

        <?php
        $ataque = "<script>
                document.body.innerHTML = ' <h1> Sou ráqui  !! mwahaha :( </h1>'
                </script> ";
        // Execução sem sanitização (script é valido)
        //echo $ataque;
        
        $ataque_sanitizado = filter_var($ataque, FILTER_SANITIZE_SPECIAL_CHARS);

        // Execução com sanitização (script é anulado)
        echo $ataque_sanitizado;
        ?>
        <p>Não é não :) </p>

        <hr>
        


        <h2>Segurança (criptografia de dados)</h2>

        <?php
        // senha em texto puro (plain text)

        $senha = "123senac";

        /* Algoritmos mais comuns para criptografia 
        MD5, SHA1, SHA256
        
        
        Estes algoritmos pegam os dados e os  codificam/criptografam 
        tornando um "hash" de dados embaralhados
        
        */
        $senhaMd5 = md5($senha);
        $senhaSHA1 = sha1($senha);
        $senhaSHA256 = hash('sha256', $senha);
        ?>
        <p>Senha (texto puro): <?=$senha?> </p>
        <p>Senha (MD5): <?=$senhaMd5?> </p>
        <p>Senha (SHA1): <?=$senhaSHA1?> </p>
        <p>Senha (SHA256): <?=$senhaSHA256?> </p>

        <?php
        /* Método recomendado para segurança de senhas no PHP */

        $senha_segura = password_hash($senha, PASSWORD_DEFAULT);
        ?>

        <P>Senha (com password_hash): <?=$senha_segura?></P>

        <?php
        /* como  verificar o hash da senha se ele pode mudar? */
        $senha_digitada = "123senac";

        //if ($senha_digitada === $senha_segura){
        if (password_verify($senha_digitada, $senha_segura) ){
            echo "<p> senha correta pode entrar </p>";
        } else {
            echo "<p > senha errada, vaza daqui disgraça!!</p>";
        }
        ?>
    </main>
</body>
</html>