<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'volodya_10');
$query = mysqli_query($connect, "SELECT * FROM 'shop'"); 

	header('Location: http://hell/hello2.php');
 ?>