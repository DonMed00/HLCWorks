
<?php
if (isset($_POST['insertar'])) { /**La base de datos deberia tener las fk correctas,
     para asi no tener que comprobar si el usuario deja los campos vacíos. */
        $servidor = "localhost";
        $usuario = "root";
        $clave = "";
        $dbname = "bd";
        $conexion = mysqli_connect ($servidor,$usuario,$clave,
        $dbname) or die ('No se pudo conectar');
        $cod_Hospi = $_POST['cod_Hospi'];
        $name = $_POST['name'];
        $funcion = $_POST['funcion'];
        $plazas = $_POST['plazas'];
        
        $resultado = mysqli_query($conexion, "INSERT INTO hospitales 
        VALUES ('$cod_Hospi','$name','$funcion','$plazas')");

        echo 'Hospital introducido correctamente ';
        echo '<a href="javascript:history.go(-1);">Atras</a>';


 }elseif (isset($_POST['cancelar'])) { 
    header('Location: ejercicio07.html');
  }else if($_POST['consultar']){
    echo '<link rel="stylesheet" type="text/css" href="estilos.css?1.0" media="all" >';

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $dbname = "bd";
    $conexion = mysqli_connect ($servidor,$usuario,$clave,
    $dbname) or die ('No se pudo conectar');

    
    $resultado = mysqli_query($conexion, "SELECT * FROM
    hospitales");
    if(mysqli_num_rows ($resultado)==0){
    echo '<h2> No hay consultas disponibles</h2>';
    }else{
    
        echo '<hr>
        <h2>LISTADO DE LOS HOSPITALES</h2>
        <table>
        <tr> 
        <th>Cod_hospital</th>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Num_plazas</th>
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
           echo '<hr>';
           echo '<h2>Número de hospitales: '. mysqli_num_rows ($resultado).'</h2>';
           echo '<a href="javascript:history.go(-1);">Atras</a>';

        }    
    }   


?>