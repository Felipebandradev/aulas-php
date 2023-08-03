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
                return "Encher o saco no WhatsApp";
        }     
        ?>
        <p>Estamos no curso <?=dados_curso()?></p>
        <p><?=dados_curso()?> é ministrado no Senac Penha.</p>

        <h2>Funções com parâmetro ( ou argumento)</h2>
        <?php
        function soma( $valor1, $valor2, $valor3){
           // variavel de escopo local 
           return $total = $valor1 + $valor2 + $valor3;
        }
        ?>
        <!-- Chamando e exibindo o retorno  -->
        <p>Resultado 1: <?=soma(10, 20, 5)?></p>
        <p>Resultado 2: <?=soma(23, 84, 25)?></p>


        <?php 
        // chamando e guardando o resultado
        $resultado3 = soma(500,480,700);
        ?>

        <p>Resultado 3: <?=$resultado3?></p>
        
        <?php if($resultado3 > 100) {  ?>
            <p>Vinícius foi demitido!</p>
        <?php }else{ ?>
            <p>Vinícius recebe aumento!</p>
        <?php } ?>
        
        <?php if ( soma(2, 3, 10) >= 10 ){?>
            <p>Kauê foi Reprovado!!!</p>
        <?php } ?>

    </main>
</body>
</html>