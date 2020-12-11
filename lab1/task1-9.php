<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>упражнение 9</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<?php
			$dn=rand(1,7);
			print ($dn ." - номер дня недели <br>");
			switch ($dn) {
				case 1: print ("это понедельник"); break;
				case 2: print ("это вторник"); break;
				case 3: print ("это среда"); break;
				case 4: print ("это четверг"); break;
				case 5: print ("это пятница"); break;
				case 6: print ("это суббота"); break;
				case 7: print ("это воскресенье");
			}
		?>
	</body>
</html>

