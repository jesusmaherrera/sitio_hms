<?php
	include("master_encabezado1.php");
	include("master_menu1.php");
	include("master_encabezado2.php");
?>
	<link rel="stylesheet" type="text/css" href="css/carousel/style.css" />
	<link rel="stylesheet" type="text/css" href="css/carousel/jquery.jscrollpane.css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Coustard:900' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css' />
<?php
	include("master_contenido1.php");
?>
<img src="images/pics01.png" width="1000" height="345" alt="" />
<?php
	include("master_contenido2.php");
	include("master_segundocontenido1.php");
?>
<script type="text/javascript" src="swfobject.js"></script>


<div class="container">
			<h1>Noticias Recientes de <span>Hospital Médica Sierra</span></h1>
			<div id="ca-container" class="ca-container">
				<div class="ca-wrapper">
					<?php 
					include("master_db.php");
					$query="SELECT * FROM noticias";	
					$resultado=mysql_query($query) or die(mysql_error());

					if ($resultado!=0)
					{
						while ($consulta=mysql_fetch_array($resultado))
						{
							extract($consulta);
							if($consulta[0]!=NULL)
							{
								?>
								<div class="ca-item ca-item-1">
									<div class="ca-item-main">
										<div class="ca-icon"><img src="<?php echo "images/noticias/$consulta[1]"; ?>" ></img>  </div>
										<h3><?php echo "$consulta[2]"; ?></h3>
										<h4>
											<span class="ca-quote">&ldquo;</span>
											<span><?php echo "$consulta[3]"; ?></span>
										</h4>
										<a href="#" class="ca-more">Mas...</a>
									</div>
									<div class="ca-content-wrapper">
										<div class="ca-content">
											<h6><?php echo "$consulta[2]"; ?></h6>
											<a href="#" class="ca-close">close</a>
											<div class="ca-content-text">
												<p><?php echo "$consulta[4]"; ?></p>
											</div>
										</div>
									</div>
								</div>
								<?php
							}
						}
					}else
					echo "No existen Datos..";				
					?>
				</div>
			</div>
		</div>


<script type="text/javascript" src="js/carousel/jquery.easing.1.3.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/carousel/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/carousel/jquery.contentcarousel.js"></script>
<script type="text/javascript">
	$('#ca-container').contentcarousel();
</script>
<?php
	include("master_segundocontenido2.php");
	include("master_piepagina.php");
?>