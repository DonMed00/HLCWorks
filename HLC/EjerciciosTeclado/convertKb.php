<html> <head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
 <?php
 $mb = $_GET['mb'];
 if(!empty($mb)){

 echo "El cambio de $mb Mb a Kb son:  ", $mb*1000,' Kb<br>';
 }else{
     echo "El campo anterior no puede estar vacío";
 }
 ?>
 <a href="javascript:history.back()"> Volver Atrás</a>
</body> </html>