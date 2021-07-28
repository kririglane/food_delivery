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
$namecheck = filter_var(trim($_POST['namecheck']), FILTER_SANITIZE_STRING);
$date = filter_var(trim($_POST['date']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

if (mb_strlen($login) < 5 || mb_strlen($login) > 50) {
	echo "Недопустимая длина логина";
	exit();
} else if (mb_strlen($namecheck) < 3 || mb_strlen($namecheck) > 50) {
	echo "Недопустимая длина имени";
	exit();
} else if (mb_strlen($date) < 0) {
	echo "Введите дату рождения";
	exit();
} else if (mb_strlen($pass) < 2 || mb_strlen($pass) > 8) {
	echo "Недопустимая длина пароля (от 2 до 8 символов)";
	exit();
}

$mysql->set_charset('utf8');

$pass = md5($pass . "jfkdjhgkdfndjkg123");

$check = "INSERT INTO `checkinbd` (`ID`,`Login`, `Name`, `BirthDay`, `Password`) VALUES ('0','$login', '$namecheck', '$date', '$pass')";
mysqli_query($mysql, $check);

$mysql->close();

header('Location: http://localhost/Lab_16/');
