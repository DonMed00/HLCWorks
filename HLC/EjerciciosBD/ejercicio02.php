<?php
   echo '<link rel="stylesheet" type="text/css" href="estilos.css?1.0" media="all" >';

$servidor = "localhost";
$usuario = "root";
$clave = "";
$dbname = "BD";
$conexion = mysqli_connect ($servidor,$usuario,$clave,
$dbname) or die ('No pudo conectar');

$resultado = mysqli_query($conexion, "SELECT * FROM
Emple where dept_no=20");


echo '<div>';
echo "<p>Ejercicio 2: Realiza un script PHP que consulte los datos: APELLIDO, OFICIO
y SALARIO de los empleados de la tabla EMPLEADOS del departamento 20,
visualizando al final el número de empleados recuperados:</p>";
while ($fila = mysqli_fetch_array ($resultado)) {
    echo '<hr>';
    echo 'Apellido: '.$fila['apellido']."<br>";
    echo 'Oficio: '.$fila['oficio']."<br>";
    echo 'Salario: '.$fila['salario']."<br>";
   }
   echo '<hr>';
   echo 'Número de empleados en el departamento 20: '. mysqli_num_rows ($resultado);
   echo '</div>';

$conexion = mysqli_close($conexion);
if ($conexion){
 echo "<h2>CONEXIÓN CERRADA AUTOMATICAMENTE</h2>";
}

?>