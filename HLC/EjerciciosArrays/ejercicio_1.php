<html>
<head>
<style type="text/css">
table,tr,td{
    border: 1px solid black;
    font-size: 20px;
}
  </style>
</head>
<body>
<?php
include 'ejercicioPHP.php';
foreach($arrayPersonas as $persona){
    foreach ($persona as $clave => $valor) {
    }
}
echo '<table>';
echo '<thead>';
 echo '<tr>';
    foreach ($persona as $clave => $valor) {
     echo '<th>',$clave,'</th>';
    }
    echo '</tr>
      
    
    </thead>

   
  <tbody>
    <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
</table>';

?> 

</body>

</html>