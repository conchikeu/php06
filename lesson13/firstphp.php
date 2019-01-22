<?php
	// function calculator($a, $b, $operator){
	// 	if ($operator == '+') {
	// 		return $a + $b; 
	// 	} elseif ($operator == '-') {
	// 		return $a - $b;
	// 	} elseif ($operator == '*') {
	// 		return $a * $b;
	// 	}
	// }
	// echo calculator(5, 6, '+');
	// echo "</br>";
	// echo calculator(10, 5, '-');
	// echo "</br>";
	// echo calculator(10, 5, '*');

	// function salary(){
	// 	$basicsalary = 2000;
	// 	$multi = 4;
	// 	$bonus;
	// 	if ($multi > 3){
	// 		$bonus = $basicsalary * $multi * 50/100;
	// 	} elseif ($multi < 3) {
	// 		$bonus = $basicsalary * $multi * 20/100;
	// 	}	echo "Your bonus is: ".$bonus;
	// 	echo "</br>";

	// 	$summon = $bonus * 2;

	// 	if($summon >= $bonus){
	// 		echo $summon." good";
	// 	} elseif ($summon < $bonus * 12) {
	// 		echo $summon." bad";
	// 	} elseif ($summon < $bonus * 2) {
	// 		echo $summon. " this is your salary";
	// 	}
	// }
	// echo salary();

	// $money = 21000;
	// $candies = 0;
	// $wrapper = 0;
	// while ($money > 0) {
	// 	$money -= 200;
	// 	$candies++;
	// 	$wrapper++;
	// 	if ($wrapper == 2) {
	// 		$candies++;
	// 		$wrapper--;
	// 	}
	// }
	// echo $candies;
	// echo "<br>";
	// echo $wrapper;
	$a = 18;
	$b = $a * 2;
	while ($a == $b){
		$a++;
		$b--; 
		
	}
		echo $a;
		echo "<br>";
		echo $b;
	

?>