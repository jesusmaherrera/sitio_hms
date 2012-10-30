<?PHP

        include ('ingreso.php');

	include("master_encabezado1.php");

	include("master_menu2.php");

	include("master_encabezado2.php");

	include("master_segundocontenido1.php");

	

	

?>
<div>
<form id="form1" class="form-horizontal" method="post" action="nuevanoticia2.php" enctype="multipart/form-data">
	<div class="control-group">
		<label class="control-label" for="titulo">Titulo</label>
		<div class="controls">
			<input type="text" name="titulo" id="titulo" />
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="corta">Descripción corta</label>
		<div class="controls">
			<input type="text" name="corta" class="span8" id="corta" />
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="corta">Noticia</label>
		<div class="controls">
			<textarea name="larga" id="larga" rows="10" placeholder="Escriba aqui la noticia completa" cols="100"></textarea>
		</div>
	</div>
	<div class="control-group">
		Por favor selecciona una imagen tipo .jpg <b>"Si el tipo de la imagen es .JPG tendrás que convertirlo a .jpg"</b>
	</div>
	<div class="control-group">
		<label class="control-label" for="corta">Imagen</label>
		<div class="controls">
			<input id="imagen" name="imagen" size="30" type="file" />
		</div>
	</div>
	<div class="control-group">
 		<div class="controls">
 			<input class="btn" type="submit" name="guardar" id="guardar" value="Guardar Cambios"/>
 		</div>
 	</div>



<?php

	include("master_segundocontenido2.php");

	include("master_piepagina.php");

?>