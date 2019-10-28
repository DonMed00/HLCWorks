<html> <head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
 <?php
 $d1 = $_GET['d1'];
 $d2 = $_GET['d2'];
 if(!empty($d1)&& !empty($d2)){

 echo "El area del rombo con diagonales $d1 y $d2 es: ",($d1*$d2)/2;
 }else{
     echo "Los campos anteriores no pueden estar vacíos";
 }
 ?>
 <a href="javascript:history.back()"> Volver Atrás</a>
</body> </html>