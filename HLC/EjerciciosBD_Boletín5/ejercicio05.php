
<html>
<head>
<title>EJERCICIO BD1</title>
<link rel="stylesheet" type="text/css" href="estilos.css?1.0" media="all" >
</head>
<body>
 <h2>EMPLEADOS POR DEPARTAMENTO</h2>
 <hr />
 <form action="ejercicio05.php" method="POST">
 <p>Escribe el código de departamento:
 <input name="dept_num" type="text" size="10"/>
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
    if ($_POST['dept_num']=='') {
        echo '<h2>Fallo, No has metido el departamento</h2>';
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
$dept_num = $_POST['dept_num'];

$resultado = mysqli_query($conexion, "SELECT * FROM
emple where dept_no='$dept_num'");
if(mysqli_num_rows ($resultado)==0){
echo '<h2> No hay consultas disponibles</h2>';
}else{
    $resultado2 = mysqli_query($conexion, "SELECT * FROM
    depart where dept_no='$dept_num'");
    echo '<hr>
    <h2>LISTADO DE LOS EMPLEADOS DEL DEPARTAMENTO DE '. strtoupper(mysqli_fetch_array ($resultado2)['dnombre']).'</h2>
    <table>
    <tr> 
    <th>Empleado</th>
    <th>Apellido</th>
    <th>Salario</th>
    </tr>
    <tr> ';
    
    while ($fila = mysqli_fetch_array ($resultado)) {
        echo '<tr>
        <td>';
        echo $fila['emp_no'];
        echo '</td><td>';
        echo $fila['apellido'];
        echo '</td><td>';
        echo $fila['salario'];
        echo '</td>';
        echo '</tr>';
       }
       echo '</table>';
       echo '<hr>';
       echo '<h2>Número de empleados: '. mysqli_num_rows ($resultado).'</h2>';
    }    
}   
?>