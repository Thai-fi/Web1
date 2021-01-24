<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>упражнение 5.3</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<p> Вариант 8
		<p>
		<?php
			function F($u, $t)
			{
					if($u>=0 and $t >=0){
						return $u/$t - $t*$t;
					}
					else if($u<0 and $t >=0){
						return $u + ($t*$t)/$u;
					}
					else if($u>=0 and $t<0){
						return $u - $t;
					}
					else if($u<0 and $t<0){
						return (($t + 3 * $u)/($u * $t));
					}
			}

			$a = rand(-30,30);
			$b = rand(-30,30);
			print('$a = ' . $a . '<br/>');
			print('$b = ' . $b. '<br/>');
			$result = F($a + 1/$b, (pow($b,8)/pow($a,7))) + F((pow($a,0.75) + pow($b,5/6)), $b - $a);
			print('$result = ' . $result);
		?>
	</body>
</html>

