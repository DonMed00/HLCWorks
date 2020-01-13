<?php
 echo '<link rel="stylesheet" type="text/css" href="estilos1.css?1.0" media="all" >';
$servidor = "localhost";
$usuario = "root";
$clave = "";
$dbname = "BD";
$conexion = mysqli_connect ($servidor,$usuario,$clave,
$dbname) or die ('No pudo conectar');

$resultado = mysqli_query($conexion, "SELECT * FROM
Depart");


echo '<p>Ejercicio 3: Modifica el ejercicio 1 para devolver este resultado:</p>
<hr> 
<h2>LISTADO DE LOS DEPARTAMENTOS</h2>
<table>
<tr> 
<th>Número</th>
<th>Nombre</th>
<th>Localidad</th>
</tr>
<tr> ';

while ($fila = mysqli_fetch_array ($resultado)) {
    echo '<tr>
    <td>';
    echo $fila['dept_no'];
    echo '</td><td>';
    echo $fila['dnombre'];
    echo '</td><td>';
    echo $fila['loc'];
    echo '</td>';
    echo '</tr>';
   }
   echo '</table>';
   echo '<hr>';
   echo '<h2>Número de departamentos: '. mysqli_num_rows ($resultado).'</h2>';

?>