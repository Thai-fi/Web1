<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Задание 1-2</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<TABLE border=1>
			<?php
				$red;
				for ($i=0; $i<=90; $i=$i+10){
					echo ("<tr>");
					for ($k=1; $k<=10; $k++){
						echo ("<td align=center>");
						$p=($i+$k);
						if (($p % 2) == 0){
							$red = "<span style='color:red;'>$p</span>";
							echo ($red);
						}
						else{
							echo ($p);
						}
						echo ("</td>"); // а потом закрываем ячейку
					}
				echo ("</tr>"); // конец строки таблицы
				}
			?>
		</TABLE>
	</body>
</html>
