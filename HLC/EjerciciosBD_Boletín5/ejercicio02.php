<?php
   echo '<link rel="stylesheet" type="text/css" href="estilos.css?1.0" media="all" >';

   $servidor = "localhost";
   $usuario = "root";
   $clave = "";
   $dbname = "bd";
   $conexion = mysqli_connect ($servidor,$usuario,$clave,
   $dbname) or die ('No se pudo conectar');

   $resultado = mysqli_query($conexion, "SELECT * FROM
   hospitales order by num_plazas");

if(mysqli_num_rows ($resultado)==0){
    echo '<h2> No hay consultas disponibles</h2>';
    }else{
    
        echo '<hr>
        <h2>LISTADO DE LOS HOSPITALES</h2>
        <h2>Número de empleados: '. mysqli_num_rows ($resultado).'</h2>
        <hr>
        <table>
        <tr> 
        <th>COD_HOSPITAL</th>
        <th>NOMBRE</th>
        <th>DIRECCIÓN</th>
        <th>NUM_PLAZAS</th>
        </tr>
        <tr> ';
        
        while ($fila = mysqli_fetch_array ($resultado)) {
            echo '<tr>
            <td>';
            echo $fila['cod_hospital'];
            echo '</td><td>';
            echo $fila['nombre'];
            echo '</td><td>';
            echo $fila['direccion'];
            echo '</td><td>';
            echo $fila['num_plazas'];
            echo '</td>';
            echo '</tr>';
           }
           echo '</table>';
           
        }    
   
$conexion = mysqli_close($conexion);

?>