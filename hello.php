<?php
error_reporting(-1);

$anonDice1 = mt_rand(1,6);
$anonDice2 = mt_rand(1,6);

$compDice1 = mt_rand(1,6);
$compDice2 = mt_rand(1,6);

echo "У анона выпало {$anonDice1} и {$anonDice2} <br> а у компьютера {$compDice1} и {$compDice2}<br>";

$anonSum = ($anonDice1) + ($anonDice2);
$compSum = ($compDice1) + ($compDice2);

if (($anonDice1 == $anonDice2) && ($compDice1 == $compDice2)) {
	echo "<br> 2 - Дабла большая удача!";
	exit();	
}
if ($anonSum < $compSum) {
	echo "Компьютер победил!";
} elseif ($anonSum > $compSum) {
	echo "Победил Человек!";
} else {
	echo "Ничья!";
}
?>