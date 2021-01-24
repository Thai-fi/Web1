<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>упражнение 3</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<?php
			print('1) Массив - ');
			$cust = array("cnum" => 2001, "cname" => "Hoffman", "city" => "London", "snum" => 1001);
			print_r( $cust);
			print('<br/> 2) Массив - ');
			$cust["rating"] = 100;
			print_r( $cust);
			print('<br/> В конец-<br/>');
			print('3) Массив - ');
			asort($cust);
			print_r( $cust);
			print('<br/>4) Массив - ');
			ksort($cust);
			print_r($cust);
			print('<br/>5) Массив - ');
			sort($cust);
			print_r($cust);
		?>
	</body>
</html>

