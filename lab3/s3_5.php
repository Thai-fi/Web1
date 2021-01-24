<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>задача 5</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
	<form method="post" action="<?php print $PHP_SELF ?>">
		Введите Имя<br><br>
		<input type="text" name="name" size="20">
			<br><br>
			1. Считаете ли Вы, что у многих ваших знакомых хороший характер?<br>
			<span>да</span><input type="radio" name="f1" value="y">
			<span>нет</span><input type="radio" name="f1" value="n">
			<br><br>
			2. Раздражают ли Вас мелкие повседневные обязанности?<br>
			<span>да</span><input type="radio" name="f2" value="y">
			<span>нет</span><input type="radio" name="f2" value="n">
			<br><br>
			3. Верите ли Вы, что ваши друзья преданы Вам?<br>
			<span>да</span><input type="radio" name="f3" value="y">
			<span>нет</span><input type="radio" name="f3" value="n">
			<br><br>
			4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание?<br>
			<span>да</span><input type="radio" name="f4" value="y">
			<span>нет</span><input type="radio" name="f4" value="n">
			<br><br>
			5. Способны ли Вы ударить собаку или кошку?<br>
			<span>да</span><input type="radio" name="f5" value="y">
			<span>нет</span><input type="radio" name="f5" value="n">
			<br><br>
			6. Часто ли Вы принимаете лекарства?<br>
			<span>да</span><input type="radio" name="f6" value="y">
			<span>нет</span><input type="radio" name="f6" value="n">
			<br><br>
			7. Часто ли Вы меняете магазин, в который ходите за продуктами?<br>
			<span>да</span><input type="radio" name="f7" value="y">
			<span>нет</span><input type="radio" name="f7" value="n">
			<br><br>
			8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?<br>
			<span>да</span><input type="radio" name="f8" value="y">
			<span>нет</span><input type="radio" name="f8" value="n">
			<br><br>
			9. Тяготят ли Вас общественные обязанности?<br>
			<span>да</span><input type="radio" name="f9" value="y">
			<span>нет</span><input type="radio" name="f9" value="n">
			<br><br>
			10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства?<br>
			<span>да</span><input type="radio" name="f10" value="y">
			<span>нет</span><input type="radio" name="f10" value="n">
			<br><br>
			11. Часто ли Вам приходят в голову мысли о Вашей невезучести?<br>
			<span>да</span><input type="radio" name="f11" value="y">
			<span>нет</span><input type="radio" name="f11" value="n">
			<br><br>
			12. Сохранилась ли у Вас фигура по сравнению с прошлым?<br>
			<span>да</span><input type="radio" name="f12" value="y">
			<span>нет</span><input type="radio" name="f12" value="n">
			<br><br>
			13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей?<br>
			<span>да</span><input type="radio" name="f13" value="y">
			<span>нет</span><input type="radio" name="f13" value="n">
			<br><br>
			14. Нравится ли Вам семейная жизнь?<br>
			<span>да</span><input type="radio" name="f14" value="y">
			<span>нет</span><input type="radio" name="f14" value="n">
			<br><br>
			15. Злопамятны ли Вы?<br>
			<span>да</span><input type="radio" name="f15" value="y">
			<span>нет</span><input type="radio" name="f15" value="n">
			<br><br>
			16. Находите ли Вы, что стоит погода, типичная для данного времени года?<br>
			<span>да</span><input type="radio" name="f16" value="y">
			<span>нет</span><input type="radio" name="f16" value="n">
			<br><br>
			17. Случается ли Вам с утра быть в плохом настроении?<br>
			<span>да</span><input type="radio" name="f17" value="y">
			<span>нет</span><input type="radio" name="f17" value="n">
			<br><br>
			18. Раздражает ли Вас современная живопись?<br>
			<span>да</span><input type="radio" name="f18" value="y">
			<span>нет</span><input type="radio" name="f18" value="n">
			<br><br>
			19. Надоедает ли Вам присутствие чужих детей в доме более одного часа?<br>
			<span>да</span><input type="radio" name="f19" value="y">
			<span>нет</span><input type="radio" name="f19" value="n">
			<br><br>
			20. Надоедает ли Вам делать лабораторные по PHP?<br>
			<span>да</span><input type="radio" name="f20" value="y">
			<span>нет</span><input type="radio" name="f20" value="n">
			<br><br>
			<p> <input type="submit" name="obr5" value="отправить">
		</form>
		<?php
			if (isset($_POST["obr5"])) {
				$name = $_POST["name"];
				$sum = 0;
				for($i=0;$i<20;$i++){
					$array[$i] = "f" . ($i+1);
				}
				for($i=0;$i<20;$i++){
					if(($i+1) == 3 or ($i+1) == 9 or ($i+1) == 10 or ($i+1) == 13 or ($i+1) == 14 or ($i+1) == 19){
						if($_POST[$array[$i]] =="y"){
							$sum +=1;
						}
					}
					else {
						if($_POST[$array[$i]] =="n"){
							$sum +=1;
						}
					}
				}
				if($sum > 15){
					echo($NAME . ", у вас покладистый характер<br/>");
				}
				else if($sum >= 8 && $sum < 15){
					echo($NAME . ", вы не лишены недостатков, но с вами можно ладить<br/>");
				}
				else{
					echo($NAME . ", вашим друзьям можно посочувствовать<br/>");
				}
			}
		?>
	</body>
</html>

