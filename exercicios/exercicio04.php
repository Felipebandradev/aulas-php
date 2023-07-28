<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
    <style>
        table{
            width: 50%;
            margin: auto;
        }

        table,td,th{ border: black 1px solid;}
        
        tr{   
            text-align: center;
            font-size: 2rem;
        }

        tr:nth-child(even):hover{ 
            color: azure;   
            background-color: lightpink;
        }

        tr:nth-child(odd):hover{
            color:white;
            background-color: cornflowerblue;
        }    
        tr:first-child{
            color:honeydew;
            background-color:darkorchid;
        }

        h1 {
        text-align: center;
        background-color:cornflowerblue;
        color: white;
        font-family: 'Tilt Prism', cursive;
        font-size: 75px;
        padding: 30px;
        text-shadow: 3px 3px 2px rgb(83, 0, 0);
    }

    </style>
</head>
<body>
    <h1>Ex 04</h1>

    <h2>Solução 1</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Linguagem</th>
            <th>Descrição</th>
        </tr>
        <?php
        $linguagens =[
            "HTML" => "Estruturação",
            "CSS" => "Estilos",
            "JS" => "Comportamentos",
            "PHP" => "Back - End",
            "SQL" => "Manipulação de Dados",
            "JAVA" => "Softwares",
            "C++" => "Aplicações Web"
        ];
        $id = 1;
        foreach($linguagens as $linguagem => $descricao ){
        ?>
        <tr>
            <td><?=$id?></td>
            <td><?=$linguagem?></td>
            <td><?=$descricao?></td>
        </tr>
        <?php 
        $id++;
        } 
        ?>
    </table>

    <hr>
    <h2>Solução 2</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Linguagem</th>
            <th>Descrição</th>
        </tr>
    <?php
      $linguagens2 =[
        [
            "Id" => 1,
            "limguagem" =>   "HTML" ,
            "descricao"=> "Estruturação"
        ],
        [
            "Id" => 2,
            "limguagem" => "CSS",
            "descricao"  =>  "Estilos"
        ],
        [   
            "Id" => 3,
            "limguagem"   =>  "JS", 
            "descricao" => "Comportamentos"      
        ],
        [
        "Id" => 4,
        "limguagem" => "PHP" ,
        "descricao"=> "Back - End"               
        ],
        ["Id" =>5,
        "limguagem" =>"SQL",
        "descricao" => "Manipulação de Dados"
        ],
        ["Id" => 6,
        "limguagem" =>"JAVA", 
        "descricao"=> "Softwares"
        ],
        [
        "Id" => 7,
        "limguagem" =>"C++",
        "descricao" => "Aplicações Web"
        ]
    ];

    foreach ($linguagens2 as $linguagem2) { 
    ?>
    
    <tr>
            <td><?=$linguagem2["Id"]?></td>
            <td><?=$linguagem2["limguagem"]?></td>
            <td><?=$linguagem2["descricao"]?></td>
    </tr>
    
    <?php } ?>
    </table>
</body>
</html>