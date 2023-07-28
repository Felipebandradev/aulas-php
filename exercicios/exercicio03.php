<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03 salarios</title>
    <style>
        html{
            font-size: 20px;
        }
        body{
            font-family: monospace;
        }
        @keyframes animasalario {
            from{
                color: azure;
                overflow: hidden;
            }


        }
        .destaque{
            font-weight: bold;
            animation: animasalario 1s infinite alternate;
            color: chartreuse;
        }

        .fundo{
            color: aliceblue;
            background-color: chartreuse;
        }
    </style>
</head>
<body>
    <h1>Exercício 03</h1>
    <?php 
    $salario = 3000;
    if ($salario < 1500) {
        $salario_final = $salario*1.15;
    } elseif( $salario <= 3000){
        $salario_final = $salario*1.10;
    } else{
        $salario_final = $salario*1.05;
    }
    
    ?>
    <p>Salario inicial: <span class="destaque">R$<?=number_format($salario,2,',','.')?>🥺 😢</span></p>
    <p class="fundo">o salario com aumento é de <span class="destaque">R$<?=number_format($salario_final,2,',','.')?>🤩 🥳</span></p>
</body>
</html>