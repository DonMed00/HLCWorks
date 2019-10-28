<html> <head>
<meta charset="UTF-8"> </head>
<body>
 <?php
 $num1 = $_GET['num1'];
 $num2 = $_GET['num2'];
 echo "La raiz de $num1 es ", sqrt($num1),'<br>';
 echo "La raiz de $num2 es ", sqrt($num2);
 ?>
 <a href="index.php">Volver</a>
</body> </html>