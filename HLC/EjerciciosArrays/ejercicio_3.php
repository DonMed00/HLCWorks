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
      foreach ($persona as $clave => $valor) {
        if($clave == "country"){
            if($valor==3){
                echo '<tr>';
                foreach ($persona as $clave => $valor) {
                    echo '<td>',$valor,'</td>';
                }
            }
        }
      }
      echo '</tr>';
    }
    
echo '</table>';

?> 

</body>

</html>