<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<title>Форма регистрации</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="form_title">Форма регистрации</h1>
				<form action="PHP/check.php" method="post">
					<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
					<input type="text" class="form-control" name="namecheck" id="namecheck" placeholder="Введите имя"><br>
					<input type="date" class="form-control date_control" name="date" id="date" placeholder="Введите дату рождения"><br>
					<input type="password" class="form-control input" name="password" id="password" placeholder="Введите пароль"><br>
					<button class="btn btn-success" type="submit">Зарегистрироваться</button>
				</form>
			</div>
			<div class="col">
				<h1 class="form_title">Форма авторизации</h1>
				<form action="PHP/authorization.php" method="post">
					<input class="form-control" type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
					<input class="form-control" type="password" class="form-control" name="password" id="password" placeholder="Введите пароль"><br>
					<button class="btn btn-success" type="submit">Авторизоваться</button>
				</form>
			</div>
		</div>
	</div>
</body>

</html>