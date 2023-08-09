<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto Cadastrado</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <main>
    <h1>Loja de Produtos Eletrônicos</h1>
    <hr>
<?php 

if ( !empty($_POST["produto"]) || !empty($_POST["preco"])){

$produto = filter_input(INPUT_POST,"produto",FILTER_SANITIZE_FULL_SPECIAL_CHARS) ;

$filtro_preco = filter_input(INPUT_POST, "preco",FILTER_SANITIZE_NUMBER_INT);
$preco = "R$".number_format($filtro_preco,2,",",".");

$disponibilidade = filter_input(INPUT_POST,"disponibilidade", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$fabricante = filter_input(INPUT_POST,"fabricante", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$descricao = filter_input(INPUT_POST,"descricao", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>
    <p>Produto Cadastrado: <?=$produto?></p>
    <p>Preço: <?=$preco?></p>
    <p>Fabricante: <?=$fabricante?></p>
    <p>Disponibilidade: <?=$disponibilidade?></p>
    <p>Descrição: <?=$descricao?></p>
<?php
}
?>    


</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>