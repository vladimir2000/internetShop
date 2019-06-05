<!DOCTYPE html>
<html>
<head>
	<title>hello</title>
</head>
<body>
<div style="display: flex;">
<?php
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'volodya_10');
	$query = mysqli_query($connect, "SELECT * FROM shop ORDER BY id DESC");
 ?>
<?php for ($i=0; $i < $query->num_rows; $i++) 
	  {
$hello = $query->fetch_assoc();
?>
	<div style="margin-left: 20px">
		<?php echo '<img src="'. $hello['img'] .'" height = "300px" width="200px">' ?>
		<p><?php echo $hello['name']?></p>
		<hr>
		<p><?php echo $hello['prise']?></p>
		<button>buy</button>
	</div>
<?php } ?>
</div>
</body>
</html>
