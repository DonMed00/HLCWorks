<html>
    <body>
        <div>
            <?php
            $cadena = "En un lugar de la mancha de cuyo nombre <br>";
            $palabra = "cuyo";
            echo $cadena;
            if (strpos($cadena, $palabra) !== false) {
                echo 'Si, la contiene';
            }else{
                echo 'No la contiene';
            }
            ?>
        </div>
    </body>
</html>