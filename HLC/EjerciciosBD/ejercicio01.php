<?php
   echo '<link rel="stylesheet" type="text/css" href="estilos.css?1.0" media="all" >';

$servidor = "localhost";
$usuario = "root";
$clave = "";
$dbname = "BD";
$conexion = mysqli_connect ($servidor,$usuario,$clave,
$dbname) or die ('No pudo conectar');

$resultado = mysqli_query($conexion, "SELECT * FROM
Depart");


echo '<div>';
echo "<P>Ejercicio 1: A partir de la BD suministrada (Departamentos, Empleados, etc.)
crear un script que conecte con dicha base de datos y devuelva este
resultado:</P>";
while ($fila = mysqli_fetch_array ($resultado)) {
    echo '<hr>';
    echo 'Departamento: '.$fila['dept_no']."<br>";
    echo 'Nombre: '.$fila['dnombre']."<br>";
    echo 'Localidad: '.$fila['loc']."<br>";
   }
   echo '</div>';

$conexion = mysqli_close($conexion);
if ($conexion){
 echo "<h2>CONEXIÓN CERRADA AUTOMATICAMENTE</h2>";
}

?>