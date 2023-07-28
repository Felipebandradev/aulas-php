<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Geral</title>
    <style>
    p{ font-family: "Verdana";}
    .destaque{ text-transform:uppercase;}    
    </style>
</head>
<body>
    <h1 class="destaque">Trabalhando PHP</h1>
    <hr>
    <?php
        // Geração de texto(STRING)
        echo "Hoje tem Corinthians!";
        echo "<p class='destaque'>Hoje tem Corinthians!</p>";

        // Geração de texto estruturado(com tags, atributos)
        echo"<h2>Gerando HTML através do PHP </h2>";
        // CSS inline
        echo"<p style=\"color:red\">O Vínicius esta reprovado</p>";
        echo"<p style='color:pink'>O Vínicius esta reprovado</p>";
        echo'<p style="color:orange">O Vínicius esta reprovado</p>';

        // Classes CSS
    ?>
    <script>
        let destaque = document.querySelector("p.destaque");
        console.log(destaque);
    </script>
</body>
</html>