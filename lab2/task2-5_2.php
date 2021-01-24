<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>упражнение 5.2</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<p> Вариант 7
		<p>
		<?php
			function F($u, $t)
			{
					if($u>=0 and $t >=0){
						return ($u + $t)/($u*$t);
					}
					else if($u<0 and $t >=0){
						return $u*$u + $t/$u;
					}
					else if($u>=0 and $t<0){
						return $u + 2*$t;
					}
					else if($u<0 and $t<0){
						return (($t*$t + $u)/(pow($u,3) * pow($t,4)));
					}
			}

			$a = rand(-30,30);
			$b = rand(-30,30);
			print('$a = ' . $a . '<br/>');
			print('$b = ' . $b. '<br/>');
			$result = F($a/$b, (pow($b,8) - pow($a,7))/($a*$b)) + F((pow($a,10) + pow($b,11))/($a*$b*$b - $a), $b);
			print('$result = ' . $result);
		?>
	</body>
</html>

