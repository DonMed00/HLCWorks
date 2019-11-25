<html> <head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
 <?php
 $firstname = $_POST['firstname'];
 $surname = $_POST['surname'];
 $age = $_POST['age'];
 $countries=$_POST["countries"];
 $ageSelect = $_POST['ageSelect'];
 if(checkInput($firstname) && checkInput($surname) && checkInput($age)){
    include 'ejercicioPHP_formulario.php';
    foreach($arrayPersonas as $persona){
    }
    echo '<table>', '<thead>', '<tr>';
    
        foreach ($persona as $clave => $valor) {
         echo '<th>',$clave,'</th>';
        }
      
        echo '</tr>
          
        
        </thead>
    
       
      <tbody>';
      $flag1 = false;
      $flag2 = false;
      $flag3 = false;
      foreach($arrayPersonas as $persona){
        foreach ($persona as $clave => $valor) {
            if($clave == "country"){
                foreach($countries as $country){
                    if($country=="all"){
                        $flag1 = true;
                    }else{
                        if($valor==$country){
                            $flag1 = true;
                        }
                }
                
            }
        }
          if($clave == "firstname"){
              if($valor==$firstname){
                  $flag2 = true;
              }else{
                  $flag2= false;
              }
            }
            if($clave == "surname"){
                if($valor==$surname){
                    $flag3 = true;
                }else{
                    $flag3= false;
                }
              }
            if($clave == "age" && $flag1 && $flag2 && $flag3){
                if($ageSelect=="mayor"){
                    if($valor>=$age){
                        echo '<tr>';
                        foreach ($persona as $clave => $valor) {
                            echo '<td>',$valor,'</td>';
                        }
                    }
                }else if($ageSelect=="menor"){
                    if($valor<=$age){
                        echo '<tr>';
                        foreach ($persona as $clave => $valor) {
                            echo '<td>',$valor,'</td>';
                        }
                    }
                }else{
                    if($valor==$age){
                        echo '<tr>';
                        foreach ($persona as $clave => $valor) {
                            echo '<td>',$valor,'</td>';
                        }
                    }
                }
                
            }
        }
        echo '</tr>';
    }
        
    echo '</table>';
    
 }else{
    echo 'Debe rellenar el campo';

 }
 ?>
 <a href="javascript:history.back()"> Volver Atrás</a>
</body> 
</html>
<?php
function checkInput($input) {
    if(empty($input)|| $input == ' '){
        return false;
    }else{
        return true;
    }
}

?>