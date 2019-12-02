<?php
$title = $_POST['title'];
$type = $_POST['type'];
$observations = $_POST['observations'];


$fichero = @fopen('libros.txt', 'a+b', true );
if(!$fichero){
    echo 'No se puede abrir el fichero.';
}else{
    if(!fwrite($fichero,'Título: ')||!fwrite($fichero,$title, strlen($title))||!fwrite($fichero,PHP_EOL)||!fwrite($fichero,'Tipo: ')||
    !fwrite($fichero,$type, strlen($type))||!fwrite($fichero,PHP_EOL)||!fwrite($fichero,'Observaciones: ')||
    !fwrite($fichero,$observations, strlen($observations))||!fwrite($fichero,PHP_EOL, strlen($title))||!fwrite($fichero,'------------------------------------------')
    ||!fwrite($fichero,PHP_EOL, strlen($title))){
        echo 'Ha habido algun error.';
    }else{
        echo 'Los datos se han guardado correctamente.<br>';
        echo '<a href="javascript:history.back()"> Volver Atrás</a>';
    }
}
fclose($fichero);
?>

