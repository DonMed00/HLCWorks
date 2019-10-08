<html>
    <body>
        <div>
            <?php
            $cadena = "082307";
            $time = new DateTime($cadena);
            echo $cadena , "<br>";
            print $time->format('H:i:s');
            ?>
        </div>
    </body>
</html>