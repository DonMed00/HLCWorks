<?php
$fichero = @fopen('libros.txt', 'r+b', true );
if(!$fichero){
    echo 'No se puede abrir el fichero.';
}else{
    $num=1;
    while (!feof($fichero)){
        $linea = fgets ($fichero) ;
        echo $linea.'<br />';
        $num++;
    }
}
fclose($fichero);
echo 'Los datos se han mostrado correctamente.<br>';
echo '<a href="javascript:history.back()"> Volver Atrás</a>';

?>