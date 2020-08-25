<?php

echo '1 задание:<br>';
/*
 Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
*/

function foo() {
	$a = rand(-10000, 10000);
	$b = rand(-10000, 10000);

	if ($a >= 0 && $b >= 0) {
		echo "a и b не отрицательные. Выводим их разность: $a - $b = ".($a - $b);
	} elseif ($a < 0 && $b < 0) {
		echo "a и b отрицательные. Выводим их произведение: $a * $b = ".($a * $b);
	} else {
		echo "a и b разных знаков. Выводим их сумму: $a + $b = ".($a + $b);
	}
}

foo();



echo '<hr>';
echo '2 задание:<br>';
/*
 Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
*/

function foo2($r){	

	switch($r) {
		case (15):
			echo $r;
			break;
		case ($r < 15):
			echo "$r ";
			$r++;
			foo2($r);
		break;	
	}	
}

foo2(rand(0, 15));



echo '<hr>';
echo '3 задание:<br>';
/*
Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return
*/
function get_sum($a, $b){
	return $a + $b;
}

function get_multiplication($a, $b){
	return $a*$b;
}

function get_division($a, $b){
	return round($a/$b, 3);
}

function get_substraction($a, $b){
	return $a-$b;
}

echo "a = 5, b = 3<br>";

echo "5 + 3 = ".get_sum(5, 3)."<br>";
echo "5 * 3 = ".get_multiplication(5, 3)."<br>";
echo "5 / 3 = ".get_division(5, 3)."<br>";
echo "5 - 3 = ".get_substraction(5, 3)."<br>";



echo '<hr>';
echo '4 задание:<br>';
/*
Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).  
*/

function mathOperation($arg1, $arg2, $operation){
	switch($operation){
		case("sum"):
			return get_sum($arg1, $arg2);
		break;

		case("multiplication"):
			return get_multiplication($arg1, $arg2);
		break;

		case("division"):
			return get_division($arg1, $arg2);
		break;

		case("substraction"):
			return get_substraction($arg1, $arg2);
		break;
	}
}

echo "8 + 4 = ".mathOperation(8, 4, 'sum')."<br>";
echo "8 * 4 = ".mathOperation(8, 4, 'multiplication')."<br>";
echo "8 / 4 = ".mathOperation(8, 4, 'division')."<br>";
echo "8 - 4 = ".mathOperation(8, 4, 'substraction')."<br>";



echo '<hr>';
echo '*4 задание:<br>';
/*
С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
*/
 
function power($val, $pow){
	if ($val === 1) {
		return 1;
	} elseif ($val === 0) {
		return 0;
	}	elseif ($pow === 0) {
		return 1;
	} elseif ($pow < 0) {
		return power(1/$val, abs($pow));
	} else
	return $val * power($val, --$pow);

}


echo power(3, 3)."<br>";
echo power(5, -4)."<br>";



echo '<hr>';
echo '*5 задание:<br>';
/*
*Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например: 22 часа 15 минут, 21 час 43 минуты.
*/
function get_minutes_name($minutes){
	if ($minutes == 1 || $minutes == 21 || $minutes == 31 || $minutes == 41 || $minutes == 51)
	{	
		return $minutes_name = 'минута';
	}	
	elseif ( ($minutes[-1] == 2 || $minutes[-1] == 3 || $minutes[-1] == 4) &&
					($minutes < 12 || $minutes > 14 )	)
	{
		return $minutes_name = 'минуты';
	}
	else 
	{
		return $minutes_name = 'минут';		
	}
}

function get_hours_name($hours){
	if ($hours == 1 || $hours == 21)
	{
		return $hours_name = 'час';
	}
	elseif ( ($hours[-1] == 2 || $hours[-1] == 3 || $hours[-1] == 4) && ($hours < 12 || $hours > 14) )
	{
		return $hours_name = 'часа';
	} 

	return $hours_name = 'часов';
}


function show_time(){
	list($hours, $minutes) = explode(':', date('H:i'));

	echo "сейчас $hours ".get_hours_name($hours)." $minutes ".get_minutes_name($minutes);
	
}

show_time();

