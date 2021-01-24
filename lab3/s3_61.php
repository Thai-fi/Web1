<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>задача 5</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
	<form method="post" action="<?php print $PHP_SELF ?>">
		Подсчитать число различных гласных, входящих в данный текст.
		<br>
		<textarea type="text" name="about" rows="5">	</textarea>
		<p> <input type="submit" name="obr61" value="отправить">
	</form>
		<?php
			if (isset($_POST["obr61"])) {
				$text = '';
				$count = 0;
				$text = $_POST["about"];
				$text = mb_strtoupper($text);
				$k = strlen($text);
				$glas = array('B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Y', 'Z',' ',',');
				$sum= str_replace($glas, '', $text, $count);
				echo (" количество глассных = " . ($k - $count - 1));
			}
		?>
	</body>
</html>

