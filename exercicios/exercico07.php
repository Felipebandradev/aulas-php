<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casdatro de Produto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <main>
        <h1>Loja de Produtos Eletrônicos</h1>
        <hr>
        <form action="exercicio07-produto-enviado.php" method="post" class="row g-3">
            <div class="row g-3">
                <div class=" col-md-6">
                    <p>
                        <label for="produto">Produto:</label>
                        <input type="text" name="pruduto" id="produto" placeholder="Ex: Geladeira Potátil" required>
                    </p>
                </div>
                <div class="col-md-6">
                    <p>
                        <label for="preco">Preço:</label>
                        <input type="number" name="preco" id="preco" min="100" max="10000" placeholder="100 - 10000" required>
                    </p>
                </div>
            </div>

            <div>
                <p>
                    <label for="fabricante">Fabricante do Produto: </label>
                     <select name="fabricante" id="fabricante">
                        <option value=""></option>
                        <?php 
                        $fabricantes = ["Eletrolux","Samsung","Philips","LG","hp"]; 
                        
                        foreach ($fabricantes as $fabricante) {
                        ?>
                            <option value="<?=$fabricante?>"><?=$fabricante?></option>
                        <?php } ?>
                     </select>
                </p>
            </div>

            <div>
                <p>Disponibilidade em estoque: </p>
    
                    <input type="radio" name="disponibilidade" id="disponibilidade" value="sim">
                    <label for="disponibilidade">Sim</label>

                    <input type="radio" name="disponibilidade" id="disponibilidade" value="não">
                    <label for="disponibilidade">Não</label>      
            </div>

            <div>
                <p>
                    <label for="descricao">Descrição do Produto:</label><br>
                    <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
                </p>
            </div>
            
            <button type="submit" id="enviar" name="enviar">enviar</button>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>