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
		Из данного предложения выбрать слова, имеющие заданное число букв.
		<br>
		<textarea type="text" name="about" rows="5">	</textarea>
		<p> количество букв:
		<input type="text" name="nums" size="15">
		<p> <input type="submit" name="obr62" value="отправить">
	</form>
		<?php
			if (isset($_POST["obr62"])) {
				$text = '';
				$count = 0;
				$text = $_POST["about"];
				$sum = explode(" ", $text);
				for ($i=0;$i<count($sum);$i++){
					if (strlen($sum[$i]) == $_POST["nums"]){
						echo ($sum[$i] . ", ");
					}
				}
			}
		?>
	</body>
</html>

