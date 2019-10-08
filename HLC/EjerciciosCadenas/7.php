<html>
    <body>
        <?php
            $cadena = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
            $longitud = 8;
            echo $cadena,'<br>';
            $desordenada = str_shuffle($cadena);
            echo substr($desordenada,0,$longitud);
        ?>
    </body>
</html>