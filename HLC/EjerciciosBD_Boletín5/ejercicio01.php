<?php
   echo '<link rel="stylesheet" type="text/css" href="estilos.css?1.0" media="all" >';

   $servidor = "localhost";
   $usuario = "root";
   $clave = "";
   $dbname = "bd";
   $conexion = mysqli_connect ($servidor,$usuario,$clave,
   $dbname) or die ('No se pudo conectar');

   $resultado = mysqli_query($conexion, "SELECT * FROM
   emple order by dept_no");

if(mysqli_num_rows ($resultado)==0){
    echo '<h2> No hay consultas disponibles</h2>';
    }else{
    
        echo '<hr>
        <h2>LISTADO DE LOS EMPLEADOS</h2>
        <table>
        <tr> 
        <th>Apellido</th>
        <th>Oficio</th>
        <th>Departamento</th>
        <th>Salario</th>
        </tr>
        <tr> ';
        
        while ($fila = mysqli_fetch_array ($resultado)) {
            echo '<tr>
            <td>';
            echo $fila['apellido'];
            echo '</td><td>';
            echo $fila['oficio'];
            echo '</td><td>';
            echo $fila['dept_no'];
            echo '</td><td>';
            echo $fila['salario'];
            echo '</td>';
            echo '</tr>';
           }
           echo '</table>';
           echo '<hr>';
           echo '<h2>Número de empleados: '. mysqli_num_rows ($resultado).'</h2>';
        }    
   
$conexion = mysqli_close($conexion);

?>