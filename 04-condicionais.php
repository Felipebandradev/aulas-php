<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <style>
        .comprar,.urgente{
            color: red;
        }
        @keyframes agora {
            to{ 
                color: red;
                background-color: yellow;
            }

            from{
                color: yellow;
                background-color: red;
            }
        }
        .urgente{
            display: inline-block;
            animation: agora 1s ;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            font-weight: bold;
            text-transform: uppercase;
        }

        .normal{
            color: green;
        }
    
    </style>
</head>
<body>
    <h1>Estruturas condicionais</h1>
    <hr>

    <h2>Simples</h2>
    <?php
    $numero = 5;
    if($numero > 1){
        echo"<p>$numero é maior que 1</p>";
    }

    // Sintaxe sem chaves

    if($numero > 1) echo "<p>$numero é maior que 1</p>";

    echo "<hr>";
    ?>
    

    <h2>Composta</h2>

    <?php 
    $produto = "Ultrabooks Asus";
    $qtdEmEstoque = 10;
    $qtdCritica = 15;

    echo "<h3>$produto</h3>";
    echo "<h4>Quantidade em estoque: $qtdEmEstoque</h4>";
    if ($qtdEmEstoque < $qtdCritica) {
        echo"<p class = \" comprar \">É necessario comprar</p>";

        if($qtdEmEstoque == 0 ){
            echo "<p class = \" urgente \">URGENTE!!!</p>";
        }

    } else {
        echo "<p class = \" normal\">Estoque normal</p>";
    }
   
    echo "<hr>";
    ?>
    

    <h2>Encadeada</h2>

    <?php
    $opcaoescolhida = 1;
    echo "<h3>Opcão: $opcaoescolhida</h3>";
    if ($opcaoescolhida == 1) {
        echo "<p>Ok vamos fazer o lanche</p>";
    } elseif($opcaoescolhida == 2) {
        echo "<p>Beleza, pizza no forno</p>";
    } elseif($opcaoescolhida == 3){
        echo "<p>Professor ficou feliz!</p>";
    } else{
        echo "<p>Nâo entedi vou chamar a Valeska!</p>";
    }

    echo "<hr>";

    //Exemplo == e ===
    // == Valor

    //=== Valor e tipo de dados

    $a = 10;
    $b = 10;

    $resultado = $a == $b;
    var_dump($resultado);
    echo"<br>";
    var_dump($a);
    echo"<br>";
    var_dump($b)
     
    ?>
</body>
</html>