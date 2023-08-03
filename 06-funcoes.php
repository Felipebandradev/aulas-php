<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções PHP</title>
</head>
<body>
    <main>
        <h1>Criando e usando funções</h1>
        <hr>

        <h2>Funções como procedimento ou sub-rotina</h2>

        <?php
        function dadoAutor(){
        ?>
        <div>
        <p>Aline</p>
        <p><a href="mailto">email@aa.com</a></p>
        </div>
        <?php }?>

        <section>
            <h3>Chamada da Sub-rotina/procedimento</h3>
            <p><?=dadoAutor()?></p>

            <article>
                <h4>Outra Chamada</h4>
                <?=dadoAutor()?>
            </article>
            
        </section>
    </main>
</body>
</html>