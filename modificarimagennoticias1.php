<?PHP
include ('ingreso.php');
?>
<html>
<body>
  <?php
  
$uno=$_POST['id'];
$actual=$_POST['actual'];
// Ruta donde se guardarán las imágenes
include('/libraries/configuration.php');

    $directorio = $document_root.'/images/noticias/';
 
    // Recibo los datos de la imagen
    $nombre = $_FILES['imagen']['name'];
    $tipo = $_FILES['imagen']['type'];
    $tamano = $_FILES['imagen']['size'];
 
    // Muevo la imagen desde su ubicación
    // temporal al directorio definitivo
    move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre);
///////////////////////////////////////////////////////////
//                                                       //
//               CAMBIAR TAMAÑO DE IMAGEN                //
//                                                       //
///////////////////////////////////////////////////////////

include("/libraries/resize-class.php");
// *** 1) Initialise / load image
$resizeObj = new resize($directorio.$nombre);
  //$resizeObj = new resize($directorio.$tmpname);

// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
$resizeObj -> resizeImage(230, 150, 'auto');

// *** 3) Save image
$resizeObj -> saveImage($directorio.$nombre, 100);
 
////////////////////////////////////////////////////////////// 

include("master_db.php");
  
  $query="UPDATE noticias SET imagen='$nombre' WHERE id=$uno";
  $resultado=mysql_query($query) or die(mysql_error());
  
   unlink($document_root."/images/noticias/".$actual);
  
  
  


  ?>
  <script language="javascript"> alert("EDITADOS");
  document.location.href="modificarnoticias.php";
  </script>
</body>
</html>