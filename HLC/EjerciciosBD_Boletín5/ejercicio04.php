
<html>
<head>
<title>EJERCICIO BD1</title>
<link rel="stylesheet" type="text/css" href="estilos.css?1.0" media="all" >
</head>
<body>
 <h2>EMPLEADOS POR HOSPITAL</h2>
 <hr />
 <form action="ejercicio04.php" method="POST">
 <p>Escribe el código de hospital:
 <input name="cod_Hospi" type="text" size="10"/>
 <p>Escribe la función:
 <input name="funcion" type="text" size="10"/>
 </p>
 <input name="consultar" type="submit" value="Consultar empleados"/>
 
 </form>
 </body>
 </html>

<?php


validarFormulario();
function validarFormulario(){
    if (isset($_POST['consultar'])) {
        comprobarInputs();
    }

}
function comprobarInputs(){
    if ($_POST['cod_Hospi']==''||$_POST['funcion']=='') {
        echo '<h2>Fallo, No has metido el codigo y/u funcion</h2>';
    }else{
        realizarOperacion();
    }
}
function realizarOperacion(){
$servidor = "localhost";
$usuario = "root";
$clave = "";
$dbname = "bd";
$conexion = mysqli_connect ($servidor,$usuario,$clave,
$dbname) or die ('No se pudo conectar');
$cod_Hospi = $_POST['cod_Hospi'];
$funcion = $_POST['funcion'];

$resultado = mysqli_query($conexion, "SELECT * FROM
personas where cod_hospital='$cod_Hospi' and funcion='$funcion'");
if(mysqli_num_rows ($resultado)==0){
echo '<h2> No hay consultas disponibles</h2>';
}else{
    $resultado2 = mysqli_query($conexion, "SELECT hospitales.nombre,funcion FROM
    hospitales,personas where hospitales.cod_hospital='$cod_Hospi'");
    echo '<hr>
    <h2>LISTADO DE LOS EMPLEADOS DEL HOSPITAL DE  '. strtoupper(mysqli_fetch_array ($resultado2)['nombre']).' Y FUNCION '.strtoupper($funcion).'</h2>
    <table>
    <tr> 
    <th>DNI</th>
    <th>Apellidos</th>
    </tr>
    <tr> ';
    
    while ($fila = mysqli_fetch_array ($resultado)) {
        echo '<tr>
        <td>';
        echo $fila['dni'];
        echo '</td><td>';
        echo $fila['apellidos'];
        echo '</td>';
        echo '</tr>';
       }
       echo '</table>';
       echo '<hr>';
       echo '<h2>Número de empleados: '. mysqli_num_rows ($resultado).'</h2>';
    }    
}   
?>