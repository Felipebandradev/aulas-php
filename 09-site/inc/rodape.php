</main>
<footer>
        <p>Site criado pelo curso de<b> téc. Informatica para internet </b></p>
        <?php 
            date_default_timezone_set("America/Sao_Paulo");
             $data = date("d/m/Y H:i");
             $hora = date("H:i");
             echo "Hora: ".$hora;
        ?>
    </footer>
</body>
</html>