<?php  

include 'db.php';

$sql = $pdo->prepare("SELECT * FROM user_1");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_OBJ);
