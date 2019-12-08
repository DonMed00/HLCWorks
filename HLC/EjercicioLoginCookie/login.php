<?php
  //1. Iniciamos la session.
  session_start();

  //Comprobamos si existe la variable de session "num_accesos", en ese caso lo
  //incrementamos

  if(isset($_SESSION['num_accesos'])) {
    if($_SESSION['num_accesos']>=5){
        $a = $_SESSION['num_accesos'];
        unset($_SESSION["num_accesos"]);
        unset($_SESSION["hora"]);

        $_SESSION = array();
        
      }
}else{
    
}
  ?>
<html>
<head>
<link rel="stylesheet" href="estilos.css?v=<?php echo(rand()); ?>" />
<script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script>
<title>EJERCICIO LOGIN COOKIES</title>
</head>
<body>
<h1>Introduce tus datos</h1>
<form action="entrar.php" method="post">
 Usuario: <input required type="text" name="user" req/><br>
 Password: <input  required type="password"  name="password" /><br>
 <input type="submit" value="Ingresar"/>
</form>
</body>
</html>