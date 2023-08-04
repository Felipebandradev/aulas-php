<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de alunos</title>

    <style>
        .aprovado {
            color: #363b96;
        }

        .reprovado {
            color: #bc1069;
        }

        tr:nth-child(odd){
            color: #7e2d7e;
            background-color:#e0bcdd;
        }    
        
        tr:nth-child(even){ 
            color: #642764;   
            background-color: #f0ddee;
        }

        table {
            width: 50%;
            margin: auto;
        }

        tr, caption {
            text-align: center;
            font-size: 2rem;
        }

        tr:first-child {
            color: honeydew;
            background-color: #ac58aa;
        }
        caption {
            border-top-left-radius: 51px  ;
            border-top-right-radius: 51px  ;
            color:white;
            background-color: #993399;
        }
    </style>

</head>

<body>
    <table>
        <caption>Notas</caption>
        <tr>
            <th>Aluno</th>
            <th>1ª Nota</th>
            <th>2ª Nota</th>
            <th>Média</th>
            <th>situação</th>
        </tr>
        <?php
        $alunos = [
            [
                "nome"  =>  "Moura",
                "nota1" => 3,
                "nota2" => 6
            ],
            [
                "nome" => "Aline",
                "nota1" => 10,
                "nota2" => 10
            ],
            [
                "nome" => "Barbosa",
                "nota1" => 10,
                "nota2" => 10
            ],
            [
                "nome" => "Eliel",
                "nota1" =>  2,
                "nota2" => 8
            ],
            [
                "nome" => "Valeska",
                "nota1" => 10,
                "nota2" => 10
            ]
        ];

        $resultado = function (float $nota1, float $nota2):float {
            return ($nota1 + $nota2) / 2;
        };

        function situacao(float $resultados):string {
            if ($resultados >= 7) {
                return "aprovado";
            } else {
                return "reprovado";
            }
        }

        foreach ($alunos as $aluno) { ?>
            <tr>
                <td><?= $aluno["nome"] ?></td>
                <td><?= $aluno["nota1"] ?></td>
                <td><?= $aluno["nota2"] ?></td>
                <td><?= $resultado($aluno["nota1"], $aluno["nota2"]) ?></td>
                <td><b class="<?= situacao($resultado($aluno["nota1"], $aluno["nota2"])) ?>"><?= situacao($resultado($aluno["nota1"], $aluno["nota2"])) ?></b></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>