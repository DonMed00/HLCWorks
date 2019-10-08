<html>
    <body>
        <?php
        
            $caracter = 'a';
            $asciiCaracter = ord($caracter);
            if ($asciiCaracter == 122){
                $asciiCaracter =96;
            }
            echo chr($asciiCaracter+1);        
            ?>
    </body>
</html>