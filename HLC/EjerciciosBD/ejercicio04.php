<?php
   echo '<link rel="stylesheet" type="text/css" href="estilos1.css?1.0" media="all" >';
$servidor = "localhost";
$usuario = "root";
$clave = "";
$dbname = "BD";
$conexion = mysqli_connect ($servidor,$usuario,$clave,
$dbname) or die ('No pudo conectar');

$resultado = mysqli_query($conexion, "SELECT * FROM
Emple where dept_no=20");


echo '<p>Ejercicio 4: Modifica el ejercicio 3 para devolver este resultado.</p>
<hr> 
<h2>LISTADO DE LOS EMPLEADOS</h2>
<table>
<tr> 
<th>APELLIDO</th>
<th>OFICIO</th>
<th>SALARIO</th>
</tr>
<tr> ';

while ($fila = mysqli_fetch_array ($resultado)) {
    echo '<tr>
    <td>';
    echo $fila['apellido'];
    echo '</td><td>';
    echo $fila['oficio'];
    echo '</td><td>';
    echo $fila['salario'];
    echo '</td>';
    echo '</tr>';
   }
   echo '</table>';
   echo '<hr>';
   echo '<h2>Número de empleados: '. mysqli_num_rows ($resultado).'</h2>';

?>