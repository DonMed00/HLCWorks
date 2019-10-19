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
$arrayCountries = array(0 => "Wales", 1 => "USA", 2 => "Ireland", 3 => "Scotland", 4 => "Australia" , 5 => "England");

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
      foreach ($persona as $clave => $valor ) {
          if($clave == "country"){
              foreach($arrayCountries as $key => $value){
                if($valor==$key) {
                    $valor= $value;
                }
            }
        }
            
        echo '<td>',$valor,'</td>';
      }
      echo '</tr>';
    }
    
echo '</table>';

?> 

</body>

</html>