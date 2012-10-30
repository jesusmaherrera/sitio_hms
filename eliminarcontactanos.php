<?PHP
include ('ingreso.php');

	$id=$_REQUEST['id'];
	include("master_db.php");
	
	$query="delete from contactanos where id LIKE '$id'";
	$resultado=mysql_query($query) or die(mysql_error());
	
?>
	<script language="javascript">
	document.location.href="vercontactanos.php";
	</script>

<body>
</body>
</html>