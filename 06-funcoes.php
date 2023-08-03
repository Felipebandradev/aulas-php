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

        <h2>Função com retorno de dados</h2>

        <?php
        function dados_curso(){
                return "Encher po saco no WhatsApp";
        }     
        ?>
        <p>Estamos no curso <?=dados_curso()?></p>
        <p><?=dados_curso()?> é ministrado no Senac Penha.</p>
    </main>
</body>
</html>