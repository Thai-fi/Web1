<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>упражнение 6.2</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
	<?php
			print('Найти среднее арифметическое элементов каждой строки матрицы Q(n,m). <br/>');
			$N = rand(10,15);
		?>
		<TABLE border=1>
			<?php
				for ($i=0; $i<$N; $i++){
					echo ("<tr>");
					for ($j=0; $j<$N; $j++){
						echo ("<td align=center>");
						$arr[$i][$j] = rand(5, 50);
						$SUM += $arr[$i][$j];
						echo $arr[$i][$j] ;
						echo ("</td>"); // а потом закрываем ячейку
					}
				echo ("</tr>"); // конец строки таблицы
				}
			?>
		</TABLE>
		<?php
			$sum = 0;
			for ($i=0; $i<$N; $i++){
				for ($j=0; $j<$N; $j++){
					$sum +=$arr[$i][$j];
				}
				$array[$i] = $sum/$N;
				print('Среднее в строке ' . $i . ' = ' . $array[$i] . '<br>');
			}
		?>
	</body>
</html>
