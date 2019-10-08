<html>
    <body>
        <?php
            $cadena = 'football';
            $cadena2 = 'footboll';
            for($i=0;$i<strlen($cadena);$i++){
                if(substr($cadena,0,$i) != substr($cadena2,0,$i)){
                    echo 'La primera diferencia entre las dos cadenas está en la posición ', $i-1,': ',substr($cadena,$i-1,1),' <> ',substr($cadena,$i-1,1);
                   $i =strlen($cadena);
                }
            }
        ?>
    </body>
</html>