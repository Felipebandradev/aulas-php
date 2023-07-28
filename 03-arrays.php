<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <style>
        #planos li:nth-child(odd) {
            color: blue;
        }
        #planos li:nth-child(even) {
            color:red
        }
        
    </style>
</head>
<body>
    <h1>Trabalhando com Arrays(Vetores e Matrizes)</h1>
    <h2>Arrays com  indice numérico</h2>
    <?php 
    //sintaxe com colchetes
    $bandas = ["Savatage","Dio","Rush"];
    //sintaxe com função array()
    $cursos = array("Html","Node","Php");
    //sintaxe de atribuição manual
    $buteco[0]="Bolinho de Bacalhau";
    $buteco[1]="Pastel";
    $buteco[2]="Esfiha";

    //constantes de array
    define("UNIDADES",["Penha","Tatuapé"]);
    const FRUTAS = ["Marango","Abacaxi"];
    ?>
    
    <h3>Acessando Dados</h3>
    <ol>
        <li>Banda que mais gosto: <?=$bandas[2]?></li>
        <li>Curso basico de <?=$cursos[0]?></li>
        <li>Quero comer <?=$buteco[1]?></li>
        <li>Estamos no Senac <?=UNIDADES[0]?></li>
        <li>Fruta boa pra caipirinha <?=FRUTAS[0]?></li>
    </ol>
    
    <hr>

    <h2>Array associativo</h2>
    <?php
    $curso = [
        //chave associativa
        // identificador => valor
        "titulo" => "Gastronomia",
        "carga_horaria" => 150,
        "descritivo" => "Aprenda a ferver água"
    ] ;
    ?>
    <h3>Acessando os dados (Array associativo)</h3>
    <p>Nome do curso: <?=$curso["titulo"]?></p>
    <p>Carga horaria: <?=$curso["carga_horaria"]?></p>
    <p>Descritivo: <?=$curso["descritivo"]?></p>

    <h2>Matriz (array dentro de array)</h2>
    <?php
    $planodeestudo= [
        ["Js Avançado","Node Js","React"],
        ["PHP","POO","MySQL","Python"],
        ["Teoria das cores","Photoshop","Ux/ui"]
    ];  
    ?>
    <ul id = "planos">
        <li><?=$planodeestudo[0][2]?></li>
        <li><?=$planodeestudo[1][2]?></li>
        <li><?=$planodeestudo[2][1]?></li>
        <li><?=$planodeestudo[2][0]?></li>
    </ul>

    <hr>

    <h2>Funções de análises de estrutura de dados (debug/depuração)</h2>

    <h3>Print</h3>
    <pre><?=print_r($bandas)?></pre>
    <h3>Var_dump()</h3>
    <pre><?=var_dump($bandas)?></pre>
    <pre><?=var_dump($planodeestudo)?></pre>
</body>
</html>