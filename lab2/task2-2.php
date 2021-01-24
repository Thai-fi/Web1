<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>упражнение 2</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<?php
			$random_number = rand(3,20);
			print('1) Случайное число - ' . $random_number . '<br/>');
			print('2) Заполнили случайными числами <br/>');
			for($i=0;$i<$random_number;$i++){
				$arr_rand[$i] = rand(10,99);
			}
			print('3) Массив из '. $random_number .'-и элементов, заполненый случайными числами - ');
			for($i=0;$i<$random_number;$i++){
				print($arr_rand[$i] . " ");
			}
			print('<br/>');
			print('4) Отсортированный - ');
			sort($arr_rand);
			for($i=0;$i<$random_number;$i++){
				print($arr_rand[$i] . " ");
			}
			print('<br/>');
			print('5) Перевернутый - ');
			$arr_rand = array_reverse($arr_rand);
			for($i=0;$i<$random_number;$i++){
				print($arr_rand[$i] . " ");
			}
			print('<br/>');
			print('6) Выкинули послединй элемент - ');
			array_pop($arr_rand);
			for($i=0;$i<$random_number-1;$i++){
				print($arr_rand[$i] . " ");
			}
			print('<br/>');
			$sum = 0;
			for($i=0;$i<$random_number-1;$i++){
				$sum = $sum + $arr_rand[$i];
			}
			print('7) Количество элементов - '. count($arr_rand) . '<br/> Сумма элементов - '. $sum . '<br/>');
			print('8) Среднее - '. $sum/count($arr_rand) . '<br/>');

			if(in_array(50,$arr_rand)){
				print('9) Есть число 50 <br/>');
			}
			else{
				print('9) Нет числа 50 <br/>');
			}

			print('10) Массив из уникальных элементов - ');
			$arr_rand = array_unique($arr_rand);
			$new = count($arr_rand);
			for($i=0;$i<$new;$i++){
				print($arr_rand[$i] . " ");
			}
		?>
	</body>
</html>

