<html>
    <body>
        <div>
            <?php
            $cadena = 'www.example.com/public_html/index.php';
            $fichero = explode("/", $cadena);
            echo $cadena,'<br>';
            echo end($fichero);
           ?>
        </div>
    </body>
</html>