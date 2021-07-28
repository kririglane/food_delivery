<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'lab16';
$db_port = 3306;

$mysql = new mysqli('localhost', 'root', 'root', 'lab');

$mysql = mysqli_connect(
	$db_host,
	$db_user,
	$db_password,
	$db_db
);

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$pass = md5($pass . "jfkdjhgkdfndjkg123");

$result = $mysql->query("SELECT * FROM `checkinbd` WHERE 
`login` = '$login' AND `password` = '$pass'");
$user = $result->fetch_assoc();

if (count($user) == 0) {
	echo "Такой пользователь не найден";
	exit();
}

print_r($user);
//exit();
setcookie('user', $user['namecheck'], time() + 3600, "/");



header('Location: http://localhost/Lab_16/');
$mysql->close();
