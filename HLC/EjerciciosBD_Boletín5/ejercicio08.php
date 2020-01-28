
<?php
if (isset($_POST['baja'])) { /*Deberia de estar bien las FK para que al realizar el Delete
    se borre correctamente en cascada*/
        $servidor = "localhost";
        $usuario = "root";
        $clave = "";
        $dbname = "bd";
        $conexion = mysqli_connect ($servidor,$usuario,$clave,
        $dbname) or die ('No se pudo conectar');
        $cod_Hospi = $_POST['cod_Hospi'];
        
        $resultado2 = mysqli_query($conexion, "SELECT cod_hospital,nombre,direccion,num_plazas FROM
        hospitales where cod_hospital ='$cod_Hospi'");

         $resultado = mysqli_query($conexion, "DELETE FROM hospitales 
         WHERE cod_hospital = '$cod_Hospi'");

        if(mysqli_num_rows ($resultado2)==0){
            echo '<h2> No existe el hospital</h2>';
        }else{
            echo 'Hospital eliminado correctamente ';
            echo '<h2>Número de lineas afectadas: '. mysqli_num_rows ($resultado2)+1.'</h2>';
        }
        echo '<a href="javascript:history.go(-1);">Atras</a>';



 }else if($_POST['consultar']){
    echo '<link rel="stylesheet" type="text/css" href="estilos.css?1.0" media="all" >';

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $dbname = "bd";
    $conexion = mysqli_connect ($servidor,$usuario,$clave,
    $dbname) or die ('No se pudo conectar');
    $cod_Hospi = $_POST['cod_Hospi'];

    
    $resultado = mysqli_query($conexion, "SELECT apellidos,especialidad FROM
    medicos where cod_hospital ='$cod_Hospi'");

    $resultado2 = mysqli_query($conexion, "SELECT cod_hospital,nombre,direccion,num_plazas FROM
    hospitales where cod_hospital ='$cod_Hospi'");

    if(mysqli_num_rows ($resultado)==0){
    echo '<h2> No hay consultas disponibles</h2>';
    }else{
    

        echo '<hr>
        <h2>LISTADO DE LOS EMPLEADOS AFECTADOS DEL HOSPITAL: </h2>';
        while ($fila = mysqli_fetch_array ($resultado2)) {
        echo '<p>Codigo del Hospital: '.$fila['cod_hospital'] .'</p>
        <p>Nombre: '.$fila['nombre'].'</p>
        <p>Dirección: '.$fila['direccion'].'</p>
        <p> Plazas: '.$fila['num_plazas'].'</p>';
        }
        echo '<table>
        <tr> 
        <th>Apellidos</th>
        <th>Especialidad</th>
        </tr>
        <tr> ';
        
        while ($fila = mysqli_fetch_array ($resultado)) {
            echo '<tr>
            <td>';
            echo $fila['apellidos'];
            echo '</td><td>';
            echo $fila['especialidad'];
            echo '</td>';
            echo '</tr>';
           }
           echo '</table>';
           echo '<hr>';
           echo '<h2>Número de lineas afectadas: '. mysqli_num_rows ($resultado).'</h2>';
           echo '<a href="javascript:history.go(-1);">Atras</a>';

        }    
    }   


?>