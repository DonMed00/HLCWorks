
<html>
<head>
<title>EJERCICIO BD2</title>
<link rel="stylesheet" type="text/css" href="estilos1.css?1.0" media="all" >
</head>
<body>
 <h2>ALUMNOS</h2>
 <hr />
 <form action="ejercicio02.php" method="POST">
 <input name="consultarTodos" type="submit" value="Consultar todos los alumnos"/>
 <p>Escribe el curso:
 <input name="curso" type="text"/>
 </p>
 <input name="consultar" type="submit" value="Consultar por curso"/>
 
 </form>
 </body>
 </html>

<?php


validarFormulario();
function validarFormulario(){
    if (isset($_POST['consultar'])) {
        comprobarInputs();
    }else if(isset($_POST['consultarTodos'])){
        consultarTodos();
    }

}
function consultarTodos(){
$servidor = "localhost";
$usuario = "root";
$clave = "";
$dbname = "alumbd";
$conexion = mysqli_connect ($servidor,$usuario,$clave,
$dbname) or die ('No se pudo conectar');
$resultado = mysqli_query($conexion, "SELECT num_matricula,nombre,direccion,cod_curso FROM
alumnos");
if(mysqli_num_rows ($resultado)==0){
echo '<h2> No hay consultas disponibles</h2>';
}else{

    echo '<hr>
    <h2>LISTADO DE TODOS LOS ALUMNOS</h2>
    <table>
    <tr> 
    <th>Código</th>
    <th>Nombre</th>
    <th>Dirección</th>
    <th>Curso</th>
    </tr>
    <tr> ';
    
    while ($fila = mysqli_fetch_array ($resultado)) {
        echo '<tr>
        <td>';
        echo $fila['num_matricula'];
        echo '</td><td>';
        echo $fila['nombre'];
        echo '</td><td>';
        echo $fila['direccion'];
        echo '</td><td>';
        echo $fila['cod_curso'];
        echo '</td>';
        echo '</tr>';
       }
       echo '</table>';
       echo '<hr>';
       echo '<h2>Número de alumnos: '. mysqli_num_rows ($resultado).'</h2>';
    }    

}
function comprobarInputs(){
    if ($_POST['curso']=='') {
        echo '<h2>Fallo, No has metido el curso</h2>';
    }else{
        realizarOperacion();
    }
}
function realizarOperacion(){
$servidor = "localhost";
$usuario = "root";
$clave = "";
$dbname = "alumbd";
$conexion = mysqli_connect ($servidor,$usuario,$clave,
$dbname) or die ('No se pudo conectar');
$curso = $_POST['curso'];
$resultado = mysqli_query($conexion, "SELECT num_matricula,nombre,direccion,cod_curso FROM
alumnos where cod_curso='$curso'");
if(mysqli_num_rows ($resultado)==0){
echo '<h2> No hay consultas disponibles</h2>';
}else{

    echo '<hr>
    <h2>LISTADO DE TODOS LOS ALUMNOS</h2>
    <table>
    <tr> 
    <th>Código</th>
    <th>Nombre</th>
    <th>Dirección</th>
    <th>Curso</th>
    </tr>
    <tr> ';
    
    while ($fila = mysqli_fetch_array($resultado)) {
        echo '<tr>
        <td>';
        echo $fila['num_matricula'];
        echo '</td><td>';
        echo $fila['nombre'];
        echo '</td><td>';
        echo $fila['direccion'];
        echo '</td><td>';
        echo $fila['cod_curso'];
        echo '</td>';
        echo '</tr>';
       }
       echo '</table>';
       echo '<hr>';
       echo '<h2>Número de alumnos: '. mysqli_num_rows ($resultado).'</h2>';
    }    
}   
?>