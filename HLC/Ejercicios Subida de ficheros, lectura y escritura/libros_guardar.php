<?php
$title = $_POST['title'];
$type = $_POST['type'];
$observations = $_POST['observations'];


$fichero = @fopen('libros.txt', 'a+b', true );
if(!$fichero){
    echo 'No se puede abrir el fichero.';
}
$salto = '\n';
fwrite($fichero,'Título: ', strlen($title));
fwrite($fichero,$title, strlen($title));
fwrite($fichero,PHP_EOL, strlen($title));
fwrite($fichero,'Tipo: ', strlen($title));
fwrite($fichero,$type, strlen($title));
?>
