<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>задача 4</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
	<form method="post" action="<?php print $PHP_SELF ?>">
		<p>Логин</p>
		<input type="text" name="login" size="10">
		<BR>
		<p>Пароль</p>
		<input type="password" name="parol" size="10">
		<BR>
		<p> <input type="submit" name="obr4" value="Войти">
	</form>
	<?php
		if (isset($_POST["obr4"])) {
		$login = $_POST["login"];
		$parol = $_POST["parol"];
		$login1 = "petr";
		$parol1 = "qwer";
		$login2 = "Danya";
		$parol2 = "wert";
		$login3 = "lord3";
		$parol3 = "erty";
		$login4 = "Ivan1999";
		$parol4 = "rtyu";
		$error = "парель не верный";
		switch ($login)
		{
			case $login1:
				if($parol == $parol1){
					print (" Добро пожаловать, " . $login);
					break;
				}
				else
				{
					print ($error);
				}
			case $login2:
				if($parol == $parol2){
					print (" Добро пожаловать, " . $login);
					break;
				}
				else
				{
					print ($error);
				}
			case $login3:
				if($parol == $parol3){
					print (" Добро пожаловать, " . $login);
					break;
				}
				else
				{
					print ($error);
				}
			case $login4:
				if($parol == $parol4){
					print (" Добро пожаловать, " . $login);
					break;
				}
				else
				{
					print ($error);
				}
				default:
				print ($error);
		}
	}
	?>
	</body>
</html>

