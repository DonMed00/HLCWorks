<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$dbname = "BD";
$conexion = mysqli_connect ($servidor,$usuario,$clave,
$dbname) or die ('No pudo conectar');

$resultado = mysqli_query($conexion, "SELECT * FROM
Depart");
while ($fila = mysqli_fetch_array ($resultado)) {
    echo 'Departamento: '.$fila['dept_no']."<br>";
    echo 'Nombre: '.$fila['dnombre']."<br>";
    echo 'Localidad: '.$fila['loc']."<br>";
    echo '<hr>';

   }


$conexion = mysqli_close($conexion);
if ($conexion){
 echo "<h2>CONEXION CERRADA AUTOMATICAMENTE</h2>";
}

?>