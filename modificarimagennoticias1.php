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
    $tipo = $_FILES['imagen']['type'];
    $tamano = $_FILES['imagen']['size'];
 
   include('/libraries/SimpleImage.php');
   $image = new SimpleImage();
   $image->load($_FILES['imagen']['tmp_name']);
   $image->resize(300,226);
   $image->save($directorio.$nombre);

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