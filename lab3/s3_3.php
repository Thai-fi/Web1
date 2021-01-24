<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>задача 3</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
	<form method="post" action="<?php print $PHP_SELF ?>">
		<input type="text" name="N" size="10">
		<BR>
		<select name="z" size="1">
			<option value="1" selected> четные делители
			<option value="2"> нечетные делители
			<option value="3"> простые делители
			<option value="4"> составные делители
			<option value="5"> все делители
		</select>
		<p> <input type="submit" name="obr3" value="Вычислить">
	</form>
	<?php
	if (isset($_POST["obr3"])) {
		$N = $_POST["N"];
		switch ($_POST["z"]){
		case 1:
			for($i=1; $i<=$N; $i++)	{
				if(($N % $i) == 0){
					if(($i % 2) == 0){
						print ($i .'<br>');
					}
				}
			}
			break;
		case 2:
			for($i=1;$i<=$N;$i++){
				if(($N % $i) == 0){
					if(($i % 2) != 0){
						print ($i .'<br>');
					}
				}
			}
			break;
		case 3:
			for($i=1;$i<=$N;$i++){
				$flag=0;
				for($j=1;$j<=$i;$j++){
					if(($i % $j) == 0 ){
						$flag++;
					}
				}
				if($flag <= 2)	{
					if(($N % $i) == 0){
						print ($i .'<br>');
					}
				}
			}
			break;
		case 4:
			for($i=1;$i<=$N;$i++){
				$flag=0;
				if(($N % $i) == 0)	{
					for($j=2;$j<=$i;$j++)	{
						if(($i % $j) == 0 ){
							$flag++;
						}
						if($flag > 2){
							print ($i .'<br>');
						}
					}
				}
			}
			break;
		case 5:
			for($i=1;$i<=$N;$i++){
				if(($N % $i) == 0){
					print ($i .'<br>');
				}
			}
			break;
		}
	}
	?>
	</body>
</html>

