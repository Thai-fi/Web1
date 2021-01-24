<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>упражнение 1</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<?php
			$n=10;
			print('1) ');
			for($i=0;$i<$n;$i++){
				$treug[$i] = (($i+1) * (($i+1) +1) / 2);
				print($treug[$i] . " ");
			}
			print('<br> 2) ');
			for($i=0;$i<$n;$i++){
				$kvd[$i] = (($i+1) * ($i+1));
				print($kvd[$i] . " ");
			}
			print('<br> 3) ');
			$rez = array_merge($treug,$kvd);
			for($i=0;$i<($n*2);$i++){
				print($rez[$i] . " ");
			}
			print('<br> 4) ');
			sort($rez);
			for($i=0;$i<($n*2);$i++){
				print($rez[$i] . " ");
			}
			print('<br> 5) ');
			$rez = array_slice($rez,1);
			for($i=0;$i<($n*2)-1;$i++){
				print($rez[$i] . " ");
			}
			print('<br> 6) ');
			$rez1 = array_unique($rez);
			for($i=0;$i<($n*2)-1;$i++){
				print($rez1[$i] . " ");
			}
		?>
	</body>
</html>

