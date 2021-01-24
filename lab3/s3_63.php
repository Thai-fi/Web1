<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>задача 6</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
	<form method="post" action="<?php print $PHP_SELF ?>">
		Вывести заданный текст, удалив из него повторные вхождения каждого символа.
		<br>
		<textarea type="text" name="about" rows="5">	</textarea>
		<p> <input type="submit" name="obr63" value="отправить">
	</form>
		<?php
			if (isset($_POST["obr63"])) {
				$text = '';
				$count = 0;
				$text = $_POST["about"];
				$arr = str_split($text);
			 	$arr1 = array_unique($arr);
				for($i=0;$i<count($arr1);$i++){
					echo ($arr1[$i]);
				}
			}
		?>
	</body>
</html>

