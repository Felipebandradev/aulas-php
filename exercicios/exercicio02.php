<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio02</title>
    <style>
        html{
            font-size: 20px;
        }
        body{ 
            font-family: monospace;
            background-color: pink;
        }
        #paticipantes{
            display: flex;
            justify-content:space-around;
        }

        h3 { color: purple;}
        .destaque{ color:crimson;}
        article{
            box-shadow:10px 10px 10px black;
            padding: 3rem; 
            background-color: plum;
            border-radius: 10px;
        }

        h1,h2,h3{ text-align: center;}
        p{
            color: blueviolet;
            text-transform: uppercase;
        }

    </style>
</head>
<body>
    <main>
        <h1>Exercício 2</h1>
        <h2>Bem vindos a Arena</h2>
        <section id ="paticipantes">
        <?php
        $pessoaum = ["Samira","soulfighter@rt.com","123noxus","Feminino",20 ,"Noxus"];
        $pessoadois = ["Viego","gadodaisolde@rt.com","123sddsdela","Masculino",24,"Camavor"];
       ?>
       <article> 
            <h3>Participante: </h3> 
           
            <p> <b>Usuario:</b> </p><span class="destaque"><?=$pessoaum[0]?></span>
            <p><b>Email:</b></p> <span class="destaque"><?=$pessoaum[1]?></span>
            <p><b>Idade:</b></p><span class="destaque"> <?=$pessoaum[4]?></span>
            <p><b>Sexo:</b> </p><span class="destaque"><?=$pessoaum[3]?></span>
       </article>
       <article>
       <h3>Participante: </h3> 
        <p><b>Usuario:</b></p> <span class="destaque"><?=$pessoadois[0]?></span>
        <p><b>Email:</b> </p><span class="destaque"><?=$pessoadois[1]?></span>
        <p><b>Idade:</b></p> <span class="destaque"><?=$pessoadois[4]?></span>
        <p><b>Sexo:</b> </p><span class="destaque"><?=$pessoadois[3]?></span>
       </article>
    </section>
    </main>
</body>
</html>