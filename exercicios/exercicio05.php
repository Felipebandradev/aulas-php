<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de alunos</title>

    <style>
        .aprovado{
            color:aqua;
        }
        .reprovado{
            color: red;
        }

    </style>

</head>
<body>
    <?php
    $alunos = [ 
        [   "nome"  =>   "Moura",
            "nota1" => 8,
            "nota2" => 0
        ], 
        ["nome" => "Aline",
        "nota1" => 10,
        "nota2" => 10
        ],
        [
            "nome" => "Barbosa",
            "nota1" => 10,
            "nota2" => 10 
        ],
        ["nome" => "Eliel",
        "nota1" =>  0,
        "nota2" => 8
        ],
        [   
            "nome" =>"Valeska",
            "nota1" => 3,
            "nota2" => 7
        ] 
    ];

    $resultado = function (int $nota1, $nota2 ){
       return $nota_final = ($nota1 + $nota2)/2;
    };
   
    function situacao(int $resultado){ 
    if ( $resultado >= 7 ){ 
       return "<b class='aprovado'>aprovado</b>";        
     } else{ 
        return "<b class='reprovado'>reprovado</b>";
     } 
    } 

    foreach ($alunos as $aluno){ ?>
        <p> Aluno: <?=$aluno["nome"]?></p>
        <p> Nota 1: <?=$aluno["nota1"]?></p>
        <p> Nota 2: <?=$aluno["nota2"]?></p>
        <p> Média : <?=$resultado($aluno["nota1"],$aluno["nota2"])?></p>
    <?php } ?>
</body>
</html>