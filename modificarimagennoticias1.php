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
  $extension = strtolower($extension);
  array_pop($partes); 
  $tmpname=implode('',$partes).'.'.$extension; 
  $name = $tmpname;

  $tipo = $_FILES['imagen']['type'];
  $tamano = $_FILES['imagen']['size'];
 
   include('/libraries/SimpleImage.php');
   $image = new SimpleImage();
   $image->load($tmpname);
   $image->resize(300,226);
   $image->output($directorio.$nombre);
   move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre);
   
  include("master_db.php");
	$query="UPDATE noticias SET imagen='$nombre' WHERE id=$uno";
	$resultado=mysql_query($query) or die(mysql_error());
  
   unlink("images/noticias/".$actual);

	?>
	<script language="javascript"> 
	document.location.href="modificarnoticias.php";
	</script>
</body>
</html>