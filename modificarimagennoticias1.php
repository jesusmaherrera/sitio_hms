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
 
    include("master_db.php");
    // Recibo los datos de la imagen

  $nombre = $_FILES['imagen']['name'];
  $tmpname = $_FILES['imagen']['tmp_name'];
  
  $partes=explode('.',$tmpname); 
  $extension=$partes[count($partes)-1]; 

   $tipo = $_FILES["imagen"]['type'];


  if ($tipo == "image/gif" || $tipo == "image/jpeg" || $tipo == "image/jpg")
  {
    array_pop($partes); 
    $tmpname=implode('',$partes).'.'.$extension; 
    $name = $tmpname;

    $tipo = $_FILES['imagen']['type'];
    $tamano = $_FILES['imagen']['size'];

    include('/libraries/SimpleImage.php');
    $image = new SimpleImage();
    $image->load($tmpname);
    $image->resize(300,226);
    $image->save($directorio.$nombre);

    $query="UPDATE noticias SET imagen='$nombre' , corta='BIEN' WHERE id=$uno";
  }
  else
  {

    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $directorio.$nombre)) {
        print "Received {$_FILES['imagen']['name']} - its size is {$_FILES['imagen']['size']}";
    } else {
        print "Upload failed!";
    }
    //move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre);
    $query="UPDATE noticias SET imagen='$nombre', corta='MAL' WHERE id=$uno";
  }

  include("master_db.php");

  
    
	$resultado=mysql_query($query) or die(mysql_error());
  
   unlink("images/noticias/".$actual);

	?>
	<script language="javascript"> 
	 document.location.href="modificarnoticias.php";
	</script>
</body>
</html>