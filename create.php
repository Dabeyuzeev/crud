<form method="get">
<title>Добавление пользователя</title>
<p>Введите имя пользователя <input type="text" name="name"></p>
<input type="submit" name="formSubmit" value="Добавить в бд" />
</form>
<?php
if(isset($_GET['formSubmit'])) {
$nameform=$_GET['name'];
$mysqli = new mysqli("localhost", "root", "", "users");
$name = '"'.$mysqli->real_escape_string($nameform).'"';
$query = "INSERT INTO user_1 (username) VALUES ($name)"; 
$result = $mysqli->query($query); 
$mysqli->close();
}
?>



