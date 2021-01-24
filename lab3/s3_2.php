<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>задача 2</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<form method="post" action="<?php print $PHP_SELF ?>">
		<p> Первое число:
		<input type="text" name="f_number" size="15">
		<p> Второе число:
		<input type="text" name="s_number" size="15">
	 	<p>
		<select name="z" size="1">
			<option value="1" selected> сложить
			<option value="2"> умножить
			<option value="3"> вычесть
			<option value="4"> делить
		</select>
		<input type="submit" name="obr2" value="Отправить">
		</form>
		<?php
		if (isset($_POST["obr2"])) {
			$f_num = $_POST["f_number"];
			$s_num = $_POST["s_number"];
			switch ($_POST["z"])
			{
				case 1:
					$s1 = $f_num + $s_num;
					break;
				case 2:
					$s1 = $f_num * $s_num;
					break;
				case 3:
					$s1 = $f_num - $s_num;
					break;
				case 4:
					$s1 = $f_num / $s_num;
					break;
				}
				echo (" Результат = " . $s1 );
		}
		?>
	</body>
</html>

