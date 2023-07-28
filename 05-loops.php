<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <h1>Estruturas de Controles de reptição</h1>
    <hr>

    <h2>While (enqunto)</h2>
    <?php 
    $i = 1;
    while( $i <= 3 ){ ?>
        <p><?=$i?></p>
    <?php
        $i++;
    } 
    ?>
    

    <h2>DO/WHILE (repita/ate)</h2>

    <?php
    $j=1;
    do{ ?>
     <div>
        <h3>Moura <?=$j?></h3>
        <p>Moura é um amigãozão top d+ <?=$j?> mil vezes!!</p>
     </div>
    <?php 
        $j++;
    }while($j <= 3);
    ?>

    
    
    <h2>FOR (para)</h2>

    <?php for($i = 1; $i <= 3; $i++ ){ ?>
        <p> i vale: <b><?=$i?></b> </p>
    <?php } ?>

    <h2>Mini exercicios</h2>
    <h3>Meses</h3>

    <?php 
    $mes = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
    $lendo_mes = count($mes);
    ?>
    <ol>
        <?php for($i = 0; $i < $lendo_mes; $i++){ ?>
            <li> <?=$mes[$i]?></li>
       <?php } ?>
    </ol>

    <?php 
    $alunos = ["Melissa", "Tanaka","Zimbo","Eduardo","Moura","Barbosa","Aline","Valeska"];
    //Guardando em "cache" (memoria) a quantidade de elementos, evitando, assim a contasgem a cada iteração do loop e melhorando a performance.
    $quantidade = count($alunos);
    for($i = 0; $i < $quantidade; $i++){ 
    ?>    
        <p>Nome: <b><?=$alunos[$i]?></b></p>
    <?php }?>

    <hr>

    <h2>FOREACH (para cada)</h2>
    <p>Útil (e mais facil) para lidar com <code>arrays</code></p>

    <ol>
        <?php foreach($mes as $meses){ ?>
            <li> <?=$meses?> </li>
        <?php } ?>
    </ol>
    
    <h3>Manipulando arrays associativos</h3>
    <?php
    $clubes = [
        "Corinthians" => "Timão",
        "Palmeiras" => "Porco",
        "São Paulo" => "Tricolor",
        "Santos" => "Peixe"
    ];

    foreach($clubes as $clube => $apelido){
    ?>
    <p>O <?=$clube?> é conhecido como <?=$apelido?></p>
    <?php    
    }
    ?>

    <h2>Loops com Matriz</h2>
    <?php 
    $planodeestudo = [
        ["HTML","CSS","JS"],
        ["React","React Native","PHP"]
    ];

    for($linha = 0;$linha < count($planodeestudo);$linha++){
        for($coluna = 0; $coluna < count($planodeestudo[$linha]);$coluna++){
    ?>
        <p><b> <?=$planodeestudo[$linha][$coluna]?></b></p>
        
    <?php
        }
    }
    ?>
    <hr>
    <?php
    foreach($planodeestudo as $linha){
        foreach ($linha as $colna) {   
    ?>
        <p> <i><?=$colna?></i></p>
    <?php 
        }
    }
    ?>

    <h3>Loop com Matriz associativa</h3>

    <?php
    $clientes = [
        [
            "nome" => "Chaves",
            "idade" => 8
        ],
        [
            "nome" => "Chapolin",
            "idade" => 25
        ],
        [
            "nome" => "Chiquinha",
            "idade" => 10
        ]
    ];

    foreach( $clientes as $cliente){ ?>
        <p> Nome: <?=$cliente["nome"]?></p>
        <p> Idade: <?=$cliente["idade"]?></p>
    <?php
    }


    /* Lemprete sobre sintaxe de estruturas de controle (condicionais e loops)
    if(){

    } else {

    }

    if():
    else:
    endif;

    foreach(){}
    
    foreach:
    endeforeach;

    for(){}

    for():
    endfor;
    
    */
    ?>
</body>
</html>