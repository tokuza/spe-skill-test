<?php

function narcissistic(int $number): bool {
  $array   = str_split($number);
  $nlenght = count($array);
  $sum = 0;

  foreach($array as $n){
    $sum += pow((int)$n, $nlenght);
  }	
	
  return $sum==$number;
}
echo narcissistic(1634);
echo narcissistic(153);

?>