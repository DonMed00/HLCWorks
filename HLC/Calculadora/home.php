<html>
<head>
<title>EJERCICIO CALCULADORA</title>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<h1>Calculadora</h1>
<form action="home.php" method="post">
<fieldset>
 <p> <input type="text" name="number1" /></p>
 <p> <input type="text" name="number2" /></p>
 <p> <input type="text" name="number3" /></p>
 </fieldset>
 <p>Seleccionar operación 
 <select name="lista">
  <option value="sumar">Sumar</option>
  <option value="restar">Restar</option>
  <option value="multiplicar">Multiplicar</option>
  <option value="dividir">Dividir</option>
</select><input type="submit" value="Enviar" name="btn" /></p>
</form>

<?php
validarFormulario();
function validarFormulario(){
    if (isset($_POST['btn'])) {
        comprobarInputs();
    }

}
function comprobarInputs(){
    if ($_POST['number1']==''||$_POST['number2']==''||$_POST['number3']=='') {
        echo 'Debes rellenar todos los campos';
    }else if (!is_numeric($_POST['number1'])||!is_numeric($_POST['number2'])||!is_numeric($_POST['number3'])) {
        echo 'Los campos deben ser números';
    }else{
        realizarOperacion();
    }
}
function realizarOperacion(){
    $miSelect = $_POST['lista'];
    $number1=$_POST['number1'];
    $number2=$_POST['number2'];
    $number3=$_POST['number3'];
    if($miSelect=='sumar'){
        echo 'El resultado es: ', $number1+$number2+$number3;    
    }else if($miSelect=='restar'){
        echo 'El resultado es: ', $number1-$number2-$number3;    
    }else if($miSelect=='multiplicar'){
        echo 'El resultado es: ', $number1*$number2*$number3;    
    }else if($miSelect=='dividir'){
        if($number2=='0'||$number3=='0'){
            echo 'No se puede dividir entre 0';
        }else{ 
            echo 'El resultado es: ', $number1/$number2/$number3;    
        }
    }
}        
?>
<footer>
  <p>Created by: Adrián Mena</p>
</footer>
</body>
</html>