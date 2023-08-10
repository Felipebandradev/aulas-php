<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto Cadastrado</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        body{
            background-color: #ffbdc3;
        }
        h1{
            color:#fff; 
            background-color:#fb788b;
            padding: 3rem;
        }

        h2{
            color: #fff;
            background-color: #f35070;
        }

        
        fieldset{
            border: 3px solid #f35070;
            border-radius: 25px;
            background-color: #ffdee1;
        }

        legend{
            border: 3px solid #f35070;
            padding: 10px;
            border-radius: 20px;
            color:#fff;
            background-color: #f35070;
        }

        .errou{
            color: #fff;
            background-color: crimson;
        }

        a{
            text-decoration: none;
        }

    </style>
</head>
<body>
    <main>
    <h1 class="text-center">Loja de Produtos Eletrônicos</h1>
   
<?php 

if ( !empty($_POST["produto"]) || !empty($_POST["preco"])){

$produto_cadastrado = filter_input(INPUT_POST,"produto",FILTER_SANITIZE_FULL_SPECIAL_CHARS) ;

$filtro_preco = filter_input(INPUT_POST, "preco",FILTER_VALIDATE_FLOAT);
$preco = "R$".number_format($filtro_preco,2,",",".");

$disponibilidade = filter_input(INPUT_POST,"disponibilidade", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$fabricante = filter_input(INPUT_POST,"fabricante", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$descricao = filter_input(INPUT_POST,"descricao", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>
    <article class="container-lg">
        <h2 class=" text-center">Produto Cadastrado</h2>
        <p>Produto Cadastrado: <?=$produto_cadastrado?></p>
        <p>Preço: <?=$preco?></p>
        <p>Fabricante: <?=$fabricante?></p>
        <p>Disponibilidade: <?=$disponibilidade?></p>
        <p>Descrição: <?=$descricao?></p>

        <fieldset class="row g-3 container-lg m-auto p-5 shadow-lg ">
        <legend class="text-center"><b>Produto Cadastrado</b></legend>
            <div class="col-md-6 disabled">
                <p>
                <label for="produto" class="form-label">Nome do produto:</label>
                <input type="text" name="produto" id="produto" placeholder="<?=$produto_cadastrado?>" required class="form-control" disabled>
                </p>
            </div>
            <div class="col-6 disabled">
                        <p>
                            <label for="fabricante" class="form-label">Fabricante do Produto: </label>
                            <select name="fabricante" id="fabricante" class="form-select" disabled>
                                <option ><?=$fabricante?></option>
                            </select>
                        </p>
                    </div>
            <div class="col-md-6 disabled">
                        <p>
                            <label for="preco" class="form-label">Preço:</label>
                            <input type="number" name="preco" id="preco" min="100" max="10000" placeholder="<?=$preco?>" required class="form-control" step="0.01" disabled>
                        </p>
            </div>
              <div class="col-6 disabled">
                        <p>
                            <label for="disponibilidade" class="form-label"> Disponibilidade: </label>
                            <select name="diponibilidade" id="disponibilidade" class="form-select" disabled>
                                <option ><?=$disponibilidade?></option>
                            </select>
                        </p>
                    </div>
                    <div class="col-md-12 disabled">
                        <p>
                            <label for="descricao" class="form-label">Descrição do Produto:</label><br>
                            <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control" disabled><?=$descricao?></textarea>
                        </p>
                    </div>
        </fieldset>
    </article>
<?php
} else {
?>  
   <article class="container-lg">
       <h2  class=" text-center">Algo deu Errado!!</h2>
       <p class="errou text-center">Você Deve preencher todos os campos !!</p>
       <p> <a href="exercicio07.php" class="btn btn-primary" >Voltar</a></p>
   </article>

<?php } ?>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>