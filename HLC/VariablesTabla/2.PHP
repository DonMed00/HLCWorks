<html>
<head>
<style type="text/css">{


}
  </style>

</head>
<body>
<?php
$age = 10;
define('DAYS',365);
define('HOURS',8760);
define('MINUTES',525600);
define('SECS',(3.154*pow(10,7)));
$result;
echo "<h2>Cálculos para la edad de una persona </h2>"," <h3>Para una persona de $age años:</h3>";
$result = $age*DAYS; 
echo "Su edad en días es $result <br>";
$result = $age*HOURS; 
echo "Su edad en horas es $result <br>";
$result = $age*MINUTES; 
echo "Su edad en minutos es $result <br>";
$result = $age*SECS; 
echo "Su edad en segundos es $result <br>";
?> 
</body>
</html>
