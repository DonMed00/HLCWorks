<html> <head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
 <?php
 $user = $_POST['user'];
 $password = $_POST['password'];
 if(checkUser() && checkPassword()){
    header ("Location: entrar.php");
 }else{
    header ("Location: error.php");

 }
 ?>
 <a href="javascript:history.back()"> Volver Atrás</a>
</body> 
</html>
<?php
function checkUser() {
    if($user != "user"){
        return false;
    }else{
        return true;
    }
}
function checkPassword() {
    if($password != "1234"){
        return false;
    }else{
        return true;
    }

}
?>