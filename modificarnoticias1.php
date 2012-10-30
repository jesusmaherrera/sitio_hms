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

<div >
 <form id="form1" class="form-horizontal" method="post" action="modificarnoticias2.php" enctype="multipart/form-data">
 	<input type="hidden" name="id" id="id" value="<?php echo $id;?>"/>
 	<div class="control-group">
 		<label class="control-label" for="titulo">Titulo</label>
 		<div class="controls">
 			<input type="text" name="titulo" id="titulo" value="<?php echo $titulo;?>"/>
 		</div>
 	</div>
 	<div class="control-group">
 		<label class="control-label" for="corta">Descripción corta</label>
 		<div class="controls">
 			<input type="text" name="corta" class="span8" id="corta" value="<?php echo $corta;?>"/>
 		</div>
 	</div>
 	<div class="control-group">
 		<label class="control-label" for="corta">Noticia</label>
 		<div class="controls">
 			<textarea name="larga" id="larga" rows="10" placeholder="Escriba aqui la noticia completa" cols="100"><?php echo $larga;?></textarea>
 		</div>
 	</div>
 	<div class="control-group">
 		
 		<div class="controls">
 			<input type="submit" name="guardar" id="guardar" value="Guardar Cambios"/>
 		</div>
 	</div>
 	
                                    
<?php
	include("master_segundocontenido2.php");
	include("master_piepagina.php");
?>