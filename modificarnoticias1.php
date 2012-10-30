<?PHP
    include ('ingreso.php');
	include("master_encabezado1.php");
	include("master_menu2.php");
	include("master_encabezado2.php");
	include("master_segundocontenido1.php");

		$id=$_REQUEST['id'];
	$nombre=$_REQUEST['nombre'];
	$titulo=$_REQUEST['titulo'];
	$corta=$_REQUEST['corta'];
	$larga=$_REQUEST['larga'];
?>

<div align="center">
 <form id="form1" method="post" action="modificarnoticias2.php" enctype="multipart/form-data">
                              
                                         <input type="hidden" name="id" id="id" value="<?php echo $id;?>"/>
                                	<label>Titulo<input type="text" name="titulo" id="titulo" value="<?php echo $titulo;?>"/></label>
                                    <label>Descripción corta<input type="text" name="corta" id="corta" value="<?php echo $corta;?>"/></label>
                                    <textarea name="larga" id="larga" rows="10" placeholder="Escriba aqui la noticia completa" cols="100"><?php echo $larga;?></textarea>
                                    <br />
                                    <br />
                                    <input type="submit" name="guardar" id="guardar" value="Guardar Cambios"/>
<?php
	include("master_segundocontenido2.php");
	include("master_piepagina.php");
?>