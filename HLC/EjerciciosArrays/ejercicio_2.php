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
}
array_multisort($age, SORT_ASC, $arrayPersonas);

foreach($arrayPersonas as $persona){
}
echo '<table>', '<thead>', '<tr>';

    foreach ($persona as $clave => $valor) {
     echo '<th>',$clave,'</th>';
    }
  
    echo '</tr>
    </thead>

  <tbody>';
   $i =0;
   foreach($arrayPersonas as $persona){
    if($i<1){
      echo '<tr>';
      foreach ($persona as $clave => $valor) {
        echo '<td>',$valor,'</td>';
      }
      $i++;
    }
    echo '</tr>';
  }
  $i =0;
  array_multisort($age, SORT_DESC, $arrayPersonas);

  foreach($arrayPersonas as $persona){
   if($i<3){
     echo '<tr>';
     foreach ($persona as $clave => $valor) {
       echo '<td>',$valor,'</td>';
     }
     $i++;
   }
   echo '</tr>';
 }
    
echo '</table>';

?> 

</body>

</html>