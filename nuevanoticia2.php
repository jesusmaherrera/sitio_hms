<?PHP

include ('ingreso.php');

?>

<html>

<body>

  <?php

  // Ruta donde se guardarán las imágenes
    include('/libraries/configuration.php');
    $directorio = $document_root.'/images/noticias/';
    include("master_db.php");
    // Recibo los datos de la imagen

    $nombre = $_FILES['imagen']['name'];

    $tipo = $_FILES['imagen']['type'];

    $tamano = $_FILES['imagen']['size'];

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
   $image->save($directorio.$nombre);

    // Muevo la imagen desde su ubicación

    // temporal al directorio definitivo

   // move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre);

  

  

  

  

$uno=$_POST['titulo'];

$dos=$_POST['corta'];

$tres=$_POST['larga'];

include("master_db.php");

$fecha=date("Y/m/d");





	$query="INSERT INTO noticias VALUES ('','$nombre','$uno','$dos','$tres','$fecha','".$_SESSION['usuario_direccion']."')";

	$resultado=mysql_query($query) or die(mysql_error());

?>

<script language="javascript"> alert("REGISTRO COMPLETO");

	document.location.href="inicio.php";

	</script>

</body>

</html>