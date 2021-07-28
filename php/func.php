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

$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
$rest = filter_var(trim($_POST['rest']), FILTER_SANITIZE_STRING);
$street = filter_var(trim($_POST['street']), FILTER_SANITIZE_STRING);
$home = filter_var(trim($_POST['home']), FILTER_SANITIZE_STRING);
$number = filter_var(trim($_POST['number']), FILTER_SANITIZE_STRING);

$mysql->set_charset('utf8');

//$mysql->query("INSERT INTO `table_Contacts`(`Name`, `Email`, `Phone`, `Place`) VALUES('$name', '$email', '$phone', '$plase')");
$query = "INSERT INTO `orders` (`ID`,`Name`, `Email`, `Phone`, `Rest`, `Street`, `NumberHouse`, `Flat`) VALUES ('0','$name', '$email', '$phone', '$rest', '$street', '$home', '$number')";
mysqli_query($mysql, $query);

$mysql->close();
