<?php
	function GetArr($count_ex, $a_ex, $b_ex){
		for($i=0;$i<$count_ex;$i++){
			for($j=0;$j<$count_ex;$j++){
				$arr_ex[$i][$j] = rand($a_ex, $b_ex);
			}
		}
		return $arr_ex;
	}

	function OutPutArr($arr_ex, $count_ex)
	{
		for ($i=0; $i<$count_ex; $i++)
		{
			echo ("<tr>");
			for ($j=0; $j<$count_ex; $j++)
			{
				echo ("<td align=center>");
				echo ($arr_ex[$i][$j]);
				echo ("</td>"); // а потом закрываем ячейку
			}
		echo ("</tr>"); // конец строки таблицы
		}
	}
?>
