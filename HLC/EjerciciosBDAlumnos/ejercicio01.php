
<html>
<head>
<title>EJERCICIO BD1</title>
<link rel="stylesheet" type="text/css" href="estilos.css?1.0" media="all" >
</head>
<body>
 <h2>EMPLEADOS POR DEPARTAMENTO</h2>
 <hr />
 <form action="ejercicio01.php" method="POST">
 <p>Escribe el número de Departamento:
 <input name="numdep" type="text" size="10"/>
 <p>Escribe el oficio:
 <input name="oficio" type="text"/>
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
    if ($_POST['numdep']==''||$_POST['oficio']=='') {
        echo '<h2>Fallo, No has metido el departamento y/u oficio</h2>';
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
$depart = $_POST['numdep'];
$oficio = $_POST['oficio'];
$resultado = mysqli_query($conexion, "SELECT * FROM
emple where dept_no='$depart' and oficio='$oficio'");
if(mysqli_num_rows ($resultado)==0){
echo '<h2> No hay consultas disponibles</h2>';
}else{

    echo '<hr>
    <h2>LISTADO DE LOS EMPLEADOS DEL DEPARTAMENTO '. $_POST['numdep']. ' CON EL OFICIO DE ' .strtoupper($_POST['oficio']) .'</h2>
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