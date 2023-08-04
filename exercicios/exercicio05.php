<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de alunos</title>

    <style>
        .aprovado{
            color:blue;
        }
        .reprovado{
            color: red;
        }

        table{
            width: 50%;
            margin: auto;
        }

        tr{   
            text-align: center;
            font-size: 2rem;
        }

        table,td,th{ border: black 1px solid;}

        tr:first-child{
                    color:honeydew;
                    background-color:darkorchid;
                }
    </style>

</head>
<body>
    <table>
        <tr>
            <th>Aluno</th>
            <th>1ª Nota</th>
            <th>2ª Nota</th>
            <th>Média</th>
            <th>situação</th>
        </tr>
        <?php
        $alunos = [ 
            [   "nome"  =>  "Moura",
                "nota1" => 8,
                "nota2" => 6
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
        return  ($nota1 + $nota2)/2;
        };
    
        function situacao( $resultados ){ 
        if ( $resultados >= 7 ){ 
        return "aprovado";        
        } else{ 
            return "reprovado";
        } 
        } 

        foreach ($alunos as $aluno){ ?>
            <tr>
                <td><?=$aluno["nome"]?></td>
                <td><?=$aluno["nota1"]?></td>
                <td><?=$aluno["nota2"]?></td>
                <td><?=$resultado($aluno["nota1"],$aluno["nota2"])?></td>
                <td><b class="<?=situacao($resultado($aluno["nota1"],$aluno["nota2"]))?>"><?=situacao($resultado($aluno["nota1"],$aluno["nota2"]))?></b></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>