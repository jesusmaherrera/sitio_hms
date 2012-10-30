<?PHP
include ('ingreso.php');
?>
<html>
<body>
  <?php
  
$uno=$_POST['id'];
$actual=$_POST['actual'];
  // Ruta donde se guardarán las imágenes
    $directorio = $_SERVER['DOCUMENT_ROOT'].'/images/noticias/';
 
    include("master_db.php");
 
    // Recibo los datos de la imagen
    $nombre = $_FILES['imagen']['name'];
    $tipo = $_FILES['imagen']['type'];
    $tamano = $_FILES['imagen']['size'];
 
    // Muevo la imagen desde su ubicación
    // temporal al directorio definitivo
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