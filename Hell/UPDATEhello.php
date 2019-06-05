<!DOCTYPE html>
<html>
<head>
	<title>hello</title>
</head>
<body>
<form method="POST" action="UPDATEhello.php">
		<button>update</button>
		<?php 		
		echo '<input type="text" name="name" value=" ' . $_POST['name'] . '">';
		echo '<input type="text" name="prise" value=" ' . $_POST['prise'] . '">';
		echo '<input type="text" name="img" value=" ' . $_POST['img'] . '">';
?>
	</form>
</body>
</html>

<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'volodya_10');
	$query = mysqli_query($connect, "UPDATE shop SET name = 'Jast' WHERE id = 4");
 ?>