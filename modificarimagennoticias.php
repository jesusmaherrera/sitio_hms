<?PHP
    include ('ingreso.php');
	include("master_encabezado1.php");
	include("master_menu2.php");
	include("master_encabezado2.php");
	include("master_segundocontenido1.php");

		$id=$_REQUEST['id'];
		$nombre=$_REQUEST['nombre'];

?>

<div align="center">
     Por favor selecciona una imagen tipo .jpg <b>"Si el tipo de la imagen es .JPG tendrás que convertirlo a .jpg"</b>
 <form id="form1" method="post" action="modificarimagennoticias1.php" enctype="multipart/form-data">
                              
                                	<input type="hidden" name="id" id="id" value="<?php echo $id;?>"/>
                                    <br />
                                    <input type="hidden" name="actual" id="actual" value="<?php echo $nombre;?>"/>
                                    <br />
                                        <input id="imagen" name="imagen" size="30" type="file" />
 <br />
                                    <br />
                                    <input type="submit" name="guardar" id="guardar" value="Guardar Imagen Nueva"/>
                                    </form>
                                    </div>

<?php
	include("master_segundocontenido2.php");
	include("master_piepagina.php");
?>