<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Лаба 9</title>
</head>
<body>
Столбцы:<input type="number" name="stolbtsov"><br>
Строки:<input type="number" name="strok"><br>
<input type="submit" value="OK">
<?php 


		$stolbtsov = $_GET['stolbtsov'];
		$strok = $_GET['strok']; 
		$n = $stolbtsov; 
		$m = $strok;
		$mas = [];
		for ($i = 0; $i < $m; $i++){
    		$mas[$i] = [];
    		for ($j = 0; $j < $n; $j++){
        		$mas[$i][$j] = rand(1,100);
        		echo $mas[$i][$j]." ";
        	}
        	echo '<br>';
		}

		$sum = 0;
		for($i=0;$i<$strok;$i++) {
			if($mas[$i][$i]){
				$sum+= $mas[$i][$i];
			}
		}

		echo "Сумма по диаганали равана: $sum";
?>
</form>
</body>
</html>