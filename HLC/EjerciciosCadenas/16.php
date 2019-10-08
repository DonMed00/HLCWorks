<html>
    <body>
        <?php
            $cadena = 'En un lugar de la mancha de cuyo nombre.';
            $palabra = 'mancha';
            echo iconv_substr($cadena,0,strpos($cadena,'m')),iconv_substr($cadena,strpos($cadena,' de c'),20);
        ?>
    </body>
</html>