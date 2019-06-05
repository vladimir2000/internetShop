<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'volodya_10');
$query = mysqli_query($connect, "INSERT INTO shop (name, prise, img) VALUES ('" . $_POST['name'] ."', '" . $_POST['prise'] . "', '" . $_FILES['image']['name'] . "')");
header('Location: http://hell/hello2.php');
 ?>
