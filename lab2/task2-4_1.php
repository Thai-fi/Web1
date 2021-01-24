<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>упражнение 4</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<?php
			print('Найти среднее арифметическое S элементов таблицы A(N). Выяснить, сколько
			элементов таблицы равно S, больше S, меньше S <br/>');
			$N = rand(10,20);
			$min = 0;
			$max = 0;
			$equ = 0;
			$SUM = 0;
		?>
		<TABLE border=1>
			<?php
				for ($i=0; $i<$N; $i++){
					echo ("<tr>");
					for ($j=0; $j<$N; $j++){
						echo ("<td align=center>");
						$arr[$i][$j] = rand(0, 50);
						$SUM += $arr[$i][$j];
						echo $arr[$i][$j] ;
						echo ("</td>"); // а потом закрываем ячейку
					}
				echo ("</tr>"); // конец строки таблицы
				}
				$SUM = $SUM/($N * $N);
			?>
		</TABLE>
		<?php
		print('Среднее арифметическое S: ' . $SUM . '<br>');
		for ($i=0; $i<$N; $i++){
			for ($j=0; $j<$N; $j++){
				if($arr[$i][$j] < $SUM){
					$min++;
				}
				else if($arr[$i][$j] == $SUM){
					$equ++;
				}
				else if($arr[$i][$j] > $SUM){
					$max++;
				}
			}
		}
		print('Чисел меньше S: ' . $min . '<br>');
		print('Чисел равных S: ' . $equ . '<br>');
		print('Чисел больша S: ' . $max . '<br>');
		?>
	</body>
</html>

