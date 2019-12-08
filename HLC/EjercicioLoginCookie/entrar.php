<?php

  //1. Inicializamos session.
  session_start();
  echo '<link rel="stylesheet" href="estilos.css?v=<?php echo(rand()); ?>" />
  <script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script>';

  if(isset($_SESSION['num_accesos'])) {
    //2 - 3 . Registramos y usamos variables
    $_SESSION['num_accesos'] = $_SESSION['num_accesos'] + 1;
   } else {
    $_SESSION['num_accesos'] = 1; //2. Registramos clave/valor
  }


$user = $_POST["user"];
$password = $_POST["password"];
if($user=="user" && $password=="1234"){
    echo '<h1>Bienvenido '.$user.'</h1>';
    echo '<a href="javascript:history.back()"> Salir</a>';

    unset($_SESSION["num_accesos"]);
    $_SESSION = array();
    session_destroy();
}else{
    echo '<h1>El usuario y/o contraseña no son correctos</h1>';
    echo '<h1>Número de intentos: '.$_SESSION['num_accesos'] .'</h1>';
    echo '<a href="javascript:history.back()"> Intentar de nuevo</a>';
}

?>
