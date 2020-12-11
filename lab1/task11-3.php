<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Задание 1-3</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<p>Найти все целые числа из интервала от N до М,
			которые можно представить в виде суммы кубов двух натуральных чисел. N и М – случайные числа.</p>
		<?php
			$M = 0;
			$buf=0;
			$dec;
			$N=rand(0,1000);
			while($M <= $N){
				$M=rand(0,1000);
			}
			print ('N = ' . $N . '<br>');
			print ('M = ' . $M . '<br>'. '<br>');

			for ($i=1; $i<=10; $i++){
				for($j=$i; $j<=10; $j++){
					$buf = $i*$i*$i + $j*$j*$j;
					if($buf >= $N && $buf <= $M){
						print ('число из интервала: ' . $buf . '<br>');
						print ('1-ое= ' . $i . '<br>');
						print ('2-ое= ' . $j . '<br>');
					}
				}
			}

			for ($i=$N; $i<=$M; $i++)
			{

			}
		?>
		<p>Найти все целые числа из интервала от N до М, которые делятся на сумму всех своих цифр. N и М – случайные числа.</p>
		<?php
			$M = 0;
			$buf=0;
			$dec;
			$N=rand(0,1000);
			while($M <= $N){
				$M=rand(0,1000);
			}
			print ('N = ' . $N . '<br>');
			print ('M = ' . $M . '<br>'. '<br>');
			for ($i=$N; $i<=$M; $i++)
			{
				$dec=0;
				$buf=$i;
				while($buf > 1)
				{
					$dec=$dec + $buf%10;
					$buf = $buf/10;
				}
				if(($i%$dec) == 0){
					print ($i .'-');
				}
			}
		?>
	</body>
</html>










