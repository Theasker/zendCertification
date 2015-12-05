<?php

/**
 * Script que crea un array con el máximo número pasado como parámetro de la serie de Fibonacci
 * 0,1,1,2,3,5,8,13,...
 * 
 * @param int max
 * @return array fibo
 * @param int a1
 * @param int a2
 */
 
 function Fibonacci($max){
 	$fibo = array();
 	$a1 = 0;
 	$a2 = 1;
 	$result = $a1 + $a2;
 	$fibo[] = $a1;
 	$fibo[] = $a2;

 	while ($result < $max){
 		$fibo[] = $result;
 		$a1 = $a2;
 		$a2 = $result;
 		$result = $a1 + $a2;
 	};
 	return $fibo;
 };
 
 var_dump(Fibonacci(200));