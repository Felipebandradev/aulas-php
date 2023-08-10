<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casdatro de Produto</title>

 

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
    </style>
</head>

<body>
    <main>
        <h1 class=" text-center">Loja de Produtos Eletrônicos</h1>
        <form action="exercicio07-produto-enviado.php" method="post">

            <fieldset class="row g-3 container-lg m-auto p-5 shadow-lg ">
                <legend class="text-center"><b>Cadastro de Produto</b></legend>
                <div class="col-md-6">
                    <p>
                        <label for="produto" class="form-label">Nome do produto:</label>
                        <input type="text" name="produto" id="produto" placeholder="Ex: Geladeira Portátil" required class="form-control">
                    </p>
                </div>
                <div class="col-6">
                    <p>
                        <label for="fabricante" class="form-label">Fabricante do Produto: </label>
                        <select name="fabricante" id="fabricante" class="form-select" required>
                            <option value=""></option>
                            <?php
                            $fabricantes = ["Eletrolux", "Samsung", "Philips", "LG", "hp"];
                            foreach ($fabricantes as $fabricante) {
                            ?>
                                <option value="<?= $fabricante ?>"><?= $fabricante ?></option>
                            <?php } ?>
                        </select>
                    </p>
                </div>
                <div class="col-md-6">
                    <p>
                        <label for="preco" class="form-label">Preço:</label>
                        <input type="number" name="preco" id="preco" min="100" max="10000" placeholder="100 - 10000" required class="form-control" step=".01">
                    </p>
                </div>
                <div class="col-form-label col-md-6 ">
                    <p>Disponibilidade em estoque: </p>
                    <div class="form-check">
                        <input type="radio" name="disponibilidade" id="disponibilidade" value="sim" class="form-check-input">
                        <label for="disponibilidade" class="form-check-label">Sim</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="disponibilidade" id="disponibilidade" value="não" class="form-check-input">
                        <label for="disponibilidade" class="form-check-label">Não</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <p>
                        <label for="descricao" class="form-label">Descrição do Produto:</label><br>
                        <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control" required></textarea>
                    </p>
                </div>
                <div class="col-12">
                    <button type="submit" id="enviar" name="enviar" class="btn btn-primary">enviar</button>
                </div>
            </fieldset>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>