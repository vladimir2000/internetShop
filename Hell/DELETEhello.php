<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'volodya_10');
$delete = mysqli_query( $connect , "DELETE FROM shop WHERE id = 3");
header('Location: http://hell/hello2.php');
?>