<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e Constantes</title>
</head>
<body>
    <h1>Manipulando dados na memoria</h1>
    <hr>
    <?php
    //variaveis
    $curso ="Téc. de Informatica para internet";

    //inteiro(integer)
    $ano = 2023;
    
    //float( real)
    $preco = 2500.25;

    echo"<h2>Saída de dados usando echo Na sintaxe completa</h2>";

    //echo $curso;//sem estrutura /tag
    echo "<p>$curso</p>";//interpolação
    //echo "<p>".$curso."</p>";//concatenação

    echo "<p>Ano letivo: $ano</p>";
    echo "<p><b>Preço</b>: $preco</p>";
    
    ?>
    <h2>Saída de dados usando sintaxe simplificada</h2>
    <p> <?php echo $curso ?></p>
    <p><?=$curso?></p>

    <p>Estamos fazendo o curso <?=$curso?> no ano de <?=$ano?>.</p>


    <?php
    //constantes 

    define("MEU_NOME","Felipe B. B. Andrdade");

    const UNIDADE = "Penha";
    // saída de dados
    
    echo MEU_NOME;
    echo "<p><b>".MEU_NOME."</b></p>";
    ?>
    <!-- Saída Sim plificada -->
    <p><b><?=UNIDADE?></b></p>


</body>
</html>