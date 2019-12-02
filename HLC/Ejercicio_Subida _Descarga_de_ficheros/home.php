<html>
<head>
<title>EJERCICIO SubirDescargarFicheros</title>
<link rel="stylesheet" href="estilos.css?v=<?php echo(rand()); ?>" />
<script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script>
</head>
<body>
<h1> Subir Descargar Ficheros CSS</h1>
<form action="home.php" method="post" enctype="multipart/form-data">
    <b>Enviar un nuevo archivo: </b>
    <br>
    <input name="uploadedFile" type="file">
    <br>
    <input type="submit" value="Upload" name="uploadBtn">
    <input type="submit" value="Download" name="downloadBtn">

</form>

<?php
validateForm();
function validateForm(){
    if (isset($_POST['uploadBtn'])) {
        checkFile();
    }
    if(isset($_POST['downloadBtn'])){

    $fileName = basename('estilos.css');
    $filePath = 'uploads/'.$fileName;
        if(!empty($fileName) && file_exists($filePath)){
        // Define headers
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        // Read the file
        readfile($filePath);
        exit;
        }else{
            echo 'The file does not exist.';
        }
    }
}
function checkFile(){
    $nombre_archivo = $_FILES['uploadedFile']['name'];
    $tipo_archivo = $_FILES['uploadedFile']['type'];
    $tamano_archivo = $_FILES['uploadedFile']['size'];
    if (!((strpos($tipo_archivo, "css")) && ($tamano_archivo < 100000))) {
        echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .html o .css<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>";
    }else{
        $origen = $_FILES['uploadedFile']['tmp_name'];
        $destino = 'uploads/'.$_FILES['uploadedFile']['name'];
        if (move_uploaded_file($origen, $destino)){
               echo "El archivo ha sido cargado correctamente.";
        }else{
               echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
        }
 }
}
      
?>
<footer>
  <p>Created by: Adrián Mena</p>
</footer>
</body>
</html>