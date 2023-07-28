<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais versão 2</title>
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
    ?>
        <p><?=$numero?> é maior que 1</p>
    <?php
    }

    // Sintaxe sem chaves

    if($numero > 1) echo "<p>$numero é maior que 1</p>";
    ?>
    <hr>
   
    

    <h2>Composta</h2>

    <?php 
    $produto = "Ultrabooks Asus";
    $qtdEmEstoque = 20;
    $qtdCritica = 15;
    ?>
    <h3><?=$produto?></h3>
    <h4>Quantidade em estoque: <?=$qtdEmEstoque?></h4>
    <?php
    if ($qtdEmEstoque < $qtdCritica) {
    ?>
        <p class = " comprar ">É necessario comprar</p>
        <?php
        if($qtdEmEstoque == 0 ){
        ?>
            <p class = " urgente ">URGENTE!!!</p>
        <?php
        }
    } else {
        ?>    
        <p class = " normal">Estoque normal</p>
    <?php    
    }
    ?>
    <hr>
   
    

    <h2>Encadeada</h2>

    <?php    $opcaoescolhida = 2;    ?> 

    <h3>Opcão: <?=$opcaoescolhida?></h3>

    <?php  if ($opcaoescolhida == 1) { ?>
       <p>Ok vamos fazer o lanche</p>
    <?php   } elseif($opcaoescolhida == 2) {    ?>

        <p>Beleza, pizza no forno</p>

    <?php    } elseif($opcaoescolhida == 3){   ?>

        <p>Professor ficou feliz!</p>

    <?php    } else{  ?>

        <p>Nâo entedi vou chamar a Valeska!</p>

    <?php    }    ?>    

    <?php  
    switch ($opcaoescolhida) { 
        case 1:   $menssagem = "Ok vamos fazer o lanche";    break;

        case 2:   $menssagem = "Beleza, pizza no forno";     break;

        case 3:   $menssagem = "Professor ficou feliz!";     break;

        default:  $menssagem ="Nâo entedi vou chamar a Valeska!";   break;
    }    
    ?>
    <p><?=$menssagem?></p>
</body>
    <hr>
    <?php

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


</html>