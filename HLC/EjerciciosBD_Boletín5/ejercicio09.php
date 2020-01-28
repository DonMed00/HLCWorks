
<?php
if (isset($_POST['actualizar'])) { /**La base de datos deberia tener las fk correctas,
     para asi no tener que comprobar si el usuario deja los campos vacíos. */
        $servidor = "localhost";
        $usuario = "root";
        $clave = "";
        $dbname = "bd";
        $conexion = mysqli_connect ($servidor,$usuario,$clave,
        $dbname) or die ('No se pudo conectar');
        $cod_Hospi = $_POST['cod_Hospi'];
        $name = $_POST['name'];
        $direccion = $_POST['direccion'];
        $plazas = $_POST['plazas'];
        
        $resultado = mysqli_query($conexion, "UPDATE hospitales 
        SET nombre='$name',direccion='$direccion',num_plazas='$plazas' WHERE cod_hospital='$cod_Hospi'");
        
        $resultado2 = mysqli_query($conexion, "select cod_hospital from hospitales where cod_hospital='$cod_Hospi'");

        if(mysqli_num_rows ($resultado2)==0){
            echo '<h2> No existe dicho hospital</h2>';
        }else{
            echo 'Hospital modificado correctamente ';
        }
        echo '<a href="javascript:history.go(-1);">Atras</a>';


 }elseif (isset($_POST['cancelar'])) { 
    header('Location: ejercicio09.html');
  }else{
    echo '<link rel="stylesheet" type="text/css" href="estilos.css?1.0" media="all" >';

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $dbname = "bd";
    $conexion = mysqli_connect ($servidor,$usuario,$clave,
    $dbname) or die ('No se pudo conectar');
    $cod_Hospi = $_POST['cod_Hospi'];

    
    $resultado = mysqli_query($conexion, "SELECT * FROM
    hospitales where cod_hospital='$cod_Hospi'");
    if(mysqli_num_rows ($resultado)==0){
    echo '<h2> No hay consultas disponibles</h2>';
    }else{
    
        echo '<hr>
        <h2>HOSPITAL</h2>
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

        }   
        echo '<a href="javascript:history.go(-1);">Atras</a>';
 
    }   


?>