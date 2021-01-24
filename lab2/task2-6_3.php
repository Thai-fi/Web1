<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>упражнение 6.3</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
	<?php
			print('В матрице К(n,n) присвоить каждому диагональному элементу разность между суммами
			элементов соответствующих строки и столбца. <br/>');
			$N = 15;
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
						echo ("</td>");
					}
				echo ("</tr>");
				}
			?>
		</TABLE>
		<?php
			print('Матрица после преобразования <br>');
			$sum_row = 0;
			$sum_col = 0;
			$t = 0;
			for ($i=0; $i<$N; $i++){
				for ($j=0; $j<$N; $j++){
					if($i == $j or (($i + $j) == $N-1)) {
						for ($k=0; $k<$N; $k++){
							$sum_row += $arr[$i][$k];
							$sum_col += $arr[$k][$j];
						}
						$array[$t] = $sum_row = $sum_col;
						$sum_row = $sum_col = 0;
						$t++;
					}
				}
			}
			$t = 0;
		?>
		<TABLE border=1>
			<?php
				for ($i=0; $i<$N; $i++){
					echo ("<tr>");
					for ($j=0; $j<$N; $j++){
						echo ("<td align=center>");
						if($i == $j or (($i + $j) == $N-1)) {
							echo $array[$t];
							$t++;
						}
						else{
							echo $arr[$i][$j];
						}
						echo ("</td>");
					}
				echo ("</tr>");
				}
			?>
		</TABLE>
	</body>
</html>
