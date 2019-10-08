<html>
    <body>
        <?php
            $cadena = '000547023.24';
            for($i=1;$i< strlen($cadena);$i++){
                if(substr($cadena,0,$i) != 0){
                    echo substr($cadena,$i-1,10);
                    $i= strlen($cadena);
                }
            }
            
        ?>
    </body>
</html>