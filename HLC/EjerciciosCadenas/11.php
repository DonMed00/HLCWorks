<html>
    <body>
        <div>
            <?php
            $cadena = "https://www.example.com/index.php";
            $fichero = explode("/", $cadena);
            echo substr($fichero[3],0,strpos($fichero[3],'.')),'<br>';
            
            
           ?>
        </div>
    </body>
</html>