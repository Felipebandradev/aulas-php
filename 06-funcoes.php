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
        
        <?php
        function saudacao( $mensagem , $pessoa = "Fulano(a)"){
            return "Olá, $mensagem $pessoa!"; 
        }
        ?>

        <p> <?=saudacao("Bom dia!", "Melissa" )?></p>
        <p> <?=saudacao("Boa noite!", "Tanaka" )?></p>
        <p> <?=saudacao("Boa Tarde!")?></p>

        <h2>Indução de tipos de dados</h2>

        <?php
        /*  Tipos de dados mais comuns 
        string -> Caracteres em geral;
        int -> números inteiros ;
        Float -> números com casas decimais ;
        array -> vetor;

        isso auxiliará na entrada/saída correta 
        do dados manipulados pala função, além de melhorar
        as mensagens de erro  quando ocorrem problemas.
        */
        function verificando_negativo(int  $valor):string {
            if( $valor < 0){
                return "É negativo";
            }
            /* Early Return (é possivel omitir o else nesse caso): */
            return "Não é negativo";

        }
        /* Código abaixo da erro se usar indução de tipo:
        <p>Número 50: <?=verificando_negativo("TEXTO")</p>  */
        ?>

        <p>Número 10: <?=verificando_negativo(10)?></p>
        <p>Número -10: <?=verificando_negativo(-10)?></p>
        <p>Número 50: <?=verificando_negativo(50)?></p>
        
        <hr>

        <h2>Função anônima (ou Closure, lambda)</h2>

        <?php
        $formata_preco = function(float $valor){
            // R$ 1.000,00
            return $preco_formatado = "R$".number_format($valor,2,",",".");    
        };
        ?>
        <p>1000 formatado fica: <?=$formata_preco(1000)?></p>

    </main>
</body>
</html>