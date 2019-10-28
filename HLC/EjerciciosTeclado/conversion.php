<html> <head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
 <?php
 $totalEuro = $_GET['totalEuro'];
 if(!empty($totalEuro)){

 echo "El cambio de $totalEuro € a £ son:  ", $totalEuro*0.86,' £<br>';
 }else{
     echo "El campo anterior no puede estar vacío";
 }
 ?>
 <a href="javascript:history.back()"> Volver Atrás</a>
</body> </html>