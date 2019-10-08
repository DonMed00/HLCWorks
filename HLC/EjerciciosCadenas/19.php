<html>
    <body>
        <?php
            $cadena = 'En un lugar de la de cuyo nombre';
            $palabra = explode(' ',$cadena);
            for($i=0;$i< 5;$i++){
                echo $palabra[$i],' ';
            }
            
        ?>
    </body>
</html>