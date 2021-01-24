<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>задача 1</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<form method="post" action="<?php print $PHP_SELF ?>">
		<p> Первое число:
		<input type="text" name="f_number" size="15">
		<p> Второе число:
		<input type="text" name="s_number" size="15">
	 	<p>
		<input type="submit" name="obr1" value="Отправить">
		</form>
		<?php
		if (isset($_POST["obr1"])) {
			$f_num = $_POST["f_number"];
			$s_num = $_POST["s_number"];

			if($f_num > $s_num ){
				echo(" большее = " . $f_num);
			}
			else if($f_num < $s_num )	{
				echo(" большее = " . $s_num);
			}
			else{
				echo(" они равны ");
			}
		}
		?>
	</body>
</html>

