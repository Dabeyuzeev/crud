<?php  

$id = $_GET['id'];
$mysqli = new mysqli("localhost", "root", "", "users");
$query = "DELETE FROM `user_1` WHERE `user_1`.`id` = $id"; 
$result = $mysqli->query($query); 
$mysqli->close();
