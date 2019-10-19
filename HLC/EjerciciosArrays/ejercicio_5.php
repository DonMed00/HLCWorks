<html>
<head>
<style type="text/css">
table{
  margin: auto
}
table,tr,td{
    border: 1px solid black;
        font-size: 20px;
    text-align: center;i
}
th{
  width: 100;
}
  </style>
</head>
<body>
<?php
include 'ejercicioPHP.php';

foreach ($arrayPersonas as $clave => $fila) {
    $age[$clave] = $fila['age'];
    $country[$clave] = $fila['country'];
    $firstname[$clave] = $fila['firstname'];
    $surname[$clave] = $fila['surname'];
}
array_multisort($age, SORT_ASC, $country, SORT_ASC, $firstname, SORT_ASC, $surname, SORT_ASC, $arrayPersonas);

foreach($arrayPersonas as $persona){
}
echo '<table>', '<thead>', '<tr>';

    foreach ($persona as $clave => $valor) {
     echo '<th>',$clave,'</th>';
    }
  
    echo '</tr>
    </thead>

  <tbody>';
    
    foreach($arrayPersonas as $persona){
      echo '<tr>';
      foreach ($persona as $clave => $valor) {
        echo '<td>',$valor,'</td>';
      }
      echo '</tr>';
    }
    
echo '</table>';

?> 

</body>

</html>