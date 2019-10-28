<html> <head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
 <?php
 $kb = $_GET['kb'];
 if(!empty($kb)){

 echo "El cambio de $kb Kb a Mb son:  ", $kb*0.001,' Mb<br>';
 }else{
     echo "El campo anterior no puede estar vacío";
 }
 ?>
 <a href="javascript:history.back()"> Volver Atrás</a>
</body> </html>