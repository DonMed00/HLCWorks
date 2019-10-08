<html>
    <body>
        <?php
            $cadena = '2,543.12';
            $cadena2 = '345,102,543.12';
            echo str_replace(',','',$cadena), '<br>';
            echo str_replace(',','',$cadena2);
        ?>
    </body>
</html>