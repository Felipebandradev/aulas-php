</main>
<footer>
        <p>Site criado pelo curso de<b> téc. Informatica para internet </b></p>
        <?php 
            date_default_timezone_set("America/Sao_Paulo");
             $data = date("d/m/Y");
             $hora = date("H:i");
        ?>
        <p> Data: <?=$data?> </p>
        <p>Horas: <?=$hora?></p>
        <p>Fuzo horário de São Paulo</p>
    </footer>
</body>
</html>