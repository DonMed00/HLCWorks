<html>
<head>

<style type="text/css">
table{
    border: 1px solid black;
    font-size: 20px;
}
.trGris{
    background-color: grey;
}
  </style>

</head>
<body>
<?php
define('TAM',10);
echo "<table>";
$number=1;
$num=1;
$num2=1;
for($num=1;$num<=TAM;$num++){
    if ($num% 2 == 1)
    echo "<tr class='trGris'>";
    else
    echo "<tr>";
    for ($num2=1; $num2<=TAM; $num2++){
        echo "<td>", $number, "</td>"; //creamos una celda y mostramos el número
        $number=$number+1;
    }
    echo "</tr>";
}
echo "</table>";


?>
</body>
</html>