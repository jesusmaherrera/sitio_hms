<?PHP
        include ('ingreso.php');
	include("master_encabezado1.php");
	include("master_menu2.php");
	include("master_encabezado2.php");
	include("master_segundocontenido1.php");
?>

	<table width="60%" class="table table-hover" align="center" style="font-size:small;">


<tr>
  <th align="center" class="tablas">NOMBRE</th>
<th align="center" class="tablas">EMAIL</th>
<th align="center" class="tablas">ASUNTO</th>
<th align="center" class="tablas">COMENTARIO</th>
<th align="center" class="tablas">BORRAR</th>
</tr>


<span class="tablas">
<?php
		
		include("master_db.php");
		
	$query="SELECT * FROM contactanos ORDER BY id DESC";
	$resultado=mysql_query($query) or die(mysql_error());


		if ($resultado!=0)
		{
		while ($consulta=mysql_fetch_array($resultado))
		{
		extract($consulta);
		echo "</td><td align='center'>".$consulta[1]."<td align='center'>".$consulta[2]."<td align='center'>".$consulta[3]."</td><td align='center'>".$consulta[4]."</td><td align='center'>"."<a href='eliminarcontactanos.php?id=$consulta[0]'><img src='images/borrar.gif'>"."</td></tr>\n";  
	}
}else
{	 echo "<tr><td align='center'>No existen Datos..</td></tr>";	
}


?>