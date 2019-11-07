<html> <head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
 <?php
 $user = $_GET['user'];
 $password = $_GET['password'];
 if(checkInput($user)&&checkInput($password)){
    header ("Location: mipagina.php");
 }else{
    header ("Location: error.php");

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

writeMsg(); // call the function
?>