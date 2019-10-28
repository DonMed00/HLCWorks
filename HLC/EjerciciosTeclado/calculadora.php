<html> <head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
 <?php
 $num1 = $_GET['num1'];
 $num2 = $_GET['num2'];
 if(!empty($num1)&& !empty($num2)){

 echo "El resultado de $num1 + $num2 es: ",$num1 + $num2,"<br>";
 echo "El resultado de $num1 - $num2 es: ",$num1 - $num2,"<br>";
 echo "El resultado de $num1 * $num2 es: ",$num1 * $num2,"<br>";
 echo "El resultado de $num1 / $num2 es: ",$num1 / $num2,"<br>";

 }else{
     echo "Los campos anteriores no pueden estar vacíos";
 }
 ?>
 <a href="javascript:history.back()"> Volver Atrás</a>
</body> </html>