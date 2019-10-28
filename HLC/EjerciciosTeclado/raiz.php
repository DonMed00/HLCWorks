<html> <head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
 <?php
 $num1 = $_GET['num1'];
 $num2 = $_GET['num2'];
 if(!empty($num1)&& !empty($num2)){

 echo "La raiz de $num1 es ", sqrt($num1),'<br>';
 echo "La raiz de $num2 es ", sqrt($num2),'<br>';
 }else{
     echo "Los campos anteriores no pueden estar vacíos";
 }
 ?>
 <a href="javascript:history.back()"> Volver Atrás</a>
</body> </html>