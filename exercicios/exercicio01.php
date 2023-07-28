<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <style>
        <?php $cor = "pink";?>
        body{ background-color:<?=$cor?>;}
        .destaque{ 
            font-family:"Verdana";
            text-decoration:uppercase;
            color:red;
        }
    </style>
</head>
<body>
    <h1>Desconto</h1>
    <?php
    // definindo fuso horário
    date_default_timezone_set("America/Sao_Paulo");
    const NOME = "Felipe";
    $data = date("d/m/Y");
    $hora = date("H:i");
    echo "Hora: ".$hora;
    $curso = "Téc. Informatica para internet" ;
    $carga_hora = 1000;
    $falta = 4;
    $limite_falta = $carga_hora/$falta;
    ?>
    <p>oi eu me chamo <span class="destaque"><?=NOME?></span> </p>
    <p>faço o curso: <span class="destaque"><?=$curso?></span></p>
    <p>Que tem <span class="destaque"><?=$carga_hora?></span>h de duração</p>
    <p>e possui o limite de faltas de <span class="destaque"><?=$limite_falta?></span>h</p>
    <p>Hoje é dia <span class="destaque"><?=$data?></span> não faltei nenhuma vez.</p>

    <?php
    $teste ="Php Intelephense";
    echo $teste;
    ?>

</body>
</html>